@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row d-flex">
        
            @foreach($posts as $post)
            <div class="col-3 justify-content-around py-3">

                <a href="/storage/{{$post->image}}" target="_blank"> 
                    <img src="/storage/{{$post->image}}" class="w-100">
                </a> 
               

                <span > <strong> 
                    <a href="/profile/{{$post->user->id}}"> 
                    <span class="text-dark">{{$post->user->username}}</span> 
                    </a> 
                    </strong> </span> {{$post->caption}}
            </div>   
            @endforeach
         
    </div>
    <div class="row ">
        <div class="col-12 d-flex justify-content-center">
            {{-- <div class="justify-content-center"> --}}
                {{$posts->links()}}
            {{-- </div> --}}     
     
        </div>
    </div>
</div>

@endsection
