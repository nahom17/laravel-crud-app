<!DOCTYPE html>
<html>
<head>
    <title>Student Laravel 9 CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
</head>
<body>
    <header class="py-5">
        <div>
          <h3 class="float-md-end mb-0"></h3>
          <nav class="nav nav-masthead justify-content-center float-md-start m-2">
            <a class="nav-link fw-bold py-1 px-0 active" aria-current="page" href="/"><h2><i class="bi bi-house-door-fill"></i>Home</h2></a><br>


          </nav>
        </div>
      </header>
<div class="container w-100">
    @yield('content')
</div>

</body>
</html>
