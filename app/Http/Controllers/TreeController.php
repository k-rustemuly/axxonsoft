<?php

namespace App\Http\Controllers;

use App\Domain\Services\TreeService;
use App\Http\Requests\TreeRequest;

class TreeController extends Controller
{
    public function convert(TreeRequest $request, TreeService $service)
    {
        $data = $request->validated("array", []);
        $tree = $service->buildTree($data);
        return $tree;
    }
}
