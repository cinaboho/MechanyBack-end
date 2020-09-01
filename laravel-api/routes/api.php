<?php

Use App\Article;


Route::post('registrou','UsuarioController@registroUser');
Route::put('login', 'UsuarioController@login');
Route::get('mecanico/{personal_mecanico}', 'Personal_MecanicoController@buscarId');

