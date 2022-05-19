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
  <div class="card-header">View Page</div>
  <div class="card-body">

        <div class="card-body responsive">
            <h4 class="card-title bold">student data</h4>
        <p class="card-text">FirstName : {{ $students->FirstName }}</p>
        <p class="card-text">LastName : {{ $students->LastName }}</p>
        <p class="card-text">BirthDate : {{ $students->BirthDate }}</p>
        <p class="card-text">Address : {{ $students->Address }}</p>
        <p class="card-text">HouseNumber : {{ $students->HouseNumber }}</p>
        <p class="card-text">Postcode : {{ $students->Postcode }}</p>
        <p class="card-text">City : {{ $students->City }}</p>
        <p class="card-text">Mobile : {{ $students->Mobile }}</p>
        <p class="card-text">Email : {{ $students->Email }}</p>
  </div>

    </hr>

  </div>
</div>
