<?php

/**
 *
 * @see XenForo_ControllerPublic_Search
 */
class ThemeHouse_Keywords_Extend_XenForo_ControllerPublic_Search extends XFCP_ThemeHouse_Keywords_Extend_XenForo_ControllerPublic_Search
{

    /**
     *
     * @see XenForo_ControllerPublic_Search::actionSearch()
     */
    public function actionSearch()
    {
        $keywords = $this->_input->filterSingle('keywords', XenForo_Input::STRING);
        
        $xenOptions = XenForo_Application::get('options');
        
        foreach ($xenOptions->th_keywords_keywords as $keyword) {
            if (strtolower($keyword['keyword']) == strtolower($keywords)) {
                return $this->responseRedirect(XenForo_ControllerResponse_Redirect::RESOURCE_CANONICAL, 
                    XenForo_Link::buildPublicLink($keyword['route']));
            }
        }
        
        /* @var $nodeModel XenForo_Model_Node */
        $nodeModel = $this->_getNodeModel();
        
        $nodes = $nodeModel->getViewableNodeList(null, false);
        
        foreach ($nodes as $node) {
            if (strtolower($node['keyword_th']) == strtolower($keywords)) {
                if ($node['node_type_id'] == 'Forum') {
                    return $this->responseRedirect(XenForo_ControllerResponse_Redirect::RESOURCE_CANONICAL,
                        XenForo_Link::buildPublicLink('forums', $node));
                } elseif ($node['node_type_id'] == 'Category') {
                    return $this->responseRedirect(XenForo_ControllerResponse_Redirect::RESOURCE_CANONICAL,
                        XenForo_Link::buildPublicLink('categories', $node));
                }
            }
        }
        
        return parent::actionSearch();
    }
}