<?php namespace Entity\shop;

    class Shop {
        private $inn;
        private $booksValue;

        public function __construct(int $inn, int $booksValue) {
            $this->inn = $inn;
            $this->booksValue = $booksValue;
        }

        public function sell(){
            $this->booksValue--;
        }

        public function sayHello() : string {
            return 'Zdravstvuyte!';
        }

        public function getBooks() {
            return $this->booksValue;
        }
    }