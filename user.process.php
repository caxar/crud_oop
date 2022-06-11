<?PHP 
    include './classes/user.class.php';

    $user = new User();

    if(isset($_POST['submit'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $login = $_POST['login'];
        $password = $_POST['password'];
        $user->addUser($name,$email,$login,$password);

    } else if (isset($_POST['update'])) {
       $id = $_GET['id'];
       $name = $_POST['name'];
       $email = $_POST['email'];
       $login = $_POST['login'];
       $password = $_POST['password'];
       $user->updateUser($name,$email,$login,$password,$id);
    }

