<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email',
            'organization' => 'nullable|max:255',
            'message' => 'required',
        ]);

        // En production, vous enverriez un email ou stockeriez en base de données
        // Pour ce MVP, on retourne simplement un message de succès

        return redirect()->route('contact')->with('success', 'Votre message a été envoyé avec succès !');
    }
}
