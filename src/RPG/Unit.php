<?php
    namespace RPG;

    abstract class Unit
    {

        protected $armor;
        protected $damage = 0;
        protected $hp     = 40;
        protected $name;
        protected $weapon;

        /**
         * Unit constructor.
         *
         * @param             $name
         * @param \RPG\Weapon $weapon
         */
        public function __construct($name,Weapon $weapon)
        {
            $this->name = $name;
            $this->setWeapon($weapon);
        }

        /**
         * @param \RPG\Weapon $weapon
         */
        public function setWeapon(Weapon $weapon)
        {
            $this->weapon = $weapon;
        }

        /**
         * @param \RPG\Armor $armor
         */
        public function setArmor(Armor $armor)
        {
            $this->armor = $armor;
        }

        /**
         * @param $direction
         */
        public function move($direction)
        {
            show("{$this->name} camina hacia {$direction}");
        }

        /**
         * @return bool $name
         */
        public function getName()
        {
            return $this->name;
        }

        /**
         * @return int
         */
        public function getHp()
        {
            return $this->hp;
        }

        /**
         * @param \RPG\Unit $opponent
         */
        public function attack(Unit $opponent)
        {
            show($this->weapon->getDescription($this,$opponent));
            $opponent->takeDamage($this->weapon->getDamage());
        }

        /**
         * @param $damage
         */
        public function takeDamage($damage)
        {
            $this->hp = ($this->hp-$this->absorbDamage($damage));
            if ($this->hp<0) {
                $this->hp = 0;
            }
            show("{$this->name} tiene {$this->hp} de vida");
            if ($this->hp<=0) {
                $this->dies();
            }
        }

        /**
         * @param $damage
         *
         * @return mixed
         */
        public function absorbDamage($damage)
        {
            if ($this->armor) {
                $damage = $this->armor->absorbDamage($damage);
                $this->mensajeAtaque($this->armor);
            }

            return $damage;
        }

        /**
         * @param \RPG\Armor $armor
         */
        public function mensajeAtaque(Armor $armor)
        {
            if (!is_null($armor)) {
                $evadeMessage = $this->armor->getEvadeAttack()==true ? "y evade ataque" : "";
                show("{$this->name} tiene armadura '{$armor->getArmorName()}' {$evadeMessage}");
            }
        }

        /**
         *
         */
        public function dies()
        {
            show("{$this->name} muere");
            exit();
        }
    }