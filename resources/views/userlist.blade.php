@extends('welcome')
@section("content")
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
                    @foreach ($users as $item)
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

</div>
@endsection