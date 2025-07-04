<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Explorer;
class ExplorerController extends Controller
{

    public function index()
    {
    return response()->json(Explorer::all());
    }

    public function store(Request $request)
    {
        $explorer = Explorer::create($request->validate([
        'name' => 'required|string',
        'idade' => 'required|integer',
        'latitude' => 'required|numeric',
        'longitude' => 'required|numeric',
    ]));

    return response()->json($explorer, 201);
}

    public function update(Request $request, $id)
{
    
    $explorers = Explorer::find($id);

    if (!$explorers) {
        return response()->json(['message' => 'Explorer not found'], 404);
    }

    $explorers->longitude = (float) $request->input('longitude', $explorers->longitude);
    $explorers->latitude = (float) $request->input('latitude', $explorers->latitude);

    $explorers->save();

    return response()->json($explorers);
}
}