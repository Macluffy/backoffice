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
<h1 class="text-center"  style="margin: 150px"> BACK OFFICE | Edit About</h1>

    <form style="margin-left: 25%;"  action="{{route('update3', $datap[0]->id)}}" method="post">
        @csrf
        @method('PUT')
        <div style="display: flex; flex-direction:column;">
        Soustitre : <input value="{{$datap[0]->soustitre}} " type="text" name="soustitre">
        Petittext : <input value="{{$datap[0]->petittext}} " type="text" name="petittext">
        Birthday : <input value="{{$datap[0]->birthday}} " type="text" name="birthday">
        Website : <input value="{{$datap[0]->website}} " type="text" name="website">
        Phone : <input value="{{$datap[0]->phone}} " type="text" name="phone">
        City : <input value="{{$datap[0]->city}} " type="text" name="city">
        Age : <input value="{{$datap[0]->age}} " type="number" name="age">
        Degree : <input value="{{$datap[0]->degree}} " type="text" name="degree">
        PHEmailone : <input value="{{$datap[0]->PHEmailone}} " type="text" name="PHEmailone">
        Freelance : <input value="{{$datap[0]->Freelance}} " type="text" name="Freelance">
        Text : <input value="{{$datap[0]->text}} " type="text" name="text">


        <button type="submit" style="width: 100px;">SAVE</button>
        <a href="/back.html" class="text-center" style="width:200px;  background-color: rgb(126, 123, 123); padding: 20px; color:white; margin:15px">Retours vers Backoffice Home</a>


        </div>
        
        

    </form>
    
    
    



@endsection