<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Partner;
use RealRashid\SweetAlert\Facades\Alert;

class PartnerController extends Controller
{
    //
    public function partner()
    {
        return view('partners');
    }
    public function partnerpage(Request $request)
    {
        $data = new Partner();
        // $company_logo = $request->company_logo;
        // $filename=time().'.'.$company_logo->getClientOriginalExtension();
        // $request->company_logo->move('assets', $filename);
        // $data->company_logo= $filename;
        $data->company_name = $request->company_name;
        // $data->company_phone = $request->company_phone;
        $data->company_email = $request->company_email;
        $data->company_category = $request->company_category;

        $data->social_link = $request->social_link;
        $data->social_url = $request->social_url;

        $data->save();
        if ($data) {
            Alert::success('Success', 'You\'ve Successfully registered as a partner ');

            return back();
        } else {
            Alert::error('Failed', 'Please try again');

            return back();
        }

    }
}
