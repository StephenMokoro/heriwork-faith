<?php

namespace App\Http\Controllers;
use App\Models\School;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;

class Select2AutocompleteController extends Controller
{
    //
     /**
    * Show the application layout.
    *
    * @return \Illuminate\Http\Response
    */
    public function index()
    {
    	return view('button');
    }
    /**
    * Show the application dataAjax.
    *
    * @return \Illuminate\Http\Response
    */
    public function dataAjax(Request $request)
    {
    	$data = [];

        if($request->has('q')){
            $search = $request->q;
            $data =School::select("id","schoolname")
            		->where('schoolname','LIKE',"%$search%")
            		->get();
        }
        return response()->json($data);
    }

}
