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
    
    public function index() {
        $dataa= About::all();
        $datac= Contact::all();
        $datap= Portfolio::all();
        $datas= Skill::all();
        $datat= Titre::all();

    return view('pages/index',compact('dataa','datac','datap','datas','datat',));
    }
    public function back() {
        return view('backoffice/backhome');
        }

        public function portfolio() {

            return view('backoffice/create/createportfolio');
            }


}










