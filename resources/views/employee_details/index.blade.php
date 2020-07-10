<html>
  <head>
   <title>Laravel</title>  
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet"> 
  </head>
<body>
@extends('layouts.app')

@section('content')
<div class="container">

<div class="panel panel-primary">
 <div class="panel-heading">Work Experience
 <button id="btn_add" name="btn_add" class="btn btn-default pull-right"><a href="{{ route('experience-create') }}" class="btn btn-xs btn-info pull-right">Add New Experience</a></button>
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
			<th>Actions</th>
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
			 <a href="{{ route('experience-edit', $employeedetail->id) }}" class="btn btn-xs btn-info pull-right">Edit</a>
 			  </td>
            </tr>
            @endforeach
        </tbody>
        </table>
       </div>
       </div>
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
           <div class="modal-content">
             <div class="modal-header">
             <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h4 class="modal-title" id="myModalLabel">routedetail</h4>
            </div>
            <div class="modal-body">
            <form id="frmroutedetails" name="frmroutedetails" class="form-horizontal" novalidate="">
                <div class="form-group error">
                 <label for="inputName" class="col-sm-3 control-label">Name</label>
                   <div class="col-sm-9">
                    <input type="text" class="form-control has-error" id="name" name="name" placeholder="routedetail Name" value="">
                   </div>
                   </div>
                 <div class="form-group">
                 <label for="inputDetail" class="col-sm-3 control-label">Details</label>
                    <div class="col-sm-9">
                    <input type="text" class="form-control" id="details" name="details" placeholder="details" value="">
                    </div>
                </div>
            </form>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-primary" id="btn-save" value="add">Save changes</button>
            <input type="hidden" id="routedetail_id" name="routedetail_id" value="0">
            </div>
        </div>
      </div>
  </div>
</div>
    <meta name="_token" content="{!! csrf_token() !!}" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
   <!-- <script src="{{asset('js/ajaxscript.js')}}"></script> -->
</body>
</html>
