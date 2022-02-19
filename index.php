<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" a href="style.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Registration Form</title>
</head>
<body class="bg-white">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 m-auto ">
                    <div class="card mt-5 bg-primary">
                        <div class="card-title ">
                            <h3 class="bg-black text-white text-center py-3"> Registration Form in PHP</h3>
                        </div>
                        <div class="card-body ">

                            <form action="insert.php" method="post">
                                <input type="text" class="form-control mb-2" placeholder=" User Name " name="name">
                                <input type="email" class="form-control mb-2" placeholder=" User Email " name="email">
                                <input type="text" class="form-control mb-2" placeholder=" User Age " name="age">
                                <button class="btn btn-warning" name="submit">Submit</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    
</body>
</html>
