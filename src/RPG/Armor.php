<?php
    namespace RPG;

    interface Armor{

        public function absorbDamage($damage);

        public function getArmorName();
    }