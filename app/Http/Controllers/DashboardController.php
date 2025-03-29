<?php
namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Movie;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // Fetch user data, you can modify this query as needed
        $userCountByRole = User::selectRaw('role, count(*) as count')
                               ->groupBy('role')
                               ->get();
        
        // Fetch movie data, you can modify this query as needed
        $movieCountByGenre = Movie::selectRaw('genre, count(*) as count')
                                  ->groupBy('genre')
                                  ->get();

        // Pass data to the view
        return view('dashboard', compact('userCountByRole', 'movieCountByGenre'));
    }
}
