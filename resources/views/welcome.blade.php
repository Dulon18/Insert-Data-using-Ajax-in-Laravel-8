
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Insert Data using Ajax in laravel 8</title>
</head>
<body>
<div class="container p-3 my-5 bg-dark ">
    <h1 class="text-white text-center p-3">Insert Data using Ajax in Laravel 8</h1>
    <div class="card m-3">
        <div class="card-body">

        <form action="{{route('dataStore')}}" method="POST" id="form">
            @csrf

          <div class="mb-3 mt-3">
                <label for="email">User Name:</label>
                <input type="text" class="form-control"  placeholder="Enter name" name="name">
            </div>

            <div class="mb-3 mt-3">
                <label for="email">Address:</label>
                <input type="text" class="form-control"  placeholder="Enter address" name="address">
            </div>
            
          <div class="mb-3 mt-3">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
            </div>
            
            <div class="mb-3">
                <label for="pwd">Password:</label>
                <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
            </div>

            <button type="submit" class="btn btn-primary" id="submit">Submit</button>
     </form>

        </div> 
      
    </div>
</div>
    <!-- Bootstrap JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- jquery CDN -->
        <script src="https://code.jquery.com/jquery-3.6.0.js" ></script>

<script>
jQuery('#form').submit(function(e)
{
    e.preventDefault();
    jQuery.ajax({
        url:"{{ url('store') }}",
        data:jQuery('#form').serialize(),
        type:'post',
        success:function(result)
        {
            console.log(result);
        }
    });

});
</script>
</body>
</html>