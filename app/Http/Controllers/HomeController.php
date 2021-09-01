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
    // portfolio
    public function portfolio()
    {

        return view('backoffice/create/createportfolio');
    }

    public function store1(Request $request) {

        request()->validate([
            "img"=>["required","min:1","max:100"],
        ]);
        $newdata = new Portfolio;
        $newdata->img = $request->img;
        $newdata->save();
        return redirect('back.html');
    }

    public function goedit1()
    {
        $datap = Portfolio::all();
        return view('backoffice/edit/editportfolio',compact('datap'));
    }

    public function edit1(Portfolio $id)
    {
        $datap = Portfolio::all();
        return view('backoffice/modif/modifportfolio', compact('datap'));
    }
    public function update1(Portfolio $id, Request $request)
    {
        request()->validate([
            "img"=>["required","min:1","max:100"],
        ]);
        $datap = $id;
        $datap->img = $request->img;
        $datap->save();
        return redirect('back.html');
    }

    

    public function show1 (Portfolio $id) {
        $datap= $id;


        return view('backoffice/show/showportfolio',compact('datap'));
    }
    public function destroy1 (Portfolio $id) {
        
        $id->delete();
        return redirect('back.html');

    }

    //skill

    public function skill()
    {

        return view('backoffice/create/createskills');
    }

    public function store2(Request $request) {

        request()->validate([
            "nom"=>["required","min:1","max:100"],
            "pourcentage"=>["required","min:1","max:100"],
        ]);
        $newdata = new Skill;
        $newdata->nom = $request->nom;
        $newdata->pourcentage = $request->pourcentage;
        $newdata->save();
        return redirect('back.html');
    }

    public function goedit2()
    {
        $datap = Skill::all();
        return view('backoffice/edit/editskills',compact('datap'));
    }

    public function edit2(Skill $id)
    {
        $datap = Skill::all();
        return view('backoffice/modif/modifskills', compact('datap'));
    }
    public function update2(Skill $id, Request $request)
    {
        request()->validate([
            "nom"=>["required","min:1","max:100"],
            "pourcentage"=>["required","min:1","max:100"],
        ]);
        $datap = $id;
        $datap->nom = $request->nom;
        $datap->pourcentage = $request->pourcentage;
        $datap->save();
        return redirect('back.html');
    }

    

    public function show2 (Skill $id) {
        $datap= $id;


        return view('backoffice/show/showskills',compact('datap'));
    }
    public function destroy2 (Skill $id) {
        
        $id->delete();
        return redirect('back.html');

    }

    //About

    

    public function store3(Request $request) {

        request()->validate([
            "soustitre"=>["required","min:1","max:200"],
            "petittext"=>["required","min:1","max:500"],
            "birthday"=>["required","min:1","max:100"],
            "website"=>["required","min:1","max:300"],
            "phone"=>["required","min:1","max:100"],
            "city"=>["required","min:1","max:100"],
            "age"=>["required","min:1","max:100"],
            "degree"=>["required","min:1","max:100"],
            "PHEmailone"=>["required","min:1","max:100"],
            "Freelance"=>["required","min:1","max:100"],
            "text"=>["required","min:1","max:500"],
        ]);
        $newdata = new About;
        $newdata->soustitre = $request->soustitre;
        $newdata->petittext = $request->petittext;
        $newdata->birthday = $request->birthday;
        $newdata->website = $request->website;
        $newdata->phone = $request->phone;
        $newdata->city = $request->city;
        $newdata->age = $request->age;
        $newdata->degree = $request->degree;
        $newdata->PHEmailone = $request->PHEmailone;
        $newdata->Freelance = $request->Freelance;
        $newdata->text = $request->text;
        $newdata->save();
        return redirect('back.html');
    }

    public function goedit3()
    {
        $datap = About::all();
        return view('backoffice/edit/editabout',compact('datap'));
    }

    public function edit3(About $id)
    {
        $datap = About::all();
        return view('backoffice/modif/modifabout', compact('datap'));
    }
    public function update3(About $id, Request $request)
    {
        request()->validate([
            "soustitre"=>["required","min:1","max:200"],
            "petittext"=>["required","min:1","max:500"],
            "birthday"=>["required","min:1","max:100"],
            "website"=>["required","min:1","max:300"],
            "phone"=>["required","min:1","max:100"],
            "city"=>["required","min:1","max:100"],
            "age"=>["required","min:1","max:100"],
            "degree"=>["required","min:1","max:100"],
            "PHEmailone"=>["required","min:1","max:100"],
            "Freelance"=>["required","min:1","max:100"],
            "text"=>["required","min:1","max:500"],
        ]);
        $datap = $id;
        $datap->soustitre = $request->soustitre;
        $datap->petittext = $request->petittext;
        $datap->birthday = $request->birthday;
        $datap->website = $request->website;
        $datap->phone = $request->phone;
        $datap->city = $request->city;
        $datap->age = $request->age;
        $datap->degree = $request->degree;
        $datap->PHEmailone = $request->PHEmailone;
        $datap->Freelance = $request->Freelance;
        $datap->text = $request->text;
        $datap->save();
        return redirect('back.html');
    }

    

    public function show3 (About $id) {
        $datap= $id;


        return view('backoffice/show/showabout',compact('datap'));
    }
    public function destroy3 (About $id) {
        
        $id->delete();
        return redirect('back.html');

    }

    // contact

    

    public function store4(Request $request) {

        request()->validate([
            "location"=>["required","min:1","max:100"],
            "locationR"=>["required","min:1","max:100"],
            "email"=>["required","min:1","max:100"],
            "emailR"=>["required","min:1","max:100"],
            "call"=>["required","min:1","max:100"],
            "callR"=>["required","min:1","max:100"],
            "yname"=>["required","min:1","max:100"],
            "yemail"=>["required","min:1","max:100"],
            "subject"=>["required","min:1","max:100"],
            "message"=>["required","min:1","max:100"],
            "smessage"=>["required","min:1","max:100"],
        ]);
        $newdata = new Contact;
        $newdata->location = $request->location;
        $newdata->locationR = $request->locationR;
        $newdata->email = $request->email;
        $newdata->emailR = $request->emailR;
        $newdata->call = $request->call;
        $newdata->callR = $request->callR;
        $newdata->yname = $request->yname;
        $newdata->yemail = $request->yemail;
        $newdata->subject = $request->subject;
        $newdata->message = $request->message;
        $newdata->smessage = $request->smessage;
        $newdata->save();
        return redirect('back.html');
    }

    public function goedit4()
    {
        $datap = Contact::all();
        return view('backoffice/edit/editcontact',compact('datap'));
    }

    public function edit4(Contact $id)
    {
        $datap = Contact::all();
        return view('backoffice/modif/modifcontact', compact('datap'));
    }
    public function update4(Contact $id, Request $request)
    {       
        request()->validate([
            "location"=>["required","min:1","max:100"],
            "locationR"=>["required","min:1","max:100"],
            "email"=>["required","min:1","max:100"],
            "emailR"=>["required","min:1","max:100"],
            "call"=>["required","min:1","max:100"],
            "callR"=>["required","min:1","max:100"],
            "yname"=>["required","min:1","max:100"],
            "yemail"=>["required","min:1","max:100"],
            "subject"=>["required","min:1","max:100"],
            "message"=>["required","min:1","max:100"],
            "smessage"=>["required","min:1","max:100"],
        ]);
        $datap = $id;
        $datap->location = $request->location;
        $datap->locationR = $request->locationR;
        $datap->email = $request->email;
        $datap->emailR = $request->emailR;
        $datap->call = $request->call;
        $datap->callR = $request->callR;
        $datap->yname = $request->yname;
        $datap->yemail = $request->yemail;
        $datap->subject = $request->subject;
        $datap->message = $request->message;
        $datap->smessage = $request->smessage;
        $datap->save();
        return redirect('back.html');
    }

    

    public function show4 (Contact $id) {
        $datap= $id;


        return view('backoffice/show/showcontact',compact('datap'));
    }
    public function destroy4 (Contact $id) {
        
        $id->delete();
        return redirect('back.html');

    }

    // Titre

    
    public function store5(Request $request) {

        request()->validate([
            "titre"=>["required","min:1","max:100"],
            "text"=>["required","min:1","max:500"],
        ]);
        $newdata = new Titre;
        $newdata->titre = $request->titre;
        $newdata->text = $request->text;
        $newdata->save();
        return redirect('back.html');
    }

    public function goedit5()
    {
        $datap = Titre::all();
        return view('backoffice/edit/edittitre',compact('datap'));
    }

    public function edit5(Titre $id)
    {
        $datap = Titre::all();
        return view('backoffice/modif/modiftitre', compact('datap'));
    }
    public function update5(Titre $id, Request $request)
    {   
        request()->validate([
            "titre"=>["required","min:1","max:100"],
            "text"=>["required","min:1","max:500"],
        ]);
        $datap = $id;
        $datap->titre = $request->titre;
        $datap->text = $request->text;
        $datap->save();
        return redirect('back.html');
    }

    

    public function show5 (Titre $id) {
        $datap= $id;


        return view('backoffice/show/showtitre',compact('datap'));
    }
    public function destroy5 (Titre $id) {
        
        $id->delete();
        return redirect('back.html');

    }
}
