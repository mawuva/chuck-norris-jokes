<?php

namespace Mawuva\ChuckNorrisJokes;

class JokeFactory
{
    /**
     * @var array
     */
    protected $jokes = [
        'Chuck Norris peut faire un habit avec un moine.',
        'Un jour, Chuck Norris a acheté du poisson chez le boucher.',
        'Les requins regardent Les Dents de Chuck Norris à leurs soirées films d\'horreur.',
        'Quand Chuck Norris se masturbe au Texas, il y a un tremblement de terre en Russie...c\'est l\'effet Chuck Norris'
    ];

    public function __construct(array $jokes = null)
    {
        if ($jokes) {
            $this -> jokes = $jokes;
        }
    }

    public function getRandomJoke()
    {
        return $this ->jokes[array_rand($this ->jokes)];
    }
}