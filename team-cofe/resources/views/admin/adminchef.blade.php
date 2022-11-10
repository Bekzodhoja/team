<x-app-layout>
    
</x-app-layout>


<!DOCTYPE html>
<html lang="en">
  <head>

  @include("admin.admincss")

  </head>
  <body>
  
  <div class="container-scroller">

    @include("admin.navbar")

    <div class="container">

        <div class="col-7 m-auto mt-5">
        
            <form action="{{ url('/uploadchef') }}" method="post" enctype="multipart/form-data">

                @csrf

                <label for="">Name</label>
                <input class="form-control mb-3" type="text" name="name" placeholder="Enter name">

                <label for="">speciality</label>
                <input class="form-control" type="text" name="speciality" placeholder="Enter speciality">

                <input class="mt-3" type="file" name="image"> 

                <div>
                    <input class="mt-3 btn btn-primary" type="submit" value="Save">
                </div>

            </form>

        </div>

    </div>

    <div class="container">

        <div class="col-10">

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Spelificate</th>
                        <th scope="col">Image</th>
                        <th scope="col">Delete</th>
                    </tr>
                </thead>
                <tbody>
                
                    @foreach($data as $key)

                        <tr>
                            <th scope="row">{{ $key->id }}</th>
                            <td>{{ $key->name }}</td>
                            <td>{{ $key->speciality }}</td>
                            <td><img src="/chefimage/{{ $key->image }}" alt=""></td>
                            <td></td>
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