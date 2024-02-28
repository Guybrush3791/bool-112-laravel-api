<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Photo;

class ApiController extends Controller
{

    public function getTest() {

        return response()->json([
            'status' => 'success',
            'message' => 'Questo e\' un testo di prova'
        ]);
    }

    public function getPhotos() {

        $photos = Photo :: paginate(3);

        return response()->json([
            'status' => 'success',
            'photos' => $photos
        ]);
    }
    public function createPhotos(Request $request) {

        $data = $request -> all();

        $photo = new Photo;

        $photo -> name = $data['name'];
        $photo -> description = $data['description'];
        $photo -> date = $data['date'];
        $photo -> weight = $data['weight'];
        $photo -> path = $data['path'];

        $photo -> save();

        return response()->json([
            'status' => 'success',
            'photo' => $photo
        ]);
    }
}
