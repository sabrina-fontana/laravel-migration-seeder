<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Person;

class ApiController extends Controller
{
    public function getAll() {
        $people = Person::all();
        return response()->json($people);
    }   

    public function getFirstPerson() {
        $firstPerson = Person::all()->first();
        return response()->json($firstPerson);
    }
}
