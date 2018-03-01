<footer class="container-fluid text-center">
    <p>Copyright &copy; Aleksandar Atlagic 2018</p>
    <form action="{{route('sendEmail')}}" method="post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="form-row deal">
            <div class="col-auto">
                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                        <div class="input-group-text">@</div>
                    </div>
                    @if (Auth::check())
                        <input type="email" class="form-control" id="email" name="contactmail" value="{{Auth::user()->email}}" required readonly>
                    @else
                        <input type="email" class="form-control" id="contactmail" name="contactmail" placeholder="mail@example.com" required readonly>
                    @endif
                </div>
            </div>
            <div class="col-auto">
                @if (Auth::check())
                     <button type="submit" class="btn btn-primary mb-2">Get deals</button>
                @else
                    <button type="submit" class="btn btn-primary mb-2" disabled>Get deals</button>
                @endif
            </div>
        </div>
    </form>
    @if (Auth::check())
        <span style="color:red;"></span>
    @else
        <span style="color:red; font-size:16px;">*Login to get new deals</span>
    @endif
</footer>