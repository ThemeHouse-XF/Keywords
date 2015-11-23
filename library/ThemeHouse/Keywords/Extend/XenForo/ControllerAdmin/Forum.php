<?php

/**
 *
 * @see XenForo_ControllerAdmin_Forum
 */
class ThemeHouse_Keywords_Extend_XenForo_ControllerAdmin_Forum extends XFCP_ThemeHouse_Keywords_Extend_XenForo_ControllerAdmin_Forum
{
    
    public function actionSave()
    {
        $GLOBALS['XenForo_ControllerAdmin_Forum'] = $this;
        
        return parent::actionSave();
    }
}