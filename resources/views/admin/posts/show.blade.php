@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><h2>{{$post->title}}</h2></div>
                <div class="card-body">
                    <div class="mb-2"><strong>Stato:</strong> 
                        @if ($post->published)
                        <span class="badge badge-success">Pubblicato</span>
                        @else
                        <span class="badge badge-secondary">Bozza</span>
                                                        
                        @endif
                    </div>
                    <div class="mb-3">
                        <strong>Categoria:</strong>
                                @if ($post->category)
                                    <span class="badge badge-info">{{$post->category->name}}</span>
                                @else
                                    <span class="badge badge-pill badge-secondary">Nessuna categoria</span>  
                                @endif
                    </div>                               
                    
                    <p>{{$post->content}}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection