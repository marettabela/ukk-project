@extends('layouts.app')

@section('content')
<div class="fh5co-hero">
            <div class="fh5co-overlay" style="padding-left: 50px;">
            <div class="fh5co-cover" data-stellar-background-ratio="0.5" style="background-image: url(images/cover_bg_1.jpg);">
            <div class="row">
                <div class="col-sm-5 col-md-5">
                     <div class="tabulation animate-box">
                     <div class="tab-content">
                        @foreach($rute as $rutes)
                        <b style="color:">  
                            Maskapai : {{$rutes->transportation->description}} ( {{$rutes->transportation->code}} )<br>
                            Rute : {{$rutes->rute_from}} - {{$rutes->rute_to}}<br>
                            Harga : {{$rutes->price}}<br>
                        </b>
                        <a href="{{route('book.detail',$rutes)}}?seat={{$_GET['seat']}}" class="btn btn-primary" style="font-size: 12px;">PILIH</a><br>
                                                        <hr>
                
                        @endforeach
                        {{$rute->links()}}
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
@endsection