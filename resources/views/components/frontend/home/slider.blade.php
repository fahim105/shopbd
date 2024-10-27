@php
$sliders = App\Models\Slider::orderBy('slider_title','ASC')->get();
$active='active';
@endphp



<div class="slider-area">
    <!-- Slider -->
    <div class="block-slider block-slider4">
        <ul class="" id="bxslider-home4">
            <li>
                <img src="{{asset('ui/frontend/img/h4-slide.png')}}" alt="Slide">
                <div class="caption-group">
                    <h2 class="caption title">
                        iPhone <span class="primary">6 <strong>Plus</strong></span>
                    </h2>
                    <h4 class="caption subtitle">Dual SIM</h4>
                    <a class="caption button-radius" href="#"><span class="icon"></span>Shop now</a>
                </div>
            </li>

        </ul>
    </div>
    <!-- ./Slider -->
</div> <!-- End slider area -->







{{--$active='active';--}}
{{--@php $active = '';--}}
{{--@endphp--}}
{{--{{$active}}--}}
