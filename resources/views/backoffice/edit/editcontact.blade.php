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
<h1 class="text-center"  style="margin: 150px"> BACK OFFICE | Edit Contact</h1>

    <form style="margin-left: 25%;"  action="{{route('update4', $datap[0]->id)}}" method="post">
        @csrf
        @method('PUT')
        <div style="display: flex; flex-direction:column;">
        Location : <input value="{{$datap[0]->location}} " type="text" name="location">
        Location reponse : <input value="{{$datap[0]->locationR}} " type="text" name="locationR">
        Email : <input value="{{$datap[0]->email}} " type="text" name="email">
        Email reponse : <input value="{{$datap[0]->emailR}} " type="text" name="emailR">
        Call : <input value="{{$datap[0]->call}} " type="text" name="call">
        Call reponse : <input value="{{$datap[0]->callR}} " type="text" name="callR">
        Your name : <input value="{{$datap[0]->yname}} " type="text" name="yname">
        Your email : <input value="{{$datap[0]->yemail}} " type="text" name="yemail">
        Subject : <input value="{{$datap[0]->subject}} " type="text" name="subject">
        Message : <input value="{{$datap[0]->message}} " type="text" name="message">
        Send Message : <input value="{{$datap[0]->smessage}} " type="text" name="smessage">


        <button type="submit" style="width: 100px;">SAVE</button>
        <a href="/back.html" class="text-center" style="width:200px;  background-color: rgb(126, 123, 123); padding: 20px; color:white; margin:15px">Retours vers Backoffice Home</a>


        </div>
        
        

    </form>
    
    
    



@endsection