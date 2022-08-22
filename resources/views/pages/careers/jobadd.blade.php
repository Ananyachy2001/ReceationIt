@extends('navbar.inc')
@section('content')
@if(Session::get('admin_id')) 
<div class="full-form text-center ">


    <form  action="{{route('career.jobadd')}}" class=" job-add-form" method="post">
        {{csrf_field()}}

       
            <div class="mb-3">
              <label  class="form-label label-job">Job ID </label>
              <input type="text" name="j_id" value="{{old('j_id')}}" class="form-control" >
              @error('j_id')
              <span class="text-danger">{{$message}}</span>
          @enderror
            </div>
            <div class="mb-3">
              <label  class="form-label label-job">Title</label>
              <input type="text" name="title" value="{{old('title')}}" class="form-control" >
              @error('title')
              <span class="text-danger">{{$message}}</span>
          @enderror
            </div>
            <div class="mb-3">
              <label  class="form-label label-job">Description</label>
              <input type="text" name="description" value="{{old('description')}}" class="form-control" >
              @error('description')
              <span class="text-danger">{{$message}}</span>
          @enderror
            </div>
            <div class="mb-3">
              <label  class="form-label label-job">Skills</label>
              <input type="text" name="skill" value="{{old('skill')}}" class="form-control" >
              @error('skill')
              <span class="text-danger">{{$message}}</span>
          @enderror
            </div>
            <div class="mb-3">
              <label  class="form-label label-job">Responsibilities</label>
              <input type="text" name="responsibility" value="{{old('responsibility')}}" class="form-control" >
              @error('responsibility')
              <span class="text-danger">{{$message}}</span>
          @enderror
            </div>
            <div class="mb-3">
                <label  class="form-label label-job">Educational Requirements</label>
              <input type="text" name="edu_req" value="{{old('edu_req')}}" class="form-control" >
              @error('edu_req')
              <span class="text-danger">{{$message}}</span>
          @enderror
            </div>


            <input type="submit" class="job-submit" value="Post" >
    </form>

</div>
    @endif
@endsection