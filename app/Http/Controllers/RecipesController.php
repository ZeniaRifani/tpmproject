<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recipes;

class RecipesController extends Controller
{
    public function show(){
        $recipes = Recipes::all();
        return view('welcome', compact('recipes'));
    }

    public function create(){
        return view('createRecipes');
    }

    public function store(Request $request){
        Recipes::create([
        'name'=>$request->name,
        'origin'=>$request->origin,
        'publication_date'=>$request->publication_date,
        'steps'=>$request->steps
    ]);

    return redirect(route('show'));

    }

}
