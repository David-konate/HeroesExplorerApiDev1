<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Response;

class ModelController extends Controller
{
    public function showModel($modelName)
    {
        $modelPath = public_path('models/' . $modelName . '.glb');

        if (file_exists($modelPath)) {
            return Response::file($modelPath, ['Content-Type' => 'model/gltf-binary']);
        } else {
            abort(404);
        }
    }
}
