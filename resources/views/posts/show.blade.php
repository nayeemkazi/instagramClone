@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-8" >
           
            <img src="/storage/{{$post->image}}" class="w-auto" style="height: 90vh;">   
        </div>   
        <div class="col-4">
            <div class="d-flex align-items-center">
                <div>
                    <img src="/storage/{{$post->user->profile->image}}" alt="besh to" class="rounded-circle"
                    style="height: 50px;">
                </div>
                <div class="d-flex align-items-center">
                    <p class="pl-3 bold h3"> 
                        <a href="/profile/{{$post->user->id}}"> 
                            <span class="text-dark">{{$post->user->username}}</span>
                         </a> 
                    </p>
                    <a href="#" class="pl-3">Follow</a>
                </div>
                                
            </div>
            <hr>
            <div>
                
                <p class="pt-3">
                     <span > <strong> 
                         <a href="/profile/{{$post->user->id}}"> 
                            <span class="text-dark">{{$post->user->username}}</span> 
                        </a> 
                    </strong> </span> {{$post->caption}}
                </p>

            </div>
            
        </div>
    </div>
</div>

@endsection
