@extends('template/back')
@section('content')
{{-- <h1 class="text-center" style="margin: 150px"> BACK OFFICE | Skill</h1>



<div class="container">



  <div class="row skills-content">
  @foreach ($datap as $value)
    <div class="col-lg-6" data-aos="fade-up">

      <div class="progress">
        <span class="skill">{{$value->nom}} <i class="val">{{$value->pourcentage}}</i></span>
        <div class="progress-bar-wrap">
          <div class="progress-bar" role="progressbar" aria-valuenow="{{$value->pourcentage}}" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
      </div>
      
      <a class="text-center" href="{{route('show2',$value->id)}}" style="width:200px;  background-color: rgb(70, 199, 98); padding: 20px; color:white;">SHOW</a>

    </div>
@endforeach
  </div>

</div> --}}


<section id="skills" class="skills section-bg">
  <h1 class="text-center" style="margin: 150px"> BACK OFFICE | Skill</h1>
  <div class="container">

    <div class="section-title">
     
    </div>

    <div class="row skills-content">
    @foreach ($datap as $value)
      <div class="col-lg-6 m-3" data-aos="fade-up">

        <div class="progress">
          <span class="skill">{{$value->nom}} <i class="val">{{$value->pourcentage}}</i></span>
          <div class="progress-bar-wrap">
            <div class="progress-bar" role="progressbar" aria-valuenow="{{$value->pourcentage}}" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div>
        <a class="text-center" href="{{route('show2',$value->id)}}" style="width:20px;  background-color: rgb(70, 199, 98); padding: 10px; color:white;">SHOW</a>
        

      </div>
  @endforeach
    </div>

  </div>
</section>





@endsection