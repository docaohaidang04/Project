<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        return view('info', compact('user'));
    }

    public function update(Request $request)
    {
        $userId = Auth::id();
        $user = User::findOrFail($userId);

        $data = $request->only(['name', 'email', 'phone', 'gender', 'dob']);

        if ($request->hasFile('img')) {
            $file = $request->file('img');

            if ($file->getSize() > 1048576) {
                return redirect()->back()->withErrors(['img' => 'Dung lượng file không được vượt quá 1 MB']);
            }

            $allowedMimeTypes = ['image/jpeg', 'image/png'];
            if (!in_array($file->getMimeType(), $allowedMimeTypes)) {
                return redirect()->back()->withErrors(['img' => 'Định dạng file không hợp lệ. Chỉ chấp nhận .JPEG và .PNG']);
            }

            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('img'), $filename);
            $data['img'] = $filename;

            if ($user->img && file_exists(public_path('img/' . $user->img))) {
                unlink(public_path('img/' . $user->img));
            }
        }

        $user->update($data);

        return redirect()->back()->with('success', 'Chỉnh sửa thành công!');
    }
}
