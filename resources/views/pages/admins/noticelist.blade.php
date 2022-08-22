@extends('navbar.inc')
@section('content')

  @if(Session::get('admin_id')) 
    <div class="notice-list">

      <table class="table table-borded m-0 ">
        
        <tr>
            <th>Title</th>
            <th>Description</th>
            <th>Images</th>
            <th></th>
            <th></th> 
        </tr>
        @foreach($admins as $admin)
            <tr>
                <td>{{$admin->title}}</td>
                <td>{{$admin->description}}</td>
                <td><img src="{{ asset('images2/'.$admin->image_path) }}" class="noticelist-card w-75" alt=""></td>
                
                <td><a class="btn btn-warning" href="/admin/noticeaddedit/{{$admin->id}}/{{$admin->title}}">Edit</a></td>
                <td><a class="btn btn-danger"  href="/admin/delete/{{$admin->id}}/{{$admin->title}}">Delete</a></td>
               
            </tr>
        @endforeach
      </table>
    </div>
    @else
    <div id="wrk-based" class="work-based ">
    
        <h1 class="text-center fw-bold workbase-heading">Notice</h1>
   
        <div class="row row-cols-1 row-cols-md-3 g-3 m-0">
           @foreach($admins as $admin)
           <div class="col p-5 ">
             <div class="card">
              
               <div class="card-body">
                 <h5 class="card-title  text-center card-head">{{$admin->title}}</h5>
               </div>
               <img  src="{{ asset('images2/'.$admin->image_path) }}" class="noticelist-card card-body " alt="...">
               <div class="notice-list-description">{{$admin->description}}</div>
             </div>
           </div>
           @endforeach
         </div>
     
   </div>
  @endif
    
@endsection