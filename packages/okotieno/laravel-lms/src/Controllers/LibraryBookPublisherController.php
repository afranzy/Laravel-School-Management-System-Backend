<?php

namespace Okotieno\LMS\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Okotieno\LMS\Models\LibraryBookPublisher;
use Okotieno\LMS\Request\StoreLibraryBookPublisherRequest;

class LibraryBookPublisherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('okotieno.lms.books.add_books');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreLibraryBookRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLibraryBookPublisherRequest $request)
    {
        LibraryBookPublisher::create([
            'name' => $request->name
        ]);
        return response()->json([
            'saved' => true,
            'message' => 'Publisher saved Successfully',
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param LibraryBookPublisher $libraryBookPublisher
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, LibraryBookPublisher $libraryBookPublisher)
    {
        $libraryBookPublisher->update(['name' => $request->name]);
        return response()->json([
            'saved' => true,
            'message' => 'Publisher Updated Successfully',
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
