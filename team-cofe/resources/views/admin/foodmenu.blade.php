<x-app-layout>
    
</x-app-layout>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">


<!DOCTYPE html>
<html lang="en">
  <head>

  @include("admin.admincss")

  </head>
  <body>
  
  <div class="container-scroller">

    @include("admin.navbar")

    

    <div class="container">
        <div class="col-7 mt-5 m-auto align-items-center">

        <form class="" action="{{ url('/uploadfood') }}" method="post" enctype="multipart/form-data">

            @csrf

            <div class="">
                <label for="">title</label>
                <input class="form-control" type="text" name="title" placeholder="wriye a title" require>
            </div>

            <div class="">
                <label for="">price</label>
                <input class="form-control" type="num" name="price" placeholder="price" require>
            </div>

            <div class="">
                <label for="">image</label>
                <input class="form-control" type="file" name="image" require>
            </div>

            <div class="">
                <label for="">description</label>
                <input class="form-control" type="text" name="description" placeholder="description" require>
            </div>

            <div class="">
                <input class="btn btn-primary" type="submit" value="Seved">
            </div>


        </form>

        </div>

        <div class="col-10 m-auto mt-5">
            <table class="table bg-white text-dark">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Title</th>
                        <th>Price</th>
                        <th>Description</th>
                        <th>Images</th>
                        <th>Delete</th>
                        <th>Edit</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach($data as $key)

                        <tr>
                            <th scope="row">{{ $key->id }}</th>
                            <td>{{ $key->title }}</td>
                            <td>{{ $key->price }}</td>
                            <td>{{ $key->description }}</td>
                            <td><img src="/foodimage/{{ $key->image }}" alt=""></td>
                            <td><a href="{{ url('/deletemenu', $key->id) }}">Delete</a></td>
                            <td><a href="{{ url('/updateview', $key->id) }}">Update</a></td>
                        </tr>
                    
                    @endforeach

                </tbody>
            </table>
        </div>

    </div>

  </div>

  

  @include("admin.adminscript")

  </body>
</html>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
