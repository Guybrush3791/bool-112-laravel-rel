<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;

Route :: get('/', [UserController :: class, 'index'])
    -> name('user.index');

Route :: get('/posts', [PostController :: class, 'index'])
    -> name('post.index');
