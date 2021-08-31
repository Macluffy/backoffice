@extends('template/back')
@section('content')
<h1 class="text-center" style="margin: 150px"> BACK OFFICE | Portfolio</h1>



<section style="width: 100%; display:flex; flex-direction:column;  align-items:center; ">
 @foreach ( $datap as $value)
    <div style="margin: 10rem; display:flex; flex-direction:column; background-color:rgb(235, 235, 187); width: 400px; align-items:center;">
        <img src="{{$value->img}}" style="width:300px; margin:15px; " alt="">
        <a class="text-center" href="{{route('show1',$value->id)}}" style="width:200px;  background-color: rgb(70, 199, 98); padding: 20px; color:white;">SHOW</a>
    </div>
    @endforeach




    <a href="/back.html" class="text-center" style="width:250px;  background-color: rgb(126, 123, 123); padding: 20px; color:white; margin:auto">Retours vers Back office</a>
   


</section>







@endsection