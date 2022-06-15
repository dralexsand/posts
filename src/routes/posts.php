<?php

use Dralexsand\Posts\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

/*Route::get('/posts', function () {
    return view('posts::posts.index');
});*/

Route::get('posts', [PostController::class, 'index'])
    ->name('posts');
