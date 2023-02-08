<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Chicken World</title>

        <!-- Styles -->
        <link rel="stylesheet" href="http://localhost/chicken-world/resources/css/Styles.css">

        <!--Font Awesome-->
        <script src="https://kit.fontawesome.com/7483adbd94.js" crossorigin="anonymous"></script>

        <!--Bootstrap-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    </head>
    <body>
        <div id="header-top">
            <div class="center">
                <a class="fas fa-shopping-cart"></a>
                <a href="http://127.0.0.1:8000/login" class="fas fa-user"></a>
            </div>
        </div>
        <header id="header">
            <div class="center">
                <img src="http://localhost/chicken-world/resources/Img/Logo1.png" alt="logo">

                <nav id="nav">
                    <ul>
                        <li><a href="">Inicio</a></li>
                        <li><a href="#about">Nosotros</a></li>
                        <li><a href="#menu">Menu</a></li>
                        <li><a href="">Promos</a></li>
                        <li><a href="">Sucursales</a></li>
                        <li><a href="">Contacto</a></li>
                    </ul>
                </nav>
            </div>
            
            
        </header>



        

        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                     <img src="http://localhost/chicken-world/resources/Img/Banner.png" class="d-block w-100" alt="Banner1">
                </div>
                <div class="carousel-item">
                    <img src="http://localhost/chicken-world/resources/Img/Banner2.png" class="d-block w-100" alt="Banner2">
                </div>
                <div class="carousel-item">
                    <img src="http://localhost/chicken-world/resources/Img/Banner3.png" class="d-block w-100" alt="Banner3">
                </div>
                <div class="carousel-item">
                    <img src="http://localhost/chicken-world/resources/Img/Banner4.png" class="d-block w-100" alt="Banner4">
                </div>
                <div class="carousel-item">
                    <img src="http://localhost/chicken-world/resources/Img/Banner5.png" class="d-block w-100" alt="Banner5">
                </div>
            </div>
        </div>



       


        <section id="about">
            <div class="center">
                
                    <div class="about_div--img">
                        <img src="http://localhost/chicken-world/resources/Img/About.jpg" alt="About">
                        <img src="http://localhost/chicken-world/resources/Img/Logo1.png" alt="About Logo">
                    </div>

                    <div class="about_div--info">
                        <h2>Somos Chicken World</h2>
                        <h3>Una empresa familiar</h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                            Donec molestie eget tellus laoreet egestas. 
                            Aenean arcu nisl, euismod a elit a, pretium rutrum orci. 
                            Mauris maximus mauris nec malesuada congue. 
                            Sed interdum elit iaculis ligula molestie ornare. 
                            Nulla malesuada nibh ac risus feugiat, ut suscipit enim tempus. 
                            Etiam eget nulla tellus. malesuada nibh ac risus feugiat, ut suscipit enim tempus. Etiam eget nulla tellus.
                        </p>
                        <div>
                            <a href="#"><i class="fab fa-facebook-square"></i></a>
                            <a href="#"><i class="fab fa-linkedin"></i></a>
                            <a href="#"><i class="fab fa-instagram-square"></i></a>
                        </div>
                    </div>
               
            </div>
        </section>


        @include('includes.Menu');


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    </body>
</html>
