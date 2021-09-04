@extends('layouts.app')

@section('content')
<div class="mobile-title">
    <div class="title-container">
        <div class="welcome logo">
            <div class="title-text">
            <h1>Songs</h1>
                    <div class="spacer"></div>
                @foreach ($data as $item)
                    <div class="song"><strong>{{$item->artist}}</strong> - {{ $item->name }}</div>
                @endforeach             
            </div>
        </div>
    </div>
</div>
@endsection