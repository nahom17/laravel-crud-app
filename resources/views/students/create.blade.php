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
  <div class="card-header">Add Page</div>
  <div class="card-body">
    @if ($errors->any())
    <div class="alert alert-danger">
        <p>Please fix those errors in the below!!</p>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
      <form action="{{ url('student') }}" method="post">
        {!! csrf_field() !!}
        <label>FirstName</label></br>
        <input type="text" name="FirstName" id="FirstName" class="form-control"></br>
        <label>LastName</label>
        <input type="text" name="LastName" id="LastName" class="form-control"></br>
        <label>BirthDate</label>
        <input type="date" name="BirthDate" id="BirthDate" class="form-control"></br>
        <label>Address</label></br>
        <input type="text" name="Address" id="Address" class="form-control"></br>
        <label>HouseNumber</label>
        <input type="text" name="HouseNumber" id="HouseNumber" class="form-control"></br>
        <label>Postcode</label>
        <input type="text" name="Postcode" id="Postcode" class="form-control"></br>
        <label>City</label>
        <input type="text" name="City" id="City" class="form-control"></br>
        <label>Mobile</label></br>
        <input type="text" name="Mobile" id="Mobile" class="form-control"></br>
        <label>Email</label>
        <input type="email" name="Email" id="Email" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>

  </div>
</div>
@stop
