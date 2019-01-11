<?php
/**
 * Plugin Name: WooCommerce my pay
 * Description: A payment gateway for smth Checkout ().
 * Version: 1.0.0
 * Author: Ivan Ray
 * Author URI: https://woocommerce.com
 * Copyright: © 2018 WooCommerce / PayPal.
 * License: GNU General Public License v3.0
 * License URI: http://www.gnu.org/licenses/gpl-3.0.html
 * Text Domain: woocommerce-gateway-my
 * WC tested up to: 3.5
 * WC requires at least: 2.6
 */
//if !woocommerce - not work
if(! in_array('woocommerce/woocommerce.php', apply_filters( 'activate_plugins', get_option( 'active_plugins' ) ))) return;

//add our gateway to gateways list
add_filter('woocommerce_payment_gateways', 'add_my_gate');
function add_my_gate($gates){
        $gates[] = 'WC_Gateway_My';
        return $gates;
}

//Init
add_action( 'plugins_loaded', 'wc_my_init', 11);

function wc_my_init(){
        //init gateway
        class WC_Gateway_My extends WC_Payment_Gateway {
                function __construct(){
                        $this->id = "my_g";
                        $this->has_fields = true;//input fields like credit cards and etc
                        $this->method_title = "my title";
                        $this->method_description = "my description";
                        $this->supports = array('products');

                        $this->init_form_fields();

                        $this->init_settings();
                        $this->title = $this->get_option('title');
                        $this->description = $this->get_option('description');
                        $this->enabled = $this->get_option('enabled');
                        $this->testmode = $this->get_option('testmode') === 'yes';
                        $this->private_key = $this->testmode ? $this->get_option('test_private_key') : $this->get_option('private_key');
                        $this->publishable_key = $this->testmode ? $this->get_option('test_publishable_key') : $this->get_option('publishable_key');

                        add_action( 'woocommerce_update_options_payment_gateways_' . $this->id, array($this, 'process_admin_options') );
                        add_action( 'wp_enqueue_scripts', array($this, 'payment_scripts') );
                }

                function init_form_fields(){
                        $this->form_fields = apply_filters( 'wc_offline_form_fields', array(
                                'enabled' => array(
                                        'title' => 'Enable/Disable',
                                        'label' => 'Toggle my gateway',
                                        'type' => 'checkbox',
                                        'description' => '',
                                        'default' => 'no'
                                ),
                                'title' => array(
                                        'title' => 'Title',
                                        'type' => 'text',
                                        'description' => '',
                                        'default' => 'credit card',
                                        'desc_tip' => true
                                ),
                                'description' => array(
                                        'title' => 'Description',
                                        'type' => 'textarea',
                                        'description' => '',
                                        'default' => 'Pay with your credit card via our super-cool payment gateway.'
                                ),
                                'testmode' => array(
                                        'title' => 'Test mode',
                                        'label' => 'Toggle test mode',
                                        'type' => 'checkbox',
                                        'description' => 'Using test api keys',
                                        'default' => 'yes',
                                        'desc_tip' => true
                                ),
                                'test_publishable_key' => array(
                                        'title' => 'Test Publishable Key',
                                        'type' => 'text'
                                ),
                                'test_private_key' => array(
                                        'title' => 'Test Private Key',
                                        'type' => 'password'
                                ),
                                'publishable_key' => array(
                                        'title' => 'Publishable Key',
                                        'type' => 'text'
                                ),
                                'private_key' => array(
                                        'title' => 'Private Key',
                                        'type' => 'password'
                                )
                        ) );
                }

                function payment_fields(){
                        if( $this->description ){
                                if( $this->testmode ){
                                        $this->description .= PHP_EOL . "TEST MODE ENABLED.";
                                        $this->description = trim($this->description);
                                }
                                echo wpautop( wp_kses_post( $this->description ) );
                        }

                        echo '<fieldset id="wc-' . esc_attr( $this->id ) . '-cc-form" class="wc-credit-card-form wc-payment-form" style="background:transparent;">';

                        do_action( 'woocommerce_credit_card_form_start', $this->id );
                        echo '<div class="form-row form-row-wide"><label>Card Number <span class="required">*</span></label>
		<input id="misha_ccNo" type="text" autocomplete="off">
		</div>
		<div class="form-row form-row-first">
			<label>Expiry Date <span class="required">*</span></label>
			<input id="misha_expdate" type="text" autocomplete="off" placeholder="MM / YY">
		</div>
		<div class="form-row form-row-last">
			<label>Card Code (CVC) <span class="required">*</span></label>
			<input id="misha_cvv" type="password" autocomplete="off" placeholder="CVC">
		</div>
		<div class="clear"></div>';
                        do_action( 'woocommerce_credit_card_form_end', $this->id );
                        echo '<div class="clear"></div></fieldset>';
                }

                function payment_scripts(){
                        return;
                }

                function validate_fields(){

                }

                function process_payment( $order_id ){
                        $order = wc_get_order( $order_id );
                        $order->update_status( 'on-hold', __('awaiting payment', 'wc-gateway-offline'));

                        $order->reduce_order_stock();
                        WC()->cart->empty_cart();
                        return array( 'result' => 'success',
                                        'redirect'  => $this->get_return_url( $order )
                        );
                }

                function webhook(){

                }
        }
}

?>
