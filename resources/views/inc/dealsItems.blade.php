<div id="content">
    @if(count($deals) > 0)
        @foreach($deals as $deal)
            <div class="card text-center offer">
              <div class="card-header bg-primary blue">
                <p class="text-dark"><b>{{$deal->header}}</b></p>
              </div>
              <div class="card-body">
                <h5 class="card-title">{{$deal->place}}<span class="glyphicon glyphicon-plane" aria-hidden="true"></span></h5>
                <p class="card-text">{{$deal->time}}</p>
                <a href="/deals/{{$deal->idDeal}}" class="btn btn-primary">{{$deal->price."€"}}</a>
              </div>
              <div class="card-footer text-muted">
                <?php echo date("d/m/y H:i:s", $deal->date); ?>
              </div>
            </div>
        @endforeach
    @endif
</div>

