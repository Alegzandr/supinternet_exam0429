<?php


class Nim
{
    private $matches;
    private $player;
    private $bot;

    public function getMatches()
    {
        return $this->matches;
    }

    public function setMatches($matches)
    {
        $this->matches = $matches;
    }

    public function getPlayer()
    {
        return $this->player;
    }

    public function setPlayer($player)
    {
        $this->player = $player;
    }

    public function getBot()
    {
        return $this->bot;
    }

    public function setBot($bot)
    {
        $this->bot = $bot;
    }
}