<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <h1>Limpieza Mazzola Primos</h1>
        <nav>
            <a href=#>Productos</a>
            <a href=#>Carrito</a>
            <a href=#>Log in</a>
        </nav>
    </header>
    <section>
        <span>LPM</span>
    </section>
    <?php
    $p1 = new stdClass();
    $p1->nombre ='Detergente Magistral 300ml';
    $p1->imagen = 'https://acdn.mitiendanube.com/stores/001/165/255/products/limon1-5e07593c6668ba4c7e16473702767822-640-0.jpg';
    $p1->precio = 600.0;
    $p1->descripcion ='Detergente magistral. Rinde x5 300ml';
    $p1->categoria = 'Cocina';

    $p2 = new stdClass();
    $p2->nombre ='Detergente Magistral 600ml';
    $p2->imagen = 'https://acdn.mitiendanube.com/stores/001/165/255/products/limon1-5e07593c6668ba4c7e16473702767822-640-0.jpg';
    $p2->precio = 1000.0;
    $p2->descripcion ='Detergente magistral. Rinde x5 600ml';
    $p2->categoria = 'Cocina';

    $p3 = new stdClass();
    $p3->nombre ='Detergente Magistral 900ml';
    $p3->imagen = 'https://acdn.mitiendanube.com/stores/001/165/255/products/limon1-5e07593c6668ba4c7e16473702767822-640-0.jpg';
    $p3->precio = 1300.0;
    $p3->descripcion ='Detergente magistral. Rinde x5 900ml';
    $p3->categoria = 'Cocina';
    
    $productosCocina = [$p1, $p2, $p3];

    ?>
    <article>
        <h1>Cocina</h1>
        <?php 
            foreach($productosCocina as $producto){
            ?>
                <div class = "contenedor">
                    <div class="producto">
                        <h4><?php echo $producto->nombre?></h4>
                        <img class="img-producto" src="C:\xampp\htdocs\WEB2\TPE\TPEWEB2\app\views\img\magistral300.jpg" alt="magistral 300ml">
                        <p> $ <?php echo $producto->precio ?></p>
                        <button class="btn-leerMas" id="btn-LeerMas">Leer mas</button>
                    </div>
                </div>
            <?php  
            }
        ?>
    </article>
    <article>
        <h1>Baño</h1>
        <p>In elementum lorem eget est euismod ornare. Phasellus sit amet pellentesque mauris. Aliquam quis malesuada ex. Nullam eu aliquam nibh. Mauris molestie, urna accumsan ornare semper, augue nibh posuere lorem, vitae feugiat sem magna eget massa. Vivamus quis tincidunt dolor. Fusce efficitur, orci non vestibulum consequat, lectus turpis bibendum odio, in efficitur leo felis sed justo. Fusce commodo iaculis orci, quis imperdiet urna. Sed mollis facilisis lacus non condimentum. Nunc efficitur massa non neque elementum semper. Vestibulum lorem arcu, tincidunt in quam et, feugiat venenatis augue. Donec sed tincidunt tellus, a facilisis magna. Proin sit amet viverra nibh, bibendum gravida felis. Vivamus ut nunc id mauris posuere pellentesque. Praesent tincidunt id odio id feugiat.</p>
        <p>Cras egestas tempor nibh, a fermentum lorem sollicitudin non. Nulla facilisi. In at elit id leo tristique condimentum. Donec at est nulla. Mauris egestas magna ut laoreet pretium. Sed ultrices suscipit vestibulum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce id sapien eros. Vivamus viverra ultricies gravida. Nam urna nibh, blandit a vulputate at, vehicula non nulla. Aenean ut nulla leo. Praesent in ullamcorper est.</p>
    </article>
    <article>
        <h1>Jardin</h1>
        <ul>

        </ul>
    </article>
    <main>

    </main>
</body>
</html>