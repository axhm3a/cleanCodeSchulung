<?php
/**
 * Created by PhpStorm.
 * User: axhm3a
 * Date: 18.06.15
 * Time: 15:18
 */

namespace Kata;


class Player {
    /**
     * @var string
     */
    private $name;

    /**
     * @var int
     */
    private $score = 0;

    /**
     * @param string $name
     */
    function __construct($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return int
     */
    public function getScore()
    {
        return $this->score;
    }


    public function addScore() {
        $this->score++;
    }
}