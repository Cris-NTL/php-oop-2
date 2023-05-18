<?php

/** 
 * ## Category class
 * defines Category class
 * @author Cristian Natoli
 */
class Category
{
    function __construct(public $name, public $icon)
    {
        $this->name = $name;
        $this->icon = $icon;
    }
}
