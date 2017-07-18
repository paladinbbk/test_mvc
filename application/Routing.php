<?php
use Routing\Router;
use Routing\MatchedRoute;

try {
    $router = new Router(GET_HTTP_HOST());

    //Main
    $router->add('homepage', '/', 'Controller\MainController:indexAction', 'GET|POST');
    $router->add('error404', '/404', 'Controller\MainController:error404Action' , 'GET|POST');
    $router->add('staticPage', '/(slug:str).html', 'Controller\MainController:staticPageAction' , 'GET|POST');

    //News
    $router->add('news', '/news', 'Controller\BlogController:indexAction', 'GET|POST');
    $router->add('article', '/article/(slug:str)', 'Controller\BlogController:articleAction' , 'GET|POST');
    $router->add('edit_news', '/edit/(id:num)', 'Controller\BlogController:editAction' , 'GET|POST');

    // $router->add('about', '/about', 'AppController:aboutAction');
    // $router->add('contacts', '/contacts', 'AppController:contactsAction');
    // $router->add('user', '/user/(id:num)', 'AppController:userAction');

    $route = $router->match(GET_METHOD(), GET_PATH_INFO());

    if (null == $route) {
        $route = new MatchedRoute('Controller\MainController:action_error404');
    }

    list($class, $action) = explode(':', $route->getController(), 2);

    call_user_func_array(array(new $class($router), $action), $route->getParameters());

} catch (Exception $e) {

    header($_SERVER['SERVER_PROTOCOL'] . ' 500 Internal Server Error', true, 500);

    echo $e->getMessage();
    echo $e->getTraceAsString();
    exit;
}
