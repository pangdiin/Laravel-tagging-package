<?php

Route::get('/', function () {
    $tags = \Guiller\Taggy\Models\Tag::get();

    dd($tags);
});
