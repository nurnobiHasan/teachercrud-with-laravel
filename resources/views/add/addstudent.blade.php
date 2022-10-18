@extends("layout.layout")
@section("sidebar")
    <a class="btn btn-primary mb-4" href="/teachers/create">Add Teacher</a>
@endsection
@section("content")
    <form class="my-4" action="/teachers/{{$editdata->id}}" method="post">
    @if (isset($editdata->id))
        @method("put")
    @endif
     @csrf
    <div class="form-group">
      <label for="name">Teacher Name:</label>
      <input type="text" name="name" value="{{old('name',$editdata->name)}}"  class="form-control" id="name" placeholder="Enter name"><br>
    </div>

    <div class="form-group">
        <label for="email">Teacher Email:</label>
        <input type="email" name="email" value="{{old('email',$editdata->email)}}"  class="form-control" id="email" placeholder="Enter email"><br>
    </div>

    <div class="form-group">
        <label for="number">Teacher Number:</label>
        <input type="text" name="number" value="{{old('number',$editdata->number)}}"  class="form-control" id="number" placeholder="Enter number"><br>
    </div>

    <div class="form-group">
        <label for="address">Teacher Address:</label>
        <input type="address" name="address" value="{{old('address',$editdata->address)}}" class="form-control" id="address" placeholder="Enter address"><br>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
  @endsection
