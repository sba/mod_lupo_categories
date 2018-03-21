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
        $categories = $model->getCategories(false, false);
        $agecategories = $model->getAgecategories(false, false);
        $genres = $model->getGenres();

        //filter genres
		$filter_param = $params->get('filter_genres', "");
		if($filter_param!=""){
			$filter_genres = explode("\r\n",$filter_param);

			$genres_new = array();
			foreach($genres as $genre){
				if(in_array($genre['title'], $filter_genres)){
					$genres_new[] = $genre;
				}
			}
			$genres = $genres_new;
		}

		if($newgames[0]['number']==0){
			$newgames=false;
		}

        $return = array('newgames'=>$newgames, 'categories'=>$categories, 'agecategories'=>$agecategories, 'genres'=>$genres);
        return $return;
	}
}
