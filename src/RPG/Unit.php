<?php
    namespace RPG;

    interface Unit{

        /**
         * @param \Unit $opponent
         *
         * @return mixed
         */
        public function attack(Unit $opponent);

        /**
         * @param $damage
         */
        public function takeDamage($damage);

        public function absorbDamage($damage);

        public function mensajeAtaque(Armor $armor);
    }