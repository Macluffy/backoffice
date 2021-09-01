@extends('template/back')
@section('content')
<h1 class="text-center" style="margin: 150px"> BACK OFFICE | About</h1>




    @foreach ( $datap as $value)
    <div style="margin-left: 30%; margin-bottom: 50px;">
        <img src="{{asset('img/profile-img.jpg')}}" class="img-fluid" alt="">
    </div>
    
    <div class="row">
        <div class="col-lg-4" data-aos="fade-right">
          
        </div>
        <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
          <h3>{{$value->soustitre}} &amp; Web Developer.</h3>
          <p class="font-italic">
            {{$value->petittext}}
          </p>
          <div class="row">
            <div class="col-lg-6">
              <ul>
                <li><i class="icofont-rounded-right"></i> <strong>Birthday:</strong> {{$value->birthday}}</li>
                <li><i class="icofont-rounded-right"></i> <strong>Website:</strong> {{$value->website}}</li>
                <li><i class="icofont-rounded-right"></i> <strong>Phone:</strong> {{$value->phone}}</li>
                <li><i class="icofont-rounded-right"></i> <strong>City:</strong> {{$value->city}}</li>
              </ul>
            </div>
            <div class="col-lg-6">
              <ul>
                <li><i class="icofont-rounded-right"></i> <strong>Age:</strong> {{$value->age}}</li>
                <li><i class="icofont-rounded-right"></i> <strong>Degree:</strong> {{$value->degree}}</li>
                <li><i class="icofont-rounded-right"></i> <strong>PhEmailone:</strong> {{$value->PHEmailone}}</li>
                <li><i class="icofont-rounded-right"></i> <strong>Freelance:</strong> {{$value->Freelance}}</li>
              </ul>
            </div>
          </div>
          <p>
            {{$value->text}}
          </p>
        </div>
      </div>

    </div>





    <div style="margin-left: 40%; margin-top:100px;">
        <a class="text-center" href="{{route('show3',$value->id)}}" style="width:200px;  background-color: rgb(70, 199, 98); padding: 20px; color:white;">SHOW</a>
    </div>

        
    
    @endforeach



    <div style="margin-left: 40%; margin-top:100px;">
    <a href="/back.html" class="text-center" style="width:250px;  background-color: rgb(126, 123, 123); padding: 20px; color:white; margin:auto">Retours vers Back office</a>
    </div>










@endsection