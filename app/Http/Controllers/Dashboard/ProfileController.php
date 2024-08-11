<?php

namespace App\Http\Controllers\Dashboard;

use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Symfony\Component\Intl\Countries;
use Symfony\Component\Intl\Languages;

class ProfileController extends Controller
{
    public function edit()
    {
// from symfony Library
        $countries = Countries::getNames('ar');
        $locales = Languages::getNames('ar');
        $user = Auth::user();
        return view('dashboard.profile.edit', compact('user', 'countries', 'locales'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'birthday' => ['nullable', 'date', 'before:today'],
            'gender' => ['in:male,female'],
            'country' => ['required', 'string', 'size:2'],
        ]);

        $user = request()->user();

//        $user = $user->profile;

        $user->profile->fill($request->all())->save();

        return redirect()->route('dashboard.profile.edit')->with('success', 'Profile updated successfully');

        // if ($profile->user_id) {
        //     $profile->update($request->all());
        // } else {

        //     // $request->merge([
        //     //     'user_id' => $user->id,
        //     // ]);

        //     // Profile::create($request->all());

        //     // $user->profile->update($request->all());

        //     $user->profile()->create($request->all());
        // }
    }
}
