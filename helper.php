<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_lupo_categories
 *
 * @copyright   Copyright (C) databauer / Stefan Bauer
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

        $model = new LupoModelLupo();
        $newgames = $model->getCategoryNew();
        $categories = $model->getCategories(false);
        $agecategories = $model->getAgecategories(false);
        $genres = $model->getGenres();

		if($newgames[0]['number']==0){
			$newgames=false;
		}

        $return = array('newgames'=>$newgames, 'categories'=>$categories, 'agecategories'=>$agecategories, 'genres'=>$genres);
        return $return;
	}
}
