<?php


Route::group(['prefix' => 'customer'], function ()
{
    Route::get('', ['uses' => 'CustomerController@allCustomers' ]);

    Route::get('{id}', ['uses' => 'CustomerController@getCustomer']);

    Route::post('', ['uses' => 'CustomerController@saveCustomer' ]);

    Route::put('{id}', ['uses' => 'CustomerController@updateCustomer' ]);

    Route::delete('{id}', ['uses' => 'CustomerController@deleteCustomers' ]);
});

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
