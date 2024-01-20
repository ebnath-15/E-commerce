<div id="header-carousel" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner"> 
        @foreach($sliders as $key => $slider) 
    <div class="carousel-item{{ $key === 0 ? ' active' : '' }}" style="height: 410px;">
        <!-- ... (your existing code) ... -->
        <img class="img-fluid" src="{{url('/uploads/'.$slider->Image)}}" alt="Image">
    </div>
@endforeach

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
