<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <!--Link de estilos-->
    <link rel="stylesheet" href="../css/style.css">

    <!--Link de boostrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <!--Link de Font Awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>

<body >
    <div class="container-fluid">
        <div class="row color_row " >
            <div class="col-12 fondo_portada">
                <div class="row ">
                    <div class="col-6 estilo_header ">
                        <div class="espacio_logo">
                            <img class="icono" src="../img/icono.png">
                        </div>
                    </div>
                    <div class="col-6 estilo_header ">
                        <nav class="navbar navbar-expand-lg navbar-light ">
                            <a class="navbar-brand casillas color_veterinario" href="#">
                                <!-- i -> son los iconos  -->
                                <i class="fa-solid fa-user-doctor"></i> Veterinarios
                            </a>

                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav mr-auto">
                                    <li class="nav-item active">
                                        <!-- i -> son los iconos -->
                                        <a class="nav-link casillas color_propietario" href="#">
                                            <i class="fa-solid fa-user-tie"></i>Propietarios<span class="sr-only"></span>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" href="#"></a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle casillas color_mascota" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fa-solid fa-paw"></i>Mascotas
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="#">Perros</a>
                                            <a class="dropdown-item" href="#">Gatos</a>
                                            <a class="dropdown-item" href="#">Conejos</a>
                                        </div>
                                    </li>
                                    <li class="nav-item active">
                                        <!-- i -> son los iconos -->
                                        <a class="nav-link casillas color_raza" href="#">
                                            <i class="fa-solid fa-user-tie"></i>Razas<span class="sr-only"></span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bloque de info -->
        <div class="row  color_fondo">
            <div class="col-12 color_casilla2">
                <div class="espacio_contenedor1 estilo_sombreado color_casilla1">
                    <div class="margenes" >
                        <div class="row ">
                            <div class="col-6">
                                </br>
                                <img class="casilla_animales" src="../img/perros_casilla.jpg" alt="Casilla de perros">
                            </div>

                            <div class="col-6">
                                <div class="row ">
                                    <div class="col-12">
                                        <h1 class="estilo_letra">El cuidado y bienestar que tu mascota merece</h1>
                                        <br>
                                        <p>En nuestra clínica veterinaria cuidamos de perros, gatos y conejos con atención cercana, profesional y personalizada. Nuestro objetivo es acompañarte en cada etapa de la vida de tu mascota, ofreciendo orientación, cuidados preventivos, revisiones y atención pensada para su salud y felicidad.
                                        <br><br>
                                        Registra a tu mascota con nosotros y mantente informado sobre vacunas, revisiones, recomendaciones y servicios veterinarios adaptados a sus necesidades.
                                        </p>
                                    </div>

                                    <div class="col-6">
                                        <button class="estilo_botones">Registrar perro</button>
                                    </div>

                                    <div class="col-6">
                                        <button class="estilo_botones">Registrar gato</button>
                                    </div>

                                    <div class="col-12">
                                        <br>
                                        <button class="estilo_botones">Registrar conejo</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>    
                </div>

           </div>

            <!--Bloque de perros-->
            <div class="col-6 color_fondo1">
                <div class="espacio_contenedor">
                    <div class="margenes">
                        <div class="row">
                            <div class="col-4">
                                <div class="icono_animal">
                                    <img class="iconos_animales" src="../img/icono_perro.png" alt="Icono de perro">
                                </div>
                            </div>
                            
                            <div class="col-8 seccion_animal">
                                <h2 class="estilo_letra">Perro</h2>
                            </div>

                            <div class="col-12">
                                <br>
                                <p><strong>Todo sobre perros</strong></p>
                            </div>

                            <div class="col-12">
                                <div class="row">
                                    <!--BLOQUE 1 DE LA INFO DEL PERRO-->
                                    <div class="col-11  bloque_animales">
                                        Información a perros
                                    </div>

                                    <div class="col-1 bloque_animales">
                                        <i class="fa-solid fa-arrow-right"></i>
                                    </div>


                                    <!--BLOQUE 2 DE AÑADIR PERROS-->
                                    <div class="col-11 bloque_animales">
                                        Añadir perros
                                    </div>

                                    <div class="col-1 bloque_animales">
                                        <i class="fa-solid fa-arrow-right"></i>
                                    </div>

                                    <!--BLOQUE 3 DE LAS RAZAS DE PERROS-->
                                    <div class="col-11 bloque_animales">
                                        Razas de perros
                                    </div>

                                    <div class="col-1 bloque_animales">
                                        <i class="fa-solid fa-arrow-right"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--Bloque de gatos-->
            <div class="col-6 color_fondo1">
                <div class="espacio_contenedor">
                    <div class="margenes">
                        <div class="row">
                            <div class="col-4">
                                <div class="icono_animal">
                                    <img class="iconos_animales" src="../img/icono_gato.png" alt="Icono de perro">
                                </div>
                            </div>
                            
                            <div class="col-8 seccion_animal">
                                <h2 class="estilo_letra">Gato</h2>
                            </div>

                            <div class="col-12">
                                <br>
                                <p><strong>Todo sobre gatos</strong></p>
                            </div>

                            <div class="col-12">
                                <div class="row">
                                    <!--BLOQUE 1 DE LA INFO DEL PERRO-->
                                    <div class="col-11  bloque_animales">
                                        Información a gatos
                                    </div>

                                    <div class="col-1 bloque_animales">
                                        <i class="fa-solid fa-arrow-right"></i>
                                    </div>


                                    <!--BLOQUE 2 DE AÑADIR PERROS-->
                                    <div class="col-11 bloque_animales">
                                        Añadir gatos
                                    </div>

                                    <div class="col-1 bloque_animales">
                                        <i class="fa-solid fa-arrow-right"></i>
                                    </div>

                                    <!--BLOQUE 3 DE LAS RAZAS DE PERROS-->
                                    <div class="col-11 bloque_animales">
                                        Razas de gatos
                                    </div>

                                    <div class="col-1 bloque_animales">
                                        <i class="fa-solid fa-arrow-right"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!--Bloque de conejos-->
            <div class="col-12">
                <div class="espacio_contenedor">
                    <div class="margenes">
                        <div class="row">
                            <div class="col-6">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="icono_animal">
                                            <img class="iconos_animales" src="../img/icono_conejo.png" alt="Icono de conejo">
                                        </div>
                                    </div>

                                    <div class="col-6">
                                        <div class=" seccion_animal">
                                            <h2 class="estilo_letra">Conejos</h2>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <br>
                                    <p><strong>Todo sobre conejos</strong></p>
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="row">
                                    <!--BLOQUE 1 DE LA INFO DEL PERRO-->
                                    <div class="col-11  bloque_animales">
                                        Información de conejos
                                    </div>

                                    <div class="col-1 bloque_animales">
                                        <i class="fa-solid fa-arrow-right"></i>
                                    </div>


                                    <!--BLOQUE 2 DE AÑADIR PERROS-->
                                    <div class="col-11 bloque_animales">
                                        Añadir conejos
                                    </div>

                                    <div class="col-1 bloque_animales">
                                        <i class="fa-solid fa-arrow-right"></i>
                                    </div>

                                    <!--BLOQUE 3 DE LAS RAZAS DE PERROS-->
                                    <div class="col-11 bloque_animales">
                                        Razas de conejos
                                    </div>

                                    <div class="col-1 bloque_animales">
                                        <i class="fa-solid fa-arrow-right"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
           <!--Bloque de contenedores --> 
           <div class="col-12 color_casilla">
                <div class="espacio_contenedor1">
                    <div class="margenes" >
                        <div class="row ">
                            <div class="col-6">
                                <h1 class="estilo_letra">¿Cómo encontrarnos?</h1>
                                <br>
                                <p>
                                <i class="fa-solid fa-location-dot"></i><strong> Dirección</strong><br>
                                Calle Recogidas 29, Local<br>
                                18005 Granada
                                </p>

                                <p>
                                <i class="fa-solid fa-clock"></i><strong> Horario</strong><br>
                                Lunes a Viernes: 9:00 – 21:00<br>
                                Sábados: 10:00 – 14:00<br>
                                Domingos: Cerrado
                                </p>

                                <p>
                                <i class="fa-solid fa-phone"></i><strong> Teléfono</strong><br>
                                958 000 000
                                </p>

                                <p>
                                <i class="fa-solid fa-envelope"></i><strong> Email</strong><br>
                                info@faunagranada.com
                                </p>

                                <p>
                                <i class="fa-solid fa-square-parking"></i><strong> Aparcamiento</strong><br>
                                Parking disponible en los alrededores
                                </p>

                                <a href="https://maps.google.com/?q=Clínica+Veterinaria+Fauna+Granada" 
                                target="_blank" 
                                class="btn-mapa">
                                <i class="fa-solid fa-diamond-turn-right"></i> Cómo llegar
                                </a>
                            </div>

                            <div class="col-6">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m0!3m2!1ses!2ses!4v1478793909257!6m8!1m7!1swDVHoLNpL84AAAAGOt-VvA!2m2!1d37.10739041254686!2d-3.636658775302976!3f201.3896839152177!4f-0.4046041427478997!5f0.7820865974627469" width="100%" height="500" frameborder="0" style="border:0" allowfullscreen=""> </iframe>
                            </div>
                        </div>
                    </div>    
                </div>
           </div>

           <!--Bloque de VETERINARIOS-->
            <div class="col-6 color_fondo1">
                <div class="espacio_contenedor">
                    <div class="margenes">
                        <div class="row">
                            <div class="col-4">
                                <div class="iconos">
                                    <br>
                                    <i class="fa-solid fa-user-doctor fa-4x"></i>
                                </div>
                            </div>
                            
                            <div class="col-8 seccion_animal">
                                <h2 class="estilo_letra">Veterinarios</h2>
                            </div>

                            <div class="col-12">
                                <br>
                                <h4>+300 veterinarios colaboradores</h4>
                                <!--Aqui iria el count de los pacientes-->
                                <p><strong>Una red profesional en constante formación y referencia clínica especializada.</strong></p>
                            </div>

                            <div class="col-12">
                                <div class="row">
                                    <!--BLOQUE 1 DE LOS PACIENTES-->
                                    <div class="col-11  bloque_animales">
                                        Acceder al área veterinaria
                                    </div>

                                    <div class="col-1 bloque_animales">
                                        <i class="fa-solid fa-arrow-right"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--Bloque de CLIENTES-->
            <div class="col-6 color_fondo1">
                <div class="espacio_contenedor">
                    <div class="margenes">
                        <div class="row">
                            <div class="col-4">
                                <div class="iconos">
                                    <br>
                                    <i class="fa-solid fa-users fa-4x"></i>
                                </div>
                            </div>
                            
                            <div class="col-8 seccion_animal">
                                <h2 class="estilo_letra">Clientes</h2>
                            </div>

                            <div class="col-12">
                                <br>
                                <h4>+4.500 pacientes atendidos</h4>
                                <!--Aqui iria el count de los pacientes-->
                                <p><strong>
                                Cuidamos cada mascota con atención veterinaria integral, tecnología avanzada y seguimiento personalizado.</strong></p>
                            </div>

                            <div class="col-12">
                                <div class="row">
                                    <!--BLOQUE 1 DE LOS PACIENTES-->
                                    <div class="col-11  bloque_animales">
                                        Pacientes atendidos anualmente
                                    </div>

                                    <div class="col-1 bloque_animales">
                                        <i class="fa-solid fa-arrow-right"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <!--Bloque de ANIMALES COMPLETOS-->
            <div class="col-12 color_fondo1">
                <div class="espacio_contenedor">
                    <div class="margenes">
                        <div class="row">
                            <div class="col-2">
                                <div class="iconos">
                                    <br>
                                    <i class="fa-solid fa-paw fa-4x"></i>
                                </div>
                            </div>
                            
                            <div class="col-10 seccion_animal">
                                <h2 class="estilo_letra">Animales</h2>
                            </div>

                            <div class="col-12">
                                <!--Aqui iria el count de los ANIMALES-->
                                <h4>+1.200 animales registrados</h4>
                                <p><strong>Un registro actualizado de todas las especies monitorizadas dentro del sistema.</strong></p>
                            </div>

                            <div class="col-12">
                                <div class="row">
                                    <!--BLOQUE 1 DE LOS PACIENTES-->
                                    <div class="col-11  bloque_animales">
                                        Área de animales
                                    </div>

                                    <div class="col-1 bloque_animales">
                                        <i class="fa-solid fa-arrow-right"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <footer class="estilo_footer">
        <h1>Veterinaria</h1>
    </footer>
</body>
</html>