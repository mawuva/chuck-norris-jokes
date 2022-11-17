<?php

namespace Mawuva\ChuckNorrisJokes\Tests;

use Mawuva\ChuckNorrisJokes\JokeFactory;
use PHPUnit\Framework\TestCase;

class JokeFactoryTest extends TestCase
{
    /**
     * @test
     */
    public function it_return_a_random_joke()
    {
        $jokes = new JokeFactory([
            'This is a random joke'
        ]);
        $joke = $jokes->getRandomJoke();

        $this -> assertSame('This is a random joke', $joke);
    }

    /**
     * @test
     */
    public function it_return_a_predefined_joke()
    {
        $chuckNorrisJokes = [
            'Chuck Norris peut faire un habit avec un moine.',
            'Un jour, Chuck Norris a acheté du poisson chez le boucher.',
            'Les requins regardent Les Dents de Chuck Norris à leurs soirées films d\'horreur.',
            'Quand Chuck Norris se masturbe au Texas, il y a un tremblement de terre en Russie...c\'est l\'effet Chuck Norris'
        ];
        
        $jokes = new JokeFactory();
        $joke = $jokes->getRandomJoke();

        $this -> assertContains($joke, $chuckNorrisJokes);
    }
}