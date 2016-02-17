{*
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
*}

<br />
<fieldset>
    <legend>
        <img src="{$this_path|escape:'html':'UTF-8'}/logo.png" width="20" height="20"/>
        {l s='Maksuturva payment status' mod='maksuturva'}
    </legend>
    <p>{$maksuturva_status|escape:'html':'UTF-8'}</p>
    {if $maksuturva_check_again}
        <p style="text-decoration: underline;">{l s='Refresh this page to check again' mod='maksuturva'}</p>
    {/if}
</fieldset>
