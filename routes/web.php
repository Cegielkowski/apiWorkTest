<?php
use  App\Http\Controllers\ContactController;

Route::group(['prefix' => 'api'], function ()
{
    Route::group(['prefix' => 'customer'], function ()
    {
        Route::get('', ['uses' => 'CustomerController@allCustomers' ]);

        Route::get('{id}', ['uses' => 'CustomerController@getCustomer']);

        Route::post('', ['uses' => 'CustomerController@saveCustomer' ]);

        Route::put('{id}', ['uses' => 'CustomerController@updateCustomer' ]);

        Route::delete('{id}', ['uses' => 'CustomerController@deleteCustomers' ]);
    });
});

