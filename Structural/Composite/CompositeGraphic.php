<?php

namespace Structural\Composite;

class CompositeGraphic implements Graphic
{
    private $graphics = [];

    public function add(Graphic $graphic)
    {
        $this->graphics[] = $graphic;
    }
    public function remove(Graphic $graphic)
    {
        $index = array_search($graphic, $this->graphics, true);
        if ($index !== false) {
            unset($this->graphics[$index]);
        }
    }
    public function draw()
    {
        foreach ($this->graphics as $graphic) {
            $graphic->draw();
        }
    }

}