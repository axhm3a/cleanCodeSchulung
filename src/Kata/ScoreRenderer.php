<?php
/**
 * Created by PhpStorm.
 * User: axhm3a
 * Date: 18.06.15
 * Time: 15:55
 */

namespace Kata;


class ScoreRenderer
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
     * @param Player $playerOne
     * @param Player $playerTwo
     */
    function __construct(Player $playerOne, Player $playerTwo)
    {
        $this->playerOne = $playerOne;
        $this->playerTwo = $playerTwo;
    }

    /**
     * @return string
     */
    public function renderAdvantageScore()
    {
        $minusResult = $this->playerOne->getScore() - $this->playerTwo->getScore();
        if ($minusResult == 1) {
            $score = "Advantage player1";
            return $score;
        } elseif ($minusResult == -1) {
            $score = "Advantage player2";
            return $score;
        } elseif ($minusResult >= 2) {
            $score = "Win for player1";
            return $score;
        } else {
            $score = "Win for player2";
            return $score;
        }
    }

    /**
     * @return string
     */
    public function renderScore()
    {
        $score = $this->getScoreName($this->playerOne->getScore()) . "-" .  $this->getScoreName($this->playerTwo->getScore());
        return $score;
    }

    /**
     * @return string
     */
    public function renderEvenScore()
    {
        return $this->getScoreNamePar($this->playerOne->getScore());
    }

    /**
     * @return string
     */
    private function getScoreNamePar($score) {
        switch ($score) {
            case 0:
                return "Love-All";

            case 1:
                return "Fifteen-All";

            case 2:
                return "Thirty-All";

            default:
                return "Deuce";
        }
    }

    public function getScoreName($score) {
        switch ($score) {
            case 0:
                return "Love";

            case 1:
                return "Fifteen";

            case 2:
                return "Thirty";

            case 3:
                return "Forty";

        }
    }
}