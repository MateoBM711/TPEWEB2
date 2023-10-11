<?php
require_once '<ddbb>local_limpieza.sql';



function showCategorias(){
    include_once 'templates/header.phtml';
    ?>
    <article>
        <div class = "contenedor-header-prod">
        <span><h1>Cocina</h1></span>
        <span><button class = "ver-mas">Ver mas</button></span>
        <div class="contenedor-prod-home">
            <?php 
            foreach($productosCocina as $producto){
                ?>
                <div class="producto">
                    <div class="img-producto"><?php echo $producto->imagen ?></div>
                    <h4><?php echo $producto->nombre?></h4>
                    <p> $ <?php echo $producto->precio ?></p>
                    <button class="btn-verMas" id="btn-VerMas">Ver mas</button>
                    <button class="btn-agregarCarrito" id="btn-agregarCarrito">Agregar al Carrito</button>
                </div>
                <?php  
                }
                ?>
        </div>
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
    <?php include_once 'templates/footer.phtml';
}








?>