@extends('layouts.app')

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
    @if(count($pictures) > 0)
        @foreach($pictures as $picture)
            <div class="col-md-4 zoom"><img data-src="{{ asset('storage/pictures/'.$picture->bigPicture) }}" src="{{asset('storage/smallPictures/'.$picture->bigPicture)}}" alt="{{$picture->alt}}"/></div>
        @endforeach
    @endif
</div>
@endsection
