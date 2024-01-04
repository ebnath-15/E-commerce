 <!-- Navbar Start -->
 <div class="container-fluid mb-5">
        <div class="row border-top px-xl-5">
            <div class="col-lg-3 d-none d-lg-block">
                <a class="btn shadow-none d-flex align-items-center justify-content-between bg-primary text-white w-100" data-toggle="collapse" href="#navbar-vertical" style="height: 65px; margin-top: -1px; padding: 0 30px;">
                    <h6 class="m-0">Categories</h6>
                    <i class="fa fa-angle-down text-dark"></i>
                </a>
                <nav class="collapse show navbar navbar-vertical navbar-light align-items-start p-0 border border-top-0 border-bottom-0" id="navbar-vertical">
                    <div class="navbar-nav w-100 overflow-hidden" style="height: 410px">
                        <div class="nav-item dropdown">
                            @foreach($categories as $category)
                            <a href="{{route('ProductUnderCategory',$category->id)}}" class="nav-link">{{$category->name}}<i class="fa fa-angle-down float-right mt-1"></i></a>
                             @endforeach
                        </div>
                    </div>
                </nav>
            </div>
            <div class="col-lg-9">
                <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0">
                    <a href="" class="text-decoration-none d-block d-lg-none">
                        <h1 class="m-0 display-5 font-weight-semi-bold"><span class="text-primary font-weight-bold border px-3 mr-1">E</span>Shopper</h1>
                    </a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto py-0">
                            <a href="{{route('frontend.home')}}" class="nav-item nav-link active">Home</a>
                            <a href="shop.html" class="nav-item nav-link">Shop</a>
                            <a href="detail.html" class="nav-item nav-link">Shop Detail</a>
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pages</a>
                                <div class="dropdown-menu rounded-0 m-0">
                                    <a href="cart.html" class="dropdown-item">Shopping Cart</a>
                                    <a href="checkout.html" class="dropdown-item">Checkout</a>
                                </div>
                            </div>
                            <a href="{{route('contact')}}" class="nav-item nav-link">Contact</a> 
                        </div>
                    
                        <div class="navbar-nav ml-auto py-0">
                      @guest
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">login</button>


                            <a href="{{route('registration')}}" class="nav-item nav-link">Register</a>
                        @endguest


                         @auth
                            <a href="{{route('customer.logout')}}" class="nav-item nav-link">Logout</a>
                        </div>
                        
                        <a href="{{route('profile')}}" class="nav-item nav-link">{{auth()->user()->name}}</a>  
                        
                        @endauth
                   
                    </div>
                   
                </nav>
                
    <!-- Navbar End -->


<!-- Login Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Login</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{route('customer.store')}}" method="post">
    @csrf


  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input required name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">

</div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input required name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>


  <button type="submit" class="btn btn-primary">Login</button>

</form>
      </div>
      
      
    </div>
  </div>
</div>


