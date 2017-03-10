<?php

use App\Lesson;

Route::get('/', function () {
    
	$lesson = Lesson::find(1);
	
	dd($lesson->tags);

});
