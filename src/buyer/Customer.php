<?php namespace Entity\buyer;

    class Customer {
        private $name;
        private $booksValue;

        public function __construct(string $name, int $booksValue) {
            $this->name = $name;
            $this->booksValue = $booksValue;
        }

        public function buyBook (Shop $shop) {
            $shop->sell();
            $this->booksValue++;
        }

        public function getBooks() {
            return $this->booksValue;
        }
    }
