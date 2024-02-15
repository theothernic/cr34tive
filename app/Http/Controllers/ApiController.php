<?php
    namespace App\Http\Controllers;

    use Bearlovescode\LaravelTraits\Controllers\JsonController as JsonControllerConcern;
    use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
    use Illuminate\Foundation\Validation\ValidatesRequests;

    class ApiController
    {
        use AuthorizesRequests, ValidatesRequests;
        use JsonControllerConcern;
    }
