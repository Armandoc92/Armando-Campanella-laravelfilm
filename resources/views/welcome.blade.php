<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="/style.css">
  </head>
  <body>



   <!-- navbar -->
<nav class="navbar navbar-expand-lg bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand ms-2" href="#">Lo spazio</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="#">Homepage</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/chi-siamo">Dove siamo</a>
        </li>
        
    </div>
  </div>
</nav>
   <!--end-navbar -->
  
   <!-- Masthead -->
   <div class="p-5 text-center bg-body-tertiary rounded-3">
    <svg class="bi mt-4 mb-3"  width="100" height="100"><use xlink:href="#bootstrap"></use></svg>
    <h1 class="text-body-emphasis">Jumbotron with icon</h1>
    <p class="col-lg-8 mx-auto fs-5 text-muted text-custom">
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, iure.
    </p>
    <div class="d-inline-flex gap-2 mb-5">
      
    </div>
  </div>
   <!--end-Masthead -->
     <div class="container-fluid ms-2">
      <div class="row">
        <div class="col-12 col-md-6">
            <h1>Film in evidenza</h1>
        </div>
      </div>
       <div class="row justify-content-center">
        @foreach ($movies as $movie)
        <div class="col-12 col-md-3 text-center">
          {{-- 'title' => 'Inception',
          'plot' => 'Gente che entra nei sogni e non fa dormire',
          'director' => 'Cristofer Nolan',
          'genre' => 'Fantascienza',
          'duration' => 3,
          'release_at' => 2010,
          'img' => '...', --}}

         <div class="card" style="width: 18rem;">
          <img src="{{$movie['img']}}" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">{{$movie['title']}}</h5>
            <p class="card-text">{{$movie['plot']}}</p>
            <a href="{{route('movies.show',['movietitle'=> $movie['title']])}}" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>  
       </div>
         @endforeach
       </div>
     </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="/script.js"></script>
  </body>
</html>