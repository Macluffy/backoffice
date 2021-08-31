@extends('template.back')


@section('content')
<h1  class="text-center" style="margin: 150px"> BACK OFFICE | Create portfolio</h1>
<div style="margin-left: 40%">
    <form class="m-5" action="/portfolio" method="post">
        @csrf
        Image : <input type="text" name="img">
        <button type="submit">Submit</button>
        <a href="back.html" class="text-center" style="width:200px;  background-color: rgb(126, 123, 123); padding: 20px; color:white; margin:15px">Retours vers Back office</a>
    </form>
</div>
    
@endsection