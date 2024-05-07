<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spotify;

class AlbumController extends Controller
{
    public function playboiCarti()
    {
        // Search for Playboi Carti albums
        $albums = Spotify::searchAlbums('Playboi Carti')->get();

        // Fetch tracklists for each album
        foreach ($albums as &$album) {
            $tracks = Spotify::albumTracks($album['id'])->get();
            $album['tracks'] = $tracks;
        }

        // Pass albums to the view
        return view('playboi-carti', compact('albums'));
    }
}
