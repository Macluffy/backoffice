@extends('template/back')

@section('content')

<h1 class="text-dark text-center m-4"> BACK OFFICE | Dashboard</h1>

<a href="/home" class="text-center" style="width:200px;  background-color: rgb(126, 123, 123); padding: 20px; color:white;">Retours vers le site</a>
    
    <div style='display:flex; justify-content:center'>
        <div style="margin: 2rem; display:flex; flex-direction:column; align-items:center; ">
            <h5>Modifier Abouts</h5>
            <p>CRUD About</p>
            <a class="text-center" href="/modif/article" style="width:200px;  background-color: rgb(102, 168, 212); padding: 20px; color:white;" >Direction About</a>

        </div>

        <div style="margin: 2rem; display:flex; flex-direction:column; align-items:center;">
            <h5>Modifier Skills</h5>
            <p>CRUD Skill</p>
            <a class="text-center" href="/modif/portfolio" style="width:200px;  background-color: rgb(102, 168, 212); padding: 20px; color:white;" >Direction skill</a>
        
        </div>

        <div style="margin: 2rem; display:flex; flex-direction:column; align-items:center;">
            <h5>Modifier Porfolios</h5>
            <p>CRUD Portfolio</p>
            <a class="text-center" href="/edit/portfolio" style="width:200px;  background-color: rgb(102, 168, 212); padding: 20px; color:white;" >Direction Portfolio</a>
        
        </div>

        <div style="margin: 2rem; display:flex; flex-direction:column; align-items:center;">
            <h5>Modifier Contacts</h5>
            <p>CRUD Contact</p>
            <a class="text-center" href="/modif/portfolio" style="width:200px;  background-color: rgb(102, 168, 212); padding: 20px; color:white;" >Direction contact</a>
        
        </div>

        <div style="margin: 2rem; display:flex; flex-direction:column; align-items:center;">
            <h5>Modifier Titres</h5>
            <p>CRUD Titre</p>
            <a class="text-center" href="/modif/portfolio" style="width:200px;  background-color: rgb(102, 168, 212); padding: 20px; color:white;" >Direction Titre</a>
        
        </div>
    </div>
        










    
    <div style='display:flex; justify-content:center'>
        <div style="margin: 8rem; display:flex; flex-direction:column; align-items:center; ">
            <h5>Ajouter Skills</h5>
            <p>CRUD Skills</p>
            <a class="text-center" href="/createArticle" style="width:200px;  background-color: rgb(70, 199, 98); padding: 20px; color:white;" >Creer</a>

        </div>
        <div style="margin: 8rem; display:flex; flex-direction:column; align-items:center;">
            <h5>Ajouter article Portfolio</h5>
            <p>CRUD Portfolio</p>
            <a class="text-center" href="/createportfolio" style="width:200px;  background-color: rgb(70, 199, 98); padding: 20px; color:white;" >Creer</a>
        
        </div>

    </div>


    
@endsection