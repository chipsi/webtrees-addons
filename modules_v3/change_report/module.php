<?php
// webtrees: Web based Family History software
// Copyright (C) 2014 webtrees development team.
//
// Derived from PhpGedView
// Copyright (C) 2010 John Finlay
//
// This program is free software; you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation; either version 2 of the License, or
// (at your option) any later version.
//
// This program is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with this program; if not, write to the Free Software
// Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA 02110-1301 USA

/**
 * Class change_report_WT_Module
 */
class change_report_WT_Module extends WT_Module implements WT_Module_Report {
	/** {@inheritdoc} */
	public function getTitle() {
		// This text also appears in the .XML file - update both together
		return /* I18N: Name of a module/report */ WT_I18N::translate('Changes');
	}

	/** {@inheritdoc} */
	public function getDescription() {
		// This text also appears in the .XML file - update both together
		return /* I18N: Description of the “Changes” module */ WT_I18N::translate('A report of recent and pending changes.');
	}

	/** {@inheritdoc} */
	public function defaultAccessLevel() {
		return WT_PRIV_USER;
	}

	/** {@inheritdoc} */
	public function getReportMenus() {
		$menus=array();
		$menu=new WT_Menu(
			$this->getTitle(),
			'reportengine.php?ged='.WT_GEDURL.'&amp;action=setup&amp;report='.WT_MODULES_DIR.$this->getName().'/report.xml',
			'menu-report-'.$this->getName()
		);
		$menus[]=$menu;

		return $menus;
	}
}
