@extends('navbar.inc')
@section('content')
@if(Session::get('admin_id')) 

    <div class="full-form text-center">
     <form  action="{{route('admin.noticeadd')}}" enctype="multipart/form-data" class="job-add-form" method="post">
        <!-- Cross Site Request Forgery-->
        {{csrf_field()}}
        
        <div class="label-job form-group mb-3">
            <span class=" m-3 pe-3">Title</span>
            <input type="text"  name="title" value="{{old('title')}}" class="form-control m-3">
            @error('title')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="label-job form-group mb-3">
            <span class="  m-3 pe-3">Description</span>
            <textarea name="description" value="{{old('description')}}" class="form-control m-3"> </textarea>
            @error('description')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="label-job form-group mb-3">
            
            <span class=" m-3 pe-3">Images</span>
            <input type="file" name="image_path" value="{{old('image_path')}}" class="form-control m-3"> 
            @error('image_path')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div><br>


        <input type="submit" class="btn  btn-notice  fs-5 align-middle m-3 pe-2" value="Add Notice" >
     </form>

    </div>
    @endif
@endsection