<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\ApiKey;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ApiKeyMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        $apiKey = $request->header('X-API-Key'); // * CHANGE 'X-API-KEY' TO YOUR ACTUAL HEADER KEY. * //

        if (empty($apiKey)) {
            return response('Unauthorized. API key is missing.', 401);
        }

        // * VERIFY THE API KEY AGAINST THE APIKEY MODEL * //
        abort_if (!ApiKey::where('key', $apiKey)->first(), 404);

        return $next($request);
    }
}
