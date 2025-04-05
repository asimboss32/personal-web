<?php
use App\Http\Controllers\frontendcontroller;
use Illuminate\Support\Facades\Route;



Route:: get('/',[frontendcontroller::class,'index']);
Route:: get('/about',[frontendcontroller::class,'about']);
Route:: get('/resume',[frontendcontroller::class,'resume']);
Route:: get('/contact',[frontendcontroller::class,'contact']);