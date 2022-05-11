<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>NEWS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="CSS/index.css">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<!--  Cambio del color de fondo-->

<body class="bg-gray-300">
    <!-- links superior -->
    <?php

    $xc = mysqli_connect("localhost", 'root', '', 'elcurioso', '3308');
    $sql = "select * from category LIMIT 8 ";
    $res = mysqli_query($xc, $sql);
    ?>
    <!-- links superior -->
    <div>
        <ul class="menu">
            <?php
            while ($filas = mysqli_fetch_array($res)) {

            ?>

                <li><a href="seccion.php?category_id=<?php echo $filas['id'] ?>"><?php echo $filas['name'] ?></a></li>

            <?php }

            ?>

        </ul>
    </div>
    <!-- titulo -->
    <!-- TAILWIND -->
    <!-- Dudas , consultar en la documentacion de tailwind -->
    <!-- fondo negro , diplay flex , centramos en el eje X con justify-center , margin en el eje de y de 4 -->
    <div class="bg-black flex justify-center my-4">
        <!-- pading en el eje Y de 3 -->
        <div class="py-3">
            <!-- font-serif ->tipo de letra , text-6xl->tamaño de letra , border-b-4 , border hacia abajo , grosor de borde ,  -->
            <h1 class="font-serif text-6xl  border-b-4 border-white">
                <a href="principal.php"><span class="text-red-500">El cu</span><span class="text-white">rioso</span></a>
            </h1>
        </div>

    </div>
    <?php
    $noticia_id = $_GET['noticia_id'];/* recuperamos el valor pasado en INDEX.PHP */
    $xc = mysqli_connect("localhost", 'root', '', 'elcurioso', '3308');
    $sql = "select * from noticias where id = $noticia_id";
    $res = mysqli_query($xc, $sql);


    $fila = $res->fetch_row();/* extraemos los datos de una FILA */
    $titulo = $fila[1];
    $contenido = $fila[2];
    $autor = $fila[3];
    $fecha = $fila[4];
    $url = $fila[5];

    ?>
    <div class="content3 my-6 text-center">
        <h1 class="text-3xl"><?php echo $titulo; ?></h1>
    </div>
    <div class="content2 ">
        <div>
            <figure>
                <img src="<?php echo $url ?>" alt="">
            </figure>
        </div>
        <div>
            <p class="font-semibold">
                <?php echo $contenido ?>
            </p>
        </div>
    </div>

    <?php

    ?>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>