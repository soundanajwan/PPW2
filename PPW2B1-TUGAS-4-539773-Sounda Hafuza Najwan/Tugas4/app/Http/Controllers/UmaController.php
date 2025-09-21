<?php

namespace App\Http\Controllers;

use App\Models\Uma;
use Illuminate\Http\Request;

class UmaController extends Controller
{
    public function index(Request $request)
    {
        $trainer = $request->get('trainer');
        $search = $request->get('search');

        $query = Uma::query();

        if ($trainer && $trainer !== 'all') {
            $query->where('trainer', $trainer);
        }

        if ($search) {
            $query->where('nama', 'like', '%' . $search . '%');
        }

        $umas = $query->orderBy('created_at', 'desc')->paginate(10);

        $latestUmas = Uma::latest()->take(5)->get();

        $stats = [
            'total' => Uma::count(),
            'total_harga' => Uma::sum('harga'),
            'max_harga' => Uma::max('harga'),
            'min_harga' => Uma::min('harga'),
        ];

        $trainers = Uma::select('trainer')->distinct()->pluck('trainer');

        return view('uma.index', compact('umas', 'latestUmas', 'stats', 'trainers', 'trainer', 'search'));
    }
}
