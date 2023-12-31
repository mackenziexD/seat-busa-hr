<?php

Route::group([
    
    'namespace' => 'Helious\SeatBusaHr\Http\Controllers\Character',
    'prefix' => 'characters',
    'middleware' => [
        'web',
        'auth',
    ],
], function()
{

    Route::group([
        'prefix' => '/{character}/notes',
        'middleware' => 'can:seat-busa-hr.access',
    ], function (){
        Route::get('/', [
            'uses' => 'HrController@index',
            'as' => 'seat-busa-hr::notes.index',
        ]);

        Route::match(['get', 'post'], '/create', [
            'uses' => 'HrController@create',
            'as' => 'seat-busa-hr::notes.create',
        ]);

        Route::match(['get', 'post'], '/edit/{note}', [
            'uses' => 'HrController@edit',
            'as' => 'seat-busa-hr::notes.edit',
        ]);

        Route::match(['get', 'post'], '/delete/{note}', [
            'uses' => 'HrController@delete',
            'as' => 'seat-busa-hr::notes.delete',
        ]);
    });

});