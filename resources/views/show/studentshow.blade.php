@extends("layout.layout")
@section("sidebar")
    <a class="btn btn-primary mb-4" href="/teachers/create">Add Teacher</a>
@endsection
@section("content")
@if (isset($message))
    <div class="alert alert-success text-center text-capitalize">{{$message}}</div>
@endif

<table class="table">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      <tr>
     @foreach ($shoteacher as $showteacher )
        <tr>
            <th scope="col">{{$showteacher->id}}</th>
            <th scope="col">{{$showteacher->name}}</th>
            <th scope="col">{{$showteacher->email}}</th>
            <th scope="col">
                <a class="btn btn-primary" href="/teachers/{{$showteacher->id}}">View Teacher</a>
                <a class="btn btn-success" href="/teachers/{{$showteacher->id}}/edit">Edit Teacher</a>
            </th>
        </tr>
     @endforeach
    </tbody>
  </table>

  @endsection
