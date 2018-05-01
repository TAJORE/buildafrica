<?php
/**
* 2007-2018 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
*  @author    PrestaShop SA <contact@prestashop.com>
*  @copyright 2007-2018 PrestaShop SA
*  @license   http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*/

if (!defined('_PS_VERSION_')) {
    exit;
}

class Dohone extends PaymentModule
{
    protected $config_form = false;

    public function __construct()
    {
        $this->bootstrap = true;
        $this->name = 'Dohone';
        $this->tab = 'payments_gateways';
        $this->version = '1.6.1';
        $this->author = 'Nanfack kennang eric';
        $this->need_instance = 0;

        /**
         * Set $this->bootstrap to true if your module is compliant with bootstrap (PrestaShop 1.6)
         */
        $this->bootstrap = true;

        parent::__construct();

        $this->displayName = $this->l('Dohone');
        $this->description = $this->l('Intégration du module de paiement mobile en utilisant Api dohone');

        $this->limited_countries = array('FR');

        $this->limited_countries = array('CM');
        $this->limited_currencies = array('EUR');

        $this->ps_versions_compliancy = array('min' => '1.6', 'max' => _PS_VERSION_);
    }

    /**
     * Don't forget to create update methods if needed:
     * http://doc.prestashop.com/display/PS16/Enabling+the+Auto-Update
     */
    public function install()
    {
        if (extension_loaded('curl') == false)
        {
            $this->_errors[] = $this->l('You have to enable the cURL extension on your server to install this module');
            return false;
        }

        $iso_code = Country::getIsoById(Configuration::get('PS_COUNTRY_DEFAULT'));

        if (in_array($iso_code, $this->limited_countries) == false)
        {
            $this->_errors[] = $this->l('This module is not available in your country');
            return false;
        }

        Configuration::updateValue('DOHONE_LIVE_MODE', false);

        return parent::install() &&
            $this->registerHook('header') &&
            $this->registerHook('backOfficeHeader') &&
            $this->registerHook('payment') &&
            $this->registerHook('paymentReturn') &&
            $this->registerHook('actionPaymentConfirmation') &&
            $this->registerHook('displayPayment') &&
            $this->registerHook('displayPaymentReturn');
    }

    public function uninstall()
    {
        Configuration::deleteByName('DOHONE_LIVE_MODE');

        return parent::uninstall();
    }

    /**
     * Load the configuration form
     */
    public function getContent()
    {
        /**
         * If values have been submitted in the form, process.
         */
        if (((bool)Tools::isSubmit('submit')) == true) {
            $this->postProcess();
        }

        $this->context->smarty->assign('module_dir', $this->_path);

        $output = $this->context->smarty->fetch($this->local_path.'views/templates/admin/configure.tpl');

        return $output.$this->renderForm();

        ;
    }

    /**
     * Create the form that will be displayed in the configuration of your module.
     */
    protected function renderForm()
    {


        $fields_form = array(
            'form' => array(
                'legend' => array(
                    'title' => $this->l('Contact details'),
                    'icon' => 'icon-envelope'
                ),
                'input' => array(
                    array(
                        'type' => 'hidden',
                        'label' => $this->l('Account owner'),
                        'name' => 'cmd',
                        'value'=> 'start',
                        'required' => true
                    ),
                    array(
                        'type' => 'hidden',
                        'label' => $this->l('Account owner'),
                        'name' => 'rN',
                        'value'=> 'testeur',
                        'required' => true
                    ),
                    array(
                        'type' => 'hidden',
                        'label' => $this->l('Account owner'),
                        'name' => 'rT',
                        'value'=> '6xxxxxxxxx',
                        'required' => true
                    ),
                    array(
                        'type' => 'hidden',
                        'label' => $this->l('Account owner'),
                        'name' => 'rE',
                        'value'=> 'xxxx@yahoo.fr',
                        'required' => true
                    ),
                        array(
                            'type' => 'hidden',
                            'label' => $this->l('Account owner'),
                            'name' => 'rH',
                            'value'=> 'xxxxxxx',
                            'required' => true
                        ),
                        array(
                            'type' => 'hidden',
                            'label' => $this->l('Account owner'),
                            'name' => 'rI',
                            'value'=> 'xxxxxxxx',
                            'required' => true
                        ),
                        array(
                            'type' => 'hidden',
                            'label' => $this->l('Account owner'),
                            'name' => 'rMt',
                            'value'=> '10400',
                            'required' => true
                        ),

                        array(
                            'type' => 'hidden',
                            'label' => $this->l('Account owner'),
                            'name' => 'rDvs',
                            'value'=> 'XAF',
                            'required' => true
                        ),

                        array(
                            'type' => 'hidden',
                            'label' => $this->l('Account owner'),
                            'name' => 'rOnly',
                            'value'=> 'X,Y,Z',
                            'required' => true
                        ),

                        array(
                            'type' => 'hidden',
                            'label' => $this->l('Account owner'),
                            'name' => 'rLocale',
                            'value'=> 'fr',
                            'required' => true
                        ),

                        array(
                            'type' => 'hidden',
                            'label' => $this->l('Account owner'),
                            'name' => 'source',
                            'value'=> 'my Shop Name',
                            'required' => true
                        ),
                        array(
                            'type' => 'hidden',
                            'label' => $this->l('Account owner'),
                            'name' => 'endPage',
                            'value'=> 'http://www.ecobuildafrica.com/success.php',
                            'required' => true
                        ),
                        array(
                            'type' => 'hidden',
                            'label' => $this->l('Account owner'),
                            'name' => 'notifyPage',
                            'value'=> 'http://www.ecobuildafica.com',
                            'required' => true
                        ),
                        array(
                            'type' => 'hidden',
                            'label' => $this->l('Account owner'),
                            'name' => 'cancelPage',
                            'value'=> 'http://www.ecobuildafica.com',
                            'required' => true
                        ),
                        array(
                            'type' => 'hidden',
                            'label' => $this->l('Account owner'),
                            'name' => 'logo',
                            'value'=> 'http://www.ecobuildafrica.com/logo.png',
                            'required' => true
                        ),
                        array(
                            'type' => 'hidden',
                            'label' => $this->l('Account owner'),
                            'name' => 'notif',
                            'value'=> "paiement d'un article",
                            'required' => true
                        ),


                ),
                'submit' => array(
                    'title' => $this->l('Save'),
                    'value'=>'valider',
                )
            ),
        );






        $helper = new HelperForm();

        $helper->show_toolbar = false;
        $helper->table = $this->table;
        $helper->module = $this;
        $helper->default_form_language = $this->context->language->id;
        $helper->allow_employee_form_lang = Configuration::get('PS_BO_ALLOW_EMPLOYEE_FORM_LANG', 0);

        $helper->identifier = $this->identifier;
        $helper->submit_action = 'submitDohoneModule';
        $helper->currentIndex = $this->context->link->getAdminLink('AdminModules', false)
            .'&configure='.$this->name.'&tab_module='.$this->tab.'&module_name='.$this->name;
        $helper->token = Tools::getAdminTokenLite('AdminModules');

        $helper->tpl_vars = array(
            'fields_value' => $this->getConfigFormValues(



            ), /* Add values for your inputs */
            'languages' => $this->context->controller->getLanguages(),
            'id_language' => $this->context->language->id,
        );

        return $helper->generateForm(array($this->getConfigForm()));
    }

    /**
     * Create the structure of your form.
     */


    protected function getConfigForm()
    {
        return array(
            'form' => array(
                'legend' => array(
                'title' => $this->l('Settings'),
                'icon' => 'icon-cogs',
                ),
                'input' => array(
                    array(
                        'type' => 'switch',
                        'label' => $this->l('Live mode'),
                        'name' => 'DOHONE_LIVE_MODE',
                        'is_bool' => true,
                        'desc' => $this->l('Use this module in live mode'),
                        'values' => array(
                            array(
                                'id' => 'active_on',
                                'value' => true,
                                'label' => $this->l('Enabled')
                            ),
                            array(
                                'id' => 'active_off',
                                'value' => false,
                                'label' => $this->l('Disabled')
                            )
                        ),
                    ),
                    array(
                        'col' => 3,
                        'type' => 'text',
                        'prefix' => '<i class="icon icon-envelope"></i>',
                        'desc' => $this->l('Enter a valid email address'),
                        'name' => 'DOHONE_ACCOUNT_EMAIL',
                        'label' => $this->l('Email'),
                    ),
                    array(
                        'type' => 'password',
                        'name' => 'DOHONE_ACCOUNT_PASSWORD',
                        'label' => $this->l('Password'),
                    ),
                ),
                'submit' => array(
                    'title' => $this->l('Save'),
                ),
            ),
        );
    }

    /**
     * Set values for the inputs.
     */
    protected function getConfigFormValues()
    {
        return array(
            'DOHONE_LIVE_MODE' => Configuration::get('DOHONE_LIVE_MODE', true),
            'DOHONE_ACCOUNT_EMAIL' => Configuration::get('DOHONE_ACCOUNT_EMAIL', 'contact@prestashop.com'),
            'DOHONE_ACCOUNT_PASSWORD' => Configuration::get('DOHONE_ACCOUNT_PASSWORD', null),
        );
    }

    /**
     * Save form data.
     */
    protected function postProcess()
    {
        $form_values = $this->getConfigFormValues();

        foreach (array_keys($form_values) as $key) {
            Configuration::updateValue($key, Tools::getValue($key));
        }
    }

    /**
    * Add the CSS & JavaScript files you want to be loaded in the BO.
    */
    public function hookBackOfficeHeader()
    {
        if (Tools::getValue('module_name') == $this->name) {
            $this->context->controller->addJS($this->_path.'views/js/back.js');
            $this->context->controller->addCSS($this->_path.'views/css/back.css');
        }
    }

    /**
     * Add the CSS & JavaScript files you want to be added on the FO.
     */
    public function hookHeader()
    {
        $this->context->controller->addJS($this->_path.'/views/js/front.js');
        $this->context->controller->addCSS($this->_path.'/views/css/front.css');
    }

    /**
     * This method is used to render the payment button,
     * Take care if the button should be displayed or not.
     */
    public function hookPayment($params)
    {
        $currency_id = $params['cart']->id_currency;
        $currency = new Currency((int)$currency_id);

        if (in_array($currency->iso_code, $this->limited_currencies) == false)
            return false;

        $this->smarty->assign('module_dir', $this->_path);

        return $this->display(__FILE__, 'views/templates/hook/payment.tpl');
    }

    /**
     * This hook is used to display the order confirmation page.
     */
    public function hookPaymentReturn($params)
    {
        if ($this->active == false)
            return;

        $order = $params['objOrder'];

        if ($order->getCurrentOrderState()->id != Configuration::get('PS_OS_ERROR'))
            $this->smarty->assign('status', 'ok');

        $this->smarty->assign(array(
            'id_order' => $order->id,
            'reference' => $order->reference,
            'params' => $params,
            'total' => Tools::displayPrice($params['total_to_pay'], $params['currencyObj'], false),
        ));

        return $this->display(__FILE__, 'views/templates/hook/confirmation.tpl');
    }

    public function hookActionPaymentConfirmation()
    {

        /* Place your code here. */

    }

    public function hookDisplayPayment()
    {


        /* Place your code here. */
        return $this->display(__FILE__, 'views/templates/hook/pay.tpl');
    }

    public function hookDisplayPaymentReturn()
    {
        /* Place your code here. */
    }




}
