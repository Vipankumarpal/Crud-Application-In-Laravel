<!doctype html>
<html lang="en">

<head>
  <title>Add Students</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
    <div class="container ">
        <div class="col-4 offset-4  mt-5">
            <div class="row">
                <div class="col-6">
                    <h1 class="float-start">Add Data</h1>
                </div>

                <div class="col-6">
                    <a href="{{url('/show')}}" class="btn btn-primary btn-md float-end">View data</a>
                </div>
            </div>
        
         <div class="container shadow bg-light rounded">   
        <form method="POST" action="/store">
            @csrf
            <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label mt-3">Name</label>
            <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Class</label>
                <input type="text" name="class" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Roll No</label>
                <input type="text" name="roll_no" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Address</label>
                <textarea class="form-control" placeholder="Leave a address here" name="address" id="floatingTextarea"></textarea>
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">DOB</label>
                <input type="date" name="dob" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
        
            <button type="submit" name="insert" class="btn btn-primary form-control mb-3">Insert</button>
        </form>
         </div>
        </div>
    </div>
</body>

</html>