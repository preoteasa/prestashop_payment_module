<?php
/**
 * 2017 Maksuturva Group Oy
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the GNU Lesser General Public License (LGPLv2.1)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * https://www.gnu.org/licenses/lgpl-2.1.html
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
 * @copyright 2017 Maksuturva Group Oy
 * @license   https://www.gnu.org/licenses/lgpl-2.1.html GNU Lesser General Public License (LGPLv2.1)
 */

/**
 * Class allow to display tpl on the FO
 */
class BWDisplay extends FrontController
{
    // Assign template, on 1.4 create it else assign for 1.5
    public function setTemplate($template)
    {
        if (_PS_VERSION_ >= '1.5') {
            parent::setTemplate($template);
        } else {
            $this->template = $template;
        }
    }

    // Overload displayContent for 1.4
    public function displayContent()
    {
        parent::displayContent();

        echo Context::getContext()->smarty->fetch($this->template);
    }
}
