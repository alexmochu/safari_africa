<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\SafariCollection;
use App\Safari;

class SafariController extends Controller
{

    public function store(Request $request)
    {
      $safari = new Safari([
        'title' => $request->get('title'),
        'body' => $request->get('body')
      ]);

      $safari->save();

      return response()->json('successfully added');
    }

    public function index()
    {
      return new SafariCollection(Safari::all());
    }

    public function edit($id)
    {
      $safari = Safari::find($id);
      return response()->json($safari);
    }

    public function update($id, Request $request)
    {
      $safari = Safari::find($id);

      $safari->update($request->all());

      return response()->json('successfully updated');
    }

    public function delete($id)
    {
      $safari = Safari::find($id);

      $safari->delete();

      return response()->json('successfully deleted');
    }

}
