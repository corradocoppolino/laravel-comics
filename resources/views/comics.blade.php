@extends('layouts.main')

@section('content')

<main class="comics">

<div class="container">

    <div class="container-photo">

        @foreach($fumetti as $fumetto)

        <div class="box">
            
            

            <div class="box-img">
                <img src="{{$fumetto['thumb']}}" alt="">
            </div>
            
            <h3>{{$fumetto['title']}}</h3>
            
        </div>

        @endforeach

        

    </div>

</div>

</main>

@endsection