<?php include('core/init.php'); ?>

<?php
//Create DB Object
$db = new Database();


//Run Query
$db->query("UPDATE `contacts` SET
            first_name = :first_name,
            last_name = :last_name,
            phone = :phone
            WHERE id = :id
          ");

//Bind Values
$db->bind(':first_name', $_POST['first_name']);
$db->bind(':last_name', $_POST['last_name']);
$db->bind(':phone', $_POST['phone']);
$db->bind(':id', $_POST['id']);


if($db->execute()) {
  echo "Contact was updated";
} else {
  echo "Could not update contact";
}

?>