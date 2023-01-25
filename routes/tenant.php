<?php

use Illuminate\Support\Facades\Route;

Route::webhooks('woocommerce-webhook/create-coupon', 'woocommerce-create-coupon');
Route::webhooks('woocommerce-webhook/update-coupon', 'woocommerce-update-coupon');
Route::webhooks('woocommerce-webhook/delete-coupon', 'woocommerce-delete-coupon');
// Customers
Route::webhooks('woocommerce-webhook/create-customer', 'woocommerce-create-customer');
Route::webhooks('woocommerce-webhook/update-customer', 'woocommerce-update-customer');
Route::webhooks('woocommerce-webhook/delete-customer', 'woocommerce-delete-customer');
// Orders
Route::webhooks('woocommerce-webhook/create-order', 'woocommerce-create-order');
Route::webhooks('woocommerce-webhook/update-order', 'woocommerce-update-order');
Route::webhooks('woocommerce-webhook/delete-order', 'woocommerce-delete-order');
// Orders statuses
Route::webhooks('woocommerce-webhook/order-status-changed', 'woocommerce-order-status-changed');
// Products
Route::webhooks('woocommerce-webhook/create-product', 'woocommerce-create-product');
Route::webhooks('woocommerce-webhook/update-product', 'woocommerce-update-product');
Route::webhooks('woocommerce-webhook/delete-product', 'woocommerce-delete-product');
