<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;

class GuestBookController extends Controller
{
    public function index()
    {
        $message = Message::orderByDesc('created_at')->get();
        return view('guestbook.index', compact('message'));
    }
    public function store(Request $request)
    {
        $validated = $request ->validate([
            'name' => 'required|string|max:255',
            'message' => 'required|string|max:1000',
        ]);

        Message::create($validated);

        return redirect()->route('guestbook.index')
        ->with('success','Ваше сообщение успешно сохранено');
    }
}
