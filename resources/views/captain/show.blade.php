@extends('common/layout')

@section('content')
<div class="page page-captain">

    <section class="info">

        <img class="portrait" src="{{ asset('img/'.$captain->slug.'.jpg') }}" alt="">

        <div class="data">
            <h1>{{ $captain->name }}</h1>

            <div class="story">
                {!! nl2br($captain->story) !!}
            </div>
        </div>

        <div class="service">
            <h2>In service</h2>
            From {{ date('g:i A', strtotime($captain->serves_from)) }} to {{ date('g:i A', strtotime($captain->serves_until)) }}.

            <div class="status unavailable">Current status: <span>Not in service</span></div>
        </div>

    </section>

    <section class="captain-assign">
        <h2>Assign a captain</h2>

        <form action="{{ action('CaptainController@saveAssing', [ $captain->id])  }}" method="post">
            @csrf
            <input type="text" name="subject" placeholder="Cause for assignment">

            <textarea name="description" placeholder="Thorough description"></textarea>

            <input type="submit" value="Give assignment">
        </form>
    </section>

</div>
@endsection
