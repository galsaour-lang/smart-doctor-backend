<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'subject' => 'nullable|string',
            'message' => 'required|string',
        ]);

        $contact = Contact::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'subject' => $data['subject'] ?? null,
            'message' => $data['message'],
            'timestamp' => now(),
        ]);

        return response()->json([
            'message' => 'Message sent successfully',
            'contact' => $contact
        ], 201);
    }

    public function index()
    {
        return response()->json(Contact::all());
    }
}
