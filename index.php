<?php

require __DIR__ . '/vendor/autoload.php';

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

$loader = new FilesystemLoader(__DIR__ . '/templates/layout/');
$twig = new Environment($loader);

echo $twig->render('base.html.twig', ['title' => 'Tarjetas Digitales MX', 'X' => 'Y']);
