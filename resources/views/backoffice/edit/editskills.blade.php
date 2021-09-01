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
<h1 class="text-center"  style="margin: 150px"> BACK OFFICE | Edit Skill</h1>

    <form style="margin-left: 40%;"  action="{{route('update2', $datap[0]->id)}}" method="post">
        @csrf
        @method('PUT')
        Nom : <input value="{{$datap[0]->img}} " type="text" name="nom">
        pourcentage : <input value="{{$datap[0]->img}} " type="number" name="pourcentage">
        <button type="submit">SAVE</button>
        <a href="/back.html" class="text-center" style="width:200px;  background-color: rgb(126, 123, 123); padding: 20px; color:white; margin:15px">Retours vers Backoffice Home</a>

    </form>
    
    
    



@endsection