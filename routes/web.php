<?php

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

Route::group(['prefix' => 'api'], function ()
{
    Route::group(['prefix' => 'user'], function ()
    {
        Route::get('', function()
        {
            return 'devolver todos usuarios';
        });

        Route::get('{id}', function($id)
        {
            return 'devolver o usuario de ID ' . $id;
        });

        Route::post('', function()
        {
            return 'criar um novo usuário baseado na informação recebida';
        });

        Route::put('{id}', function($id)
        {
            return 'Atualizar o usuário de ID ' . $id;
        });

        Route::delete('{id}', function($id)
        {
            return 'Remover o usuário de ID ' . $id;
        });



    });
});

Route::group(['prefix' => 'api'], function ()
{
    Route::group(['prefix' => 'contact'], function ()
    {
        Route::get('', function()
        {
            return 'devolver todos contatos';
        });

        Route::get('{id}', function($id)
        {
            return 'devolver o contato de ID ' . $id;
        });

        Route::post('', function()
        {
            return 'criar um novo contato baseado na informação recebida';
        });

        Route::put('{id}', function($id)
        {
            return 'Atualizar o contato de ID ' . $id;
        });

        Route::delete('{id}', function($id)
        {
            return 'Remover o contato de ID ' . $id;
        });



    });
});




Route::get('/', function () {
    return view('welcome');
});
