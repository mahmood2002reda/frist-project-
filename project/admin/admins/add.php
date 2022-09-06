<?php require_once '../../config.php';?>

<?php require_once BLA.'inc/header.php' ; ?>

<?php require_once '../../function/validate.php' ;?>

    <?php

    if (isset($_POST['submit']))
    {

      $name =$_POST['name'];
      $email =$_POST['email'];
      $password =$_POST['password'];

      if (checkEmpty($name) AND checkEmpty($email) AND checkEmpty($password)){
        if(ValidEmail($email))
        {
          $hashedPassword= password_hash($password,PASSWORD_DEFAULT);
          $sql = "INSERT INTO admins (`admin_name`,`admin_email`,`admin_password`) /* query Sentence  will be paramter in db_insert  */
                VALUES ('$name','$email','$hashedPassword') ";
                            $success_message = db_insert($sql);   // function in db.php
        }

        
        else {
          $error_message= "please correct email";
        }
      }
      else{
        $error_message= "please fill all filde";
      }
      require_once '../../function/messages.php' ;
    }
    
      
?>

<div class="col-sm-6 offset-sm-3 border p-3">
        <h3 class="text-center p-3 bg-primary text-white">Add New Admin</h3>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <div class="form-group">
                <label >Name </label>
                <input type="text" name="name" class="form-control" >
            </div>

            <div class="form-group">
                <label >Email </label>
                <input type="text" name="email" class="form-control" >
            </div>

            <div class="form-group">
                <label >Password </label>
                <input type="password" name="password" class="form-control" >
            </div>

            
            <button type="submit" name="submit" class="btn btn-success">Save</button>
        </form>
      
    </div>


<?php require_once BLA.'inc/footer.php'  ;?>

