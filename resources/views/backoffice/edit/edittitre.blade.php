@extends('template/back')
@section('content')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error  )
                <li style="margin-left: 50%">{{ $error }} </li>
            @endforeach
        </ul>
    </div>
@endif
<h1 class="text-center"  style="margin: 150px"> BACK OFFICE | Edit Titre</h1>

    <form style="margin-left: 40%;"  action="{{route('update5', $datap[0]->id)}}" method="post">
        @csrf
        @method('PUT')
        Titre : <input value="{{$datap[0]->titre}} " type="text" name="titre">
        Text : <input value="{{$datap[0]->text}} " type="text" name="text">
        <button type="submit">SAVE</button>
        <a href="/back.html" class="text-center" style="width:200px;  background-color: rgb(126, 123, 123); padding: 20px; color:white; margin:15px">Retours vers Backoffice Home</a>

    </form>
    
    
    



@endsection