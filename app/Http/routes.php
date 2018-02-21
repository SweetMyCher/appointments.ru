<?php

Route::get('/', function() {
        return view('welcome1');

});

Route::group(['middleware' =>['web']], function() {
    //
});
?>