@extends('common/layout')

@section('content')
<div class="page page-home">
    
    <img src="img/starfleet-logo.png" alt="" class="logo">
    <h1>Starfleet<br><small>Captain assignment</small></h1>

    <div class="desc">
        Is there an war? A planet about to explode? Send a starfleet captain right into the supernova! They will be happy to go.
    </div>

    <a href="#" class="report">Assign a captain</a>

    <div class="captains">
        <a href="/capitan/kirk">
            <img src="img/kirk.jpg" alt="">
        </a>
        <a href="#">
            <img src="img/picard.jpg" alt="">
        </a>
        <a href="#">
            <img src="img/janeway.jpg" alt="">
        </a>
        <a href="#">
            <img src="img/archer.jpg" alt="">
        </a>
        <a href="#">
            <img src="img/georgiou.jpg" alt="">
        </a>
    </div>



</div>
@endsection
