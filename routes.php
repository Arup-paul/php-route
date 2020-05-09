<?php

require "Router.php";
require "PriceController.php";
use OurApplication\Controller\PriceController;
use OurApplication\Routing\Router;

Router::get( '/', function () {
    echo "Welcome home";
} );

Router::get( '/hello/world', function () {
    echo "hello world";
} );
Router::get( '/great/(\w+)', function ( $name ) {
    echo "hello {$name}";
} );

Router::get( '/great/(\w+)/title/(\w+)', function ( $name, $title ) {
    echo "hello {$title} {$name}";
} );

Router::get( '/verb', function () {
    echo $_SERVER['REQUEST_METHOD'];
} );

Router::post( '/verb', function () {
    echo $_SERVER['REQUEST_METHOD'];
} );

Router::delete( '/verb', function () {
    echo $_SERVER['REQUEST_METHOD'];
} );

Router::get( '/prices', [PriceController::class, 'showPrice'] );
Router::get( '/prices2', 'PriceController@showPrice' );

Router::cleanup();

?>