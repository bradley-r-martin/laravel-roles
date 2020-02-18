<?php


$endpoints = [
  'except' => ['create', 'edit']
];

Route::resource('api/1.0/roles', 'BRM\Roles\app\Controllers\Roles', $endpoints);
