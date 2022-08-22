@extends('navbar.inc')
@section('content')
@if(Session::get('admin_id')) 

<div class=" full-form text-center notice-bg">
    <form action="{{route('admin.noticeaddedit')}}" class="" method="post">
        <!-- Cross Site Request Forgery-->
        {{csrf_field()}}
        <input type="hidden" name="id" value="{{$admins->id}}"> 
        <div class="label-job form-group mb-3">
            <span class=" m-3 pe-3">Title</span>
            <input type="text" name="title" value="{{$admins->title}}" class="form-control m-3">
            @error('title')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class=" label-job form-group mb-3">
            <span class=" m-3 pe-3">Description</span>
            <input type="text" name="description" value="{{$admins->description}}" class="form-control m-3">
            @error('description')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="label-job form-group mb-3">
            
            <span class=" m-3 pe-3">Images</span>
            <input type="file" name="image_path" value="{{$admins->image_path}}" class="form-control m-3"> 
            @error('image_path')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div><br>

        <input type="submit" class="btn btn-success btn-notice  fs-5 align-middle m-3 pe-2" value="Edit" >
    </form>  

</div>  
@endif
@endsection