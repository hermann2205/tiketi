
@if (1)
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent" >
      <ul class="navbar-nav  ml-auto">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Categories
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <div class="row">
                        <div class="col-lg-6">
                            <div>
                                <a class="dropdown-item" href="#">Mariage</a>
                                <a class="dropdown-item" href="#">Anniversaire</a>
                                <a class="dropdown-item" href="#">Récéption</a>
                            </div>
                            <div class="dropdown-divider"></div>
                            <div>
                                <a class="dropdown-item" href="#">Manifestation culturelle</a>
                                <a class="dropdown-item" href="#">Manifestation réligieuse</a>
                                <a class="dropdown-item" href="#">Concert Musical</a>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <a class="dropdown-item" href="#">Conférence</a>
                            <a class="dropdown-item" href="#">Réunion</a>
                            <a class="dropdown-item" href="#">Jeux concours</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Football</a>
                            <a class="dropdown-item" href="#">BasketBall</a>
                            <a class="dropdown-item" href="#">Tennis</a>
                            <a class="dropdown-item" href="#">Catch</a>
                            <a class="dropdown-item" href="#">Autres</a>
                        </div>
                </div>
          </div>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="#">About <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Pricing</a>
          </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Evenements</a>
          </li>
      </ul>
      <form class="form-inline ml-lg-4 my-2 my-lg-0">
        <button class="btn btn-success mr-2 my-2 my-sm-0" type="submit">Sign In</button>
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Sign Up</button>
      </form>
    </div>
</nav>


<div id="carouselExampleControls" class="carousel slide h-100" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <div class="jumbotron jumbotron-fluid">
            <div class="container-fluid">
              <h1 class="display-4">Fluid jumbotron</h1>
              <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
            </div>
          </div>
      </div>
      <div class="carousel-item">
        <div class="jumbotron jumbotron-fluid">
            <div class="container-fluid">
              <h1 class="display-4">Fluid jumbotron</h1>
              <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
            </div>
          </div>
      </div>
      <div class="carousel-item">
        <div class="jumbotron jumbotron-fluid">
            <div class="container-fluid">
              <h1 class="display-4">Fluid jumbotron</h1>
              <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
            </div>
          </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>

<div class="container">
    <div class="row">
        <div class="col-lg-4"></div>
        <div class="col-lg-4">
            <a type="button" href="{{route('organisateur.billingMode')}}" class="btn btn-outline-primary btn-lg btn-block">Try For Free(Creer Evenement )</a>
        </div>
        <div class="col-lg-4"></div>
    </div>
</div>
<div class="container-fluid my-4">
  <div class="row mb-2">
    <div class="col-md-6">
      <div class="card flex-md-row mb-4 box-shadow h-md-250">
        <div class="card-body d-flex flex-column align-items-start">
          <strong class="d-inline-block mb-2 text-primary">World</strong>
          <h3 class="mb-0">
            <a class="text-dark" href="#">Featured post</a>
          </h3>
          <div class="mb-1 text-muted">Nov 12</div>
          <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
          <a href="#">Continue reading</a>
        </div>
        <img class="card-img-right flex-auto d-none d-md-block" data-src="holder.js/200x250?theme=thumb" alt="Card image cap">
      </div>
    </div>
    <div class="col-md-6">
      <div class="card flex-md-row mb-4 box-shadow h-md-250">
        <div class="card-body d-flex flex-column align-items-start">
          <strong class="d-inline-block mb-2 text-success">Design</strong>
          <h3 class="mb-0">
            <a class="text-dark" href="#">Post title</a>
          </h3>
          <div class="mb-1 text-muted">Nov 11</div>
          <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
          <a href="#">Continue reading</a>
        </div>
        <img class="card-img-right flex-auto d-none d-md-block" data-src="holder.js/200x250?theme=thumb" alt="Card image cap">
      </div>
    </div>
  </div>
<div class="jumbotron p-3 p-md-5 text-white rounded bg-dark">
    <div class="col-md-6 px-0">
      <h1 class="display-4 font-italic">Title of a longer featured blog post</h1>
      <p class="lead my-3">Multiple lines of text that form the lede, informing new readers quickly and efficiently about what's most interesting in this post's contents.</p>
      <p class="lead mb-0"><a href="#" class="text-white font-weight-bold">Continue reading...</a></p>
    </div>
  </div>

</div>
</div>
@else
    1
@endif
