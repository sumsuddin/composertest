<?php namespace App\Http\Controllers;

use App\Song;

class SongsController extends Controller {

    private $song;

    public function __construct(Song $song)
    {
        $this->song = $song;
    }

    public function index()
    {
        $songs = $this->song->get();
        return view('songs.index', compact('songs'));
    }

    public function show($slug)
    {
        $song = $this->song->whereSlug($slug)->first();
        return view('songs.show', compact('song'));
    }

    public function edit($slug)
    {
        $song = $this->song->whereSlug($slug)->first();
        return view('songs.edit', compact('song'));
    }
}
