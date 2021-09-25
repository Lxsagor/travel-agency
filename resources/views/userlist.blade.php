@extends('welcome')
@section("content")


<section id="features" class="section features-area overflow-hidden mt-5 ptb_100">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12 col-md-10 col-lg-8">
        <!-- Section Heading -->
        <div class="section-heading text-center">
          <h2>Users List</h2>
          @if(Session::has('success'))
                        <div class="alert alert-success">{{Session::get('success')}}</div>
                        @endif
                        @if(Session::has('fail'))
                        <div class="alert alert-danger">{{Session::get('fail')}}</div>
                        @endif
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <div class="container custom-user">
          <div class="trending-wrapper">
            <div class="rowsearched-item cart-list-divider">
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">NAME</th>
                    <th scope="col">EMAIL</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>

                @foreach ($users as $item)
                <tbody>
                  <tr>
                    <th scope="row">{{$item->id}}</th>
                    <td>{{$item->name}}</td>
                    <td>{{$item->email}}</td>
                    <td>
                      <a class="btn btn-primary" href="edit/{{$item->id}}"><i class="fas fa-edit"></i></a>
                      <a class="btn btn-danger" href="/delete/{{$item->id}}"><i class="fas fa-trash"></i></a>
                    </td>
                  </tr>
                </tbody>

                @endforeach
              </table>
            </div>
          </div>

          <a class="btn btn-success  w-10 mt-3 mt-sm-4" href="register">Add New User</a>

        </div>
      </div>
    </div>
  </div>
</section>



<!-- 

<div class="container custom-user">
    <div class="trending-wrapper">
        <h3>Users List</h3>
        
            <div class="row searched-item cart-list-divider">
              
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">ID</th>
                        <th scope="col">NAME</th>
                        <th scope="col">EMAIL</th>
                        
                      </tr>
                    </thead>
                   // @foreach ($users as $item)
                    <tbody>
                      <tr>
                        <th scope="row">{{$item->id}}</th>
                        <td>{{$item->name}}</td>
                        <td>{{$item->email}}</td>
                        <td><a class="btn btn-outline-primary" href="/edit/{{$item->id}}">Edit</a> </td>
                        <td><a class="btn btn-outline-danger" href="/delete/{{$item->id}}">Delete</a> </td>

                        
                      </tr>
                    </tbody>
            @endforeach

                  </table>
              
              
             
            </div>
        
      </div>
      <a class="btn btn-success" href="register">Add New User</a>

</div> -->
@endsection