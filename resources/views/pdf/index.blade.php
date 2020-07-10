<html>
  <head>
   <title>Laravel</title>  
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet"> 
  </head>
<body>
<div style='width:100%;padding-right:15px;padding-left:15px;margin-right:auto;margin-left:auto'>
<div class="panel panel-primary">
 <div class="panel-heading">Work Experience
    </div>
      <div class="panel-body"> 
       <table class="table">
        <thead>
          <tr><th>{{ ucfirst('company name') }}</th>
            <th >{{ ucfirst('designation') }}</th>
            <th >{{ ucfirst('from') }}</th>
			<th >{{ ucfirst('to') }}</th>
			<th >{{ ucfirst('job_type') }}</th>
			<th >{{ ucfirst('experience_details') }}</th>
			
          </tr>
         </thead>
         <tbody id="routedetails-list" name="routedetails-list">
           @foreach ($employeedetails as $employeedetail)
            <tr id="routedetail{{$employeedetail->id}}">
             <td>{{$employeedetail->company_name}}</td>

                <td>{{$employeedetail->designation}}</td>
                <td>{{$employeedetail->company_from}}</td>
                <td>{{$employeedetail->company_to}}</td>
                <td>{{$employeedetail->job_type }}</td>
				<td>{{$employeedetail->experience_details }}</td>
              <td>
			
 			  </td>
            </tr>
            @endforeach
        </tbody>
        </table>
      
 <div class="panel-heading">Skills
    </div>
      <div class="panel-body"> 
       <table class="table">
        <thead>
          <tr><th>{{ ucfirst('Skill Name') }}</th>
            <th >{{ ucfirst('proficiency') }}</th>
           
			
          </tr>
         </thead>
         <tbody id="routedetails-list" name="routedetails-list">
           @foreach ($employeeSkills as $employeeSkill)
            <tr id="routedetail{{$employeedetail->id}}">
             <td>{{$employeeSkill->skill_name}}</td>

                <td>{{$employeeSkill->proficiency}}</td>
                <td>
			
 			  </td>
            </tr>
            @endforeach
        </tbody>
        </table>
       </div>
       </div>
  </div>
    <meta name="_token" content="{!! csrf_token() !!}" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
   <!-- <script src="{{asset('js/ajaxscript.js')}}"></script> -->
</body>
</html>
