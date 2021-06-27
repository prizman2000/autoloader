<?php

    function autoload($class) {
            echo $class;
            $path = str_replace('\\Entity', '', $class);
            $path = str_replace('\\', DIRECTORY_SEPARATOR, $path);
            require_once __DIR__."/src/$path.php";
    }

    spl_autoload_register('autoload');

    $berezka = new \Entity\shop\Shop(4242424242, 42);
    $larek = new \Entity\shop\Larek(123456789, 9);
    $slava = new \Entity\buyer\Customer('Slava', 42);

    $slava->buyBook($berezka);
    echo $slava->getBooks();
    echo $berezka->sayHello();
