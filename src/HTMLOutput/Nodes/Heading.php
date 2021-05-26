<?php

namespace Tiptap\HTMLOutput\Nodes;

class Heading extends Node
{
    protected $name = 'heading';

    public function tag()
    {
        return "h{$this->node->attrs->level}";
    }
}