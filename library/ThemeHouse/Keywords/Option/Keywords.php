<?php

class ThemeHouse_Keywords_Option_Keywords
{

    public static function renderOption(XenForo_View $view, $fieldPrefix, array $preparedOption, $canEdit)
    {
        $editLink = $view->createTemplateObject('option_list_option_editlink', 
            array(
                'preparedOption' => $preparedOption,
                'canEditOptionDefinition' => $canEdit
            ));
        
        return $view->createTemplateObject('th_option_template_keywords',
            array(
                'fieldPrefix' => $fieldPrefix,
                'listedFieldName' => $fieldPrefix . '_listed[]',
                'preparedOption' => $preparedOption,
                'formatParams' => $preparedOption['formatParams'],
                'editLink' => $editLink,
                
                'nextCounter' => count($preparedOption['option_value'])
            ));
    }

    public static function verifyOption(array &$keywords, XenForo_DataWriter $dw, $fieldName)
    {
        $output = array();
        
        foreach ($keywords as $keyword) {
            if (empty($keyword['keyword']) || empty($keyword['route'])) {
                continue;
            }
            
            $output[] = array(
                'keyword' => strtolower($keyword['keyword']),
                'route' => $keyword['route']
            );
        }
        
        $keywords = $output;
        
        return true;
    }
}