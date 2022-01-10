<!DOCTYPE html>

    <head>
        <link rel="stylesheet" href="{{ asset('/css/customBase.css') }}" type="text/css">
        <!--- boostrap--->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
        <!--- boostrap--->
        <title>Portfolio</title>
        <!-- Font Awesome Iconos-->
        <script src="https://kit.fontawesome.com/393bd27812.js" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.min.js" crossorigin="anonymous"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- Scripts -->
        <script src="{{ asset('js/base.js')}}"></script>
    </head>
    <body>
        <div class="container-fluid">
            
            <section class="row home" id="section_home">
                <div class="parallax">
                    <header class="headerFixed">
                        <nav>
                            <a href="#section_home">Home</a>
                            <a href="#section_conocimientos">Conocimientos</a>
                            <a href="#section_contacto">Contacto</a>
                        </nav>
                    </header>
                <br><br>
                <div class="col m-12 content">
                    <h2>Bienvenidos!</h2>
                    <p>Esta es mi pagina personal</p>
                </div>
                </div>
            </section>
            

            <section class="row conocimientos" id="section_conocimientos">
                <div class="col m-12 wrapper">
                    <div class="col m-7 static-text">Estos son mis Conocimientos</div>
                        <ul class="col m-3 dynamic-text">
                            <li><span> Python</span></li>
                            <li><span> Laravel(php)</span></li>
                            <li><span> Javascript</span></li>
                            <li><span> Ajax</span></li>
                        </ul>
                </div>
            </section>
            <section class="row contacto" id="section_contacto">
                    <br><br>
                <div class="row container content">
                        <div class="row contact-form">
                            <h2 class="tittle"><span>Contactate conmigo</span></h2> 
                            <form id="formContacto">
                                <div class="col md-5">
                                <p>
                                    <label>Nombre y Apellido </label>
                                    <input type="text" name="nombre-completo">
                                    <span class="error-text nombre-completo-error"></span> 
                                </p>
                                </div>
                                <div class="col md-5">
                                <p>
                                    <label>Email</label>
                                    <input type="email" name="email">
                                    <span class="error-text email-error"></span>
                                </p>
                                </div>
                                <div class="col md-5">
                                <p>
                                    <label>Asunto</label>
                                    <input type="text" name="asunto">
                                </p>
                                </div>
                                <div class="col md-5">
                                <p>
                                    <label>Telefono</label>
                                    <input type="number" name="telefono">
                                </p>
                                </div>
                                <div class="col md-8">
                                <p class="block">
                                    <label>Contenido del Email</label>
                                    <textarea rows="4" cols="40" name="contenido-email">
                                    </textarea>
                                    <span class="error-text contenido-email-error"></span>
                                </p>
                                </div>
                                <div class="col md-2">
                                <p class="block">
                                    <button type="submit" id="button-form" class="boton-enviar">
                                        Enviar
                                    </button>
                                </div>
                                </p>
                            </form>
                        </div>
                        <br>
                        <div class="row contact-info">
                            @yield("contenido")
                            <h3>Mas información</h3>
                            <ul>
                                <li><i class="far fa-envelope"></i> facundoic94@gmail.com</li>
                                <li><i class="fab fa-github"></i> https://github.com/facundoic </li>
                            </ul>
                            <p>Soy un programador autodidacta dispuesto a aprender y a mejorar mi desarrollo profesional tanto a nivel técnico como en un equipo de trabajo.</p>
                        </div>
                </div>
            </section>

        </div>

    </body>
</html>

