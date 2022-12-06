<?php
include "../classes/User.php";

$user = new User;
$user_data = $user->getUser($_GET['id']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
    <?php include "nav.php" ?>
    
    <form action="../actions/update-user.php" method="post" class="my-5 mx-auto w-50">
        <h2 class="h5 text-center text-uppercase">Edit User</h2>

        <input type="hidden" name="user_id" value="<?= $user_data['id'] ?>">
        
        <label for="first-name" class="form-label">First Name</label>
        <input type="text" name="first_name" id="first-name" class="form-control mb-2" value="<?= $user_data['first_name'] ?>">

        <label for="last-name" class="form-label">Last Name</label>
        <input type="text" name="last_name" id="last-name" class="form-control mb-2" value="<?= $user_data['last_name'] ?>">

        <label for="username" class="form-label fw-bold">Username</label>
        <input type="text" name="username" id="username" class="form-control mb-3" value="<?= $user_data['username'] ?>">

        <button type="submit" class="btn btn-warning btn-sm">Save</button>
        <a href="dashboard.php" class="btn btn-sm btn-secondary ms-2">Cancel</a>
    </form>


</body>
</html>