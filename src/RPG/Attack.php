<?php
    namespace RPG;

    use RPG\Unit;

    class Attack
    {

        protected $damage;
        private   $description;
        protected $magical;

        /**
         * Attack constructor.
         *
         * @param $damage
         * @param $magical
         * @param $description
         */
        public function __construct($damage,$magical,$description)
        {
            $this->damage     = $damage;
            $this->magical    = $magical;
            $this->description = $description;
        }

        /**
         * @return mixed
         */
        public function getDamage()
        {
            return $this->damage;
        }

        /**
         * @return bool
         */
        public function isPhysical()
        {
            return !$this->isMagical();
        }

        /**
         * @return mixed
         */
        public function isMagical()
        {
            return $this->magical;
        }

        /**
         * @param Unit $attacker
         * @param Unit $opponent
         */
        public function getDescription(Unit $attacker,Unit $opponent)
        {
            return str_replace(
                [':unit',':opponent'],
                [$attacker->getName(),$opponent->getName()],
                $this->description);
        }

    }