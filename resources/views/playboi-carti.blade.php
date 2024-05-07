<!-- resources/views/playboi-carti.blade.php -->

@extends('layouts.app') <!-- Assuming you have a layout file named 'app.blade.php' -->

@section('content')
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h1 class="text-3xl font-semibold mb-4">Playboi Carti Albums</h1>
        
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
            @foreach ($albums as $album)
                <div class="bg-white rounded-lg shadow-md p-4">
                    <h2 class="text-lg font-semibold mb-2">{{ $album['name'] }}</h2>
                    <p class="text-gray-600 mb-2">{{ $album['release_date'] }}</p>
                    <ul>
                        @foreach ($album['tracks'] as $track)
                            <li>{{ $track['name'] }}</li>
                        @endforeach
                    </ul>
                </div>
            @endforeach
        </div>
    </div>
@endsection
