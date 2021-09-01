@extends('template/back')
@section('content')

<h1 class="text-center" style="margin: 150px"> BACK OFFICE | Show Titre</h1>
<a href="/modif/article" class="text-center" style="width:200px;  background-color: rgb(126, 123, 123); padding: 20px; color:white; margin:15px">Retours vers article a modifier</a>
<div style="width:50%; margin-left:30%; display:flex; flex-direction:column; justify-content:center; align-items:center;">
    
    <div class="section-title">
        <h2>{{$datap->titre}} </h2>
        <p>{{$datap->text}}</p>
      </div>
    
    <form action="{{route('delete5', $datap->id)}} " method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" style="width:200px;  background-color: rgb(218, 10, 10); padding: 5px; color:white; border:none" >DELETE</button>
    </form>
  <a href="{{route('goedit5', $datap->id)}} " style="width:200px;"  class=" btn btn-info" >EDIT</a>
</div>

@endsection