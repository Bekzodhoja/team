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

        <form class="" action="{{ url('/updatefoodchef', $data->id) }}" method="post" enctype="multipart/form-data">

            @csrf

            <div class="">
                <label for="">Name</label>
                <input class="form-control" type="text" name="name" value="{{ $data->name }}" >
            </div>

            <div class="">
                <label for="">speciality</label>
                <input class="form-control" type="text" name="speciality" value="{{ $data->speciality }}" >
            </div>

            <div class="">
                <label for="">old image</label>
                <img width="200" src="/chefimage/{{ $data->image }}" alt="">
            </div>

            <div class="">
                <label for="">image</label>
                <input class="form-control" type="file" name="image">
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