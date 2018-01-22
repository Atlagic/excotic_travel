@extends('layouts.app')

@section('content')
<form class="form-inline">
    <div class="form-group mx-sm-3 mb-2">
      <input type="text" class="form-control" id="inputPassword2" placeholder="Search state or city">
    </div>
    <button type="submit" class="btn btn-primary mb-2">Search</button>
    <div class="form-group mx-sm-3 mb-2 mr-right">
      <select id="inputState" class="form-control">
        <option selected>Price ...</option>
        <option>Growing</option>
        <option>Falling</option>
      </select>
    </div>
    <button type="submit" class="btn btn-primary mb-2">Filter</button>
  </form>
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
<!--    <div class="card text-center offer">
      <div class="card-header bg-primary blue">
        <p class="text-dark"><b>FIRST MINUTE OFFER</b></p>
      </div>
      <div class="card-body">
        <h5 class="card-title">Namje, Nepal - PLANE <span class="glyphicon glyphicon-plane" aria-hidden="true"></span></h5>
        <p class="card-text">( 9 DAYS WITHOUT LODGING )</p>
        <a href="#" class="btn btn-primary">342€</a>
      </div>
      <div class="card-footer text-muted">
        5 days ago
      </div>
    </div>
    <div class="card text-center offer">
      <div class="card-header bg-primary blue">
        <p class="text-dark"><b>BEST BUY OFFER</b></p>
      </div>
      <div class="card-body">
        <h5 class="card-title">Amer fort, India - PLANE <span class="glyphicon glyphicon-plane" aria-hidden="true"></span></h5>
        <p class="card-text">( 10 DAYS WITHOUT LODGING )</p>
        <a href="#" class="btn btn-primary">370€</a>
      </div>
      <div class="card-footer text-muted">
        8 days ago
      </div>
    </div>
    <div class="card text-center offer">
      <div class="card-header bg-primary blue">
        <p class="text-dark"><b>EXCLUSIVE OFFER FOR HEDONISTS</b></p>
      </div>
      <div class="card-body">
        <h5 class="card-title">Cappadocia, Turkey - BUS <span class="glyphicon glyphicon-bed" aria-hidden="true"></span></h5>
        <p class="card-text">( 14 DAYS WITH LODGING )</p>
        <a href="#" class="btn btn-primary">320€</a>
      </div>
      <div class="card-footer text-muted">
        11 days ago
      </div>
    </div>
    <div class="card text-center offer">
      <div class="card-header bg-primary blue">
        <p class="text-dark"><b>HEAVEN FOR RELAXING</b></p>
      </div>
      <div class="card-body">
        <h5 class="card-title">Taha’a, French Polynesia - PLANE & BUS <span class="glyphicon glyphicon-plane" aria-hidden="true">-<span class="glyphicon glyphicon-bed" aria-hidden="true"></span></h5>
        <p class="card-text">( 8 DAYS WITH LODGING )</p>
        <a href="#" class="btn btn-primary">429€</a>
      </div>
      <div class="card-footer text-muted">
        2 weeks ago
      </div>
    </div>
    <div class="card text-center offer">
      <div class="card-header bg-primary blue">
        <p class="text-dark"><b>LAST MINUTE OFFER</b></p>
      </div>
      <div class="card-body">
        <h5 class="card-title">Gozo, Malta - PLANE <span class="glyphicon glyphicon-plane" aria-hidden="true"></span></h5>
        <p class="card-text">( 12 DAYS WITHOUT LODGING )</p>
        <a href="#" class="btn btn-primary">359€</a>
      </div>
      <div class="card-footer text-muted">
        3 weeks ago
      </div>
    </div>-->
    <div class="row">
      <div class="paginationContainer">
        <nav class="pagination-center" aria-label="Page navigation example">
          {{$deals->links('pagination.default')}}
        </nav>
      </div>
    </div>
@endsection