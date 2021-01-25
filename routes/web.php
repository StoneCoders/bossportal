<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('', 'AccountController@login');
Route::post('/postLogin', 'AccountController@postLogin');
Route::get('logout', 'AccountController@logout');
Route::get('dashboard', 'AccountController@dashboard');
Route::get('accounts', 'AccountController@index');
Route::get('accounts/{id}/vnf/{vnfId}/instances', 'AccountController@instances');
Route::get('accounts/{id}/vnf/{vnfId}/details', 'AccountController@details');

Route::get('client-summary', 'ClientSummaryController@index');
Route::get('client-summary/{id}/show', 'ClientSummaryController@show');

Route::get('tunnels', 'TunnelController@index');
Route::post('tunnels/store', 'TunnelController@store');

Route::get('ssids', 'SsidController@index');
Route::post('ssids/store', 'SsidController@store');

Route::get('captivePortals', 'CaptivePortalController@index');
Route::post('captivePortals/store', 'CaptivePortalController@store');

Route::get('clients', 'ClientController@index');
Route::post('clients', 'ClientController@store');

Route::get('provisioning/trafficProfiles', 'ProvisioningController@trafficProfiles');

Route::get('nodes', 'NodeController@index');
Route::get('nodes/{id}', 'NodeController@show');
Route::post('nodes/{id}/action', 'NodeController@action');
Route::get('nodes/{id}/summary/{instanceId}', 'NodeController@summary');

Route::get('api/nodes/{id}/instances/{instanceId}/state', 'NodeController@instanceState');








