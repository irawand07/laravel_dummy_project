<?php

namespace App\Api\V1\Controllers;

use Symfony\Component\HttpKernel\Exception\HttpException;
use App\Http\Controllers\Controller;
use App\Api\V1\Requests\RumahRequest;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;

class RumahController extends Controller
{
    public function list(RumahRequest $request)
    {
        return response()->json(['message' => 'rumah']);
    }
}
