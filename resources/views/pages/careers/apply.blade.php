@extends('navbar.inc')
@section('content')
<div class="full-form">


    <form  action="{{route('career.apply')}}" class="" method="post" enctype="multipart/form-data">
        {{csrf_field()}}

        <div class="label-job form-group mb-3">
           <h2 class="label-job ms-3 mb-3 pe-3">My Information</h2>
            <span class="label-job m-3 pe-3">Your Name*</span>
            <input type="hidden" name="title" value="{{Session::get('title')}}" class="form-control m-3">
            <input type="text" name="name" value="{{old('name')}}" class="form-control m-3">
            @error('name')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="label-job form-group mb-3">
            <span class="label-job m-3 pe-3">Your Email*</span>
            <input type="text" name="email" value="{{old('email')}}" class="form-control m-3">
            @error('email')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="label-job form-group mb-3">
            <span class=" m-3 pe-3">Your Phone*</span>
            <input type="text" name="phone" value="{{old('phone')}}" class="form-control m-3">
            @error('phone')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="label-job form-group mb-3">
            <span class=" m-3 pe-3">University*</span>
            <input type="text" name="uni" value="{{old('uni')}}" class="form-control m-3">
            @error('uni')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div><br>
        
        <div class="label-job form-group mb-3">
            <h2 class="ms-3 mb-3 pe-3"> My Experience</h2>

            <span class=" m-3 pe-3">Total Years of Experience*</span>
            <textarea name="exp" value="{{old('exp')}}" class="form-control m-3"> </textarea>
            @error('exp')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div class="label-job form-group mb-3">
            <span class="label-job m-3 pe-3">Expertise/Interest Areas*</span>
            <textarea name="int_area" value="{{old('int_area')}}" class="form-control m-3"> </textarea>
            @error('int_area')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="label-job form-group mb-3"> 
          <span class=" m-3 pe-3">Notice Period*</span>
          <select name="not_period" onChange={handleChange} value={inputs.not_period} class="form-control m-3">
          <option value="">Choose...</option>
          <option value="Immediately">Immediately</option>
          <option value="15 Days">15 Days</option>
          <option value="1 Month">1 Month</option>
          <option value="1+ Month">1+ Month</option>  
               
          </select>
            @error('not_period')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div class="label-job form-group mb-3">
            <span class=" m-3 pe-3">Current Salary*</span>
            <textarea name="cur_sal" value="{{old('cur_sal')}}" class="form-control m-3"> </textarea>
            @error('cur_sal')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div class="label-job form-group mb-3">
            <span class=" m-3 pe-3">Expected Salary*</span>
            <textarea name="exp_sal" value="{{old('exp_sal')}}" class="form-control m-3"> </textarea>
            @error('exp_sal')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div class="label-job form-group mb-3">
            <span class=" m-3 pe-3">Cover Letter*</span>
            <textarea name="cov_let" value="{{old('cov_let')}}" class="form-control m-3"> </textarea>
            @error('cov_let')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div class="label-job form-group mb-3">
            
            <span class=" m-3 pe-3">Resume*</span>
            <input type="file" name="res_path" value="{{old('res_path')}}" class="form-control m-3"> </textarea><br>
            @error('res_path')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div><br>
        <div align="center">
        <input type="submit" class="btn btn-success btn-notice  fs-5 align-middle m-3 pe-2" value="Submit" >
        </div>
    </form>
</div>

@endsection