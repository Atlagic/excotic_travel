@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-md-4 picCont">
            <img class="media-object" src="{{ asset('storage/pictures/'.$item->picture) }}" width="300" height="200" alt="item_picture">
        </div>
        <div class="col-md-7">
            <div id="accordion" role="tablist">
                <div class="card">
                    <div class="card-header" role="tab" id="headingOne">
                        <h5 class="mb-0">
                            <a data-toggle="collapse" href="#collapseOne" role="button" aria-expanded="true" aria-controls="collapseOne">
                                About place
                            </a>
                        </h5>
                    </div>

                    <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
                        <div class="card-body">
                            {{ $item->title }}
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" role="tab" id="headingTwo">
                        <h5 class="mb-0">
                            <a class="collapsed" data-toggle="collapse" href="#collapseTwo" role="button" aria-expanded="false" aria-controls="collapseTwo">
                                Interesting facts
                            </a>
                        </h5>
                    </div>
                    <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordion">
                        <div class="card-body">
                            {{ $item->title2 }}
                        </div>
                    </div>
                </div>
            </div>
        </div></div><br/><br/>

    <div class="row">
        <div class="col-md-12 text-center">
            {!! Form::open(['action' => 'OfferController@storeComment', 'method' => 'post']) !!}
            {{ csrf_field() }}
            <div class="card">
                <div class="card-header bg-primary">
                    <b class="text-light">Write your comment here</b>
                </div>
                <div class="card-body">
                    <blockquote class="blockquote mb-0">
                        @if (Auth::check())
                            {{ Form::hidden('deal', $item->idDeal) }}
                            {{ Form::hidden('user', Auth::user()->id) }}
                            {{ Form::textarea('content', '', ['style' => 'min-height:100px; min-width:100%; max-height:100px; max-width:100%']) }}
                        @else
                            {{ Form::textarea('content', '', ['style' => 'min-height:100px; min-width:100%; max-height:100px; max-width:100%', 'readonly', 'placeholder' => 'Please login to comment ...']) }}
                        @endif
                    </blockquote>
                    @if (Auth::check())
                        {{ Form::submit('POST', ['name' => 'comment', 'class' => 'btn btn-primary']) }}
                    @else
                        {{ Form::submit('POST', ['class' => 'btn btn-primary', 'disabled']) }}
                    @endif
                </div>
            </div><br/>
            <div class="row">
                <div class="col-md-12 text-center">
                    @if (Auth::check())
                        <h3 class="reserveTitle text-primary">What our customers says about this place</h3>
                    @else
                        <h3 class="reserveTitle">If you want to leave a comment please login</h3>
                    @endif
                </div>
            </div>
            {!! Form::close() !!}
            @foreach($comments as $comment)
                <div class="card">
                    <div class="card-header">
                        {{ $comment->name }} - {{ $comment->ctime }}
                    </div>
                    <div class="card-body">
                        <blockquote class="blockquote mb-0">
                            <p>{{ $comment->content }}</p>
                        </blockquote>
                    </div>
                </div><br/>
            @endforeach
        </div>
    </div>
@endsection
