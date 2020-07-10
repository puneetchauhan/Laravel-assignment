<?php

namespace App\Http\Controllers;

use App\EmpWorkExperience;
use App\User;
use App\EmpSkill;
use Illuminate\Http\Request;
use App\Http\Requests\JobRequest;
use Illuminate\Support\Facades\Validator;
use Session;
use Barryvdh\DomPDF\Facade as PDF;



class EmpExperienceController extends Controller
{
   public function index()
    {
	 
	  $employeedetails = EmpWorkExperience::get();
	
	  return view('employee_details.index', [
           'employeedetails' => $employeedetails
       ]);
     }


	

	public function edit($id)
	{
  
	   $employeedetails = EmpWorkExperience::find($id);
		
		return view('employee_details.edit', [
           'employeedetails' => $employeedetails
         ]);
	}

	public function create()
	{
	   		
		return view('employee_details.create');
	}

	public function delete($id)
	{
		$routedetails = RouterDetail::find($id);

		$routedetails->destroy();


		
		return view('router_details.edit', [
           'routedetails' => $routedetails
         ]);
	}

	public function store(Request $request)
	{
		$userID = $request->user()->id; 	
		if (!isset($userID) && empty($userID)) {
            Session::flash('error', 'no employee loginned');
            return redirect()->back()->withInput();
       }

		// The incoming request is valid...
		$validator = Validator::make($request->all(),[ // <---
					'company_name' => 'required|string|max:255',
					'designation' => 'required|string|max:255',
					'experience_details' => 'required|string|max:255',
					//'company_from' => 'required|numeric',
					//	'company_to' => 'required|numeric'
		]);

		if ($validator->fails()) {
            Session::flash('error', $validator->messages());
            return redirect()->back()->withInput();
       }

	   if (isset($request->id) && !empty($request->id)) {
         

			$employeedetails = EmpWorkExperience::find($request->id);
	   
	   }
	   else
		{
		    $employeedetails = new EmpWorkExperience;
	    }

	   
	   
	   $employeedetails->user_id = $userID ;
	   $employeedetails->company_name = (isset($request->company_name) && !empty($request->company_name)) ? "'".$request->company_name."," : 0;	
	   $employeedetails->designation = (isset($request->designation) && !empty($request->designation)) ? $request->designation : '';	
	   $employeedetails->company_from = (isset($request->company_from) && !empty($request->company_from)) ? $request->company_from : '';	
	   $employeedetails->company_to = (isset($request->company_to) && !empty($request->company_to)) ? $request->company_to : '';	
       $employeedetails->job_type = (isset($request->job_type) && !empty($request->job_type)) ? $request->job_type : '';	
	   $employeedetails->experience_details = (isset($request->experience_details) && !empty($request->experience_details)) ? $request->experience_details : '';	

    	$save = $employeedetails->save();
		
		if ($save) {
            Session::flash('error', 'Records saved successfully ');
            return redirect()->back()->withInput();
       }
		
	}

	
	public function generatePDFview()
    {
        $data = ['title' => 'Welcome to HDTuto.com'];
        $pdf = PDF::loadView('pdf.invoice', $data);
  
        return $pdf->download('itsolutionstuff.pdf');
    }

	public function generatePDFHtml(Request $request)
    {
		$userID = $request->user()->id; 	
		
		
		$user = User::find($userID);
        $employeedetails = $user->empWorkExperience;
		$employeeempSkills = $user->empSkill;
		
		 $pdf = PDF::loadView('pdf.index', [
           'user' => $user,
			'employeedetails' => $employeedetails,
			'employeeSkills' => $employeeempSkills,

         ]);
  
        return $pdf->download('empolyeeProfile.pdf');
		/*return view('pdf.index', [
           'user' => $user,
			'employeedetails' => $employeedetails,
			'employeeSkills' => $employeeempSkills,

         ]);*/
    }
}
