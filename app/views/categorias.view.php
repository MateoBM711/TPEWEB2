<?php
class CategoriasView {
    function showCategorias($categorias){
        include_once 'TPEWEB2\templates\header.phtml';
        foreach($categorias as $categoria) {
            ?>
            <article>
                <div class = "contenedor-header-prod">
                    <span><h1><?php $categoria->nombre;?></h1></span>
                    <span><button class = "ver-mas">Ver mas</button></span>
                    <img src="<?php $categoria->img?>" alt="">
                    <div class="contenedor-prod-home">
                        <div class="producto">
                            <?php 
            }
            ?>
            </div>
            <?php

    include_once 'TPEWEB2\templates\footer.phtml';
    }
}
?>