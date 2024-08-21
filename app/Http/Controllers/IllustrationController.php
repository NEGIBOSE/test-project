<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Illustration;
use Illuminate\Support\Facades\Auth; // Authファサードをインポート

class IllustrationController extends Controller
{
    public function createImageUrl()
    {
        return view('post.save-image');
    }

    public function storeImageUrl(Request $request)
    {
        // Validate the request data
        $request->validate([
            'image_url' => 'required|string|max:255',
        ]);

        // Create a new illustration with the provided image URL
        $illustration = new Illustration();
        $illustration->image_url = $request->image_url;

        // Set the user_id to the current authenticated user's ID
        $illustration->user_id = Auth::id(); // Auth::id() は現在のユーザーのIDを取得します

        $illustration->save();

        return response()->json(['message' => 'Image URL stored successfully']);
    }
}
