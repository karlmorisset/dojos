<?php
require __DIR__ . '/../vendor/autoload.php';

use App\RectangleToSquares;
use PHPUnit\Framework\TestCase;

class RectangleToSquaresTest extends TestCase{

    protected $rect;

    function __construct() {
        parent::__construct();
        $this->rect = new RectangleToSquares;
    }

    /** @test */
    public function it_returns_all_squares_available_in_a_rectangle(){
        $this->assertEquals([3,2,1,1], $this->rect->convert(5,3));
        $this->assertEquals([4], $this->rect->convert(4,4));
        $this->assertEquals([1,1,1,1], $this->rect->convert(1,4));
        $this->assertEquals([1], $this->rect->convert(1,1));
        $this->assertEquals([3,3,3,3], $this->rect->convert(12,3));
    }
}