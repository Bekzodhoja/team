<x-app-layout>
    
</x-app-layout>


<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="/public">

  @include("admin.admincss")

  </head>
  <body>
  
  <div class="container-scroller">

    @include("admin.navbar")


    <div class="col-7 mt-5 m-auto align-items-center">

        <form class="" action="{{ url('/update', $data->id) }}" method="post" enctype="multipart/form-data">

            @csrf

            <div class="">
                <label for="">title</label>
                <input class="form-control" type="text" name="title" value="{{ $data->title }}" require>
            </div>

            <div class="">
                <label for="">price</label>
                <input class="form-control" type="num" name="price" value="{{ $data->price }}" require>
            </div>

            <div class="">
                <label for="">description</label>
                <input class="form-control" type="text" name="description" value="{{ $data->description }}" require>
            </div>

            <div class="">
                <label for="">old image</label>
                <img width="200" src="/foodimage/{{ $data->image }}" alt="">
            </div>

            <div class="">
                <label for="">image</label>
                <input class="form-control" type="file" name="image" require>
            </div>

            <div class="">
                <input class="btn btn-primary" type="submit" value="Seved">
            </div>


        </form>

        </div>


  </div>

  @include("admin.adminscript")

  </body>
</html>