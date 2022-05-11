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
    <div class="container mx-auto">
        <div class="h-screen bg-white w-full">
            <div class="flex justify-center">
                <div class="mt-48">
                    <div class=" h-72 w- bg-gray-100 shadow-2xl shadow-gray-300 border-2 border-black rounded rounded-xl">
                        <div class="p-4">
    <h1 class="text-center text-xl ">Login</h1>

    <form action="validar.php" method="post">
        <label for="">Correo :</label>
        <br>
        <input class="p-1 " name="email" type="email">
        <br>
        <br>
        <label for="">Contraseña :</label>
        <br>
        <input class="p-1 " name="password" type="text">
        <br>
        <br>
        <button class="bg-blue-400 px-2 py-1 text-white hover:bg-blue-300" type="submit">
            Enviar
        </button>
    </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>



    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>