@extends('layouts.template')

@section('content')
<div class="row">
    <div class="modal fade" id="enlargeImageModal" tabindex="-1" role="dialog" aria-labelledby="enlargeImageModal" aria-hidden="true">
       <div class="modal-dialog modal-lg" role="document">
         <div class="modal-content">
           <div class="modal-header">
             <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
           </div>
           <div class="modal-body">
             <img src="" data-scr="" class="enlargeImageModalSource" style="width: 100%;">
           </div>
         </div>
       </div>
    </div>
    <div class="col-md-4 zoom"><img data-src="gallery/amer.jpg" src="gallery_small/amer.jpg"></div>
    <div class="col-md-4 zoom"><img data-src="gallery/cappadocia.jpg" src="gallery_small/cappadocia.jpg"></div>
    <div class="col-md-4 zoom"><img data-src="gallery/gozo.jpg" src="gallery_small/gozo.jpg"></div>
    <div class="col-md-4 zoom"><img data-src="gallery/isle.jpg" src="gallery_small/isle.jpg"></div>
    <div class="col-md-4 zoom"><img data-src="gallery/namje.jpg" src="gallery_small/namje.jpg"></div>
    <div class="col-md-4 zoom"><img data-src="gallery/taha'a.jpg" src="gallery_small/taha'a.jpg"></div>
    <div class="col-md-4 zoom"><img data-src="gallery/arashiyama.jpg" src="gallery_small/arashiyama.jpg"></div>
    <div class="col-md-4 zoom"><img data-src="gallery/bagan.jpg" src="gallery_small/bagan.jpg"></div>
    <div class="col-md-4 zoom"><img data-src="gallery/cano.jpg" src="gallery_small/cano.jpg"></div>
    <div class="col-md-4 zoom"><img data-src="gallery/con_dao.jpg" src="gallery_small/con_dao.jpg"></div>
    <div class="col-md-4 zoom"><img data-src="gallery/fregate.jpg" src="gallery_small/fregate.jpg"></div>
    <div class="col-md-4 zoom"><img data-src="gallery/yellowstone.gif" src="gallery_small/yellowstone.gif"></div>
  </div>
@endsection
