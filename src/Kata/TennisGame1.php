<?php

namespace Kata;

class TennisGame1 implements TennisGame
{
    /**
     * @var Player
     */
    private $playerOne;

    /**
     * @var Player
     */
    private $playerTwo;

    /**
     * @var ScoreRenderer
     */
    private $scoreRender;

    /**
     * @param $playerOneName string
     * @param $playerTwoName string
     */
	public function __construct($playerOneName, $playerTwoName)
	{
        $this->playerOne = new Player($playerOneName);
        $this->playerTwo = new Player($playerTwoName);
        $this->scoreRender = new ScoreRenderer($this->playerOne, $this->playerTwo);
	}

    /**
     * @param $playerName string
     */
	public function wonPoint($playerName)
	{
		if($this->playerOne->getName() === $playerName) {
            $this->playerOne->addScore();
        } elseif ($this->playerTwo->getName() === $playerName) {
            $this->playerTwo->addScore();
        }
	}

    /**
     * @return string
     */
	public function getScore()
	{
		if ($this->ifScoreIsEven()) {
            $score = $this->scoreRender->renderEvenScore();
        } elseif ($this->ifOnePlayerHasAdvantage()) {
            $score = $this->scoreRender->renderAdvantageScore();
		} else {
            $score = $this->scoreRender->renderScore();
        }
		return $score;
	}

    /**
     * @return bool
     */
    private function ifScoreIsEven()
    {
        return $this->playerOne->getScore() == $this->playerTwo->getScore();
    }

    /**
     * @return bool
     */
    private function ifOnePlayerHasAdvantage()
    {
        return $this->playerOne->getScore() >= 4 || $this->playerTwo->getScore() >= 4;
    }
}

