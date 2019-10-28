@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row p-5">
        <div class="col-3">
            <img 
                src="https://instagram.fdac7-1.fna.fbcdn.net/vp/d4299a79ac891200858d6aaa4476c54c/5E2B1838/t51.2885-19/s150x150/22709172_932712323559405_7810049005848625152_n.jpg?_nc_ht=instagram.fdac7-1.fna.fbcdn.net" 
                class="rounded-circle" alt="">
        </div>
        <div class="col-9">
        <div class="d-flex justify-content-between align-items-baseline">
            <h1>{{ $user->username }}</h1>
        <a href="/p/create" class="btn btn-primary btn-sm" style="height:50%;">Add New Post</a>
        </div>
            <div class="row">
                <div class="col-2"> <strong>213k</strong> followers</div>
                <div class="col-2"><strong>213k</strong> followers</div>
                <div class="col-2"><strong>213k</strong> followers</div>
            </div>
            <div class="font-weight-bold pt-3">{{$user->profile->title}}</div>
            <div class="pt-2">{{$user->profile->description}}</div>
            <div> <a href="#" style="color: teal">{{$user->profile->url}}</a> </div>
        </div>
    </div>
    <div class="row">
        <div class="col-4"><img src="https://images.pexels.com/photos/67636/rose-blue-flower-rose-blooms-67636.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="" class="w-100 "></div> 
        <div class="col-4"><img src="https://images.pexels.com/photos/67636/rose-blue-flower-rose-blooms-67636.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="" class="w-100 "></div> 
        <div class="col-4"><img src="https://images.pexels.com/photos/67636/rose-blue-flower-rose-blooms-67636.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="" class="w-100 "></div>  
    </div>
</div>

@endsection
