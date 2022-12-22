<?php

class BookProduct extends ShopProduct{
      private $numPages;

    public function __construct(string $title, string $firstName, string $mainName, float $price, int $numPages) {
        parent::__construct($title, $firstName, $mainName, $price);
        $this->numPages = $numPages;
    }

    public function getNumPages() {
        return $this->numPages;
    }

    public function getSummaryLine() {
        $base = parent::getSummaryLine();
        $base .= "{$this->numPages} cтр.";
        return $base;
    }

    public function getPrice() {
        return $this->price;
    }
}
