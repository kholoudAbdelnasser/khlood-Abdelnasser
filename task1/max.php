<?php

if($_GET){
    if($_GET['number1'] > $_GET['number2']   &&$_GET['number1']>$_GET['number3']){
        $max =" THE MAX NUMBER IS:{$_GET['number1']}";
    }elseif($_GET['number2']>$_GET['number1']&&$_GET['number2']>$_GET['number3']){
        $max =" THE MAX NUMBER IS:{$_GET['number2']}";
    }elseif($_GET['number3']>$_GET['number2']&&$_GET['number3']>$_GET['number1']){
        $max =" THE MAX NUMBER IS:{$_GET['number3']}";
    }

    if($_GET['number1'] < $_GET['number2']   &&$_GET['number1']<$_GET['number3']){
        $min =" THE Min NUMBER IS:{$_GET['number1']}";
    }elseif($_GET['number2']<$_GET['number1']&&$_GET['number2']<$_GET['number3']){
        $min =" THE Min NUMBER IS:{$_GET['number2']}";
    }elseif($_GET['number3']<$_GET['number2']&&$_GET['number3']<$_GET['number1']){
        $min =" THE Min NUMBER IS:{$_GET['number3']}";
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

<body>
    <div class="container">
        <div class="row">
            <div class="col-12 my-5">
                <div class="h1 text-center text-dark">
                    Git max & min
                </div>
            </div>
            <div class="col-6 offset-3">
                <form  method="get">
                    <div class="form-group">
                        <label for="Name">num1</label>
                        <input type="number" name="number1" id="Name" class="form-control" placeholder="" aria-describedby="helpId">
                    </div>
                    <div class="form-group">
                        <label for="Name">num2</label>
                        <input type="number" name="number2" id="Name" class="form-control" placeholder="" aria-describedby="helpId">
                    </div>
                    <div class="form-group">
                        <label for="Name">num3</label>
                        <input type="number" name="number3" id="Name" class="form-control" placeholder="" aria-describedby="helpId">
                    </div>
                    <button class="btn btn-outline-dark btn-sm"> chick </button>
                </form>
            </div>
        
            <div class="col-12 my-5 text-center">
                <div class="h6 text-center text-dark ">
                <?php if(isset($max)){echo $max;} ?>
              <br>
              <?php if(isset($min)){echo $min;} ?>
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