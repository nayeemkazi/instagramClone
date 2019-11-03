@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row p-5">
        <div class="col-3">
            <img 
                src="{{$user->profile->profileImage()}}" 
                class="rounded-circle w-100" alt="">
        </div>
        <div class="col-9">
        <div class="d-flex justify-content-between align-items-baseline">
            <h1>{{ $user->username }}</h1>

        @can('update', $user->profile)
            <a href="/p/create" class="btn btn-primary btn-sm" style="height:50%;">Add New Post</a>
        @endcan
       
        </div>
            @can('update', $user->profile)
                <a href="/profile/{{$user->id}}/edit" class="btn btn-info btn-sm">Edit Profile</a>
            @endcan
            <div class="row">
                <div class="col-2"> <strong>{{$user->posts->count()}}</strong> posts</div>
                <div class="col-2"><strong>213k</strong> followers</div>
                <div class="col-2"><strong>213k</strong> following</div>
            </div>
            <div class="font-weight-bold pt-3">{{$user->profile->title}}</div>
            <div class="pt-2">{{$user->profile->description}}</div>
            <div> <a href="#" style="color: teal">{{$user->profile->url}}</a> </div>
        </div>
    </div>
    <div class="row">
    
        @foreach ($user->posts as $post)
            <div class="col-4 pb-3">
                <a href="/p/{{$post->id}}">
                        <img src="/storage/{{$post->image}}" alt="" class="w-100 ">
                </a>
            </div> 
        @endforeach
    </div>    
        
</div>

@endsection
