<!DOCTYPE html>
<html lang="en">
<head>
    <title>Travel Agency</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Work+Sans" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
<div class="jumbotron jumbotron-fluid text-center">
    <div class="container">
        <h1 class="display-4">Excotic Travel</h1>
        <h3>Our mission is to inspire people to explore excotic places and be the first choice for ET</h3>
    </div>
</div>

@include('inc.navbar')

<div class="container">
    <div class="row">
    <div class="col-md-10">
    {!! Form::open(['url' => 'deals', 'method' => 'get', 'class' => 'form-inline', 'role' => 'search']) !!}
    <div class="form-group mx-sm-3 mb-2">
        {!! Form::text('search', Request::get('search'), ['id'=>'search', 'class' => 'form-control', 'placeholder' => 'Search state or city', 'required']) !!}
        {!! Form::submit('Search', ['class'=>'btn btn-primary search', 'data-url' => url('deals/search')]) !!}
    </div></div>
    {!! Form::close() !!}
    <div class="col-md-2">
    {!! Form::open(['url' => 'deals', 'method' => 'get', 'class' => 'form-inline', 'role' => 'search', 'data-url' => url('deals/sort')]) !!}
    <div class="form-group filterForm mx-sm-3 mb-2 mr-right">
        {{ Form::select('filter', [
           'price' => 'Price ...',
           'asc' => 'Growing',
           'desc' => 'Faling'],
           1,
           [
           'class' => 'form-control filter',
           'data-url' => url('deals/sort'),
           ]
        ) }}
    </div>
    {!! Form::close() !!}</div></div>
    @include('inc.messages')
    @yield('content')
    <div class="row">
        <div class="paginationContainer">
            <nav class="pagination-center" aria-label="Page navigation example">
                {{ $deals->links('pagination.default') }}
            </nav>
        </div>
    </div>
</div><br>
<footer class="container-fluid text-center">
    <p>Copyright &copy; Aleksandar Atlagic 2018</p>
    <form>
        <div class="form-row deal">
            <div class="col-auto">
                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                        <div class="input-group-text">@</div>
                    </div>
                    <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Email address">
                </div>
            </div>
            <div class="col-auto">
                <button type="submit" class="btn btn-primary mb-2">Get deals</button>
            </div>
        </div>
    </form>
</footer>

<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
<script type="text/javascript" src="{{ asset('js/gallery.js') }}"></script>
<script src="{{asset('js/sort.js')}}"></script>
</body>
</html>


