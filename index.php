<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <input class="form-control" list="datalistOptions" id="text" placeholder="Type to search...">
            <datalist id="datalistOptions">
                <?php
                    include('connect.php');
                    $province = mysqli_query($con, "SELECT * FROM `city`");
                    while($c = mysqli_fetch_array($province)){
                ?>
                <option value="<?php echo $c['province']?>"></option>
                <?php } ?>
            </datalist>
        </div>
        <div class="form">
            <table class="table table-success table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Province</th>
                    </tr>
                </thead>
                
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Pursat</td>
                        
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Pursat</td>
                        
                    </tr>

                    <tr>
                        <td>1</td>
                        <td>Pursat</td>
                        
                    </tr>
                </tbody>
            </table>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
        <script src="demo.js"></script>
    </body>
</html>