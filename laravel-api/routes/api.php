<?php

Use App\Article;


Route::post('registrou','UsuarioController@registroUser');//edgar
Route::put('login', 'UsuarioController@login');//edwin
Route::get('mecanico/{personal_mecanico}', 'Personal_MecanicoController@buscarId');//cindy

