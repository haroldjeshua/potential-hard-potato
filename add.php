<?php 

    // if (isset($_GET['submit'])) {
    //     echo $_GET['email'];
    //     echo $_GET['title'];
    //     echo $_GET['ingredients'];
    // }

    if (isset($_POST['submit'])) {
                
        // email check
        if (empty($_POST['email'])) {
            echo 'Email is required <br/>';
        } else {
            $email = $_POST['email'];
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                echo 'Email must be a valid email address <br/>';
            }
        }
       
        // title check
        if (empty($_POST['title'])) {
            echo 'Title is required <br/>';
        } else {
            $title = $_POST['title'];
            if (!preg_match('/^[a-zA-Z\s]+$/', $title)) {
                echo 'Title must contain a word(s). <br/>';
            }
        }
       
        // ingredients check
        if (empty($_POST['ingredients'])) {
            echo 'At least one ingredient is required <br/>';
        } else {
            $ingredients = $_POST['ingredients'];
            if (!preg_match('/^([a-zA-Z\s]+)(,\s*[a-zA-Z\s]*)*$/', $ingredients)) {
                echo 'Ingredients must be comma separated list';
            }
        }
    }

?>

<!DOCTYPE html>
<html lang="en">

    <?php include('templates/header.php') ?>

    <section class="container grey-text">
        <h4 class="center">Add a Pizza</h4>

        <form class="white" action="add.php" method="POST">
            <label for="email">Your Email:</label>
            <input type="text" name="email">
            
            <label for="title">Pizza Title:</label>
            <input type="text" name="title">

            <label for="ingredients">Ingredients:</label>
            <input type="text" name="ingredients">

            <div class="center">
                <input type="submit" name="submit" value="submit" class="btn brand z-depth-0">
            </div>
        </form>
    </section>

    <?php include('templates/footer.php') ?>

</html>