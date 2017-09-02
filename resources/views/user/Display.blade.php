<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <style >
      table thead{
        background-color:purple;
        color:white;

      }
      table thead th{
         text-align: center;
      }
      table tr td{
        text-align: center;
      }
    </style>
  </head>
  <body>
  <div class="container">
    <div class="row">
      <div class="col-lg-11 col-sm-12 col-xs-12">
        <a href="/Logout" class="btn btn-info">Logout</a>
        <a href="eshop/create" class="btn btn-info">Add more</a>
        <table class=" table table-bordered table-hover">
          <thead class="">

              <th>ID</th>
                <th>Name</th>
                  <th>City</th>
                    <th>Email</th>
                      <th>Age</th>
                      <th>status</th>
                        <th>Created At</th>
                          <th>Updated At</th>
                          <th colspan="3">Action</th>
          </thead>
          @foreach ($user as $users)
           <tr>
             <td>{{$users->id}}</td>
              <td>{{$users->name}}</td>
               <td>{{$users->city}}</td>
                <td>{{$users->email}}</td>
                 <td>{{$users->age}}</td>
                  <td>{{$users->status}}</td>
                   <td>{{$users->created_at}}</td>
                    <td>{{$users->updated_at}}</td>

                    <td><a href="eshop/{{$users->id}}/edit" class="btn btn-info">EDIT</a> <a href="eshop/{{$users->id}}" class="btn btn-danger"> DELETE </a></td>
           </tr>
          @endforeach
        </table>
        <span class="pager">
             {{$user->links()}}
      </span>
      </div>
    </div>
  </div>
  </body>
</html>
