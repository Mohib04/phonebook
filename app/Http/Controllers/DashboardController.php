<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Contact;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $user = Auth::user();

        // Retrieve the search query from the request
        $search = $request->input('search');

        // Query the contacts based on the search query (matching name or phone number)
        $contacts = $user->contacts()
            ->where('phone', 'LIKE', '%' . $search . '%')
            ->paginate(10)
            ->appends(['search' => $search]); // Append the search query to the pagination links
        return view('dashboard', compact('contacts'));
    }
}