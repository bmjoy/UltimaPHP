<?php

/**
* Ultima PHP - OpenSource Ultima Online Server written in PHP
* Version: 0.1 - Pre Alpha
*/

class Hydra extends Mobile {
	public function summon() {
		$this->name = "a hydra";
		$this->body = 0;
		$this->type = "";
		$this->flags = 0x00;
		$this->color = 0x00;
		$this->basesoundid = 0x16A;
		$this->str = rand(801, 828);
		$this->dex = rand(102, 118);
		$this->int = rand(102, 120);
		$this->maxhits = rand(1480, 1500);
		$this->hits = $this->maxhits;
		$this->damage = 21;
		$this->damageMax = 26;
		$this->resist_physical = rand(65, 75);
		$this->resist_fire = rand(70, 85);
		$this->resist_cold = rand(25, 35);
		$this->resist_poison = rand(35, 43);
		$this->resist_energy = rand(36, 45);
		$this->karma = 0;
		$this->fame = 0;
		$this->virtualarmor = 0;

}}
?>
