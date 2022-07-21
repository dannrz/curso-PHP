<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/styles.css">
    <title>Tienda de camisetas</title>
</head>

<body>
    <header id="header">
        <div id="logo">
            <img src="assets/img/camiseta.png" alt="logo">
            <a href="index.php">Tienda de camisetas</a>
        </div>
    </header>
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
        <aside id="lateral">
            <div id="login" class="block_aside">
                <form action="" method="post">
                    <label for="email">Email</label>
                    <input type="email" name="email">
                    <label for="password">Password</label>
                    <input type="password" name="password">
                    <input type="submit" value="Enviar">
                </form>
                <ul>
                    <li><a href="#">Mis pedidos</a></li>
                    <li><a href="#">Gestionar pedidos</a></li>
                    <li><a href="#">Gestionar categorias</a></li>
                </ul>
            </div>
        </aside>
        <div id="central">
            <h1>Productos destacados</h1>
            <div class="product">
                <img src="assets/img/camiseta.png" alt="logo">
                <h2>Camiseta azul olgada</h2>
                <p>30 euros</p>
                <a href="#">Comprar</a>
            </div>
            <div class="product">
                <img src="assets/img/camiseta.png" alt="logo">
                <h2>Camiseta azul olgada</h2>
                <p>30 euros</p>
                <a href="#">Comprar</a>
            </div>
            <div class="product">
                <img src="assets/img/camiseta.png" alt="logo">
                <h2>Camiseta azul olgada</h2>
                <p>30 euros</p>
                <a href="#">Comprar</a>
            </div>
            <div class="product">
                <img src="assets/img/camiseta.png" alt="logo">
                <h2>Camiseta azul olgada</h2>
                <p>30 euros</p>
                <a href="#">Comprar</a>
            </div>
        </div>
    </div>
    <footer id="footer">
        <p>Desarrollado por Daniel Rodriguez &copy;<?= date('Y') ?></p>
    </footer>

</body>

</html>