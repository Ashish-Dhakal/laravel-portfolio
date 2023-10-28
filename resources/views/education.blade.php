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
</head>
<body>
 <div class="container " style="width: 500px">
    <div class="row justify-content-center">
        <div class="col-sm-18">
            <div class="card mt-3 p-3 ">
                <form action="" method="POST">
                @csrf
                <div class="form-group">
                    <label>Board</label>
                    <input type="text" name="board" id=""><br>
                    <label>Year</label>
                    <input type="text" name="year" id=""><br>
                    <label>Description</label>
                    <input type="text" name="description" id=""><br>
                    <button>Update</button>
                </div>
            </form>
            </div>
        </div>
    </div>
 </div>
 
</body>
</html>