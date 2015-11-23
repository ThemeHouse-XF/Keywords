<?php

/**
 *
 * @see XenForo_ControllerAdmin_Category
 */
class ThemeHouse_Keywords_Extend_XenForo_ControllerAdmin_Category extends XFCP_ThemeHouse_Keywords_Extend_XenForo_ControllerAdmin_Category
{

    public function actionSave()
    {
        $GLOBALS['XenForo_ControllerAdmin_Category'] = $this;
    
        return parent::actionSave();
    }
}