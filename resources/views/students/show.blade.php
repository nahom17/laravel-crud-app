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

        <div class="card-body ms-5">
            <h4 class="card-title bold">student data</h4>
        <p class="card-text text-bold">FirstName :&nbsp;   {{ $students->FirstName }}</p>
        <p class="card-text text-bold">LastName :&nbsp;    {{ $students->LastName }}</p>
        <p class="card-text text-bold">BirthDate :&nbsp;   {{ $students->BirthDate }}</p>
        <p class="card-text text-bold">Address :&nbsp;     {{ $students->Address }}</p>
        <p class="card-text text-bold">HouseNumber :&nbsp; {{ $students->HouseNumber }}</p>
        <p class="card-text text-bold">Postcode :&nbsp;    {{ $students->Postcode }}</p>
        <p class="card-text text-bold">City :&nbsp;        {{ $students->City }}</p>
        <p class="card-text text-bold">Mobile :&nbsp;      {{ $students->Mobile }}</p>
        <p class="card-text text-bold">Email :&nbsp;       {{ $students->Email }}</p>
  </div>

    </hr>

  </div>
</div>
