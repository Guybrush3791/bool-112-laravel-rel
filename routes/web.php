<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;

Route :: get('/', [UserController :: class, 'index'])
    -> name('user.index');

Route :: get('/posts', [PostController :: class, 'index'])
    -> name('post.index');

Route :: get('/posts/create', [PostController :: class, 'create'])
    -> name('post.create');

Route :: post('/posts/create', [PostController :: class, 'store'])
    -> name('post.store');

Route :: get('/posts/{id}/edit', [PostController :: class, 'edit'])
    -> name('post.edit');
Route :: put('/posts/{id}/edit', [PostController :: class, 'update'])
    -> name('post.update');
