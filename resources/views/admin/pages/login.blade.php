<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <style>
 @keyframes slideFromTopToBottom {
            0% {
                transform: translateY(-100%);
                opacity: 0;
            }
            100% {
                transform: translateY(0);
                opacity: 1.5;
            }
        }

        #animated-content {
            animation: slideFromTopToBottom 1.5s ease-in-out;
        }
        </style>
</head>
<body>
<section class="vh-100" style="background-color: #ffb5b5;">
  <div id="animated-content" class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card shadow-2-strong" style="border-radius: 1rem;">
          <div  class="card-body p-5 text-center">

            <h3 class="mb-5">Sign in</h3>
            @if(Session::has('message'))
            <p class="alert alert-danger">{{session()->get('message')}}</p>
            @endif
           <form action="{{route('loginForm.post')}}"  method="post">
            @csrf
            <div class="form-outline mb-4">
              <input type="email" id="typeEmailX-2" class="form-control-lg" name="email"/>
              <label class="form-label" for="typeEmailX-2">Email</label>
              @error('email')
              <div class="alert alert-danger">{{$message}}

              </div>
              @enderror
            </div>

            <div class="form-outline mb-4">
              <input type="password" id="typePasswordX-2" class="form-control-lg" name="password"/>
              <label class="form-label" for="typePasswordX-2">Password</label>
              @error('password')
              <div class="alert alert-danger">{{$message}}

              </div>
              @enderror
            </div>
            
            <button class="btn btn-primary btn-lg btn-block" type="submit">Login</button> 
          
           
            </form>
            <hr class="my-4">

            
        </div>
      </div>
    </div>
  </div>
</section>
<script src="https://getbootstrap.com/docs/5.2/dist/js/bootstrap.bundle.min.js"></script>


</body>
</html>