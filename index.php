<?php

    class Autoloader {
        public static function autoload() {
            spl_autoload_register(function ($class) {
                $path = './src/'.str_replace('\\', DIRECTORY_SEPARATOR, $class).'.php';
                if (file_exists($path)) {
                    require_once $path;
                    return true;
                }else {
                    return false;
                }
            });
        }
    }

    Autoloader::autoload();

    $berezka = new Shop(4242424242, 42);
    $larek = new Larek(123456789, 9);
    $slava = new Customer('Slava', 42);

    $slava->buyBook($berezka);
    echo $slava->getBooks();
    echo $berezka->sayHello();
