<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_lupo_categories
 *
 * @copyright   Copyright (C) 2014 databauer / Stefan Bauer, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later
 */

defined('_JEXEC') or die;

require_once( dirname(__FILE__).'/helper.php' );

$moduleclass_sfx = htmlspecialchars($params->get('moduleclass_sfx'));
$list            = ModLupoCategoriesHelper::getList($params);

/* load uikit styles */
jimport('joomla.application.component.helper');
$uikit = JComponentHelper::getParams('com_lupo')->get('lupo_load_uikit_css', "0");
if($uikit!=="0") {
    $document = JFactory::getDocument();
    $document->addStyleSheet(JURI::base()."components/com_lupo/uikit/css/".$uikit, 'text/css', "screen");
}

require JModuleHelper::getLayoutPath('mod_lupo_categories', $params->get('layout', 'default'));
