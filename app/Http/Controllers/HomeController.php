<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;
use App\Models\Contact;
use App\Models\Portfolio;
use App\Models\Skill;
use App\Models\Titre;

class HomeController extends Controller
{

    public function index()
    {
        $dataa = About::all();
        $datac = Contact::all();
        $datap = Portfolio::all();
        $datas = Skill::all();
        $datat = Titre::all();

        return view('pages/index', compact('dataa', 'datac', 'datap', 'datas', 'datat',));
    }
    public function back()
    {
        return view('backoffice/backhome');
    }

    public function portfolio()
    {

        return view('backoffice/create/createportfolio');
    }

    public function edit1(Portfolio $id)
    {
        $datap = Portfolio::all();
        return view('backoffice/modif/modifportfolio', compact('datap'));
    }
    public function update1(Portfolio $id, Request $request)
    {
        $datap = $id;
        $datap->img = $request->img;
        $datap->save();
        return redirect('backoffice/backhome');
    }

    

    public function show1 (Portfolio $id) {
        $datap= $id;


        return view('backoffice/show/showportfolio',compact('datap'));
    }
    public function destroy1 (Portfolio $id) {
        
        $id->delete();
        return redirect('index.html');

    }
}
