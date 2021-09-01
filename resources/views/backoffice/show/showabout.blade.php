@extends('template/back')
@section('content')

<h1 class="text-center" style="margin: 150px"> BACK OFFICE | Show About</h1>
<a href="/modif/article" class="text-center" style="width:200px;  background-color: rgb(126, 123, 123); padding: 20px; color:white; margin:15px">Retours vers article a modifier</a>
<div style="width:100%; display:flex; flex-direction:column; justify-content:center; align-items:center;">
    
    <div style="margin-left: 30%; margin-bottom: 50px;">
        <img src="{{asset('img/profile-img.jpg')}}" class="img-fluid" alt="">
    </div>
    
    <div class="row">
        <div class="col-lg-4" data-aos="fade-right">
          
        </div>
        <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
          <h3>{{$datap->soustitre}} &amp; Web Developer.</h3>
          <p class="font-italic">
            {{$datap->petittext}}
          </p>
          <div class="row">
            <div class="col-lg-6">
              <ul>
                <li><i class="icofont-rounded-right"></i> <strong>Birthday:</strong> {{$datap->birthday}}</li>
                <li><i class="icofont-rounded-right"></i> <strong>Website:</strong> {{$datap->website}}</li>
                <li><i class="icofont-rounded-right"></i> <strong>Phone:</strong> {{$datap->phone}}</li>
                <li><i class="icofont-rounded-right"></i> <strong>City:</strong> {{$datap->city}}</li>
              </ul>
            </div>
            <div class="col-lg-6">
              <ul>
                <li><i class="icofont-rounded-right"></i> <strong>Age:</strong> {{$datap->age}}</li>
                <li><i class="icofont-rounded-right"></i> <strong>Degree:</strong> {{$datap->degree}}</li>
                <li><i class="icofont-rounded-right"></i> <strong>PhEmailone:</strong> {{$datap->PHEmailone}}</li>
                <li><i class="icofont-rounded-right"></i> <strong>Freelance:</strong> {{$datap->Freelance}}</li>
              </ul>
            </div>
          </div>
          <p>
            {{$datap->text}}
          </p>
        </div>
      </div>

    </div>

    <div style="margin-left: 40%; display:flex;">
    <form action="{{route('delete3', $datap->id)}} " method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" style="width:200px;  background-color: rgb(218, 10, 10); padding: 5px; color:white; border:none" >DELETE</button>
        </form>
    <a href="{{route('goedit3', $datap->id)}} " style="width:200px;"  class=" btn btn-info" >EDIT</a>

    </div>
    
</div>

@endsection