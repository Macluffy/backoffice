@extends('template/back')
@section('content')


<h1 class="text-center" style="margin: 150px"> BACK OFFICE | Show Skill</h1>
<section id="skills" class="skills section-bg">
    <div class="container">

      <div class="section-title">
        
      </div>

      <div class="row skills-content">
     
        <div class="col-lg-6" data-aos="fade-up">

          <div class="progress">
            <span class="skill">{{$datap->nom}} <i class="val">{{$datap->pourcentage}}</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="{{$datap->pourcentage}}" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>
          
          

        </div>
    
      </div>

    </div>
    <div style="margin-left: 40%; ">
        <form action="{{route('delete2', $datap->id)}} " method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" style="width:200px;  background-color: rgb(218, 10, 10); padding: 5px; color:white; border:none" >DELETE</button>
            </form>
          <a href="{{route('goedit2', $datap->id)}} " style="width:200px;"  class=" btn btn-info" >EDIT</a>
        
        <a href="/modif/article" class="text-center" style="width:200px;  background-color: rgb(126, 123, 123); padding: 20px; color:white; margin:50px">Retours vers article a modifier</a>
        
        </div> 

  </section>

@endsection


