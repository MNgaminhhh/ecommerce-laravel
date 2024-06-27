<section id="wsus__banner">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="wsus__banner_content">
                    <div class="row banner_slider">
                        @foreach ($slider as $sli)
                            <div class="col-xl-12">
                                <div class="wsus__single_slider" style="background: url({{$sli->banner}});">
                                    <div class="wsus__single_slider_text">
                                        <h3>{!!$sli->type !!}</h3>
                                        <h1>{!!$sli->title!!}</h1>
                                        <h6>start at {{$sli->starting_price}}</h6>
                                        <a class="common_btn" href="{{$sli->btn_url}}">shop now</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
