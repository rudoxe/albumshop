<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Albums') }}
        </h2>
    </x-slot>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-5 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="image-container p-6 text-gray-900 font-bold">
                <img src="https://i.ytimg.com/vi/EwdsnGfrd-k/hqdefault.jpg?sqp=-oaymwEmCOADEOgC8quKqQMa8AEB-AH-CYAC0AWKAgwIABABGH8gHygkMA8=&rs=AOn4CLBYsJMfdD6-4gN202IMBJp8eb76bQ" alt="Description of the image">
                <a href="https://open.spotify.com/album/2QRedhP5RmKJiJ1i8VgDGR" target="_blank" rel="noopener noreferrer" class="text-red-500 hover:underline">Whole Lotta Red</a>
                <div class="w-full">Length: 1h 12min</div>
                <div class="w-full">Artist: Playboi Carti</div>
                
            </div>
            </div>
        </div>
    </div>
</x-app-layout>