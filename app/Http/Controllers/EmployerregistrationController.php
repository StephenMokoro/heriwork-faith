<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class EmployerregistrationController extends Controller
{
    /**
     * @param NA
     * @return view
     */
    public function index() {
        return view('employer.reg');
    }

    /**
     * @param request
     * @return response
     */
    public function store(Request $request) {
        $request = $request->all();
        $request['password'] = Hash::make($request['password']);

        $user = User::create($request);

        if ($user) {
            Alert::success('Success', 'You\'ve Successfully Registered');
            return back();
        }
        else {
            Alert::error('Failed', 'Registration failed');
            return back();
        }
    }
}