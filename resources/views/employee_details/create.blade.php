@extends('layouts.app')
 
@section('content')
 
<div class="well">
 @if(Session::has('error'))
<p class="alert {{ Session::get('alert-class', 'alert-danger') }}">{{ Session::get('error') }}</p>
@endif
    {!! Form::open(array('route' => 'experience-store'))!!}  <!--open(['url' => '/processform', 'class' => 'form-horizontal']) 
 
    <fieldset>
 
        <legend>Legend</legend>
 
        <!-- Company Name -->
 <div class="form-group">
                 </div>
        </div>
		<div class="form-group">
            {!! Form::label('Company Name', 'Company Name:', ['class' => 'col-lg-2 control-label']) !!}
            <div class="col-lg-10">
                {!! Form::text('company_name','', ['class' => 'form-control', 'placeholder' => 'sapid']) !!}
            </div>
        </div>
 
 <!-- Company Name -->
        <div class="form-group">
            {!! Form::label('Designation', 'Designation:', ['class' => 'col-lg-2 control-label']) !!}
            <div class="col-lg-10">
                {!! Form::text('designation','', ['class' => 'form-control', 'placeholder' => 'sapid']) !!}
            </div>
        </div>
 
  <!-- Company Name -->
        <div class="form-group">
            {!! Form::label('Experience Details', 'Experience Details:', ['class' => 'col-lg-2 control-label']) !!}
            <div class="col-lg-10">
                {!! Form::text('experience_details','', ['class' => 'form-control', 'placeholder' => 'sapid']) !!}
            </div>
        </div>
 
 
  <!-- Company Name -->
        <div class="form-group">
            {!! Form::label('Job From', 'Job From:', ['class' => 'col-lg-2 control-label']) !!}
            <div class="col-lg-10">
                {!! Form::text('company_from','', ['class' => 'form-control', 'placeholder' => 'sapid']) !!}
            </div>
        </div>
  <!-- Company Name -->
        <div class="form-group">
            {!! Form::label('Job To', 'Job To:', ['class' => 'col-lg-2 control-label']) !!}
            <div class="col-lg-10">
                {!! Form::text('company_to','', ['class' => 'form-control', 'placeholder' => 'sapid']) !!}
            </div>
        </div>
 
		<!-- Radio Buttons -->
        <div class="form-group">
            {!! Form::label('radios', 'Job Type', ['class' => 'col-lg-2 control-label']) !!}
             <div class="col-lg-10">
                <div class="radio">
                    {!! Form::label('Type', 'Full time') !!}
                    {!!  Form::radio('job_type', 'full_time') !!}
             
                </div>
                <div class="radio">
                    {!! Form::label('Type', 'Part time') !!}
                    {!!  Form::radio('job_type', 'part_time') !!}
             
                </div>
                <div class="radio">
                    {!! Form::label('Type', 'Consultant') !!}
                    {!!  Form::radio('job_type', 'consultant') !!}
             
                </div>
                
            </div>
			<!-- 
      	   <td>{{ Form::radio('job_type', 'full_time', true)}}</td>
          <td> {{ Form::radio('job_type', 'part_time' ) }}</td>
         <td>{{ Form::radio('job_type', 'consultant') }}</td>
          	 -->
			 </div>
 
        </div>
 
        <!-- Submit Button -->
        <div class="form-group">
            <div class="col-lg-10 col-lg-offset-2">
                {!! Form::submit('Submit', ['class' => 'btn btn-lg btn-info pull-right'] ) !!}
            </div>
        </div>
 
    </fieldset>
 
    {!! Form::close()  !!}
 
</div>