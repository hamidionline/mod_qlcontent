<?php
/**
 * @package		mod_qlcontent
 * @copyright	Copyright (C) 2018 ql.de All rights reserved.
 * @author 		Mareike Riegel mareike.riegel@ql.de
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

// no direct access
defined('_JEXEC') or die;
if (!isset($strField))return;
?>
	<div class="<?php echo $strField; ?>">
		<?php if (1==$arrItem->link_category) echo '<a href="'.$dataOfItems[$arrItem->id]->catlink.'">';?>
		<?php require JModuleHelper::getLayoutPath('mod_qlcontent','default_item_showposition'); ?>
		<?php if (isset($arrItem->$strField))	echo $arrItem->$strField;?>
		<?php if (1==$arrItem->link_category) echo '</a>';?>
    </div>
