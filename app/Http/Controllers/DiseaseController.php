<?php

namespace App\Http\Controllers;

use App\Models\Disease;
use Illuminate\Http\Request;

class DiseaseController extends Controller
{
    public function index()
    {
        return response()->json(Disease::all());
    }

    public function search(Request $request)
    {
        $query = $request->query('q');

        if (!$query) {
            return response()->json(Disease::all());
        }

        $diseases = Disease::where('name_key', 'LIKE', "%{$query}%")
            ->orWhere('description_key', 'LIKE', "%{$query}%")
            ->get();

        return response()->json($diseases);
    }
}
