<?php

namespace App\Http\Controllers;

use Bearlovescode\LaravelTraits\Controllers\JsonController;
use Bearlovescode\LaravelTraits\Controllers\ViewController;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    use ViewController, JsonController;
}
