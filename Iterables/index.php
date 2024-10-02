<?php
class MyCollection implements Iterator {
    private $items = [];
    private $position = 0;

    public function __construct($items) {
        $this->items = $items;
        $this->position = 0;
    }

    public function current() {
        return $this->items[$this->position];
    }

    public function key() {
        return $this->position;
    }

    public function next() {
        ++$this->position;
    }

    public function rewind() {
        $this->position = 0;
    }

    public function valid() {
        return isset($this->items[$this->position]);
    }
}


$collection = new MyCollection(["apple", "banana", "cherry"]);

foreach ($collection as $item) {
    echo $item . "\n"; 
}
?>
 