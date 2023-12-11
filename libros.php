<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Libros</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./css/libros.css">
</head>




<?php
$inc = include("con_db.php");
if($inc){
$consulta = "SELECT * FROM libros WHERE id = 5";
$resultado = mysqli_query($conex, $consulta);
if($resultado){
    while($row = $resultado->fetch_array()){
        $id = $row['id'];
        $titulo = $row['titulo'];
        $tipo = $row['tipo'];
        $ISBN = $row['ISBN'];
        $autor = $row ['autor'];
        $imagen = $row['imagen'];
        $precio = $row['precio'];
        $sinopsis = $row['sinopsis'];
        $img = '<img src="data:image/jpeg;base64,' . $imagen . '" height="650" width="450">';
        }
    }
}

?>

<?php 
    include("Actualizar.php");
?>

<body>
    <div class="head">
        <nav class="navegacion">
            <a href="#">Blog</a>
            <a href="#">Estado de tu pedido</a>
            <a href="#">Ayuda</a>
            <a href="#">Venta a empresas e instituciones</a>
        </nav>
    </div>

    <header class="content_header">
        <div class="logo">
            <a href="#">
                <img alt="Casa del Libro" width="138" height="28" src="./imgs/LogoCasaDelLibro.png" class="logo"
                    data-v-ecd2bb84="">
            </a>
        </div>
        <div class="buscador_texto">
            <input type="text" id="buscador" name="" placeholder="Busca por autor, título, género, ISBN">
        </div>

        <div class="buscador_lupa">
            <button id="lupa">
                <i class="fa-solid fa-magnifying-glass" style="color: #adadad;"></i>
            </button>
        </div>
        </div>
        <div class="boton_libreria">
            <button id="libreria">
                <i class="fa-solid fa-location-dot" style="color: #004D43"></i>
                Librerias
            </button>
        </div>
        <div class="boton_cuenta">
            <button id="cuenta">
                <i class="fa-regular fa-user" style="color: #004D43"></i>
                Mi cuenta
            </button>
        </div>
        <div class="boton_carrito">
            <button id="carrito">
                <i class="fa-solid fa-bag-shopping" style="color: #004D43;"></i>
            </button>
        </div>

        <div class="boton_hamburguesa">
            <button id="hamburguesa">
                <i class="fa-solid fa-bars" style="color: #004D43;"></i>
            </button>
        </div>
    </header>

    <div class="menu_debajo">
        <nav class="navegacion_debajo">
            <a href="#">Imprescindibles</a>
            <a href="#">Ficción</a>
            <a href="#">No Ficción</a>
            <a href="#">Infantil</a>
            <a href="#">Juvenil</a>
            <a href="#">Comic y Manga</a>
            <a href="#">Black Friday</a>
            <a href="#">Papelería</a>
            <a href="#">eBooks</a>
            <a href="#">Ofertas</a>
        </nav>
    </div>

    <div class="divisor"></div>

    <section class="contenido">

        <div class="box-container">
            <div class="box">

                <img id="imagen" src="data:image/png;base64,<?php echo base64_encode($imagen); ?>" alt="">


                <button id="primeras_paginas">
                    <div class="paginas">
                        <i class="fa-brands fa-readme" style="color: #004D43"></i>
                        LEER PRIMERAS PÁGINAS
                    </div>
                </button>
            </div>

            <div class="divisor-vertical"></div>


            <div class="box">

                <h1><?php echo $titulo?></h1>
                <h2><?php echo $tipo ?></h2>
                <h3><?php echo $autor ?></h3>
                <h4>EDICIONES B- <?php echo $ISBN?></h4>

                <div class="estrellasOpinion">
                    <div class="estrellas">
                        <input type="radio" id="Estrella5" name="valoracion" value="5">
                        <label for="star5">&#9733;</label>
                        <input type="radio" id="Estrella4" name="valoracion" value="4">
                        <label for="star4">&#9733;</label>
                        <input type="radio" id="Estrella3" name="valoracion" value="3">
                        <label for="star3">&#9733;</label>
                        <input type="radio" id="Estrella2" name="valoracion" value="2">
                        <label for="star2">&#9733;</label>
                        <input type="radio" id="Estrella1" name="valoracion" value="1">
                        <label for="star1">&#9733;</label>
                    </div>
                    <div class="opinion">
                        <p id="opinionP"> (5) Escribe tu opinión</p>
                    </div>
                </div>

                <div class="botonesVerdes">
                    <button id="literatura">
                        Literatura
                    </button>
                    <button id="narrativa">
                        Narrativa
                    </button>
                    <button id="fantastica">
                        Fantastica
                    </button>
                </div>


                <div class="sinopsis">
                    <?php echo $sinopsis?>
                    </h5>
                </div>
            </div>

            <div class="divisor-vertical"></div>

            <div class="box">
                <div class="botonRojo">
                    <botton id="rojo">
                        -5% de dto. exclusivo web
                    </botton>
                </div>
                <div class="precio">
                    <?php echo $precio?>
                </div>
                <div class="cestaRosa">
                    <botton id="cesta">
                        <i class="fa-solid fa-basket-shopping" style="color: #ffffff;"></i>
                        Añadir a la cesta
                    </botton>
                </div>
                <div class="camion">
                    <div class="camionTexto">
                        <i class="fa-solid fa-truck" style="color: #004D43;"></i>
                        <b>Recibelo el próximo día</b>, Lunes 6 de noviembre
                        <i class="fa-solid fa-circle-info" style="color: #004D43; "></i>
                    </div>
                </div>

                <div class="formularioDimension">
                    <div class="formulario">
                        <form method="post" id="formulario" onsubmit="return validarFormulario()">
                            <p><label>ID: <input type="text" name="id" maxlength="60" placeholder="ID"></label></p>
                            <p><label>titulo: <input type="text" name="titulo" maxlength="60"
                                        placeholder="Nombre"></label></p>
                            <p><label>tipo: <input type="text" name="tipo" maxlength="60"
                                        placeholder="Editorial"></label></p>
                            <p><label>ISBN: <input type="text" name="isbn" maxlength="60" placeholder="isbn"></label>
                            </p>
                            <p><label>Autor: <input type="text" name="autor" maxlength="60" placeholder="Autor"></label>
                            </p>
                            <p><label>Precio: <input type="text" name="`precio`:" maxlength="50"
                                        placeholder="Contraseña"></label></p>
                            <p><label>Idioma: <input type="text" name="idioma" maxlength="60"
                                        placeholder="Idioma"></label></p>
                            <p><input type="submit" value="Actualizar" name="actualizar"></p>
                            <p><input type="reset" value="Borrar"></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="/js/libros.js"></script>
</body>

</html>