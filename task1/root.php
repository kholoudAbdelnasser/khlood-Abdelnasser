<?php

if($_GET){
  


    $_GET['number1']% 2== 0){
        $num="THE NUMBER IS even";
    }elseif($_GET['number1']% 2 !=0){
        $num="THE NUMBER IS odd";
    }
    
};

?>
<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body >
    <div class="container">
        <div class="row">
            <div class="col-12 my-5">
                <div class="h1 text-center text-dark">
                    Even Or odd Number
                </div>
            </div>
            <div class="col-6 offset-3">
                <form  method="get">
                    <div class="form-group">
                        <label for="Name">number</label>
                        <input type="number" name="number1" id="Name" class="form-control" placeholder="" aria-describedby="helpId">
                    </div>
                    <div class="form-group">
                        <label for="Name">power</label>
                        <input type="number" name="power" id="Name" class="form-control" placeholder="" aria-describedby="helpId">
                    </div>
                    <button class="btn btn-outline-dark btn-sm mb-5"> chick </button>
                </form>
            </div>
        
            <div class="col-6 m-auto  my-5">
                <div class="container">
                <div class="h6 text-center border py-3 bg-info  text-dark">
                <?php if(isset($num)){echo $num;} ?>
             
                </div>
                
</div>
             
              
                </div>
</div>
        
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>