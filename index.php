<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <title>Rideau Institute</title>
</head>

<body class="bg-dark">
  <header>
    <div class="container-fluid bg-white">
      <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light p-1">
          <img class="navbar-brand" src="img/header_logo.gif" width="150" alt="">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto pr-5">
              <li class="nav-item">
                <a class="nav-link active" href="#">Blog</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Publications</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Videos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Internships</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Governance</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Sign-up</a>
              </li>
            </ul>
          </div>
          <form action="" class="form-inline">
            <button class="btn btn-primary btn-lg">Donate</button>
          </form>
        </nav>
      </div>
    </div>
  </header>

  <section>
    <div class="container-fluid background-showcase">
      <div class="container h-100">
        <div class="row align-items-center h-50">
          <div class="col-md-6 no-gutters text-white">
            <h2>Welcome to Rideau Institute</h2>
            <p class="lead pt-3"><b>Independent research, advocacy and social engagement on Canadian foreign and defence policy.</b></p>
          </div>

        </div>
      </div>
    </div>
  </section>

  <section>
<?php
  if ( have_posts() ) :

     while ( have_posts() ) : the_post();
       the_title('<h2>', '</h2>');
       the_excerpt();
       print '<hr />';
     endwhile;
     else :
       print 'No posts are available';
  endif;
?>
</section>







  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>