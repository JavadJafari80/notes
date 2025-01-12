<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Note;
use Illuminate\Support\Facades\Validator;

class NoteController extends Controller
{
    public function index()
    {

        $user = auth()->user();
        if (!$user) {
            return response()->json(['message' => 'Unauthorized'], 401);
        }

        $notes = Note::where('user_id', $user->id)->get();
        return response()->json($notes);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:100',
            'content' => 'required|string',
            'is_favorite' => 'nullable|boolean',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'errors' => $validator->errors(),
            ], 422);
        }

        $note = Note::create([
            'user_id' => $request->user()->id,
            'title' => $request->get('title'),
            'content' => $request->get('content'),
            'is_favorite' => $request->get('is_favorite') ?? 0,
        ]);

        return response()->json([
            'status' => 'success',
            'note' => $note,
        ], 201);
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:100',
            'content' => 'required|string',
            'is_favorite' => 'nullable|boolean',
        ]);

        $note = Note::where('id', $id)->where('user_id', auth()->id())->first();

        if (!$note) {
            return response()->json(['message' => 'یادداشت پیدا نشد یا دسترسی ندارید.'], 404);
        }

        $note->update($validated);

        return response()->json([
            'message' => 'یادداشت با موفقیت بروزرسانی شد.',
            'note' => $note,
        ], 200);
    }


}
