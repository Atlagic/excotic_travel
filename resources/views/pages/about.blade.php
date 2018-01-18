@extends('layouts.template')

@section('content')
<div class="row">
    <div class="col-md-12 text-center">
      <h3 class="reserveTitle">About Excotic Travel</h3>
      <span>Exotic travel agency was established in 2003. For many years and countless many well-organized trips
        around the world, we have positioned themselves among the leading travel agencies on the market. We have
        the OTP 107/2016 license for organizing trips at home and abroad, and we can boast of active membership in
        IATA and YUTA organizations.</span><br/><br/>
      <span>ET's tourist offer is ranked in the most diverse and most favorable one. We organize tourist tours of
        the world's largest metropolises such as: India, Turkey, Malta, China, Polynesia, Nepal, Italy etc. You can find arrangements
        for summer and winter season, distant destinations, cruises, trips, group and individual programs, air tickets, hotel accommodation,
        rent a car. We also organize student and school excursions, as well as team building trips.</span><br/><br/>

        <p><b>That the quality in tourism prices is confirmed by the numerous prestigious awards of the Excotic travel in the field of tourism, some of them are:</b></p><br/><br/>
        <p style="color:#01449d;"><b>AWARDS 2006:</b></p>
        <p>Champion tourism for student excursions Golden amphora for innovation and a new approach to the tourism market of Spain - In a completely
          new way, we introduced Spain to our market, which in addition to the award contributed to the great response from the public</p><br/><br/>
        <p style="color:#01449d;"><b>AWARDS 2007:</b></p>
        <p>Tourism championship for the organization of tourist arrangements for the India</p><br/><br/>
        <p style="color:#01449d;"><b>AWARDS 2008:</b></p>
        <p>Tourism championship for the organization of tourist arrangements for Italy</p><br/><br/>
        <p style="color:#01449d;"><b>AWARDS 2012:</b></p>
        <p>Tourism championships for the organization of tourist arrangements in European metropolises</p><br/><br/>
        <p style="color:#01449d;"><b>AWARDS 2015:</b></p>
        <p>Tourism championship for the organization of tourist arrangements in China</p><br/><br/>
        <p style="color:#01449d;"><b>Thank you for the trust shown so far, and we hope that we will travel together in the next few years together.</b></p><br/>
    </div>
  </div>
  <div class="row">
    <div class="col-md-4 picCont">
      <img class="media-object" src="{{ asset('pictures/me.jpg') }}" width="300" height="300" alt="amer">
    </div>
    <div class="col-md-7 mg-right">
      <div id="accordion" role="tablist">
        <div class="card">
          <div class="card-header" role="tab" id="headingOne">
            <h5 class="mb-0">
              <a data-toggle="collapse" href="#collapseOne" role="button" aria-expanded="true" aria-controls="collapseOne">
                About author
              </a>
            </h5>
          </div>

          <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
            <div class="card-body">
                I am a student currently living in Belgrade(Serbia) and I am on the third year of ICT collage, which is a great school
                for learning about internet technologies. Web development is my passion and for now, I created different sites using HTML,
                CSS, Javascript, jQuery, PHP etc. I've also learned about basic programing with languages like C and C++ and Object-Oriented
                programming with Java and C#.<br/>
                <b>This website is developed in Laravel (PHP OOP Framework) and BOOTSTRAP 4</b>
            </div>
          </div>
        </div>
      </div>
    </div></div>
@endsection
