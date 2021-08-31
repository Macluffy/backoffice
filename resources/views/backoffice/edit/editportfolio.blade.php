@extends('template/back')
@section('content')
<h1 class="text-center"  style="margin: 150px"> BACK OFFICE | Edit Portfolio</h1>

    <form  action="{{route('update', $article->id)}}" method="post">
        @csrf
        @method('PUT')
        Image : <input value="{{$article->img}} " type="text" name="img">
        <button type="submit">SAVE</button>
        <a href="/modif/portfolio" class="text-center" style="width:200px;  background-color: rgb(126, 123, 123); padding: 20px; color:white; margin:15px">Retours vers portfolio a modifier</a>

    </form>
    
    
    



@endsection