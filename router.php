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
            $controller->showError('404 Not Found'); 
        }
        break;
    case 'carrito':
        $controller = new CarritoController();
        $controller->showCarrito();
        break;
    case 'add':
        $controller = new CarritoController();
        $controller->addProd($params[1], $params[2]); // le paso el id_producto
        break;
    case 'delete':
        $controller = new CarritoController();
        $controller->removeProd($params[1]);
        break;
    case 'comprar':

    case 'login':
        $controller = new LoginController();
        $controller->showLogin(); 
        break;
    case 'auth':
            $controller = new LoginController();
            $controller->auth(); 
            break;
    case 'logout':
        $controller = new LoginController();
        $controller->logout();
        break;

}
?>