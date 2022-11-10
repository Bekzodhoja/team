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

        <div class="col-10 m-auto mt-5 bg-white">

        <table class="table table-striped border">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Phone</th>
                <th scope="col">Guest</th>
                <th scope="col">Date</th>
                <th scope="col">Time</th>
                <th scope="col">Message</th>
                </tr>
            </thead>
            <tbody>

                @foreach($data as $key)

                    <tr>
                        <th scope="row">{{ $key->id }}</th>
                        <td>{{ $key->name }}</td>
                        <td>{{ $key->email }}</td>
                        <td>{{ $key->phone }}</td>
                        <td>{{ $key->guest }}</td>
                        <td>{{ $key->date }}</td>
                        <td>{{ $key->time }}</td>
                        <td>{{ $key->message }}</td>
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