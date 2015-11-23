<?php

class ThemeHouse_Keywords_Listener_LoadClass extends ThemeHouse_Listener_LoadClass
{

    protected function _getExtendedClasses()
    {
        return array(
            'ThemeHouse_Keywords' => array(
                'controller' => array(
                    'XenForo_ControllerPublic_Search',
                    'XenForo_ControllerAdmin_Forum',
                    'XenForo_ControllerAdmin_Category'
                ),
                'datawriter' => array(
                    'XenForo_DataWriter_Forum',
                    'XenForo_DataWriter_Category'
                ),
                'model' => array(
                    'XenForo_Model_Node'
                ),
            ),
        );
    }

    public static function loadClassController($class, array &$extend)
    {
        $extend = self::createAndRun('ThemeHouse_Keywords_Listener_LoadClass', $class, $extend, 'controller');
    }

    public static function loadClassDataWriter($class, array &$extend)
    {
        $extend = self::createAndRun('ThemeHouse_Keywords_Listener_LoadClass', $class, $extend, 'datawriter');
    }

    public static function loadClassModel($class, array &$extend)
    {
        $extend = self::createAndRun('ThemeHouse_Keywords_Listener_LoadClass', $class, $extend, 'model');
    }
}