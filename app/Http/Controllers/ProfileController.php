<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\ProfileUpdateRequest;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(): View
    {
        $id = Auth::user()->id;
        $user =User::where('id',$id)->first();

        return view('profile.edit', [
            'user' =>$user,
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $id = Auth::user()->id;
        $request->user()->fill($request->validated());
        if($request->hasFile('image')){

         $img = $request->file('image');
         $t = time();
         $file_name = $img->getClientOriginalName();
         $img_name = "{$t}-{$file_name}";
         $img_url = "uploads/{$img_name}";

         $img->move(public_path('uploads'),$img_name);
         $filPath = $request->input('file_path');
         File::delete($filPath);

         $user = User::find($id);
         $user->name  =$request->name;
         $user->mobile  =$request->mobile;
         $user->designation  =$request->designation;
         $user->image = $img_url;
         $user->save();
        }else{
         $user = User::find($id);
         $user->name  =$request->name;
         $user->mobile  =$request->mobile;
         $user->designation  =$request->designation;
         $user->save();
        }
        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
