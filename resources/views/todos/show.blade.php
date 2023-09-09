@extends('layouts.app')

@section('content')
<div class="col showlist">
    <div class="card card-box">
        <div class="card-header"><h5 style="margin: 0px;">{{ __('Dashboard') }}</h5></div>
        <div class="card-body">
            <h5 class="card-title">To-do Title</h5>
            <p class="card-text">{{ $todo->title }}</p>
            <h5 class="card-title">To-do Description</h5>
            <p class="card-text">{{ $todo->description }}</p>
            <a href="{{ url()->previous() }}" class="btn btn-sm btn-primary"><i class="icon-copy bi bi-arrow-left" style="margin: 0"></i> Go Back</a><br>
        </div>
    </div>
</div>
@endsection
