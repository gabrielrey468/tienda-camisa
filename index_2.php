<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Tienda de Camisetas</title>
</head>

<body>
    <div id="container">
        <!-- CABECERA -->
        <header id="header">
            <div id="logo">
                <img src="./Camiseta2.png" alt="Camiesta2">
                <a href="./index.php">Tienda de Camisetas</a>

            </div>
        </header>
        <!-- MENU -->
        <nav id="menu">
            <ul>
                <li>
                    <a href="#">Inicio</a>
                </li>

                <li>
                    <a href="#">Categoria 1</a>
                </li>

                <li>
                    <a href="#">Categoria 2</a>
                </li>

                <li>
                    <a href="#">Categoria 3</a>
                </li>

                <li>
                    <a href="#">Categoria 4</a>
                </li>

                <li>
                    <a href="#">Categoria 5</a>
                </li>
            </ul>
        </nav>

        <div id="content">

            <!-- BARRA LATERAL -->

            <aside id="lateral">

                <div id="login" class="block_aside">
                    <h3>Entrar a la wed</h3>

                    <form action="#" method="POST">
                        <label for="email">Email</label>
                        <input type="email" name="email">

                        <label for="password">Contraseña</label>
                        <input type="password" name="password">
                        <input type="submit" value="Enviar">

                    </form>
                <ul>
                    <li><a href="#">Mis pedidos</a></li>
                    <li><a href="#">Gestionar pedidos</a></li>
                    <li><a href="">Gestionar categorias</a></li>
                </ul>

                </div>

            </aside>

            <!-- CONTENIDO CENTRAL -->
            <div id="central">
                
        </div>

        <!-- PIE DE PAGINA -->
        <footer id="footer">
            <p>Desarrollado por Gabriel Reyes &copy; <? date('Y') ?></p>
        </footer>
    </div>

</body>

</html>