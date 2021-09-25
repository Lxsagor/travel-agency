@extends('welcome')
@section("content")


<section id="features" class="section features-area overflow-hidden mt-5 ptb_100">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12 col-md-10 col-lg-8">
        <!-- Section Heading -->
        <div class="section-heading text-center">
          <h2>Edit Information</h2>
         
        </div>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-6">
        <div class="container custom-user">
          <div class="trending-wrapper">
            <div class="rowsearched-item cart-list-divider">
                <form action="/edit" method="POST">
                    @csrf
                    <input type="hidden" name="id"  value="{{$data['id']}}">
                    <div class="form-group">
                        <label for="exampleInputUser">User Name</label>
                        <input type="text" name="name" class="form-control" id="exampleInputUser" placeholder="{{$data['name']}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="{{$data['email']}}">
                    </div>

                    <button type="submit" class="btn btn-default w-100 mt-3 mt-sm-4">update</button>
                </form>
            </div>
          </div>

         

        </div>
      </div>
    </div>
  </div>
</section>




@endsection