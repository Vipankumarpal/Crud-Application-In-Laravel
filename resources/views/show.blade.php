<!doctype html>
<html lang="en">

<head>
  <title>Show data</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
  <div class="container">
    <div class="col-8 offset-2 mt-5">

      <div class="row">
        <div class="col-6">
            <h1 class="float-start">View Data</h1>
        </div>

        <div class="col-6">
            <a href="{{url('./')}}" class="btn btn-primary btn-md float-end">Add data</a>
        </div>
    </div>
        <table class="table table-striped table-hover table-bordered shadow">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Class</th>
                <th scope="col">Roll No</th>
                <th scope="col">Address</th>
                <th scope="col">DOB</th>
                <th scope="col">Edit/Delete</th>
                
              </tr>
            </thead>
            <tbody>
              @php
                $i=1;  
              @endphp
                @foreach ($students as $student)
               
              <tr>
                <td>@php echo $i; $i++; @endphp</td>
                <td>{{$student->name}}</td>
                <td>{{$student->class}}</td>
                <td>{{$student->iroll_no}}</td>
                <td>{{$student->address}}</td>
                <td>{{$student->dob}}</td>
                <td>
                  <a href="/edit/{{$student->id}}" class="btn btn-warning">Edit</a>
                  <a href="/delete/{{$student->id}}" class="btn btn-danger" onclick="return confirm('Are you sure to delete this?')">Delete</a>
                </td>

                
              </tr>
              @endforeach
            </tbody>
          </table>

    </div>

  </div>
</body>

</html>