<?php

class ThemeHouse_Keywords_Install_Controller extends ThemeHouse_Install
{

    protected $_resourceManagerUrl = 'https://xenforo.com/community/resources/keywords.4273/';

    protected $_minVersionId = 1020000;

    protected $_minVersionString = '1.2.0';

    protected function _getTableChanges()
    {
        return array(
            'xf_node' => array(
                'keyword_th' => 'varchar(50) NOT NULL DEFAULT \'\''
            )
        );
    }


    protected function _postInstall()
    {
        $addOn = $this->getModelFromCache('XenForo_Model_AddOn')->getAddOnById('YoYo_');
        if ($addOn) {
            $db->query("
                UPDATE xf_node
                    SET keyword_th=keyword_waindigo");
        }
    }
}