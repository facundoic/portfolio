<!DOCTYPE html>

    <head>
        <link rel="stylesheet" href="{{ asset('/css/customBase.css') }}" type="text/css"> 
        <title>Portfolio</title>
        <!-- Font Awesome Iconos-->
        <script src="https://kit.fontawesome.com/393bd27812.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="container">
            
            <section class="home" id="section_home">
                <div class="parallax">
                    <header class="headerFixed">
                        <nav>
                            <a href="#section_home">Home</a>
                            <a href="#section_proyectos">Proyectos</a>
                            <a href="#section_conocimientos"">Conocimientos</a>
                            <a href="#section_contacto">Contacto</a>
                        </nav>
                    </header>
                <br><br>
                <div class="content">
                    <h2>This is home</h2>
                </div>
                </div>
            </section>
            

            <section class="proyectos" id="section_proyectos">
                <div class="wrapper">
                    <div class="static-text">Estos son mis proyectos</div>
                        <ul class="dynamic-text">
                            <li><span> Proyecto 1</span></li>
                            <li><span> Proyecto 2</span></li>
                            <li><span> Proyecto 3</span></li>
                            <li><span> Proyecto 4</span></li>
                        </ul>
                </div>
            </section>

            <section class="conocimientos" id="section_conocimientos">
                <h2>Estos son mis conocimientos.</h2>
            </section>
            
            <section class="contacto" id="section_contacto">
                    <br><br>
                <div class="content">
                    <h2 class="tittle"><span>Contacto</span></h2> 

                    <div class=grid>
                        <div class="contact-form">
                            <h3>Contactate conmigo </h3>
                            <form>
                                <p>
                                    <label>Nombre y Apellido </label>
                                    <input type="text" name="nombre-completo">
                                </p>
                                <p>
                                    <label>Email</label>
                                    <input type="email" name="email">
                                </p>
                                <p>
                                    <label>Asunto</label>
                                    <input type="asunto" name="asunto">
                                </p>
                                <p>
                                    <label>Telefono</label>
                                    <input type="number" name="telefono">
                                </p>
                                <p class="block">
                                    <label>Contenido del Email</label>
                                    <textarea rows="6" name="contenido-email">
                                    </textarea>
                                </p>
                                <p class="block">
                                    <button type="submit" class="boton-enviar">
                                        Enviar
                                    </button>
                                </p>
                            </form>
                        </div>
                        <br>
                        <div class="contact-info">
                            <h3>Mas información</h3>
                            <ul class="ul-contact">
                                <li><i class="far fa-envelope"></i> facundoic94@gmail.com</li>
                                <li><i class="fab fa-github"></i> https://github.com/facundoic </li>
                            </ul>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Laudantium ipsum officiis non commodi, eligendi aspernatur voluptas! Aspernatur nesciunt iusto enim.</p>
                        </div>

                    </div>
                </div>
            </section>

        </div>

    </body>
</html>
