<?php
session_start();
if(isset($_SESSION['usuario'])){
    echo '
    <script>
    alert("Por favor debes iniciar sesion con tu cuenta");
    window.location ="view-user.php";
    </script>
    
    ';
}
?>

<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Gym Prototipo">
    <meta name="keywords" content="Gym, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gym | Prototipo</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald:300,400,500,600,700&display=swap" rel="stylesheet">

    <!-- responsive-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/flaticon.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/barfiller.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="css/estilos.css">
    <script src="https://kit.fontawesome.com/7ffa52be6e.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/7ffa52be6e.js" crossorigin="anonymous"></script>

</head>

<body>
    <section class="home">
        <div class="in-flex"></div>
        <div class="in-flex">
            <div>.</div>
            <div>.</div>
    </section>

    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Offcanvas Menu Section Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">
        <div class="canvas-close">
            <i class="fa fa-close"></i>
        </div>
        <div class="canvas-search search-switch">
            <i class="fa fa-search"></i>
        </div>
        <nav class="canvas-menu mobile-menu">
            <ul>
                <li><a href="./index.html">Inicio</a></li>
                <li><a href="./pricing.html">Planes</a></li>
                <li><a href="./services.html">Servicios</a></li>
                <li><a href="./contact.html">Contacto</a></li>

                <li><a href="#">mas</a>
                    <ul class="dropdown">
                        <li><a href="./about-us.html">Sobre nosotros</a></li>
                        <li><a href="./404.html">404</a></li>
                    </ul>
                </li>

            </ul>
            </li>
            <li><a href="./contact.html">Contacto</a></li>

            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
        <div class="canvas-social">
            <a href="login.html"><i class="fa-regular fa-user"></i></a>

        </div>
    </div>
    <!-- Offcanvas Menu Section End -->

    <!-- Header Section Begin -->
    <header class="header-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3">
                    <div class="logo">
                        <a href="./index.html">
                            <img src="img/logo.png" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="nav-menu">
                        <ul>
                            <li></li>
                            <li><a href="./index.html">Inicio</a></li>
                            <li><a href="./pricing.html">Planes</a></li>
                            <li><a href="./services.html">Servicios</a></li>
                            <li><a href="./contact.html">Contacto</a></li>

                            <li><a href="#">mas</a>
                                <ul class="dropdown">
                                    <li><a href="./about-us.html">Sobre nosotros</a></li>
                                    <li><a href="./404.html">404</a></li>
                                </ul>
                            </li>

                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3">
                    <div class="top-option">
                        <div class="to-search search-switch">
                            <i class="fa fa-search"></i>


                        </div>
                        <div class="to-social">

                            <a href="login.html"><i class="fa-regular fa-user"></i></a>



                        </div>
                    </div>
                </div>
            </div>
            <div class="canvas-open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
    <!-- Header End -->

    <!-- login y registro -->

    <main>


        <div class="contenedor__todo">
            <div class="caja__trasera">
                <div class="caja__trasera-login">
                    <h3>¿Ya tienes una cuenta?</h3>
                    <p>Inicia sesión para entrar en la página</p>
                    <button id="btn__iniciar-sesion">Iniciar Sesión</button>
                </div>
                <div class="caja__trasera-register">
                    <h3>¿Aún no tienes una cuenta?</h3>
                    <p>Regístrate para que puedas iniciar sesión</p>
                    <button id="btn__registrarse">Regístrarse</button>
                </div>
            </div>

            <!--Formulario de Login y registro-->
            <div class="contenedor__login-register">
                <!--Login-->
                <form action="" class="formulario__login">
                    <h2>Iniciar Sesión</h2>
                    <input type="text" placeholder="Correo Electronico">
                    <input type="password" placeholder="Contraseña">
                    <button>Entrar</button>
                </form>

                <!--Register-->
                <form action="" class="formulario__register">
                    <h2>Regístrarse</h2>
                    <div></div>
                    <input type="text" placeholder="Nombre">
                    <input type="text" placeholder="Rut">
                    <input type="text" placeholder="Apellido paterno">
                    <input type="text" placeholder="Apellido materno">
                    <input type="text" placeholder="Edad">
                    <input type="text" placeholder="Direccion">
                    <input type="text" placeholder="Genero">
                    <input type="text" placeholder="Correo">
                    <input type="password" placeholder="Contraseña">

                    <button>Regístrarse</button>
                </form>
            </div>
        </div>

    </main>




    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/masonry.pkgd.min.js"></script>
    <script src="js/jquery.barfiller.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
    <script src="assets/js/script.js"></script>



</body>

</html>