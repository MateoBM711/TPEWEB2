<?php
/**
    action                              function
    /home                              showHome(); 
    /productos                         showCategorias();
    /productos/categoria               showProductos(categoria);
    /producto/:id                      showProducto($id);
    /Login                             showLogin(); 

*/
require_once './app/controllers/inicio.controller.php';
require_once './app/controllers/producto.controller.php';
require_once './app/controllers/categorias.controller.php';
require_once './app/controllers/login.controller.php';
require_once './app/controllers/carrito.controller.php';


define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');


$action = 'inicio'; // accion por defecto
if (!empty( $_GET['action'])) {
    $action = $_GET['action'];
}

$params = explode('/', $action);

switch ($params[0]) {
    case 'inicio':
        $controller = new InicioController();
        $controller->showInicio();
        break;
    case 'categorias':
        $controller = new CategoriasController();
        $controller->showCategorias();
        break;
    case 'productos':
        if (isset($params[1])){
            $controller = new ProductoController();
            $controller->showProductosbyCategoria($params[1]);
        }
        else{
            $controller->showProductos(); //para poder llamar sin parametros -> en la funcion showProductos($id = null)
        }
    case 'carrito':
        $controller = new CarritoController();
        $controller->showCarrito();
        break;
    //case 'login':
    //    $controller->showLogin(); 
    //    break;
    //case 'auth':
      //  $controller->auth();
       // break;
    //case 'logout':    
      //  $controller->logout();
        //break;
    //default: 
       // showError();
      //  break;
}
?>