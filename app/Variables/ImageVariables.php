<?php

namespace App\Variables;

class ImageVariables 
{
    public $attributes;
    public $factions;
    public $class;

    public function __construct()
    {
        $this->setFactions();
        $this->setClass();
        $this->setAttributes();
    }

    public function setFactions()
    {
        $this->factions = [
            'shadow' => '/images/faction_images/shadow.png',
            'fortress' => '/images/faction_images/fortress.png',
            'albyss' => '/images/faction_images/albyss.png',
            'forest' => '/images/faction_images/forest.png',
            'light' => '/images/faction_images/light.png',
            'dark' => '/images/faction_images/dark.png',
            'void' => '/images/faction_images/void.png',
        ];
    }

    public function setClass()
    {
        $this->class = [
            'warrior' => '/images/class_images/warrior.png',
            'mage' => '/images/class_images/mage.png',
            'ranger' => '/images/class_images/ranger.png',
            'assasin' => '/images/class_images/assasin.png',
            'priest' => '/images/class_images/priest.png',
        ];
    }

    public function setAttributes()
    {
        $this->attributes = [
            'hp' => '/images/attribute_images/health.png',
            'atk' => '/images/attribute_images/attack.png',
            'armor' => '/images/attribute_images/armor.png',
            'speed' => '/images/attribute_images/speed.png',
        ];
    }
}