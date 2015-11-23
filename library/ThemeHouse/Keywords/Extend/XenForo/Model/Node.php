<?php

/**
 *
 * @see XenForo_Model_Node
 */
class ThemeHouse_Keywords_Extend_XenForo_Model_Node extends XFCP_ThemeHouse_Keywords_Extend_XenForo_Model_Node
{
    
    /**
     * Gets a node of the specified type that has a given search keyword.
     *
     * @param string $nodeName
     * @param array $fetchOptions
     *
     * @return array|false
     */
    public function getNodeBySearchKeyword($keyword, array $fetchOptions = array())
    {
        $fetchOptions = array_merge(
            array(
                'permissionCombinationId' => 0
            ), $fetchOptions
        );
    
        $permissionCombinationId = intval($fetchOptions['permissionCombinationId']);
    
        $data = $this->_getDb()->fetchRow('
			SELECT node.*
				' . ($permissionCombinationId ? ', permission.cache_value AS node_permission_cache' : '') . '
			FROM xf_node AS node
			' . ($permissionCombinationId ? '
				LEFT JOIN xf_permission_cache_content AS permission
					ON (permission.permission_combination_id = ' . $permissionCombinationId . '
						AND permission.content_type = \'node\'
						AND permission.content_id = node.node_id)
				' : '') . '
			WHERE node.keyword_th = ?
		', $keyword);
    
        return $data;
    }
}