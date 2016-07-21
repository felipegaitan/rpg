<?php
    use RPG\Armors\CursedArmor;
    use RPG\Armors\EvadeArmor;
    use RPG\Armors\GoldArmor;
    use RPG\Unit;
    use RPG\Weapons\Bows\CrossBow;
    use RPG\Weapons\Bows\FireBow;
    use RPG\Weapons\Swords\LongSword;

    require "../vendor/autoload.php";
    $felipe = new Unit('Felipe',new LongSword());
    $yassel = new Unit('Yassel',new FireBow());
    $felipe->setArmor(new EvadeArmor());
    $yassel->setArmor(new EvadeArmor());
    $yassel->attack($felipe);
    $yassel->attack($felipe);
    $felipe->setArmor(new GoldArmor());
    $felipe->setArmor(new EvadeArmor());
    $felipe->attack($yassel);
    $yassel->attack($felipe);
    $yassel->setArmor(new EvadeArmor());
    $felipe->attack($yassel);

