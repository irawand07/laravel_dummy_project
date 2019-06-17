<?php

namespace App\Api\V1\Controllers;

use Symfony\Component\HttpKernel\Exception\HttpException;
use App\Http\Controllers\Controller;
use App\Api\V1\Requests\RumahRequest;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
use App\Models\Rumah;

class RumahController extends Controller
{
    public function list(RumahRequest $request)
    {
      $rmh = Rumah::paginate(10);
      $jml = $rmh->count();
      return response()->json(['message' => 'jml rumah : '.$jml]);
    }
}
