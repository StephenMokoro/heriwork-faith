<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Internship;
use App\Models\internship_job;
use App\Models\Skills;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\Skill;
use Illuminate\Support\Facades\Auth;

class Intership_jobController extends Controller
{
    //
    public function show()
    {
        $student = Skill::all();
        return view('employer.internship.create-step-three', compact('student'));
    }
    
    public function skillsAjax(Request $request)
    {
        $data = [];

        if ($request->has('q')) {
            $search = $request->q;
            $query = Skill::select("school_auto_id as id", "school_name as text")
                ->where('school_name', 'LIKE', "%$search%")
                ->limit(10)
                ->get();

            $data = $query->toArray();
        }
        return response()->json($data);
    }
    public function jobcategorylist(Request $request)
    {
        $data = [];

        if ($request->has('q')) {
            $search = $request->q;
            $query = Skill::select("id as id", "ijob_category as text")
                ->where('ijob_category', 'LIKE', "%$search%")
                ->limit(10)
                ->get();

            $data = $query->toArray();
        }

        return response()->json($data);
    }
    

    public function index()
    {
        $products = internship_job::all();

        return view('employer.internship.create-step-one', compact('products'));
    }

    /**
     * Show the step One Form for creating a new product.
     *
     * @return \Illuminate\Http\Response
     */

    //step 1
    public function createStepOne(Request $request)
    {
        $product = $request->session()->get('product');

        return view('employer.internship.create-step-one', compact('product'));
    }

    /**  
     * Post Request to store step1 info in session
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function postCreateStepOne(Request $request)
    {
        $validatedData = $request->validate([
            'ijob_title' => 'required',

        ]);

        if (empty($request->session()->get('product'))) {
            $product = new internship_job();
            $product->fill($validatedData);
            $request->session()->put('product', $product);
        } else {
            $product = $request->session()->get('product');
            $product->fill($validatedData);
            $request->session()->put('product', $product);
        }

        return redirect()->route('internship.create.step.two');
    }


    //step 2
    public function createStepTwo(Request $request)
    {
        $product = $request->session()->get('product');

        return view('employer.internship.create-step-two', compact('product'));
    }

    /**  
     * Post Request to store step1 info in session
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function postCreateStepTwo(Request $request)
    {
        $validatedData = $request->validate([
            'ijob_category' => 'required',
        ]);

        if (empty($request->session()->get('product'))) {
            $product = new internship_job();
            $product->fill($validatedData);
            $request->session()->put('product', $product);
        } else {
            $product = $request->session()->get('product');
            $product->fill($validatedData);
            $request->session()->put('product', $product);
        }

        return redirect()->route('internship.create.step.three');
    }


    //step 3


    /**
     * Show the step One Form for creating a new product.
     *
     * @return \Illuminate\Http\Response
     */
    public function createStepThree(Request $request)
    {
        $product = $request->session()->get('product');

        return view('employer.internship.create-step-three', compact('product'));
    }

    /**
     * Show the step One Form for creating a new product.
     *
     * @return \Illuminate\Http\Response
     */
    public function postCreateStepThree(Request $request)
    {
        $validatedData = $request->validate([
            'ijob_skills' => 'required',
            'intern_skills' => 'required',


        ]);

        $product = $request->session()->get('product');
        $product->fill($validatedData);
        $request->session()->put('product', $product);

        return redirect()->route('internship.create.step.four');
    }

    /**
     * Show the step One Form for creating a new product.
     *
     * @return \Illuminate\Http\Response
     */

    public function createStepFour(Request $request)
    {
        $product = $request->session()->get('product');

        return view('employer.internship.create-step-four', compact('product'));
    }

    /**  
     * Post Request to store step1 info in session
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function postCreateStepFour(Request $request)
    {
        $validatedData = $request->validate([
            'ijob_size' => 'required',
            'ijob_task' => 'required',
            'ijob_task_run' => 'required',

            // 'ijob_budget_currency' => 'required',
            // 'ijob_budget_amount' => 'required',

        ]);

        if (empty($request->session()->get('product'))) {
            $product = new internship_job();
            $product->fill($validatedData);
            $request->session()->put('product', $product);
        } else {
            $product = $request->session()->get('product');
            $product->fill($validatedData);
            $request->session()->put('product', $product);
        }

        return redirect()->route('internship.create.step.five');
    }

    public function createStepFive(Request $request)
    {
        $product = $request->session()->get('product');

        return view('employer.internship.create-step-five', compact('product'));
    }

    /**  
     * Post Request to store step1 info in session
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function postCreateStepFive(Request $request)
    {
        $validatedData = $request->validate([
            'ijob_budget_currency' => 'required',
            'ijob_budget_amount' => 'required',
        ]);

        if (empty($request->session()->get('product'))) {
            $product = new internship_job();
            $product->fill($validatedData);
            $request->session()->put('product', $product);
        } else {
            $product = $request->session()->get('product');
            $product->fill($validatedData);
            $request->session()->put('product', $product);
        }

        return redirect()->route('internship.create.step.six');
    }

    /**  
     * Post Request to store step1 info in session
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
   
    public function createStepSix(Request $request)
    {
        $product = $request->session()->get('product');

        return view('employer.internship.create-step-six', compact('product'));
    }

    /**
     * Show the step One Form for creating a new product.
     *
     * @return \Illuminate\Http\Response
     */
    public function postCreateStepSix(Request $request)
    {
        $product = $request->session()->get('product');

        $request->session()->forget('product');
        if ($product) {
            $product->save();
            Alert::success('Success', 'You\'ve Successfully posted');
            return view('employer.employer-dashboard');
        } else {
            Alert::error('Failed', 'Registration failed');
            return back();
        }
    }
}
