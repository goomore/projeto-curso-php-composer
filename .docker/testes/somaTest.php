<?php 

use PHPUnit\Framework\TestCase;

class SomaTest extends TestCase {
    public function testSomaUmMaisUmRetornaDois() {
        $soma = new Soma();
        $this->asserEquals(2, $soma->calcula(1, 1));
    }
}