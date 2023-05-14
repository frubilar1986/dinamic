<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../bootstrap5/css/bootstrap.min.css">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="../../css/style.css">
    <script src="../../bootstrap5/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="../../js/validaJs.js"></script>
    <script src="../../js/codigo.js"></script>

    <title>tp1_eje1</title>
</head>
<hr>
<div class="container">

    <body class="bg-dark">
       
        <header>
            <div class="text-center">
                <nav class="navbar navbar-light bg-dark rounded-3 ">
                    <div class="container-fluid d-flex justify-content-center">
                        <p class=""><span class="navbar-brand mb-0  text-light">FACULTAD DE INFORMATICA - PROGRAMACION WEB DINAMICA </span></p>
                    </div>
                </nav>
            </div>
        </header>
        <!-- navbar lateral -->
        <div class="container">
            <div class="row flex-nowrap">
                <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark rounded-3">
                    <div class="d-flex flex-column align-items-center align-items-sm-start px-4 pt-2 text-white  min-vh-80">
                        <a href="#" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                            <span class="fs-5 d-none d-sm-inline">T.Practicos</span>
                        </a>
                        <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                            <li class="nav-item">
                                <a target="_blank" href="http://localhost/phpmyadmin/index.php" class="nav-link align-middle px-0"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-server" viewBox="0 0 16 16">
                                        <path d="M1.333 2.667C1.333 1.194 4.318 0 8 0s6.667 1.194 6.667 2.667V4c0 1.473-2.985 2.667-6.667 2.667S1.333 5.473 1.333 4V2.667z" />
                                        <path d="M1.333 6.334v3C1.333 10.805 4.318 12 8 12s6.667-1.194 6.667-2.667V6.334a6.51 6.51 0 0 1-1.458.79C11.81 7.684 9.967 8 8 8c-1.966 0-3.809-.317-5.208-.876a6.508 6.508 0 0 1-1.458-.79z" />
                                        <path d="M14.667 11.668a6.51 6.51 0 0 1-1.458.789c-1.4.56-3.242.876-5.21.876-1.966 0-3.809-.316-5.208-.876a6.51 6.51 0 0 1-1.458-.79v1.666C1.333 14.806 4.318 16 8 16s6.667-1.194 6.667-2.667v-1.665z" />
                                    </svg>
                                    <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">Mysql</span>
                                </a>
                            </li>
                            <li>
                                <a href="#submenu1" data-bs-toggle="collapse" class="nav-link px-0 align-middle"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-compass" viewBox="0 0 16 16">
                                        <path d="M8 16.016a7.5 7.5 0 0 0 1.962-14.74A1 1 0 0 0 9 0H7a1 1 0 0 0-.962 1.276A7.5 7.5 0 0 0 8 16.016zm6.5-7.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z" />
                                        <path d="m6.94 7.44 4.95-2.83-2.83 4.95-4.949 2.83 2.828-4.95z" />
                                    </svg>
                                    <!--<i class="fs-4 bi-speedometer2"></i>--> <span class="ms-1 d-none d-sm-inline">Atajos</span>
                                </a>
                                <ul class="collapse show nav flex-column ms-1" id="submenu1" data-bs-parent="#menu">
                                    <li class="w-100">
                                        <a target="_blank" href="https://pedco.uncoma.edu.ar/" class="nav-link px-0"> <span class="d-none d-sm-inline">--Pedco</span> </a>
                                    </li>
                                    <li>
                                        <a target="_blank" href="https://calendar.google.com/calendar/u/0/r/week" class="nav-link px-0"> <span class="d-none d-sm-inline">--Calendario</span> </a>
                                    </li>
                                </ul>
                            </li>
                            <!-- <li>
                                <a href="#" class="nav-link px-0 align-middle">
                                    <i class="fs-4 bi-table"></i> <span class="ms-1 d-none d-sm-inline">Orders</span></a>
                            </li> -->
                            <li>

                                <a href="#submenu2" data-bs-toggle="collapse" class="nav-link px-0 align-middle ">
                                    <i class="fs-4 bi-bootstrap"></i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-journal-text" viewBox="0 0 16 16">
                                        <path d="M5 10.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z" />
                                        <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z" />
                                        <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z" />
                                    </svg> <span class="ms-1 d-none d-sm-inline">Tp1</span></a>
                                <ul class="collapse nav flex-column ms-1" id="submenu2" data-bs-parent="#menu">
                                    <li class="w-100">
                                        <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Item</span> 1</a>
                                    </li>
                                    <li>
                                        <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Item</span> 2</a>
                                    </li>
                                    <li>
                                        <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Item</span> 2</a>
                                    </li>
                                    <li>
                                        <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Item</span> 2</a>
                                    </li>
                                    <li>
                                        <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Item</span> 2</a>
                                    </li>
                                    <li>
                                        <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Item</span> 2</a>
                                    </li>
                                    <li>
                                        <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Item</span> 2</a>
                                    </li>
                                    <li>
                                        <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Item</span> 2</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#submenu3" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                                    <i class="fs-4 bi-grid"></i> <span class="ms-1 d-none d-sm-inline">Products</span> </a>
                                <ul class="collapse nav flex-column ms-1" id="submenu3" data-bs-parent="#menu">
                                    <li class="w-100">
                                        <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Product</span> 1</a>
                                    </li>
                                    <li>
                                        <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Product</span> 2</a>
                                    </li>
                                    <li>
                                        <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Product</span> 3</a>
                                    </li>
                                    <li>
                                        <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Product</span> 4</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#" class="nav-link px-0 align-middle">
                                    <i class="fs-4 bi-people"></i> <span class="ms-1 d-none d-sm-inline">Customers</span> </a>
                            </li>
                        </ul>
                        <hr>
                        <div class="dropdown pb-4">
                            <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="https://github.com/mdo.png" alt="hugenerd" width="30" height="30" class="rounded-circle">
                                <span class="d-none d-sm-inline mx-1">loser</span>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                                <li><a class="dropdown-item" href="#">New project...</a></li>
                                <li><a class="dropdown-item" href="#">Settings</a></li>
                                <li><a class="dropdown-item" href="#">Profile</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Sign out</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- index -->
                <div class="col-lg-12 py-1 px-1">
                    <div class="">

                        <div class="col-lg-10">
                            <div class="card shadown-lg p-3 mb-2 bg-white">
                                <!--inicio clase card-->
                                <div class="card-header">Ejercicio 4: <p>Modificar el formulario del ejercicio anterior para que usando la edad solicitada, enviar
                                        esos datos a otra página en donde se muestren mensajes distintos dependiendo si la
                                        persona es mayor de edad o no; (si la edad es mayor o igual a 18).
                                        Enviar los datos usando el método GET y luego probar de modificar los datos
                                        directamente en la url para ver los dos posibles mensajes.</p>
                                </div>
                                <div class="card-body">
                                    <form action="../../Control/procesa_eje4.php" method="get" name="form_eje4" class="needs-validation" novalidate>
                                        <div class="form-row">
                                            <div class="col-md-4 mb-3">
                                                <label for="lbl-nro">Nombre:</label>
                                                <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Ing nombre" required>
                                                <div class="valid-feedback">OK!</div>
                                                <div class="invalid-feedback">Campo requerido !!</div>
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <label for="lbl-ape">Apellido:</label>
                                                <input type="text" class="form-control" name="ape" id="ape" placeholder="Ing apellido" required>
                                                <div class="valid-feedback">OK!</div>
                                                <div class="invalid-feedback">Campo requerido !!</div>
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <label for="lbl-ape">Apellido:</label>
                                                <input type="text" class="form-control" name="ape" id="ape" placeholder="Ing apellido" required>
                                                <div class="valid-feedback">OK!</div>
                                                <div class="invalid-feedback">Campo requerido !!</div>
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <label for="lbl-ape">Apellido:</label>
                                                <input type="text" class="form-control" name="ape" id="ape" placeholder="Ing apellido" required>
                                                <div class="valid-feedback">OK!</div>
                                                <div class="invalid-feedback">Campo requerido !!</div>
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <label for="lbl-nro">Edad:</label>
                                                <input type="number" class="form-control" min="1" max="80" name="edad" id="edad" placeholder="Ing edad" required>
                                                <div class="valid-feedback">OK!</div>
                                                <div class="invalid-feedback">Campo requerido !!</div>
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <label for="lbl-nro">Domicilio:</label>
                                                <input type="text" class="form-control" name="domic" id="domic" placeholder="Ing domicilio" required>
                                                <div class="valid-feedback">OK!</div>
                                                <div class="invalid-feedback">Campo requerido !!</div>
                                            </div>

                                        </div>
                                        <button class="btn btn-primary" type="submit">Enviar</button>
                                    </form>
                                </div>

                            </div>
                            <!--fin clase card-->
                            <!-- Footer -->
                            <footer class="page-footer font-small bg-dark pt-2 text-warning">

                                <!-- Footer Elements -->
                                <div class="container">

                                    <!-- Call to action -->
                                    <ul class="list-unstyled list-inline text-center py-1">
                                        <li class="list-inline-item">
                                            <h5 class="mb-1">Rubilar Francisco</h5>
                                            <h5 class="mb-1">FAI-2426</h5>
                                            <h4>Tecnicatura Universitaria en Desarrollo Web</h4>
                                        </li>
                                        <!-- <li class="list-inline-item">
                                            <a href="#!" class="btn btn-outline-white btn-rounded">Sign up!</a>
                                        </li> -->
                                    </ul>
                                    <!-- Call to action -->

                                </div>
                                <!-- Footer Elements -->

                                <!-- Copyright -->
                                <div class="footer-copyright text-center py-1">© 2021 Copyright:
                                    <a href="#"> MDBootstrap.com</a>
                                </div>
                                <!-- Copyright -->

                            </footer>
                            <!-- Footer -->
                            <!-- <footer class="footer  py-1 bg-dark rounded-3 ">
                                <div class="container">

                                    <p>Blog built for <a href="https://getbootstrap.com/">Bootstrap</a> by <a href="https://twitter.com/mdo">Clau</a>.</p>
                                    <p><a href="#">Back to top</a></p>

                                </div>
                            </footer> -->

                        </div>

                    </div>



                </div>

            </div>

        </div>
        <!-- footer bajo el navbar lateral -->
</div>
<hr>

<script src="../js/popper/popper.min.js"></script>
</body>

</html>