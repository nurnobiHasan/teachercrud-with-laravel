@extends("layout.layout")
@section("sidebar")
    <a class="btn btn-primary mb-4" href="/teachers/create">Add Teacher</a>
@endsection
@section("content")
<table class="table">
    <thead>
      <tr>
        <th scope="col">ID:</th>
        <th scope="col">{{$singleinfo->id}}</th>
      </tr>
      <tr>
        <th scope="col">NAME:</th>
        <th scope="col">{{$singleinfo->name}}</th>
      </tr>
      <tr>
        <th scope="col">EMAIL:</th>
        <th scope="col">{{$singleinfo->email}}</th>
      </tr>
      <tr>
        <th scope="col">NUMBER:</th>
        <th scope="col">{{$singleinfo->number}}</th>
      </tr>
      <tr>
        <th scope="col">ADDRESS:</th>
        <th scope="col">{{$singleinfo->address}}</th>
      </tr>
    </thead>
  </table>
  <form action="/teachers/{{$singleinfo->id}}" method="post">
        @csrf
        @method("delete")
        <button onclick="return confirm('r u sure delete this')" class="btn btn-danger mb-5">Delete</button>
    </form>
  @endsection
