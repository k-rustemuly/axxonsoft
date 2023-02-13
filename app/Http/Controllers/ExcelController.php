<?php

namespace App\Http\Controllers;

use App\Domain\Services\ExcelService;
use Illuminate\Http\Request;

class ExcelController extends Controller
{
    public function show(Request $request, ExcelService $service)
    {
        $index = $request->index??1;
        $coordinate = $service->calculateCoordinate($index);
        return "{$index} => {$coordinate}";
    }

}
