<?php
Route::get('calculator', function(){
    echo 'Hello, This is from calculator package';
});

Route::get('add/{a}/{b}', 'Devdojo\Calculator\CalculatorController@add');
Route::get('subtract/{a}/{b}', 'Devdojo\Calculator\CalculatorController@subtract');