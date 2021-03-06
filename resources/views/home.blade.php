@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
				<div class="card-header"><button id="btn_add" name="btn_add" class="btn btn-default pull-right"><a href="{{ route('generate-pdf-view') }}" class="btn btn-xs btn-info pull-right">Generate PDF</a></button></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
<div class="panel panel-primary">
 <div class="panel-heading">Employee
 <button id="btn_add" name="btn_add" class="btn btn-default pull-right"><a href="{{ route('experience-dashboard') }}" class="btn btn-xs btn-info pull-right">Experience</a></button>
    </div>
	<div class="panel panel-primary">
 <div class="panel-heading">Skills
 <button id="btn_add" name="btn_add" class="btn btn-default pull-right"><a href="{{ route('skill-dashboard') }}" class="btn btn-xs btn-info pull-right">Skills</a></button>
    </div>
                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
