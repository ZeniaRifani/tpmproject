<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Recipes;

class RecipesController extends Controller
{
    public function show(){
        $recipes = Recipes::all();
        return view('welcome', compact('recipes'));
    }

    public function create(){
        $categories = Category::all();
        return view('createRecipes',compact('categories'));
    }

    public function store(Request $request){

        $request->validate([
            'name'=>'required|min:3',
            'origin'=>'required|max:50',
            'publication_date'=>'required|date',
            'steps'=>'required|gt:2',
            'image'=>'required|mimes:png,jpg'
        ]);

        $fileName = $request->name.'-'.$request->origin.'-'.$request->file('image')->getClientOriginalName();
        $request->file('image')->storeAs('public/image',$fileName);
        Recipes::create([
        'name'=>$request->name,
        'origin'=>$request->origin,
        'publication_date'=>$request->publication_date,
        'steps'=>$request->steps,
        'image'=>$fileName,
        'category_id'=>$request->category_name
    ]);

    return redirect(route('show'));

    }

    public function edit($id){
        $recipes = Recipes::findorFail($id);
        return view('editRecipes',compact('recipes'));
    }

    public function update(Request $request,$id){
        $recipes = Recipes::findorFail($id);
        $recipes->update([
            'name'=>$request->name,
            'origin'=>$request->origin,
            'publication_date'=>$request->publication_date,
            'steps'=>$request->steps
        ]);
        return redirect(route('show'));
    }

    public function delete($id){
        Recipes::destroy($id);
        return redirect(route('show'));
    }

}
