<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Partner;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Session;
use App\Models\Country;

class PartnerController extends Controller
{
    //
    public function index()
    {
        return view('Employer.partner.create-step-one');
    }
    public function country(Request $request)
    {
        //country selrction
        $data = [];

        if ($request->has('q')) {
            $search = $request->q;
            $query = Country::select("code as id", "name as text")
                ->where('name', 'LIKE', "%$search%")
                ->limit(10)
                ->get();

            $data = $query->toArray();
        }

        return response()->json($data);
    }
    public function createStepOne(Request $request)
    {
        $partner = $request->session()->get('partner');

        return view('Employer.partner.create-step-one', compact('partner'));
    }

    public function postStepOne(Request $request)
    {
        $validatedData = $request->validate([
            'partner_first_name' => 'required',
            'partner_last_name' => 'required',
            'partner_phone' => 'required',
            'partner_email' => 'required|email|unique:partners',
            'country' => 'required',



        ]);

        $partner = new Partner();
        $partner->fill($validatedData);
        $request->session()->put('partner', $partner);

        return redirect()->route('partner.create.step.two');
    }

    public function createStepTwo(Request $request)
    {
        $partner = $request->session()->get('partner');

        return view('Employer.partner.create-step-two', compact('partner'));
    }

    public function postStepTwo(Request $request)
    {
        $validatedData = $request->validate([
            'partner_type' => 'required',
            // add any other validation rules you need for the other form fields
        ]);

        if (empty($request->session()->get('partner'))) {
            $partner = new Partner();
            $partner->fill($validatedData);
            $request->session()->put('partner', $partner);
        } else {
            $partner = $request->session()->get('partner');
            $partner->fill($validatedData);
            $request->session()->put('partner',  $partner);
        }
    }


    // if its individal partnership 

    public function createStepThree(Request $request)
    {
        $partner = $request->session()->get('partner');

        return view('Employer.partner.create-step-three', compact('partner'));
    }
    public function postStepThree(Request $request)
    {
        $validatedData = $request->validate([
            'company_name' => 'required',
            'company_type' => 'required',
            'role' => 'required',
            'company_size' => 'required',
            'company_address' => 'required',
            'brief_desc' => 'required',
            'web_link' => 'required',
        ]);

        if (empty($request->session()->get('partner'))) {
            $partner = new Partner();
            $partner->fill($validatedData);
            $request->session()->put('partner', $partner);
        } else {
            $partner = $request->session()->get('partner');
            $partner->fill($validatedData);
            $request->session()->put('partner',  $partner);
        }

        return redirect()->route('partner.create.step.four');
    }


    public function createStepFour(Request $request)
    {
        $partner = $request->session()->get('partner');

        return view('Employer.partner.create-step-four', compact('partner'));
    }
    public function postStepFour(Request $request)
    {
        $validatedData = $request->validate([
            'add_note',
            'contact',
        ]);

        if (empty($request->session()->get('partner'))) {
            $partner = new Partner();
            $partner->fill($validatedData);
            $request->session()->put('partner', $partner);
        } else {
            $partner = $request->session()->get('partner');
            $partner->fill($validatedData);
            $request->session()->put('partner', $partner);
        }

        return redirect()->route('partner.create.step.five');
    }

    public function createStepFive(Request $request)
    {
        $partner = $request->session()->get('partner');

        return view('Employer.partner.create-step-five', compact('partner'));
    }
    public function postStepFive(Request $request)
    {
        $validatedData = $request->validate([
            'hear_us' => 'required',
        ]);

        $partner = $request->session()->get('partner');
        $partner->fill($validatedData);
        $partner->save();

        if ($partner) {
            Alert::success('Partnered successful', 'You will be contacted as soon as possible.')
            ->persistent(true)
            ->autoClose(5000);
            // Redirect the user to the login page with a success message
            return redirect('/')->with('success', 'You will be contacted as soon as possible.');
        } else {
            return back();
        }
    }


    /**
     * Show the step One Form for creating a new product.
     *
     * @return \Illuminate\Http\Response
     */



    // public function createStepThree(Request $request)
    // {
    //     $product = $request->session()->get('product');

    //     return view('employer.employer_details.create-step-three', compact('product'));
    // }

    /**
     * Show the step One Form for creating a new product.
     *
     * @return \Illuminate\Http\Response
     */
    // public function postCreateStepThree(Request $request)
    // {
    //     $product = $request->session()->get('product');

    //     $request->session()->forget('product');
    //     if ($product) {
    //         $product->save();
    //         Alert::success('Success', 'You\'ve Successfully posted');
    //         return redirect()->route('login-user');
    //     } else {
    //         Alert::error('Failed', 'Registration failed');
    //         return back();
    //     }
    // }

}
