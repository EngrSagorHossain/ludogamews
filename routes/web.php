<?php

use App\Events\Ludogame;
use Illuminate\Support\Facades\Route;

Route::get ( '/', function ()
    {
    return view ( 'ludo' );
    } );

Route::get ( '/ludo', function ()
    {
    $data = [ 
        'user'      => '10',
        'user_name' => 'sagor',
    ];
    broadcast ( new Ludogame( $data ) );
    } );
