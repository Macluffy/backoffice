@extends('template.back')


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
<h1  class="text-center" style="margin: 150px"> BACK OFFICE | Create portfolio</h1>
<div style="margin-left: 40%">
    <form class="m-5" action="{{route('store1')}}" method="post">
        @csrf
        Image : <input type="text" name="img" value="{{old('img')}} ">
        <button type="submit">Submit</button>
        <a href="back.html" class="text-center" style="width:200px;  background-color: rgb(126, 123, 123); padding: 20px; color:white; margin:15px">Retours vers Back office</a>
    </form>
</div>
    
@endsection