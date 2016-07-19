<?php
    namespace RPG\Units\Properties;

    use RPG\Armor;
    use RPG\Weapon;

    abstract class UnitProperties
    {

        protected $armor  = null;
        protected $damage = 0;
        protected $hp     = 40;
        protected $name;
        protected $weapon =null;

        /**
         * Unit constructor.
         *
         * @param             $name
         * @param \RPG\Armor  $armor
         * @param \RPG\Weapon $weapon
         */
        public function __construct($name,Armor $armor = null,Weapon $weapon)
        {
            $this->setArmor($armor);
            $this->name = $name;
            $this->weapon = $weapon;
            $this->armor = $armor;
        }

        /**
         * @param mixed $armor
         */
        public function setArmor(Armor $armor = null)
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

        public function absorbDamage($damage)
        {
            if ($this->armor) {
                $damage = $this->armor->absorbDamage($damage);
                $this->mensajeAtaque($this->armor);
            }

            return $damage;
        }

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

        /**
         * @return int
         */
        public function getHp()
        {
            return $this->hp;
        }

    }