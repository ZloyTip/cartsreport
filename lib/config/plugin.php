<?php
return array (
  'name' => _wp('Products in shopping carts'),
  'description' => _wp('Plugin adds new reports to the store.'),
  'icon' => 'img/cartsreport.png',
  'version' => '0.0.1',
  'vendor' => '972539',
  'handlers' => 
  array (
      'order_action.create' => 'orderActionCreate',
      'frontend_checkout'   => 'frontendCheckout',
      'backend_reports'     => 'backendReports',
      'frontend_cart'       => 'frontendCart',
      'cart_add'            => 'cartAdd',
  ),
);
