<?PHP 
    include './classes/user.class.php';
?>

<!DOCTYPE html>
<html lang="en">
    <?PHP include './templates/header.php'; ?>
<body>
    
<div class="container">
    <h1 class="text-center fw-bold my-4">CRUD OOP SYSTEM</h1>
        <!-- Button trigger modal -->
<button type="button" class="btn btn-primary mb-4" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Add User
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add User</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="user.process.php" method="POST">
            <label for="name">Name:</label>
            <input class="form-control" type="text" name="name" required>
            <label for="email">Email:</label>
            <input class="form-control" type="text" name="email" required>
            <label for="login">Login:</label>
            <input class="form-control" type="text" name="login" required>
            <label for="password">Password:</label>
            <input class="form-control" type="text" name="password" required>
            <div class="modal-footer">
              <button type="submit" name="submit" class="btn btn-primary">Add</button>
              <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>

<table class="table table-hover">
  <thead class="table-dark">
    <tr>
      <th scope="col">ID#</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Login</th>
      <th scope="col">Password</th>
      <th scope="col">Operations</th>
    </tr>
  </thead>
  <tbody>
    <?php     
    $user = new User();
        if($user->getUser()) : 
    ?>
        <?php foreach($user->getUser() as $user):?>
            <tr>
                <td><b><?php echo $user['id'] ?></b></td>
                <td><?php echo $user['name'] ?></td>
                <td><b><?php echo $user['email'] ?></b></td>
                <td><?php echo $user['login'] ?></td>
                <td><b><?php echo $user['password'] ?></b></td>
                <td>
                    <a href="update.php?id=<?php echo $user['id']; ?>"><button type="button"  class="btn btn-primary">Update</button></a>
                    <a href="delete.php?id=<?php echo $user['id']; ?>"><button type="button"  class="btn btn-danger">Delete</button></a>
                </td>
            </tr>
        <?php endforeach;?>
        <?php else: ?>
            <tr>
                <td>No row...</td>
            </tr>
        <?php endif;?>
  </tbody>
</table>
</div>


<?PHP include './templates/footer.php'; ?>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>