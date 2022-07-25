<?php

namespace App\Http\Controllers;

use App\Models\Dog;
use Illuminate\Http\Request;

class DogController extends Controller
{
    public function teste() {
        return response([
            "Tudo certo"
        ], 200);
    }

    public function index() {
        $cachorros = [
            "Caramelo",
            "Bolinha",
            "Cascão"
        ];

        return response($cachorros, 200);
    }

    public function create(Request $req) {

        Dog::create([
            "name" => $req->name,
            "description" => $req->description,
            "city" => $req->city,
            "status" => 1
        ]);

        return response("Deu tudo certo", 200);

    }

}
