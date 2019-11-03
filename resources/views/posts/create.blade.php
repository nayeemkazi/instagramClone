@extends('layouts.app')

@section('content')

<div class="container">
   <div class="row">
        <div class="col-8 offset-2">
            <div class="row">
                <h1>Add New Post</h1>
            </div>
            <form action="/p" method="POST" enctype="multipart/form-data">
                    @csrf   
                    <div class="form-group row">
                            <label for="caption" class="col-form-label">Post Caption</label>

                            
                            <input id="caption" type="text" class="form-control 
                            @error('caption') is-invalid @enderror" 
                            name="caption" value="{{ old('caption') }}"  
                            autocomplete="caption" autofocus>

                            @error('caption')
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
                        <button class="btn btn-primary">Add New Post</button>
                    </div>
                    
                    
            </form>
        </div>  
   </div>
</div>

@endsection
