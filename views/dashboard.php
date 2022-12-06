<?php
include "../classes/User.php";
$user = new User;
$all_users = $user->getUsers();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashbord</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/dbc5b98639.js" crossorigin="anonymous"></script>
  

</head>
<body>
    <?php include "nav.php" ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-10">
                <h2 class="h5">User List</h2>
                <table class="table">
                    <thead class="table-secondary">
                        <tr>
                            <th>#</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Username</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while($u = $all_users->fetch_assoc()){ ?> <!-- fetch a row -->
                            <tr>
                                <td><?= $u['id'] ?></td>
                                <td><?= $u['first_name'] ?></td>
                                <td><?= $u['last_name'] ?></td>
                                <td><?= $u['username'] ?></td>
                                <td>
                                    <!-- buttons -->
                                    <a href="../views/edit-user.php?id=<?= $u['id'] ?>" class="btn btn-outline-warning btn-sm"><i class="fa-solid fa-pencil"></i></a>
                                    
                                    <?php if($u['id'] != $_SESSION['user_id'] ) { ?>
                                        <form action="../actions/delete-user.php" method="post" class="d-inline ms-2">
                                            <input type="hidden" name="user_id" value="<?= $u['id'] ?>">
                                            <button type="submit" class="btn btn-outline-danger btn-sm"><i class="fa-solid fa-trash"></i></button>
                                        </form>
                                    <?php } ?>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>



</body>
</html>

<?php



