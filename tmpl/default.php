<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_lupo_categories
 *
 * @copyright   Copyright (C) databauer / Stefan Bauer, Inc. All rights reserved.
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
    $seperator=false;
    foreach($list as $section => $items) {

        if ($params->get('show_'.$section)) {
            if ($seperator) {?>
                <hr/><?php
            }
            $seperator=true;
            foreach ($items as $item) {
                ?>
                <li><a href="<?= $item['link'] ?>"><?= $item['title'] ?></a>

                    <div class="uk-badge uk-float-right"><?= $item['number'] ?></div>
                </li>
            <?php }
        }
    }
    ?>
    </ul>
</div>
