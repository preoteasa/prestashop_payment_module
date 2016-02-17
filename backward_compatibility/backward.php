<?php
/**
 * 2016 Maksuturva Group Oy
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the GNU Lesser General Public License (LGPLv2.1)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://www.gnu.org/licenses/old-licenses/lgpl-2.1.html
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to info@maksuturva.fi so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to http://www.prestashop.com for more information.
 *
 * @author    Maksuturva Group Oy <info@maksuturva.fi>
 * @copyright 2016 Maksuturva Group Oy
 * @license   http://www.gnu.org/licenses/old-licenses/lgpl-2.1.html GNU Lesser General Public License (LGPLv2.1)
 */

/**
 * Backward function compatibility
 * Need to be called for each module in 1.4
 */

// Get out if the context is already defined
if (!in_array('Context', get_declared_classes())) {
    require_once(dirname(__FILE__) . '/Context.php');
}

// Get out if the Display (BWDisplay to avoid any conflict)) is already defined
if (!in_array('BWDisplay', get_declared_classes())) {
    require_once(dirname(__FILE__) . '/Display.php');
}

// Get out if the HelperForm is already defined
if (!in_array('HelperForm', get_declared_classes())) {
    require_once(dirname(__FILE__) . '/HelperForm.php');
}

// If not under an object we don't have to set the context
if (!isset($this)) {
    return;
} else {
    if (isset($this->context)) {
        // If we are under an 1.5 version and backoffice, we have to set some backward variable
        if (_PS_VERSION_ >= '1.5' && isset($this->context->employee->id) && $this->context->employee->id && isset(AdminController::$currentIndex) && !empty(AdminController::$currentIndex)) {
            global $currentIndex;
            $currentIndex = AdminController::$currentIndex;
        }
        return;
    }
}

$this->context = Context::getContext();
$this->smarty = $this->context->smarty;
