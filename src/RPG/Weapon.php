<?php
    namespace RPG;

    abstract class Weapon
    {

        protected $damage      = 0;
        protected $description = ":unit ataca a :oponente";
        protected $magical     = false;

        public function createAttack()
        {
            return new Attack($this->damage,$this->magical,$this->description);
        }

    }