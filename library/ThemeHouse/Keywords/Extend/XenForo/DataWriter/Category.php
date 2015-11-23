<?php

/**
 *
 * @see XenForo_DataWriter_Category
 */
class ThemeHouse_Keywords_Extend_XenForo_DataWriter_Category extends XFCP_ThemeHouse_Keywords_Extend_XenForo_DataWriter_Category
{

    protected function _getFields()
    {
        $fields = parent::_getFields();
        
        $fields['xf_node']['keyword_th'] = array(
            'type' => self::TYPE_STRING,
            'maxLength' => 50,
            'default' => ''
        );
        
        return $fields;
    }

    protected function _preSave()
    {
        if (isset($GLOBALS['XenForo_ControllerAdmin_Category'])) {
            /* @var $controller XenForo_ControllerAdmin_Category */
            $controller = $GLOBALS['XenForo_ControllerAdmin_Category'];
            
            $input = $controller->getInput()->filter(
                array(
                    'keyword_th' => XenForo_Input::STRING,
                    'keyword_th_shown' => XenForo_Input::BOOLEAN
                ));
            
            if ($input['keyword_th_shown']) {
                $conflict = $this->_getNodeModel()->getNodeBySearchKeyword($input['keyword_th']);
                if ($conflict && $conflict['node_id'] != $this->get('node_id')) {
                    $this->error(new XenForo_Phrase('th_search_keywords_must_be_unique_keywords'),
                        'keyword_th');
                }
                
                $this->set('keyword_th', $input['keyword_th']);
            }
        }
        
        return parent::_preSave();
    }
}