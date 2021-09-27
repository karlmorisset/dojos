<?php
require __DIR__ . '/../vendor/autoload.php';

use App\HammingDistance;
use PHPUnit\Framework\TestCase;

class HammingDistanceTest extends TestCase{

    protected $dist;

    function __construct() {
        parent::__construct();
        $this->dna = new HammingDistance;
    }

    /** @test */
    public function it_returns_the_hamming_distance(){
        $this->assertEquals(7, $this->dna->compare("GAGCCTACTAACGGGAT","CATCGTAATGACGGCCT"));
        $this->assertEquals(8, $this->dna->compare("GAGAATACTGACGGGAC","CATCGTAATGACGGCCT"));
        $this->assertEquals(0, $this->dna->compare("CAGCCTACTAACGGGAT","CAGCCTACTAACGGGAT"));
        $this->assertEquals("string", gettype($this->dna->compare("CAGCCTACTAACGGGAT","CAGCCTACTAACGGGATGTAC")));
    }
}