@extends('navbar.inc')
@section('content')
@if(Session::get('admin_id')) 

<div class="full-form text-center">

    <form action="{{route('career.jobedit')}}" class="" method="post">
        <!-- Cross Site Request Forgery-->
        {{csrf_field()}}
        <input type="hidden" name="id" value="{{$careers->id}}"> 
        <div class="label-job form-group mb-3">
            <span class="label-job m-3 pe-3">Job ID</span>
            <input type="text" name="j_id" value="{{$careers->j_id}}" class="form-control m-3">
            @error('j_id')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="label-job form-group mb-3">
            <span class="label-job m-3 pe-3">Title</span>
            <input type="text" name="title" value="{{$careers->title}}" class="form-control m-3">
            @error('title')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="label-job form-group mb-3">
            <span class="label-job m-3 pe-3">Description</span>
            <input type="text" name="description" value="{{$careers->description}}" class="form-control m-3">
            @error('description')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="label-job form-group mb-3">
            <span class="label-job m-3 pe-3">Skills</span>
            <input type="text" name="skill" value="{{$careers->skill}}" class="form-control m-3">
            @error('skill')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="label-job form-group mb-3">
            <span class="label-job m-3 pe-3">Responsibilities</span>
            <input type="text" name="responsibility" value="{{$careers->responsibility}}" class="form-control m-3">
            @error('responsibility')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="label-job form-group mb-3">
            <span class="label-job m-3 pe-3">Educational Requirements</span>
            <input type="text" name="edu_req" value="{{$careers->edu_req}}" class="form-control m-3">
            @error('edu_req')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <input type="submit" class="btn btn-success btn-notice  fs-5 align-middle m-3 pe-2" value="Edit" >
    </form>  

</div>   
@endif
@endsection