<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Blanco Parlor</title>
    <!-- fontawesome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />    
    <!-- bootstrap css -->
    <link rel="stylesheet" href="bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <!-- custom css -->
    <link rel="stylesheet" href="css/main.css">
</head>
<body>    

    <!-- navbar-->
    <div class="navbar navbar-expand-lg navbar-light bg-white py-4 fixed-top">
        <div class="container">
            <a href="index.html" class="navbar-brand d-flex justify-content-between align-items-center order-lg-0">
                <img src="images/siteicon.png" alt="site icon">
                <span class="text-uppercase fw-light ms-2">The blanco parlor</span>
            </a>

            <div class="order-lg-2 nav-btns">                   
                <button type="button"class="btn position-relative">
                    <i class="fa fa-shopping-cart"></i>
                    <span class="position-absolute top-0 start-100 translate-middle badge bg-primary">5</span>
                </button>
                <button type="button"class="btn position-relative">
                    <i class="fa fa-heart"></i>
                    <span class="position-absolute top-0 start-100 translate-middle badge bg-primary">2</span>
                </button>
                <button type="button"class="btn position-relative">
                    <i class="fa fa-search"></i>
                    <span class="position-relative"></span>
                </button>
                
                <button type="button"class="btn">  
                    <ul class="list-unstyled position-relative m-0 p-0">
                        <li class="nav-item dropdown ms-auto">   
                            <a href="#" class="nav-link dropdown-toggle text-dark" data-bs-toggle="dropdown">
                                <i class="fa fa-user"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end mt-3">
                                <a href="#" class="dropdown-item ">Hello, <span class="text-uppercase fw-bolder">Nelly</span> !</a>
                                <a href="profile.html" class="dropdown-item active">My Account</a>
                                <a href="#" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#registerModal">Register</a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#loginModal">Login</a>                               
                            </div>
                        </li>
                    </ul>
                </button>                           
                                         
            </div>
            <button type="button" class="navbar-toggler border-0" data-bs-toggle="collapse" data-bs-target="#navMenu">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse order-lg-1" id="navMenu">
                <ul class="navbar-nav mx-auto text-center">
                    <li class="nav-item px-2 py-2">
                        <a href="#header" class="nav-link text-uppercase text-dark">
                            Home
                        </a>
                    </li>
                    <li class="nav-item px-2 py-2">
                        <a href="#collection" class="nav-link text-uppercase text-dark">
                            Collection
                        </a>
                    </li>
                    <li class="nav-item px-2 py-2">
                        <a href="#special" class="nav-link text-uppercase text-dark">
                            Specials
                        </a>
                    </li>
                    <li class="nav-item px-2 py-2">
                        <a href="#blogs" class="nav-link text-uppercase text-dark">
                            Blogs
                        </a>
                    </li>
                    <li class="nav-item px-2 py-2">
                        <a href="#about" class="nav-link text-uppercase text-dark">
                            About us
                        </a>
                    </li>
                    <li class="nav-item px-2 py-2 border-0">
                        <a href="#popular" class="nav-link text-uppercase text-dark">
                            Popular
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- navbar end -->

    @yield('content')

    <!-- modal login --> 
    <div class="modal fade mt-5" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-body m-0 p-0">                    
                    <div class="row ">
                        <div class="col-lg-6 form-img">
                            <img class="img-fluid" src="images/modal_01.jpg" alt="">                           
                        </div>                           
                        <div class="col-lg-6 px-4 py-2">
                            <div class="text-end">
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div> 
                            <form action="" class="my-3">
                                <h1 class="">Login</h1>
                                <p class="py-2">If you have an account with us, please login below!</p>
                                <div class="form-row">
                                    <div class="col-lg-8 py-1">
                                        <input type="email" class="form-control py-2" placeholder="Username / Email">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-lg-8 py-1">
                                        <input type="password" class="form-control py-2" placeholder="Password">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-lg-8 py-1">
                                        <button type="button" class="btn btn-primary modal-btn py-2">Login</button>
                                    </div>
                                </div>
                                <div class="py-2 mt-2">
                                    <a href="#" class="modal-link">Forgot password?</a>
                                    <p>Don't have an account? <a href="#" class="modal-link">Register here</a></p>
                                </div>                                                                
                            </form>                          
                        </div>  
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- modal login end --> 

    <!-- modal register --> 
    <div class="modal fade mt-5" id="registerModal" tabindex="-1" aria-labelledby="registerModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-body m-0 p-0">                    
                    <div class="row ">
                        <div class="col-lg-6 form-img">
                            <img class="img-fluid" src="images/modal_01.jpg" alt="">                           
                        </div>                           
                        <div class="col-lg-6 px-4 py-2">
                            <div class="text-end">
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div> 
                            <form action="" class="my-3">
                                <h1 class="">Register</h1>
                                <p class="py-2">Register now and enjoy all the benefits as a member!</p>
                                <div class="form-row">
                                    <div class="col-lg-8 py-1">
                                        <input type="email" class="form-control py-1" placeholder="Username">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-lg-8 py-1">
                                        <input type="email" class="form-control py-1" placeholder="Email">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-lg-8 py-1">
                                        <input type="password" class="form-control py-1" placeholder="Password">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-lg-8 py-1">
                                        <input type="password" class="form-control py-1" placeholder="Repeat Password">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-lg-8 py-1">
                                        <button type="button" class="btn btn-primary modal-btn py-2">Register</button>
                                    </div>
                                </div>
                                <div class="pt-2">
                                    <p class="">Already have an account? <a href="#" class="modal-link">Login here</a></p>
                                </div>                                                                
                            </form>                          
                        </div>  
                    </div>
                </div>                
            </div>
        </div>
    </div>
    <!-- modal register end --> 

    <!-- footer -->
    <footer class="bg-dark py-5">
        <div class="container">
            <div class="row text-white g-4">
                <div class="col-md-6 col-lg-3">
                    <a href="index.hrml" class="text-uppercase text-decoration-none brand text-white">The Blanco Parlor</a>
                    <p class="text-white text-muted mt-3">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aperiam, harum?</p>
                </div>

                <div class="col-md-6 col-lg-3">
                    <h5 class="fw-light">Links</h5>
                    <ul class="list-unstyled">
                        <li class="my-3">
                            <a href="#" class="text-white text-decoration-none text-muted">
                                <i class="fas fa-chevron-right me-1"></i> Home
                            </a>
                        </li>
                        <li class="my-3">
                            <a href="#" class="text-white text-decoration-none text-muted">
                                <i class="fas fa-chevron-right me-1"></i> Collection
                            </a>
                        </li>
                        <li class="my-3">
                            <a href="#" class="text-white text-decoration-none text-muted">
                                <i class="fas fa-chevron-right me-1"></i> Blogs
                            </a>
                        </li>
                        <li class="my-3">
                            <a href="#" class="text-white text-decoration-none text-muted">
                                <i class="fas fa-chevron-right me-1"></i> About Us
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="col-md-6 col-lg-3">
                    <h5 class="fw-light mb-3">Contact Us</h5>
                    <div class="d-flex justify-content-start align-items-start my-2 text-muted">
                        <span class="me-3">
                            <i class="fas fa-map-marked-alt"></i>
                        </span>
                        <span class="fw-light">
                             Estrada Palma, La Habana, Cuba
                        </span>
                    </div>
                    <div class="d-flex justify-content-start align-items-start my-2 text-muted">
                        <span class="me-3">
                            <i class="fas fa-envelope"></i>
                        </span>
                        <span class="fw-light">
                             blancoparlor.support@gmail.com
                        </span>
                    </div>
                    <div class="d-flex justify-content-start align-items-start my-2 text-muted">
                        <span class="me-3">
                            <i class="fas fa-phone-alt"></i>
                        </span>
                        <span class="fw-light">
                            +53 5266 2594
                        </span>
                    </div>
                </div>

                <div class="colmd-6 col-lg-3">
                    <h5 class="fw-light mb-3">
                        Follow Us
                    </h5>
                    <div class="">
                        <ul class="list-unstyled d-flex">
                            <li><a href="#" class="text-white text-decoration-none text-muted fs-4 me-4">
                                <i class="fab fa-facebook-f"></i>
                            </a></li>
                            <li><a href="#" class="text-white text-decoration-none text-muted fs-4 me-4">
                                <i class="fab fa-twitter"></i>
                            </a></li>
                            <li><a href="#" class="text-white text-decoration-none text-muted fs-4 me-4">
                                <i class="fab fa-instagram"></i>
                            </a></li>
                            <li><a href="#" class="text-white text-decoration-none text-muted fs-4 me-4">
                                <i class="fab fa-pinterest"></i>
                            </a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer end -->



    <!-- jquery -->
    <script type="text/javascript" src="js/jquery-3.6.0.js"></script>
    <!-- isotope -->
    <script type="text/javascript" src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.js"></script>
    <!-- bootstrap js -->
    <script type="text/javascript" src="bootstrap-5.1.3-dist/js/bootstrap.min.js"></script>
    <!-- custom js -->
    <script type="text/javascript" src="js/script.js"></script>
</body>
</html>