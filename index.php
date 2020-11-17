<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    </head>
    <body>
        <?php require_once 'process.php'; ?>
        <div class="row justify-content-center">
            <form action="process.php" method="POST">
                <table>
                    <tr>
                    <div class="form-group">
                        <td>
                            <label>Name</label>
                        </td>
                        <td>
                            <input type="text" name="name" placeholder="Enter your name">
                        </td>

                    </div>
                    </tr>
                    <tr>
                    <div class="form-group">
                        <td>
                            <label>Password</label>
                        </td>
                        <td>
                            <input type="password" name="password" placeholder="Enter your location">
                        </td>
                    </div>
                    </tr>
                    <tr>
                    <div class="form-group">
                        <td>    
                            <label>Cellnumber</label>
                        </td>
                        <td>
                            <input type="number" name="Cellnumber" placeholder="Enter your cellphone number"> 
                        </td>
                    </div>
                    </tr>
                    <tr>
                    <div class="form-group">
                        <td>  
                            <label>Email</label>
                        </td>  
                        <td>  
                            <input type="email" name="Email" placeholder="Enter your email address">
                        </td>
                    </div>
                    </tr>
                    <tr>
                    <div class="form-group">
                        <td>
                            <button type="submit" class="btn btn-primary" name="SignUp">Login</button>
                        </td>
                    </div>
                    </tr>
                </table>  
            </form>
        </div>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>
