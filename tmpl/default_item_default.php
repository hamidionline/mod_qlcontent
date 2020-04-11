<?php
/**
 * @package		mod_qlcontent
 * @copyright	Copyright (C) 2018 ql.de All rights reserved.
 * @author 		Mareike Riegel mareike.riegel@ql.de
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

// no direct access
defined('_JEXEC') or die;
if (!isset($strField))return;?>
	<div class="<?php echo $strField; ?>">
        <?php echo $strLabel; ?>
        <?php require JModuleHelper::getLayoutPath('mod_qlcontent','default_item_showposition'); ?>
        <?php if (isset($arrItem->$strField))	echo $arrItem->$strField;?>
	</div>
