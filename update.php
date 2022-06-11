<?PHP 
    include './classes/user.class.php';
    // include './user.process.php';

    $result = new User();
    $result = $result->editUser($_GET['id']);
    $name = $result['name'];
    $email = $result['email'];
    $login = $result['login'];
    $password = $result['password'];

?>


<!DOCTYPE html>
<html lang="en">
    <?PHP include './templates/header.php'; ?>
<body>
    <div class="container">
        <div class="row ">
                <h1 class=" fw-bold my-4">Update form</h1>
                    <form action="user.process.php?id=<?php echo $_GET['id'] ?>" method="POST">
                <label for="name">Name:</label>
                <input class="form-control" type="text" name="name" value="<?php echo $name; ?>"
                 style="width: 400px">
                <label for="email">Email:</label>
                <input class="form-control" type="text" name="email" value="<?php echo $email; ?>"
                 style="width: 400px">
                <label for="login">Login:</label>
                <input class="form-control" type="text" name="login" value="<?php echo $login; ?>"
                 style="width: 400px">
                <label for="password">Password:</label>
                <input class="form-control" type="text" name="password" value="<?php echo $password; ?>"
                 style="width: 400px">
                 <div class="btn-block mt-4">
                 <button class="btn btn-primary" type="submit" name="update">Update</button>
                <a href="index.php"><button class="btn btn-secondary" type="button">Close</button></a>
                 </div>
        </form>

        </div>

    </div>


<?PHP include './templates/footer.php'; ?>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>