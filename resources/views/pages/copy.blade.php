<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Portfolio;

class PortfolioController extends Controller
{
    public function index() {
        $datafolio = Portfolio::all();


        return view('pages/portfolio',compact('datafolio'));

    }
    public function create() {

        return view('backoffice/createPortfolio');
    }

    public function store (Request $request) {
        $newentry = new Portfolio;
        $newentry->img = $request->img; 
        $newentry->titre = $request->titre; 
        $newentry->text = $request->text; 
        $newentry->save();
        return redirect()->back();

    }

    public function edit (Portfolio $id) {
        $article = $id;
        return view('backoffice/editportfolio',compact('article'));

    }

    public function goto () {
        $datatout = Portfolio::all();

        return view('backoffice/modifportfolio',compact('datatout'));
    }

    public function show (Portfolio $id) {
        $article= $id;


        return view('backoffice/showportfolio',compact('article'));
    }
    public function update (Portfolio $id, Request $request) {
        $article= $id;
        $article->titre=$request->titre;
        $article->text=$request->text;
        $article->img=$request->img;
        $article->save();
        return redirect('/modif/portfolio');

    }

    public function destroy (Portfolio $id) {
        
        $id->delete();
        return redirect('modif/portfolio');

    }
}
