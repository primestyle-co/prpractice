<?php

class Foo {
  public function __construct($bar) {
    $this->bar = $bar;
  }
  public function lorem() {
    return true;
  }
}

$foo = new Foo();

if($foo->lorem()) {
  echo 'ipsam';
}
$foo->hoge();

