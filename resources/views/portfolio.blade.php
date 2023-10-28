<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        label {
            width: 200px;
        }

        input {
            width: 500px;
        }
         button{
            border-radius: 5px;
            background-color:rgb(248, 249, 250);
        }

    </style>
</head>

<body>
  
    <nav class="navbar navbar-light bg-light">
  <a class="navbar-brand" href="/">website</a>
  <a href="/service" class="navbar-brand">Add Service</a>
   <a href="/portfolio" class="navbar-brand">Add Portfolio</a>
   <a href="/education" class="navbar-brand">Add Education</a>
   <a href="/about" class="navbar-brand">Add About</a>
</nav>

    <div class="container " style="width: 500px">

        <div class="row justify-content-center">
            <div class="col-sm-18">
                <div class="card mt-3 p-3 ">
                    <h3>Add portfolio</h3>
                    <form action="/portfolio/portfolio_add" method="POST" enctype="multipart/form-data" >
                        @csrf
                        <div class="form-group">
                            <label> Project Image</label>
                            <input type="file" name="image" id=""><br>
                            @if ($errors->has ('image'))
                                <span class="text-danger">{{ $errors->first('image')}}</span>    <br>                            
                            @endif
                            <label>Link sources of project</label>
                            <input type="text" name="link" id=""><br>
                            @if ($errors->has ('link'))
                                <span class="text-danger">{{ $errors->first('link')}}</span>    <br>                            
                            @endif <br>
                            <button>Add</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
