<?php
/*
 +--------------------------------------------------------------------+
 | CiviCRM version 4.7                                                |
 +--------------------------------------------------------------------+
 | Copyright CiviCRM LLC (c) 2004-2015                                |
 +--------------------------------------------------------------------+
 | This file is a part of CiviCRM.                                    |
 |                                                                    |
 | CiviCRM is free software; you can copy, modify, and distribute it  |
 | under the terms of the GNU Affero General Public License           |
 | Version 3, 19 November 2007 and the CiviCRM Licensing Exception.   |
 |                                                                    |
 | CiviCRM is distributed in the hope that it will be useful, but     |
 | WITHOUT ANY WARRANTY; without even the implied warranty of         |
 | MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.               |
 | See the GNU Affero General Public License for more details.        |
 |                                                                    |
 | You should have received a copy of the GNU Affero General Public   |
 | License and the CiviCRM Licensing Exception along                  |
 | with this program; if not, contact CiviCRM LLC                     |
 | at info[AT]civicrm[DOT]org. If you have questions about the        |
 | GNU Affero General Public License or the licensing of CiviCRM,     |
 | see the CiviCRM license FAQ at http://civicrm.org/licensing        |
 +--------------------------------------------------------------------+
 */

/**
 *
 * @package CRM
 * @copyright CiviCRM LLC (c) 2004-2015
 * $Id$
 *
 */

/**
 * Page for displaying list of location types
 */
class CRM_Admin_Page_Navigation extends CRM_Core_Page_Basic {

  /**
   * The action links that we need to display for the browse screen.
   *
   * @var array
   */
  static $_links = NULL;

  /**
   * Get BAO Name.
   *
   * @return string
   *   Classname of BAO.
   */
  public function getBAOName() {
    return 'CRM_Core_BAO_Navigation';
  }

  /**
   * Get action Links.
   *
   * @return array|NULL
   *   (reference) of action links
   */
  public function &links() {
    return NULL;
  }

  /**
   * Get name of edit form.
   *
   * @return string
   *   Classname of edit form.
   */
  public function editForm() {
    return 'CRM_Admin_Form_Navigation';
  }

  /**
   * Get edit form name.
   *
   * @return string
   *   name of this page.
   */
  public function editName() {
    return 'CiviCRM Navigation';
  }

  /**
   * Get user context.
   *
   * @param null $mode
   *
   * @return string
   *   user context.
   */
  public function userContext($mode = NULL) {
    return 'civicrm/admin/menu';
  }

  /**
   * Browse all menus.
   */
  public function browse() {
    // assign home id to the template
    $homeMenuId = CRM_Core_DAO::getFieldValue('CRM_Core_DAO_Navigation', 'Home', 'id', 'name');
    $this->assign('homeMenuId', $homeMenuId);

    // Add jstree support
    CRM_Core_Resources::singleton()
      ->addScriptFile('civicrm', 'packages/jquery/plugins/jstree/jquery.jstree.js', 0, 'html-header', FALSE)
      ->addStyleFile('civicrm', 'packages/jquery/plugins/jstree/themes/default/style.css', 0, 'html-header');
  }

}
