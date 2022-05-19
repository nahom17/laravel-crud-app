@extends('students.layout')
@section('content')

<div class="card">
    <header class="py-0">
        <div>
          <h3 class="float-md-end mb-0"></h3>
          <nav class="nav nav-masthead justify-content-center float-md-start m-2">
            <a class="nav-link fw-bold py-1 px-0 active" aria-current="page" href="/student"><h5><i class="bi bi-clipboard-data"></i></i>student data</h5></a><br>


          </nav>
        </div>
      </header>
  <div class="card-header">Edit Page</div>
  <div class="card-body">

      <form action="{{ url('student/' .$students->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$students->id}}" id="id" />
        <label>FirstName</label></br>
        <input type="text" name="FirstName" id="FirstName" value="{{$students->FirstName}}" class="form-control"></br>
        <label>LastName</label>
        <input type="text" name="LastName" id="LastName" value="{{$students->LastName}}" class="form-control"></br>
        <label>BirthDate</label>
        <input type="date" name="BirthDate" id="BirthDate" value="{{$students->BirthDate}}" class="form-control"></br>
        <label>Address</label></br>
        <input type="text" name="Address" id="Address" value="{{$students->Address}}" class="form-control"></br>
        <label>HouseNumber</label>
        <input type="text" name="HouseNumber" id="HouseNumber" value="{{$students->HouseNumber}}" class="form-control"></br>
        <label>Postcode</label>
        <input type="text" name="Postcode" id="Postcode" value="{{$students->Postcode}}" class="form-control"></br>
        <label>City</label>
        <input type="text" name="City" id="City" value="{{$students->City}}" class="form-control"></br>
        <label>Mobile</label></br>
        <input type="text" name="Mobile" id="Mobile" value="{{$students->Mobile}}" class="form-control"></br>
        <label>Email</label>
        <input type="email" name="Email" id="Email" value="{{$students->Email}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>

  </div>
</div>
@stop
