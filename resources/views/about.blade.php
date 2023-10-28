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
                 <h3>Add about</h3>
                <form action="about/about_add" method="POST">
                @csrf
                <div class="form-group">
                    <label>About Me</label><br>
                    <textarea name="aboutme" id="" cols="30" rows="10" style="width: 500px"> </textarea>
                     @if ($errors->has ('aboutme'))
                                <span class="text-danger">{{ $errors->first('aboutme')}}</span>    <br>                            
                            @endif 
                    <label>Years Of experience</label>
                    <input type="text" name="Exp_Years" id=""><br>  @if ($errors->has ('Exp_Years'))
                                <span class="text-danger">{{ $errors->first('Exp_Years')}}</span>    <br>                            
                            @endif
                    <label>No of project complete</label>
                    <input type="text" name="Proj_Complete" id="">
                    @if ($errors->has ('Proj_Complete'))
                                <span class="text-danger">{{ $errors->first('Proj_Complete')}}</span>    <br>                            
                            @endif<br> <br>
                    <button>Update</button>
                </div>
            </form>
            </div>
        </div>
    </div>
 </div>
 
</body>
</html>