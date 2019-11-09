<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\support\Facades\Cache;
use Intervention\Image\Facades\Image;

use Illuminate\Http\Request;

class ProfilesController extends Controller
{
    public function index(User $user)
    {
        $follows = (auth()->user()) ? auth()->user()->following->contains($user->id) : false;

        $postsCount = Cache::remember(
            'count.posts' . $user->id,
            now()->addSecond(30),
            function () use ($user) {
                return $user->posts->count();
            }
        );
        $followersCount = $user->profile->followers->count();
        $followingCount = $user->following->count();
        //dd($follows);
        return view('/profiles/index', compact('user', 'follows', 'postsCount', 'followersCount', 'followingCount'));
    }

    public function edit(User $user)
    {

        $this->authorize('update', $user->profile);
        return view('profiles.edit', compact('user'));
    }

    public function update(User $user)
    {
        $this->authorize('update', $user->profile);

        $data = request()->validate([
            'title' => 'required',
            'description' => 'required',
            'url' => 'url',
            'image' => '',

        ]);

        $imagePath = $user->profile->image;
        //dd($user->profile->image);

        if (request('image')) {
            $imagePath = $data['image']->store('profile', 'public');

            $image = Image::make(public_path("storage/{$imagePath}"))->fit(1000, 1000);
            $image->save();
        }

        //    dd(array_merge(
        //     $data,
        //     ['image'=>$imagePath],
        //     ));

        $user->profile->update(array_merge(
            $data,
            ['image' => $imagePath],
        ));

        //dd($user->profile->image);

        return redirect("profile/{$user->id}");
        //dd($data);

    }
}
