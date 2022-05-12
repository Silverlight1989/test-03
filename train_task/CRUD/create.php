<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create User</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        .wrapper {
            width: 1200px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h2>Create Item</h2>
                    </div>
<? function user_form_render($first_name_error, $last_name_error,$email_error,$phone_number_error,$address_error){
{echo "<form action='' method= 'post'>";
echo (!empty($first_name_error)) ? 'has-error' : ''; ">";
  echo "<label>First Name</label>";
  print_r("<input type='text' name='first_name' class='form-control' value=''>");
  echo  "<span class="help-block"><?php echo $first_name_error;?></span>";
                       echo "</div>"

                        <div class="form-group <?php echo (!empty($last_name_error)) ? 'has-error' : ''; ?>">
                            <label> Name</label>
                            <input type="text" name="last_name" class="form-control" value="">
                            <span class="help-block"><?php echo $last_name_error;?></span>
                        </div>

                        <div class="form-group <?php echo (!empty($email_error)) ? 'has-error' : ''; ?>">
                            <label>Key</label>
                            <input type="key" name="key" class="form-control" value="">
                            <span class="help-block"><?php echo $key_error;?></span>
                        </div>

                        <div class="form-group <?php echo (!empty($phone_number_error)) ? 'has-error' : ''; ?>">
                            <label>Phone Number</label>
                            <input type="number" name="phone_number" class="form-control" value="">
                            <span class="help-block"><?php echo $phone_number_error;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($created_at_error)) ? 'has-error' : ''; ?>">
                            <label>Created at</label>
                            <input type="date" name="created_at" class="form-control" value="">
                            <span class="help-block"><?php echo $created_at_error;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($updated_error)) ? 'has-error' : ''; ?>">
                            <label>Updated at</label>
                            <input type="number" name="updated_at" class="form-control" value="">
                            <span class="help-block"><?php echo $updated_at_error;?></span>
                        </div>

                        <input type="submit" class="btn btn-primary" value="Submit">
                        <a href="index.php" class="btn btn-default">Cancel</a>
                    </form>
                }
                </div>
            </div>
        </div>
    </div>
</body>
</html>
<?php
require_once "config.php";
function createUser($first_name, $last_name,$email, $phone_number,$created_at, $updated_at, $first_name_error,$last_name_error, $email_error,$phone_number_error, $created_at_error, $updated_at_error)
{$first_name = $last_name = $email = $phone_number = $address = "";
$first_name_error ='';
$last_name_error = '';
$email_error =''; 
$phone_number_error ='';
$created_at_error =''; 
$updated_at_error= "";}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstName = trim($_POST["first_name"]);
    if (empty($firstName)) {
        $first_name_error = "First Name is required.";
    } elseif (!filter_var($firstName, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))) {
        $first_name_error = "First Name is invalid.";
    } else {
        $firstName = $firstName;
    }
    $lastName = trim($_POST["last_name"]);

    if (empty($lastName)) {
        $last_name_error = "Last Name is required.";
    } elseif (!filter_var($firstName, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))) {
        $last_name_error = "Last Name is invalid.";
    } else {
        $lastName = $lastName;
    }

    $email = trim($_POST["email"]);
    if (empty($email)) {
        $email_error = "Email is required.";
    } elseif (!filter_var($firstName, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))) {
        $email_error = "Please enter a valid email.";
    } else {
        $email = $email;
    }

    $phoneNumber = trim($_POST["phone_number"]);
    if(empty($phoneNumber)){
        $phone_number_error = "Phone Number is required.";
    } else {
        $phoneNumber = $phoneNumber;
    }
    $address = trim($_POST["address"]);
    if(empty($address)){
        $address_error = "Address is required.";
    } else {
        $address = $address;
    }
    $created_at = trim($_POST["created_at"]);
    if(empty($created_at)){
        $created_at_error = "Creation date is required.";
    } else {
        $created_at = $created_at;
    }
    $updated_at = trim($_POST["updated_at"]);
    if(empty($created_at)){
        $updated_at_error = "Date of update is required.";
    } else {
        $updated_at = $upated_at;
    }
    if (empty($first_name_error_err) && empty($last_name_error) && empty($email_error) && empty($phone_number_error) && empty($address_error) && empty($created_at_error) && empty($updated_at_error)) {
          $sql = "INSERT INTO `users` (`first_name`, `last_name`, `email`, `phone_number`, `address`,`created_at`,`updated_at` ) VALUES ('$firstName', '$lastName', '$email', '$phoneNumber', '$address', '$created_at','$updated_at')";
          if (mysqli_query($conn, $sql)) {
              header("location: index.php");
          } else {
               echo "Something went wrong. Please try again later.";
          }
      }
}