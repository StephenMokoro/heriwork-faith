<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Internship;
use App\Models\internship_job;
use App\Models\Skills;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\Skill;
use Illuminate\Support\Facades\DB;
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

    //    load more functionality

    function load_data(Request $request)
    {
        if ($request->ajax()) {
            if ($request->id > 0) {
                $data = DB::table('internship_jobs')
                    ->where('id', '<', $request->id)
                    ->orderBy('id', 'DESC')
                    ->limit(2)
                    ->get();
            } else {
                $data = DB::table('internship_jobs')
                    ->orderBy('id', 'DESC')
                    ->limit(2)
                    ->get();
            }
            $output = '';
            $last_id = '';
            if (!$data->isEmpty()) {
                foreach ($data as $row) {
                    $output .= '
                    
       
                <div class="col-lg-12 mb-3">
                  <a href="#"  style="text-decoration:none;">
                    <h5 class="card-title text-black line-height" style="font-weight: 600;  style="text-decoration:none;">' . $row->ijob_title . '</h5>
                  </a>
                </div>
                <div class="col-lg-4">
                        <h6 class="text-secondary">Fixed-Price</h6>
                        <h6 class="text-secondary">Created 4 minutes ago</h6>
                      </div>
                      <div class="col-lg-8">
                        <div class="row pe-5 ps-5">
                          <div class="col-lg-6 text-center">
                             <h6><a href="#" class="text-primary"> 38 </a></h6>
                            <h6 class="text-secondary">Applications</h6>
                          </div>
                          <div class="col-lg-6 text-left">
                            <h6 class="text-secondary">8</h6>
                            <h6 class="text-secondary">Hired</h6>
                          </div>
                        </div>
                     
                <div class="col-lg-4">
                  <h6 class="" style="color:#ef6603;">' . $row->ijob_skills . '</h6>
                </div>
                <div class="col-lg-8">
                  <div class="row">
                    <div class="col-lg-4 text-center">
                      <h6><a href="#" class="" style="text-decoration:none;color:rgba(5, 17, 93, 0.9);"> ' . $row->intern_skills . ' </a></h6>
                    </div>
                    <div class="col-lg-4 text-center">
                      <h6 class="">' . $row->intern_skills . '</h6>
                    </div>
                  </div>
                
                  </div>
                  </div>
                </div>
                <hr style= "border:2px solid black;">         
        ';
                    $last_id = $row->id;
                }
                $output .= '
       <div id="load_more">
        <button type="button" name="load_more_button" class="btn  form-control" style ="background-color:rgba(5, 17, 93, 0.9); color:white;" data-id="' . $last_id . '" id="load_more_button">Load More</button>
       </div>
       ';
            } else {
                $output .= '
       <div id="load_more">
        <button type="button" name="load_more_button" class="btn btn-info form-control">No Data Found</button>
       </div>
       ';
            }
            echo $output;
        }
    }
}
