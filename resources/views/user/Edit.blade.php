<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <style media="screen">

    </style>
  </head>
  <body>
      <div class="container">
         <div class="row">
<div class="col-lg-8 col-sm-8 col-xs-12">


    <a href="/getUser" class="btn btn-info"><- Go Back</a>

     @foreach ($users as $user)
     <form class="" action="/eshop/{{$user->id}}" method="PATCH">
     {{csrf_field()}}
     <label for=""><h3> Edit User</h3></label>
     <div class="form-group">

       <label for="">Name</label>
       <input type="hidden" name="id" value="{{$user->id}}">
       <input type="text" name="name" value="{{$user->name}}" class="form-control input-lg">
     </div>
     <div class="">
       <label for="">City</label>
       <input type="text" name="city" value="{{$user->city}}" class="form-control input-lg">
     </div>
     <div class="">
       <label for=""> Email</label>
       <input type="text" name="email" value="{{$user->email}}" class="form-control input-lg">
     </div>
     <div class="">
       <label for="">Age</label>
       <input type="text" name="age" value="{{$user->age}}" class="form-control input-lg">
     </div>
     <br>
     <div class="">
     <button type="submit"  class="btn btn-info">Update</button>
     </div>

   @endforeach
   </form>

</div>
         </div>
      </div>
  </body>
</html>
