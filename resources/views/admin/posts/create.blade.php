@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><h2>Nuovo post</h2></div>
                <div class="card-body">
                    <form action="{{route("posts.store")}}" method="POST">
                        @csrf
                        <div class="form-group">
                          <label for="title">Titolo</label>
                          <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" placeholder="Inserisci il titolo" value="{{old('title')}}">
                            @error('title')
                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="content">Testo</label>
                            <textarea class="form-control @error('content') is-invalid @enderror" id="content" name="content" placeholder="Inserisci il contenuto del post" rows="5">{{old('content')}}</textarea>
                            @error('content')
                            <div class="alert alert-danger mt-2">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group form-check">
                            <input class="form-check-input @error('published') is-invalid @enderror" type="checkbox" id="published" name="published" {{old('published') ? 'checked' : ''}}>                            
                            <label class="form-check-label" for="published">Pubblica</label>
                            @error('published')
                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                            @enderror                           
                        </div>
                        <button type="submit" class="btn btn-primary">Crea</button>
                      </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection