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

    <div class="row m-auto align-items-center">

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


  </div>

  @include("admin.adminscript")

  </body>
</html>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
