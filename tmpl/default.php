<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_lupo_categories
 *
 * @copyright   Copyright (C) 2014 databauer / Stefan Bauer, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later
 */

defined('_JEXEC') or die;
?>
<style type="text/css">
    /* module mod_lupo_categories */
    .mod_lupo_categories ul {
        margin-left: 0;
    }
    /* for optional module-class suffix*/
    .lupo-icon-dice h3 {
        background: url("<?=JURI::base()?>/media/com_lupo/images/dice-16px.png") no-repeat 0 5px;
        padding-left: 20px;
    }
</style>

<div class="mod_lupo_categories <?php echo $moduleclass_sfx ?>">
	<?php echo $module->content;?>
    <ul class="uk-list uk-list-space">
    <?php
    foreach($list as $category){?>
        <li><a href="<?=$category['link']?>"><?=$category['title']?></a> <div class="uk-badge"><?=$category['number']?></div></li>
    <?php } ?>
    </ul>
</div>
