

<?php if($_POST['username'] == 'admin' && $_POST['password'] == '1324'){
  // display content here
    echo '<a href="adminedit.php">As an admin you can now make necessary changes. CLICK ME!!!</a>';
}else{
  echo "You're not authorized to visit this page";
} ?>


