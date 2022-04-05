<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SongController extends Controller
{
    const BOOK_NAME = 'Song of Solomon';
    const BIBLE_VERSION = 'King James Version';
    public function readAll()
    {
        return view('song-of-solomon.all', [
            'book_name' => static::BOOK_NAME,
            'bible_version' => static::BIBLE_VERSION
        ]);
    }

    public function readByChapter($chapter_number)
    {
        return view('song-of-solomon.chapter', [
            'book_name' => static::BOOK_NAME,
            'bible_version' => static::BIBLE_VERSION,
            'chapter_number' => $chapter_number]);
    }
}
