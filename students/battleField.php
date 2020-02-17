<?php

require_once __DIR__ . "/../base/baseBattleField.php";
require_once "warrior.php";


class BattleField extends BaseBattleField
{
    public static function createMyWarrior()
    {
        $claptrap = new MarvelWarrior($GLOBALS['warriorID']);
        $claptrap->SetImageUrl('http://image.jeuxvideo.com/medias-md/155723/1557229788-9264-card.jpg');
        $claptrapWeapon = new Weapon($GLOBALS['warriorID'], 10);
        $claptrapWeapon->SetImageUrl('https://www.lesfruitsetlegumesfrais.com/_upload/cache/ressources/produits/carotte/carotte_346_346_filled.jpg');
        $claptrap->SetWeapon($claptrapWeapon);
        $claptrap->saveNew();

    }
    public static function createOtherWarrior()
    {
        $limace = new MarvelWarrior('TheSeaLimace');
        $limace->SetImageUrl('https://geo.img.pmdstatic.net/fit/http.3A.2F.2Fprd2-bone-image.2Es3-website-eu-west-1.2Eamazonaws.2Ecom.2FGEO.2Fvar.2Fgeo.2Fstorage.2Fimages.2Fmedia.2Fjorunna-parva-une-limace-de-mer-qui-ressemble-etrangement-a-un-lapin.2F1917484-2-fre-FR.2Fjorunna-parva-une-limace-de-mer-qui-ressemble-etrangement-a-un-lapin.2Ejpg/1120x630/background-color/ffffff/quality/90/les-lapins-de-mer-nouvelles-stars-du-japon.jpg');
        $limacepWeapon = new Weapon('TheSeaLimace', 15);
        $limacepWeapon->SetImageUrl('https://www.lesfruitsetlegumesfrais.com/_upload/cache/ressources/produits/carotte/carotte_346_346_filled.jpg');
        $limace->SetWeapon($limacepWeapon);
        $limace->saveNew();

    }



}
