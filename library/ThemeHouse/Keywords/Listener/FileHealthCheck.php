<?php

class ThemeHouse_Keywords_Listener_FileHealthCheck
{

    public static function fileHealthCheck(XenForo_ControllerAdmin_Abstract $controller, array &$hashes)
    {
        $hashes = array_merge($hashes,
            array(
                'library/ThemeHouse/Keywords/Extend/XenForo/ControllerAdmin/Category.php' => 'f4bc7b5968a0f882ab199fab1dcbdbe3',
                'library/ThemeHouse/Keywords/Extend/XenForo/ControllerAdmin/Forum.php' => '8e844aede1c576f3f512814130de31ce',
                'library/ThemeHouse/Keywords/Extend/XenForo/ControllerPublic/Search.php' => '0a44318265cf57b6ba78ae974d95566f',
                'library/ThemeHouse/Keywords/Extend/XenForo/DataWriter/Category.php' => '6f2fd6d875ffb538dcb3da30d00ff8c5',
                'library/ThemeHouse/Keywords/Extend/XenForo/DataWriter/Forum.php' => 'c8fd09c2af5dd9ac10c7b4ca7d64c37c',
                'library/ThemeHouse/Keywords/Extend/XenForo/Model/Node.php' => '75d61973ac14252768d6d716064e9729',
                'library/ThemeHouse/Keywords/Install/Controller.php' => '9a2dcd6a01800026335c07f77be64797',
                'library/ThemeHouse/Keywords/Listener/LoadClass.php' => 'fdc6215468a5144de01ad6ccfc059369',
                'library/ThemeHouse/Keywords/Option/Keywords.php' => 'a73aa82f88c5338a4b7f520bcf1377e7',
                'library/ThemeHouse/Install.php' => '18f1441e00e3742460174ab197bec0b7',
                'library/ThemeHouse/Install/20151109.php' => '2e3f16d685652ea2fa82ba11b69204f4',
                'library/ThemeHouse/Deferred.php' => 'ebab3e432fe2f42520de0e36f7f45d88',
                'library/ThemeHouse/Deferred/20150106.php' => 'a311d9aa6f9a0412eeba878417ba7ede',
                'library/ThemeHouse/Listener/ControllerPreDispatch.php' => 'fdebb2d5347398d3974a6f27eb11a3cd',
                'library/ThemeHouse/Listener/ControllerPreDispatch/20150911.php' => 'f2aadc0bd188ad127e363f417b4d23a9',
                'library/ThemeHouse/Listener/InitDependencies.php' => '8f59aaa8ffe56231c4aa47cf2c65f2b0',
                'library/ThemeHouse/Listener/InitDependencies/20150212.php' => 'f04c9dc8fa289895c06c1bcba5d27293',
                'library/ThemeHouse/Listener/LoadClass.php' => '5cad77e1862641ddc2dd693b1aa68a50',
                'library/ThemeHouse/Listener/LoadClass/20150518.php' => 'f4d0d30ba5e5dc51cda07141c39939e3',
            ));
    }
}