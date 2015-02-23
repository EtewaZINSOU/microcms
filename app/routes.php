<?php
/**
 * Created by PhpStorm.
 * User: ALEXIS
 * Date: 21/02/15
 * Time: 19:11
 */
// Home page

$app->get('/', function () use ($app) {
    $articles = $app['dao.article']->findAll();
    return $app['twig']->render('index.html.twig', array('articles' => $articles));
    //ob_start();             // start buffering HTML output
    //require '../views/view_old.php';
    //$view = ob_get_clean(); // assign HTML output to $view

    //return $view;

});