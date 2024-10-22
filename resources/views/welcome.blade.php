<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>NIK | STUDIO</title>
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> 
        <link href="css/style20.css" rel="stylesheet">  
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet"> 
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
        
    </head>
    <body>
        <!-- Navbar -->      
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand logo" href="#">NIK<span>|</span>STUDIO</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#section-title">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#servicios">Servicios</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contacto">Contacto</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">Login</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <section class="hero text-center">
            <div class="container">
                <h1 class="display-4">Soluciones Tecnológicas</h1>
            </div>
        </section>
        <section class="py-5" id="servicios">
            <div class="container">
                <h2 class="section-title text-center">Nuestros Servicios</h2>
                <div class="row mt-4">
                    <div class="col-md-4">
                        <div class="card p-4 text-center">
                            <h5>Desarrollos a Medida</h5>
                            <p>Brindamos soluciones de Software a medida de las necesidades de su empresa. Evaluamos cuál es la solución tecnológica más adecuada para la resolución del problema, diseñando e implementando la misma como producto de un análisis previo tendiente a arribar a la mejor solución.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card p-4 text-center">
                            <h5>Consultoría Tecnológica</h5>
                            <p>Actuamos como socios tecnológicos de su empresa, brindando asesoramiento y apoyo en las decisiones estratégicas relacionadas con tecnología y procesos.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card p-4 text-center">
                            <h5>Formacion</h5>
                            <p>Somos un equipo de personas que buscamos la mejor experiencia de aprendizaje en tecnología. Te acompañamos en tu formación de manera personalizada, con grupos reducidos para ayudarte a desarrollar todo tu potencial.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    
        <section class="py-5" id="tecnologias">       
            <section class="technologies">
                <h2 class="section-title text-center">Tecnologías</h2>
                <br>
                <div class="icons-wrapper">
                    <div class="icons">
                        <!-- Íconos duplicados para hacer un loop continuo -->
                        <i class="fab fa-java"></i>
                        <i class="fab fa-php"></i>
                        <i class="fab fa-python"></i>
                        <i class="fab fa-js"></i>
                        <i class="fab fa-html5"></i>
                        <i class="fab fa-css3-alt"></i>
                        <i class="fab fa-node-js"></i>
                        <i class="fab fa-golang"></i>
                        <i class="fab fa-laravel"></i>
                        <i class="fab fa-react"></i>
                        <i class="fab fa-vuejs"></i>
                        <i class="fab fa-angular"></i>
                        <i class="fab fa-bootstrap"></i>
                        <i class="fab fa-symfony"></i>
                        <i class="fab fa-sass"></i>
                        <i class="fab fa-docker"></i>
                        <!-- Repetición para el loop continuo -->
                        <i class="fab fa-java"></i>
                        <i class="fab fa-php"></i>
                        <i class="fab fa-python"></i>
                        <i class="fab fa-js"></i>
                        <i class="fab fa-html5"></i>
                        <i class="fab fa-css3-alt"></i>
                        <i class="fab fa-node-js"></i>
                        <i class="fab fa-golang"></i>
                        <i class="fab fa-laravel"></i>
                        <i class="fab fa-react"></i>
                        <i class="fab fa-vuejs"></i>
                        <i class="fab fa-angular"></i>
                        <i class="fab fa-bootstrap"></i>
                        <i class="fab fa-symfony"></i>
                        <i class="fab fa-sass"></i>
                        <i class="fab fa-docker"></i>
                    </div>
                </div>
            </section>
        </section>   
    
    
        <section class="py-5" id="contacto">
            <div class="container contacto" id="contacto">
                <h2 class="section-title text-center" style="color: white;">Contactanos</h2>
                <div id="formResponsive"></div>                             
                    <form id="contact" method="post"  action="enviar_correo.php">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre">
                      </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="mail@dominio.com">
                      </div>
                      <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Tu consulta</label>
                        <textarea class="form-control" id="consulta" name="mensaje" rows="3"></textarea>
                      </div>                     
                      <button name="submit" class="btn btn-primary color-boton" type="submit" id="contact-submit" data-submit="...Enviar">Enviar</button>
                    </form>
                  </div>
            </div>    
        </section> 
        <footer class="py-4" id="footer">
            <div class="container text-center">
                <div class="row">
                    <div class="col-md-4">
                        <h5>Sobre Nosotros</h5>
                        <p>Nik-Studio es una empresa dedicada al desarrollo de software y educación en programación. Ofrecemos soluciones tecnológicas adaptadas a las necesidades de nuestros clientes.</p>
                    </div>
                    <div class="col-md-4">
                        <h5>Enlaces Rápidos</h5>
                        <ul class="list-unstyled">
                            <li><a href="#servicios" class="text-white">Servicios</a></li>
                            <li><a href="#tecnologias" class="text-white">Tecnologías</a></li>
                            <li><a href="#contacto" class="text-white">Contacto</a></li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <h5>Redes Sociales</h5>
                        <div class="social-icons">
                            <a href="https://www.facebook.com/" target="_blank" class="text-white mx-2">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="https://www.twitter.com/" target="_blank" class="text-white mx-2">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="https://www.instagram.com/" target="_blank" class="text-white mx-2">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="https://www.linkedin.com/" target="_blank" class="text-white mx-2">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                            <a href="https://www.github.com/" target="_blank" class="text-white mx-2">
                                <i class="fab fa-github"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <hr class="my-4">
                <p class="text-white">© 2024 Nik-Studio. Todos los derechos reservados.</p>
                Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
            </div>
        </footer>    
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>

