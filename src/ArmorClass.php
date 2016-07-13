<?php
    namespace RPG;

    abstract class ArmorClass{

        protected $armorName   = "";
        protected $evadeAttack = false;

        public function getArmorName(){
            return $this->armorName;
        }

        public function getEvadeAttack(){
            return $this->evadeAttack;
        }
    }