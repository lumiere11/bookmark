<?php

namespace App\Http\Controllers;

use App\Models\Bookmark;
use App\Http\Requests\StoreBookmarkRequest;
use App\Http\Requests\UpdateBookmarkRequest;

class BookmarkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bookmarks = Bookmark::all();
        return view('welcome', ['bookmarks' => $bookmarks]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBookmarkRequest $request)
    {
        Bookmark::create($request->validated());
        return redirect()->route('bookmark.index');
    }

}
