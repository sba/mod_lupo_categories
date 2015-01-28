<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_lupo_categories
 *
 * @copyright   Copyright (C) 2015 databauer / Stefan Bauer, Inc. All rights reserved.
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
    if($params->get('show_newgames')) {
        foreach ($list['new'] as $category) {
            ?>
            <li><a href="<?= $category['link'] ?>"><?= $category['title'] ?></a>

                <div class="uk-badge uk-float-right"><?= $category['number'] ?></div>
            </li>
        <?php }
    }

    if($params->get('show_newgames')) {
        ?><hr /><?php
    }

    if($params->get('show_categories')) {
        foreach ($list['categories'] as $category) {
            ?>
            <li><a href="<?= $category['link'] ?>"><?= $category['title'] ?></a>

                <div class="uk-badge uk-float-right"><?= $category['number'] ?></div>
            </li>
        <?php }
    }

    if($params->get('show_categories') && $params->get('show_agecategories')) {
        ?><hr /><?php
    }

    if($params->get('show_agecategories')) {
        foreach ($list['agecategories'] as $category) {
            ?>
            <li><a href="<?= $category['link'] ?>"><?= $category['title'] ?></a>

                <div class="uk-badge uk-float-right"><?= $category['number'] ?></div>
            </li>
        <?php }
    }

    if(($params->get('show_categories') || $params->get('show_agecategories')) && $params->get('show_genres')) {
        ?><hr /><?php
    }

    if($params->get('show_genres')) {
        foreach ($list['genres'] as $category) {
            ?>
            <li><a href="<?= $category['link'] ?>"><?= $category['title'] ?></a>

                <div class="uk-badge uk-float-right"><?= $category['number'] ?></div>
            </li>
        <?php }
    }?>
    </ul>
</div>
