@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
            <div class="col-8 offset-2">
                <div class="row">
                    <h1>Edit Profile</h1>
                </div>
                <form action="/profile/{{$user->id}}" method="POST" enctype="multipart/form-data">
                     
                        @csrf   
                        @method('PATCH')
                        <div class="form-group row">
                                <label for="title" class="col-form-label">Title</label>
    
                                
                                <input id="title" type="text" class="form-control 
                                @error('title') is-invalid @enderror" 
                                name="title" value="{{ old('title') ?? $user->profile->title}}"  
                                autocomplete="title" autofocus>
    
                                @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                
                        </div>
                        <div class="form-group row">
                                <label for="description" class="col-form-label">Description</label>
    
                                
                                <input id="description" type="text" class="form-control 
                                @error('description') is-invalid @enderror" 
                                name="description" value="{{ old('description') ?? $user->profile->description}}"  
                                autocomplete="description" autofocus>
    
                                @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                
                        </div>
                        <div class="form-group row">
                                <label for="url" class="col-form-label">URL</label>
    
                                
                                <input id="url" type="text" class="form-control 
                                @error('url') is-invalid @enderror" 
                                name="url" value="{{ old('url') ?? $user->profile->url}}"  
                                autocomplete="url" autofocus>
    
                                @error('url')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                
                        </div>
    
                        

                        <div class="form-group row">
                                <label for="image" class="col-form-label">Image</label>
    
                                
                                <input id="image" type="file" class="form-control-file 
                                @error('image') is-invalid @enderror" name="image" >
    
                                @error('image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                
                        </div>
    
                        <div class="row pt-4">
                            <button class="btn btn-primary">Edit Profile</button>
                        </div>
                        
                        
                </form>
            </div>  
    </div>
</div>

@endsection
