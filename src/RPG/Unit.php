<?php
    namespace RPG;

    use RPG\Armor;
    use RPG\Attack;
    use RPG\Weapon;

    class Unit
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
         * @param Weapon      $weapon
         */
        public function __construct($name,Weapon $weapon)
        {
            $this->name   = $name;
            $this->weapon = $weapon;
        }

        /**
         * @param Weapon $weapon
         */
        public function setWeapon(Weapon $weapon)
        {
            $this->weapon = $weapon;
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
            $attack = $this->weapon->createAttack();
            show($attack->getDescription($this,$opponent));
            $opponent->takeDamage($attack);
        }

        /**
         * @param $damage
         */
        public function takeDamage(Attack $attack)
        {
            $this->hp = ($this->hp-$this->absorbDamage($attack));
            if ($this->hp<0) {
                $this->hp = 0;
            }
            show("{$this->name} tiene {$this->hp} de vida");
            if ($this->hp<=0) {
                $this->dies();
            }
        }

        /**
         * @param Attack $attack
         *
         * @return mixed
         * @internal param $damage
         *
         */
        public function absorbDamage(Attack $attack)
        {
            $damage = $attack->getDamage();
            if ($this->armor) {
                $damage = $this->armor->absorbDamage($attack);
                $this->mensajeAtaque($this->armor);
            }

            return $damage;
        }

        /**
         * @param Armor $armor
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

        /**
         * @param Armor $armor
         */
        public function setArmor(Armor $armor)
        {
            $this->armor = $armor;
        }
    }