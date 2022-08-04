@extends('navbar.inc')
@section('content')
<main>
    <table class="table table-borded m-0 p=0">
        
        <tr>
            <th>Job ID</th>
            <th>Title</th>
            <th>Description</th>
            <th>Skills</th>
            <th>Responsibilities</th>
            <th>Educational Requirements</th>
        </tr>
        @foreach($careers as $career)
            <tr>
                <td>{{$career->j_id}}</td>
                <td>{{$career->title}}</td>
                <td>{{$career->description}}</td>
                <td>{{$career->skill}}</td>
                <td>{{$career->responsibility}}</td>
                <td>{{$career->edu_req}}</td>
                @if(Session::get('admin_id')) 
                <td><a class="btn btn-warning" href="/career/jobedit/{{$career->id}}/{{$career->title}}">Edit</a></td>
                @endif
                @if(Session::get('admin_id')) 
                <td><a class="btn btn-danger" href="/career/delete/{{$career->id}}/{{$career->title}}">Delete</a></td>
                @endif
                <td><a class="btn btn-success" href="/career/apply/{{$career->title}}">Apply Now</a></td>
            </tr>
        @endforeach
    </table>
</main>
    
@endsection