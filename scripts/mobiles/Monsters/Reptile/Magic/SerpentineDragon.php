<?php

/**
* Ultima PHP - OpenSource Ultima Online Server written in PHP
* Version: 0.1 - Pre Alpha
*/

class SerpentineDragon extends Mobile {
	public function summon() {
		$this->name = "a serpentine dragon";
		$this->body = 103;
		$this->type = "";
		$this->flags = 0x00;
		$this->color = 0x00;
		$this->basesoundid = 0;
		$this->str = rand(111, 140);
		$this->dex = rand(201, 220);
		$this->int = rand(1001, 1040);
		$this->maxhits = 0;
		$this->hits = $this->maxhits;
		$this->damage = 5;
		$this->damageMax = 12;
		$this->resist_physical = rand(35, 40);
		$this->resist_fire = rand(25, 35);
		$this->resist_cold = rand(25, 35);
		$this->resist_poison = rand(25, 35);
		$this->resist_energy = rand(25, 35);
		$this->karma = 15000;
		$this->fame = 15000;
		$this->virtualarmor = 36;

}}
?>
