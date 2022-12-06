<?php
include "../classes/User.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
    <?php include "nav.php";
        $user = new User;
        $user_data = $user->getUser($_SESSION['user_id']);
    ?>
    <form action="../actions/upload-photo.php" method="post" class="card w-50 my-5 mx-auto" enctype="multipart/form-data">
        <div class="card-header">
            <img src="../images/<?= $user_data['photo'] ?>" class="image-thumbnail" alt="icon for '<?= $user_data['username'] ?>'">
        </div>
        <div class="card-body">
            <label for="photo" class="form-label">Choose Photo</label>
            <input type="file" name="photo" id="photo" class="form-control mb-1">

            <button type="submit" class="btn btn-outline-secondary">Upload Photo</button>

            <div class="card-footer border-0">
                <h2 class="h4"><?= $user_data['first_name'].$user_data['last_name']?></h2>
                <h3 class="h5"><?= $user_data['username'] ?></h3>
            </div>
        </div>
    </form>
</body>
</html>



