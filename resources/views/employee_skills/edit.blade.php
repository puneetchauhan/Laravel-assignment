@extends('layouts.app')
 
@section('content')
 
<div class="well">
 @if(Session::has('error'))
<p class="alert {{ Session::get('alert-class', 'alert-danger') }}">{{ Session::get('error') }}</p>
@endif
    {!! Form::open(array('route' => 'skill-store'))!!}  <!--open(['url' => '/processform', 'class' => 'form-horizontal']) 
 
    <fieldset>
 
        <legend>Legend</legend>
 
        <!-- Company Name -->
 <div class="form-group">
                {!! Form::hidden('id',$employeedetails->id) !!}
            </div>
        </div>
		<div class="form-group">
            {!! Form::label('Skill Name', 'Skill Name:', ['class' => 'col-lg-2 control-label']) !!}
            <div class="col-lg-10">
                {!! Form::text('skill_name',$employeedetails->skill_name, ['class' => 'form-control', 'placeholder' => 'sapid']) !!}
            </div>
        </div>
         <!-- Radio Buttons -->
        <div class="form-group">
            {!! Form::label('radios', 'Proficiency :', ['class' => 'col-lg-2 control-label']) !!}
             <div class="col-lg-10">
                <div class="radio">
                    {!! Form::label('proficiency', 'Beginner') !!}
                    {!!  Form::radio('proficiency', 'beginner', $employeedetails->proficiency == 'beginner' ? 1 : 0) !!}
             
                </div>
                <div class="radio">
                    {!! Form::label('Type', 'Intermediate') !!}
                    {!!  Form::radio('proficiency', 'intermediate', $employeedetails->proficiency == 'intermediate' ? 1 : 0) !!}
             
                </div>
                <div class="radio">
                    {!! Form::label('Type', 'Advanced') !!}
                    {!!  Form::radio('proficiency', 'advanced', $employeedetails->proficiency == 'advanced' ? 1 : 0) !!}
             
                </div>
                <div class="radio">
                    {!! Form::label('Type', 'Expert') !!}
                    {!!  Form::radio('proficiency', 'expert', $employeedetails->proficiency == 'expert' ? 1 : 0) !!}
             
                </div>
                
            </div>
			 </div>
                
            </div>
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