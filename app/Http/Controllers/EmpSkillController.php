<?php

namespace App\Http\Controllers;

use App\EmpWorkExperience;
use App\EmpSkill;
use Illuminate\Http\Request;
use App\Http\Requests\JobRequest;
use Illuminate\Support\Facades\Validator;
use Session;

class EmpSkillController extends Controller
{
   public function index()
    {
	 
	  $employeedetails = EmpSkill::get();

		
		return view('employee_skills.index', [
           'employeedetails' => $employeedetails
       ]);
     }


	

	public function edit($id)
	{
  
	   $employeedetails = EmpSkill::find($id);
		
		//dd($employeedetails);
		return view('employee_skills.edit', [
           'employeedetails' => $employeedetails
         ]);
	}

	public function create()
	{
	   		
		return view('employee_skills.create');
	}

	public function delete($id)
	{
		$routedetails = EmpSkill::find($id);

		$routedetails->destroy();


		
		return view('employee_skills.edit', [
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
					'skill_name' => 'required|string|max:255',
					'proficiency' => 'required',
					
		]);

		if ($validator->fails()) {
            Session::flash('error', $validator->messages());
            return redirect()->back()->withInput();
       }

	   if (isset($request->id) && !empty($request->id)) {
         

			$employeedetails = EmpSkill::find($request->id);
	   
	   }
	   else
		{
		    $employeedetails = new EmpSkill;
	    }

	   
	   
	   $employeedetails->user_id = $userID ;
	   $employeedetails->skill_name = (isset($request->skill_name) && !empty($request->skill_name)) ? "'".$request->skill_name."," : 0;	
	   $employeedetails->proficiency = (isset($request->proficiency) && !empty($request->proficiency)) ? $request->proficiency: '';	
	   
    	$save = $employeedetails->save();
		
		if ($save) {
            Session::flash('error', 'Records saved successfully ');
            return redirect()->back()->withInput();
       }
		
	}

}
