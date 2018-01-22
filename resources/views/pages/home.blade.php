@extends('layouts.app')

@section('content')
<div class="row text-center">
    @if(count($cards) > 0)
        @foreach($cards as $card)
        <div class="card text-white mb-3" style="max-width: 18rem;">     
                <div class="card-header blue">{{$card->header}}</div>
                <div class="card-body">
                    <h5 class="card-title text-dark">{{$card->place}}</h5>
                    <a href="/home/{{$card->idDeal}}"><img src="{{$card->picture}}" class="img-responsive" style="width:100%" alt="Image"></a>
                </div>
                    </div>
        @endforeach
    @endif
</div>
@endsection 


