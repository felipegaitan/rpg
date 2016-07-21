<?php
    require "../vendor/autoload.php";
    use RPG\Units\Soldier;
    use RPG\Units\Archer;
    use RPG\Units\Wizard;
    use RPG\Armors\BronzeArmor;
    use RPG\Armors\CursedArmor;
    use RPG\Armors\GoldArmor;
    use RPG\Armors\EvadeArmor;
    use RPG\Weapons\Swords\BasicSword;
    use RPG\Weapons\Swords\LongSword;
    use RPG\Weapons\Bows\BasicBow;
    use RPG\Weapons\Bows\CrossBow;

    $felipe = new Soldier('Felipe',new LongSword);
    $yassel = new Archer('Yassel',new CrossBow);
    $felipe->setArmor(new EvadeArmor());
    $yassel->attack($felipe);
    $yassel->attack($felipe);
    $felipe->setArmor(new GoldArmor());
    //$felipe->setArmor( new CursedArmor() );
    $yassel->attack($felipe);
    $yassel->setArmor(new EvadeArmor());
    $felipe->attack($yassel);

