<?php

/**
 * Ultima PHP - OpenSource Ultima Online Server written in PHP
 * Version: 0.1 - Pre Alpha
 */
class SkillMacefighting {
    public $id    = 41;
    public $name  = "macefighting";
    public $title = "Armsman";
    public $flags = SkillsDefs::SKILL_FLAG_SELECTABLE;
    public $value = 0;

    public function __construct($value = 0) {
        $this->value = $value;
    }
}