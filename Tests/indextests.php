<?php

require_once '../functions.php';
use PHPUnit\Framework\TestCase;
class FunctionsTests extends TestCase
{
    public function testSuccessDisplayDragon()
    {
        $expected = "<div class='outerContainer'>
                        <div class='dragonBox'>
                            <img class='dragonImage' src='toothless.jpg'>
                            <h3 class='dragonName'>Toothless</h3>
                            <ul>
                                <li>Rider: Hiccup</li>
                                <li>Colour: Black</li>
                                <li>Attack: 15</li>
                                <li>Speed: 20</li>
                                <li>Firepower: 14</li>
                            </ul>
                        </div>
                    </div>";
        $input = [
            [
                'images' => 'toothless.jpg',
                'name' => 'Toothless',
                'rider' => 'Hiccup',
                'colour' => 'Black',
                'attack' => '15',
                'speed' => '20',
                'firepower' => '14'
            ]
        ];
        $case = displayDragon($input);
        $this->assertEquals($expected, $case);
    }

    public function testFailDisplayDragon()
    {
        $expected = "<div class='outerContainer'>
                        <div class='dragonBox'>
                            <img class='dragonImage' src='toothless.jpg'>
                            <h3 class='dragonName'>Toothless</h3>
                            <ul>
                                <li>Rider: Hiccup</li>
                                <li>Colour: Black</li>
                                <li>Attack: 15</li>
                                <li>Speed: 20</li>
                                <li>Firepower: 14</li>
                            </ul>
                        </div>
                    </div>";
        $input = [
            [
                'images' => 'toothless.jpg',
                'name' => 'Toothless',
                'rider' => 'Hiccup',
                'colour' => 'Black',
                'attack' => '15',
                'speed' => '20',
                'firepower' => '14',
                'popcorn' => '45'
            ]
        ];
        $case = displayDragon($input);
        $this->assertEquals($expected, $case);
    }

    public function testMalformedDisplayDragon()
    {
        $this->expectException(TypeError::class);
        $input = "dragons";
        $case = displayDragon($input);
    }
}