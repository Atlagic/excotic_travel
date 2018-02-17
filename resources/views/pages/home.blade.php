@extends('layouts.app')

@section('content')
<div class="row text-center">
    @if(count($offers) > 0)
        @foreach($offers as $offer)
        <div class="card text-white mb-3" style="max-width: 18rem;">     
                <div class="card-header blue">{{$offer->header}}</div>
                <div class="card-body">
                    <h5 class="card-title text-dark">{{$offer->place}}</h5>
                    <a href="/home/{{$offer->idDeal}}"><img src="{{ asset('storage/pictures/'.$offer->picture) }}" class="img-responsive" style="width:100%" alt="Image"></a>
                </div>
                    </div>
        @endforeach
    @endif
</div>
@endsection 


