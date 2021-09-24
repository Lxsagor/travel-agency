@extends('welcome')
@section("content")




<section id="features" class="section features-area overflow-hidden mt-5 ptb_100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-10 col-lg-8">
                <!-- Section Heading -->
                <div class="section-heading text-center">
                    <h2>Users List</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="container custom-login">
                    <div class="row">
                        <div class="col-sm-6">
                            <form action="/edit" method="POST">
                                @csrf
                                <input type="hidden" name="id" value="{{$data['id']}}">
                                <div class="form-group">
                                    <label for="exampleInputUser">User Name</label>
                                    <input type="text" name="name" class="form-control" id="exampleInputUser" placeholder="{{$data['name']}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email address</label>
                                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="{{$data['email']}}">
                                </div>

                                <button type="submit" class="btn btn-default">update</button>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
@endsection