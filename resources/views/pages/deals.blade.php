@extends('layouts.app')

@section('content')
    {!! Form::open(['url' => 'deals', 'method' => 'get', 'class' => 'form-inline', 'role' => 'search']) !!}
    <div class="form-group mx-sm-3 mb-2">
        {!! Form::text('search', Request::get('search'), ['class' => 'form-control', 'placeholder' => 'Search state or city']) !!}
    </div>
    <button type="submit" class="btn btn-primary mb-2">Search</button>
    {{-- TODO: razdvojiti u dve forme i uraditi filter --}}
    <div class="form-group mx-sm-3 mb-2 mr-right">
        {{ Form::select('filter', [
           'price' => 'Price ...',
           'growing' => 'Growing',
           'falling' => 'Faling'],
           1,
           ['class' => 'form-control'],
           ['id' => 'inputState']
        ) }}
    </div>
    <button type="submit" class="btn btn-primary mb-2">Filter</button>
    {!! Form::close() !!}
    @if(count($deals) > 0)
        @foreach($deals as $deal)
            <div class="card text-center offer">
              <div class="card-header bg-primary blue">
                <p class="text-dark"><b>{{$deal->header}}</b></p>
              </div>
              <div class="card-body">
                <h5 class="card-title">{{$deal->place}}<span class="glyphicon glyphicon-plane" aria-hidden="true"></span></h5>
                <p class="card-text">{{$deal->time}}</p>
                <a href="/deals/{{$deal->idDeal}}" class="btn btn-primary">{{$deal->price}}</a>
              </div>
              <div class="card-footer text-muted">
                <?php echo date("d/m/y H:i:s", $deal->date); ?>
              </div>
            </div>
        @endforeach
    @endif
    <div class="row">
      <div class="paginationContainer">
        <nav class="pagination-center" aria-label="Page navigation example">
          {{ $deals->links('pagination.default') }}
        </nav>
      </div>
    </div>
@endsection