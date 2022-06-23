@extends('navbar.inc')
@section('content')

<div class="bg-primary">
    <h1 class=" text-center fw-bold workbase-heading">Message List</h1>
    <table class="message-list table ">
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Subject</th>
            <th>Message</th>
          
            <th></th>
            <th></th>
        </tr>
        @foreach($systemusers as $systemuser)
            <tr>
                <td>{{$systemuser->name}}</td>
                <td>{{$systemuser->email}}</td>
                <td>{{$systemuser->phone}}</td>
                <td>{{$systemuser->subject}}</td>
                <td>{{$systemuser->message}}</td>
              
    
            </tr>
        @endforeach
      </table>
        <table class="table table-borded">
    
        </table>
</div>


@endsection