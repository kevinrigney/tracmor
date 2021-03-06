<?php
/*
 * Copyright (c)  2009, Tracmor, LLC 
 *
 * This file is part of Tracmor.  
 *
 * Tracmor is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version. 
 *	
 * Tracmor is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with Tracmor; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
 */

	include('../includes/header.inc.php');
	$this->RenderBegin();
?>
<!-- Begin Header Menu -->
<?php 
	$this->ctlHeaderMenu->Render();
?>
<!-- End Header Menu -->

<!-- Begin Shortcut Menu -->
<?php
	$this->ctlShortcutMenu->Render();
?>
<!-- End Shortcut Menu -->
		</td>
		<td>
			<img src="../images/empty.gif" width="10">
		</td>
		<td width="100%" valign="top">
<!-- Begin Search Menu -->
	Asset Tag direct lookup: <?php $this->assetFinder->Render(); ?>
<?php
	$this->ctlSearchMenu->Render();
?>
<!-- End Search  Menu -->
	<?php $this->lblWarning->Render(); ?><br />
	<?php $this->dlgMassEdit->Render(); ?>
	<?php $this->dlgMassDelete->Render(); ?>
	<?php $this->btnMassEdit->Render(); ?>
	<?php $this->btnMassDelete->Render(); ?>
	<?php $this->btnMassEditAggregated->Render(); ?>
	<?php $this->RenderEnd(); ?>		
	<?php $this->assetFinder->Focus(); ?>
	<?php $this->assetFinder->Select(); ?>
	<?php require_once('../includes/footer.inc.php'); ?>
