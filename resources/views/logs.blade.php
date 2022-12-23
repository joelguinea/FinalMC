@extends('base');

@extends('navbar')

@section('title', 'Logs')

@section('content')

<div class="p-5">
    <div class="d-grid gap-2 d-md-flex">
     <h1 >Activity Log</h1>
    </div>
    <table class="table table-bordered text-white">
       <thead class="text-white">
         <th>Timestamp</th>
         <th>Log Entry</th>
       </thead> 
       <tbody class="text-white">
        @foreach ($logs as $log)
        <tr>
          <td>{{$log->created_at}}</td>
          <td>{{$log->log_entry}}</td>
        </tr>
        @endforeach
       </tbody>
    </table>
</div>

@endsection
<style>
    #basic-addon1 {
    width: 40px;
    text-align: center;
    background-color: primary;  
}
body{
    background-image: url("images/pn.png");
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
    height: 100%;
}
</style>