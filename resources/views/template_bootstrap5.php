<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>MDBootstrap v5</title>

  <!-- Bootstrap -->
  <link rel="stylesheet" href="/css/bootstrap.min.css">

  <!-- Material Design for Bootstrap -->
  <link rel="stylesheet" href="./assets/css/mdb.css">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css">

  <!-- Custom styles -->
  <link rel="stylesheet" href="./custom.css">
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark indigo">
  <a class="navbar-brand mdb-logo" href="#">MDB</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarExample"
          aria-controls="navbarExample" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarExample">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#layout">Layout</a>
      </li>
    </ul>
    <ul class="navbar-nav">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
           aria-expanded="false">
               Dropdown
        </a>
        <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
          <li><a class="dropdown-item" href="#">Action</a></li>
          <li><a class="dropdown-item" href="#">Another action</a></li>
          <li>
            <hr class="dropdown-divider">
          </li>
          <li><a class="dropdown-item" href="#">Something else here</a></li>
        </ul>
      </li>
    </ul>
  </div>
</nav>
<!-- /.Navbar -->

<section id="intro" class="intro-section">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <h1>Material Design for Bootstrap <span class="badge indigo">5</span></h1>
        <p class="text-muted">Now better, faster and 100% jQuery-free</p>
        <a href="#layout" class="btn btn-pink btn-circle">
          <i class="fas fa-chevron-down"></i>
        </a>
      </div>
    </div>
  </div>
</section>

<section id="layout">

  <h2 class="text-center">Layout</h2>

  <div class="container-sm info-color">
    <p>Container SM</p>
  </div>

  <div class="container-md success-color">
    <p>Container MD</p>
  </div>

  <div class="container-lg warning-color">
    <p>Container LG</p>
  </div>

  <div class="container-xl danger-color">
    <p>Container XL</p>
  </div>

</section>

<section id="components">
  <h2 class="text-center">Components</h2>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h3>Buttons</h3>
        <div class="btn-group btn-group-toggle" data-toggle="buttons">
          <label class="btn btn-info active">
            <input type="radio" name="options" id="option1" autocomplete="off" checked> Active
          </label>
          <label class="btn btn-info">
            <input type="radio" name="options" id="option2" autocomplete="off"> Radio
          </label>
          <label class="btn btn-info">
            <input type="radio" name="options" id="option3" autocomplete="off"> Radio
          </label>
        </div>
        <hr>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">

        <div class="spinner-border text-primary" role="status">
          <span class="sr-only">Loading...</span>
        </div>
        <div class="spinner-border text-secondary" role="status">
          <span class="sr-only">Loading...</span>
        </div>
        <div class="spinner-border text-success" role="status">
          <span class="sr-only">Loading...</span>
        </div>
        <div class="spinner-border text-danger" role="status">
          <span class="sr-only">Loading...</span>
        </div>
        <div class="spinner-border text-warning" role="status">
          <span class="sr-only">Loading...</span>
        </div>
        <div class="spinner-border text-info" role="status">
          <span class="sr-only">Loading...</span>
        </div>
        <div class="spinner-border text-light" role="status">
          <span class="sr-only">Loading...</span>
        </div>
        <div class="spinner-border text-dark" role="status">
          <span class="sr-only">Loading...</span>
        </div>

      </div>

      <div class="row">
        <div class="col-md-12">

          <!-- Card group -->
          <div class="card-group">

            <!-- Card -->
            <div class="card mb-4">

              <!-- Card image -->
              <div class="view overlay">
                <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/images/49.jpg"
                     alt="Card image cap">
                <a href="#!">
                  <div class="mask rgba-white-slight"></div>
                </a>
              </div>

              <!-- Card content -->
              <div class="card-body">

                <!-- Title -->
                <h4 class="card-title">Card title</h4>
                <!-- Text -->
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                  card's content.</p>
                <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
                <button type="button" class="btn btn-primary btn-md">Read more</button>

              </div>
              <!-- Card content -->

            </div>
            <!-- Card -->

            <!-- Card -->
            <div class="card mb-4">

              <!-- Card image -->
              <div class="view overlay">
                <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/images/48.jpg"
                     alt="Card image cap">
                <a href="#!">
                  <div class="mask rgba-white-slight"></div>
                </a>
              </div>

              <!-- Card content -->
              <div class="card-body">
                <!-- Title -->
                <h4 class="card-title">Card title</h4>
                <!-- Text -->
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                  card's content.</p>
                <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
                <button type="button" class="btn btn-primary btn-md">Read more</button>

              </div>
              <!-- Card content -->

            </div>
            <!-- Card -->

            <!-- Card -->
            <div class="card mb-4">

              <!-- Card image -->
              <div class="view overlay">
                <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/images/77.jpg"
                     alt="Card image cap">
                <a href="#!">
                  <div class="mask rgba-white-slight"></div>
                </a>
              </div>

              <!-- Card content -->
              <div class="card-body">

                <!-- Title -->
                <h4 class="card-title">Card title</h4>
                <!-- Text -->
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                  card's content.</p>
                <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
                <button type="button" class="btn btn-primary btn-md">Read more</button>

              </div>
              <!-- Card content -->

            </div>
            <!-- Card -->

          </div>
          <!-- Card group -->

          <!-- Card deck -->
          <div class="card-deck">

            <!-- Card -->
            <div class="card mb-4">

              <!--Card image-->
              <div class="view overlay">
                <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/images/16.jpg"
                     alt="Card image cap">
                <a href="#!">
                  <div class="mask rgba-white-slight"></div>
                </a>
              </div>

              <!--Card content-->
              <div class="card-body">

                <!--Title-->
                <h4 class="card-title">Card title</h4>
                <!--Text-->
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                  card's content.</p>
                <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
                <button type="button" class="btn btn-light-blue btn-md">Read more</button>

              </div>

            </div>
            <!-- Card -->

            <!-- Card -->
            <div class="card mb-4">

              <!--Card image-->
              <div class="view overlay">
                <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/images/14.jpg"
                     alt="Card image cap">
                <a href="#!">
                  <div class="mask rgba-white-slight"></div>
                </a>
              </div>

              <!--Card content-->
              <div class="card-body">

                <!--Title-->
                <h4 class="card-title">Card title</h4>
                <!--Text-->
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                  card's content.</p>
                <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
                <button type="button" class="btn btn-light-blue btn-md">Read more</button>

              </div>

            </div>
            <!-- Card -->

            <!-- Card -->
            <div class="card mb-4">

              <!--Card image-->
              <div class="view overlay">
                <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/images/15.jpg"
                     alt="Card image cap">
                <a href="#!">
                  <div class="mask rgba-white-slight"></div>
                </a>
              </div>

              <!--Card content-->
              <div class="card-body">

                <!--Title-->
                <h4 class="card-title">Card title</h4>
                <!--Text-->
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                  card's content.</p>
                <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
                <button type="button" class="btn btn-light-blue btn-md">Read more</button>

              </div>

            </div>
            <!-- Card -->

          </div>
          <!-- Card deck -->

        </div>

      </div>

    </div>
    <div class="row">

      <div class="col-md-6">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Panel title</h5>
            <h6 class="card-subtitle mb-2 text-muted">Panel subtitle</h6>
            <p class="card-text">Some quick example text to build on the panel title and make up the bulk of the panel's
              content.</p>
            <a href="#!" class="card-link">Card link</a>
            <a href="#!" class="card-link">Another link</a>
          </div>
        </div>
      </div>

    </div>

  </div>
</section>

<section id="javascript">

  <h2 class="text-center">JavaScript</h2>

  <div class="container">

    <div class="row">
      <div class="col-md-12">
        <h3>Modal</h3>

        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
          Launch demo modal
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
             aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                ...
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
              </div>
            </div>
          </div>
        </div>

        <hr class="my-3">

      </div>
    </div>
    <div class="row">
      <div class="col-md-12">

        <h3>Carousel</h3>

        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(45).jpg"
                   alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(46).jpg"
                   alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(47).jpg"
                   alt="Third slide">
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

      </div>

    </div>

    <div class="row">
      <div class="col-md-12">

        <h3>Tooltips</h3>

        <button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="top"
                title="Tooltip on top">
          Tooltip on top
        </button>
        <button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="right"
                title="Tooltip on right">
          Tooltip on right
        </button>
        <button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="bottom"
                title="Tooltip on bottom">
          Tooltip on bottom
        </button>
        <button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="left"
                title="Tooltip on left">
          Tooltip on left
        </button>


      </div>
    </div>

    <div class="row">
      <div class="col-md-12">

        <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
          <div class="toast-header">
            <img src="..." class="rounded mr-2" alt="...">
            <strong class="mr-auto">Bootstrap</strong>
            <small class="text-muted">just now</small>
            <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="toast-body">
            See? Just like this.
          </div>
        </div>

        <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
          <div class="toast-header">
            <img src="..." class="rounded mr-2" alt="...">
            <strong class="mr-auto">Bootstrap</strong>
            <small class="text-muted">2 seconds ago</small>
            <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="toast-body">
            Heads up, toasts will stack automatically
          </div>
        </div>

      </div>
    </div>

  </div>

</section>

<!-- Popper -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.15.0/umd/popper.js"></script>

<!-- Bootstrap -->
<script src="./assets/js/bootstrap.min.js"></script>

<script src="./assets/compiled.js"></script>

<script>
  // Initialize tooltips
  var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-toggle="tooltip"]'))
  var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
    return new bootstrap.Tooltip(tooltipTriggerEl)
  })
</script>
</body>
</html>
