<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
           <div class="container">
                <div class="row">
                  <div class="col-lg-8  col-sm-12 col-xs-12">
                     <a href="\eshop" class="btn btn-primary">Login</a>
                          <h3 class="text-primary">OR</h3>
                      @if (session()->has('message'))
                          <label class="alert alert-warning">{{session('message')}}</label>
                      @endif
                      <h1 class="text-danger">Create Account !</h1>
                      <form class="" action="{{url('eshop')}}" method="post">
                        {{csrf_field()}}
                          <div class="form-group">
                               <label class="text-info">User  Name</label>

                               <input type="text" name="name" value="{{ old('name')}}" class="form-control input-lg">
                               @if ($errors->has('name'))
                                       <span class="alert alert-danger">{{$errors->first('name')}}</span>
                               @endif

                          </div>
                          <div class="form-group">
                               <label class="text-info">Email</label>

                               <input type="text" name="email" value="{{ old('email')}}" class="form-control input-lg">
                               @if ($errors->has('email'))
                                       <span class="alert alert-danger">{{$errors->first('email')}}</span>
                               @endif

                          </div>
                          <div class="form-group">
                               <label class="text-info">City</label>

                               <input type="text" name="city" value="{{ old('city')}}" class="form-control input-lg">
                               @if ($errors->has('city'))
                                       <span class="alert alert-danger">{{$errors->first('city')}}</span>
                               @endif

                          </div>
                          <div class="form-group">
                               <label class="text-info">age</label>

                               <input type="text" name="age" value="{{old('age')}}" class="form-control input-lg">
                               @if ($errors->has('age'))
                                  <span class="alert alert-danger">{{$errors->first('age')}}</span>
                               @endif

                          </div>
                          <div class="">
                             <button type="submit" name="button" class="btn btn-info">Login</button>
                          </div>
                      </form>
                  </div>
                </div>
           </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  </body>
</html>
