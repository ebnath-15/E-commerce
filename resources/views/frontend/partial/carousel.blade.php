<div id="header-carousel" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner"> 
        @foreach($sliders as $key => $slider)
        <div class="carousel-item{{$key === 0 ? 'active' : ''}}" style="height: 410px;">
            <img class="img-fluid" src="{{url('/uploads/'.$slider->Image)}}" alt="Image">
            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                <div class="p-3" style="max-width: 700px;">
                    <h4 class="text-light text-uppercase font-weight-medium mb-3">10% Off Your First Order</h4>
                    <h3 class="display-4 text-white font-weight-semi-bold mb-4">Fashionable Dress</h3>
                    <a href="" class="btn btn-light py-2 px-3">Shop Now</a>  
                </div>
            </div>
        </div>
        @endforeach
        {{-- @foreach($sliders as $key => $slider) 
    <div class="carousel-item{{ $key === 0 ? ' active' : '' }}" style="height: 410px;">
        <!-- ... (your existing code) ... -->
        <img class="img-fluid" src="{{url('/uploads/'.$slider->Image)}}" alt="Image">
    </div>
@endforeach --}}

    </div>
    <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">  
        <div class="btn btn-dark" style="width: 45px; height: 45px;">
            <span class="carousel-control-prev-icon mb-n2"></span>
        </div>
    </a>
    <a class="carousel-control-next" href="#header-carousel" data-slide="next"> 
        <div class="btn btn-dark" style="width: 45px; height: 45px;">
            <span class="carousel-control-next-icon mb-n2"></span>  
        </div> 
    </a> 
</div>
</div>
</div>
</div> 