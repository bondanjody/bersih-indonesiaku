<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RankingController extends Controller
{
    public function index()
    {
        // Query untuk mendapatkan authors dengan jumlah posts terbanyak
        $authors = User::withCount('posts')
            ->orderBy('posts_count', 'desc')
            ->get();

        $title = "Ranking";
        $active = "ranking";

        // Kirim data authors ke view
        return view('ranking', compact('authors', 'title', 'active'));
    }
}
