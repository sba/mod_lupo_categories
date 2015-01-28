<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_lupo_categories
 *
 * @copyright   Copyright (C) 2014 databauer / Stefan Bauer, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later
 */

defined('_JEXEC') or die;

/**
 * Helper for mod_lupo_categories
 *
 * @package     Joomla.Site
 * @subpackage  mod_lupo_categories
 * @since       1.0
 */
class ModLupoCategoriesHelper
{
	/**
	 * Retrieve list of categories
	 *
	 * @param   JRegistry  &$params  module parameters
	 *
	 * @return  mixed
	 */
	public static function &getList(&$params)
	{
        if (!class_exists( 'LupoModelLupo' )){
            JLoader::import( 'lupo', JPATH_BASE . '/components/com_lupo/models' );
        }

        $model = & new LupoModelLupo();
        $categories = $model->getCategories();
        $agecategories = $model->getAgecategories();
        $genres = $model->getGenres();

        return array('categories'=>$categories, 'agecategories'=>$agecategories, 'genres'=>$genres);
	}
}
