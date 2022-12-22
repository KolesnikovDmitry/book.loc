<?php

class ShopProduct {

    const AVAILABLE = 0;
    const OUT_OF_STOCK = 1;

    private $id = 0;
    private $title;
    private $producerFirstName;
    private $producerMainName;
    protected $price;
    private $discount = 0;

    public function __construct(string $title, string $firstName, string $mainName, float $price) {

        $this->title = $title;
        $this->producerFirstName = $firstName;
        $this->producerMainName = $mainName;
        $this->price = $price;
    }

    public function setId(int $id) {
        $this->id = $id;
    }

    public function getInstance(int $id, \PDO $pdo): ShopProduct {
        $smtp = $pdo->prepare("select * from products where id=?");
        $result = $smtp->execute([$id]);
        $row = $smtp->fetch();

        if (empty($row)) {
            return null;
        }
        if ($row['type'] == "book") {
            $product = new BookProduct($row[$title], $row[$firstName], $row[$mainName], (float) $row[$price], (int) $row[$numpages]);
        } elseif ($row['type'] == "cd") {
            $product = new CDProduct($row[$title], $row[$firstName], $row[$mainName], (float) $row[$price], (int) $row[$playlenght]);
        } else {
            $firstName = (is_null($row['firstname'])) ? "" : $row['firstname'];

            $product = new ShopProduct($row[$title], $row[$firstName], $row[$mainName], (float) $row[$price]);
        }
        $product->setId((int) $row[$id]);
        $product->setDiscount((int) $row['discount']);
        return $pr;
    }

    public function getProducerFirstName() {
        return $this->producerFirstName;
    }

    public function getProducerMainName() {
        return $this->producerMainName;
    }

    public function setDiscount(int $num) {
        $this->discount = $num;
    }

    public function getProducer() {
        return $this->producerFirstName . " " . $this->producerMainName;
    }

    public function getPrice() {
        return ($this->price - $this->discount);
    }

    public function getTitle() {
        return $this->title;
    }

    public function getSummaryLine() {
        $base = "{$this->title} ( {$this->producerMainName}, ";
        $base .= "{$this->producerFirstName} )";
        return $base;
    }

}
