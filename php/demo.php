<?php
class ParentClass {
    public function sayHello() {
        return 'Hello from the parent class!';
    }
}

class Child extends ParentClass {
    public function sayHello () {
        return parent::sayHello() . ' And the child class!';
    }
}

$child = new Child();

var_dump($child->sayHello());