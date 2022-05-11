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
    $category_id = $_GET["category_id"];
    $xc = mysqli_connect("localhost", 'root', '', 'elcurioso', '3308');
    $sql = "select * from category LIMIT 8 ";
    $res = mysqli_query($xc, $sql);
    $sql2 = "select * from category where id = $category_id";
    $res2 = mysqli_query($xc, $sql2);
    $fila = $res2->fetch_row();
    $nameSeccion = $fila[1];
    ?>
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
    <div class="content3 my-6 text-center">
        <h1 class="text-3xl"><?php echo $nameSeccion ?></h1>
    </div>

 
    <section class="post-list">
        <div class="content">

            <?php

            $sql = "select * from noticias where category_id = $category_id";
            $res = mysqli_query($xc, $sql);

            while ($filas = mysqli_fetch_array($res)) {
                $id = $filas['id'];
                $titulo = $filas['titulo'];
                $contenido = $filas['contenido'];
                $autor = $filas['autor'];
                $fecha = $filas['fecha'];
                $url = $filas['url_image'];
                /* extraer datos de CATEGORY  */
                $category_id = $filas['category_id'];
                $sql2 = "select * from category where id=$category_id";
                $res = mysqli_query($xc, $sql2);

                $fila = $res->fetch_row();/* extraemos los datos de una FILA */

                $nombre = $fila[1];/* cada campo es una posicion de los CAMPOS */

            ?>
                <article class=" hover:-translate-y-0.5 duration-150 hover:shadow-md hover:shadow-gray-500">
                    <!-- lg:col-span-1 md:col-span-1 col-span-1 -->
                    <div class=" bg-gray-400 border border-gray-300 p-3 h-full ">
                        <figure>
                            <img class="h-48 w-full object-cover object-center" src="<?php echo $url ?>" alt="">
                        </figure>
                        <div class=" font-bold mt-4">
                            <a href="" class="border-t border-b border-gray-500 p-1 hover:underline "><?php echo $nombre ?></a>
                            <a href="contenido.php?noticia_id='<?php echo $id ?>'" class="block font-serif pt-2 text-3xl h-24 overflow-hidden hover:underline "><?php echo $titulo; ?></a>
                            <a href="" class="text-sm hover:underline ">Cesar Pacho</a>
                        </div>
                    </div>
                </article>





            <?php }

            ?>

        </div>
    </section>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>