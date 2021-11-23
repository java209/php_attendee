<?php 

$title = 'success';
require_once 'includes/header.php';
require_once 'db/conn.php';
//check if post varible exist
if(isset($_POST['submit'])){
    //extract values from the $_Post array
    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $dob = $_POST['dob'];
    $email = $_POST['email'];
    $contact = $_POST['phone'];
    $specialty = $_POST['specialty'];
    //call function to insert and track if success or fail
    $isSuccess = $crud->insertAttendees($fname, $lname, $dob, $email, $contact, $specialty);
    //print success or fail nessage
    if($isSuccess){
        include 'includes/successmessage.php';
    }
    else{
        include 'includes/errormessage.php';

    }
}

?>

<!-- Prints Values using get method --> 
<!--
<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">
        <?php //echo $_GET['firstname'] . ' ' . $_GET['lastname']; ?>
    </h5>
    <h6 class="card-subtitle mb-2 text-muted"> 
        <?php //echo $_GET['Specialty']; ?>
    </h6>
    <p class="card-text">
        Date of Birth: <?php //echo $_GET['dob']; ?>
    </p>
    <p class="card-text">
        Tele: <?php //echo $_GET['phone']; ?>
    </p>
    <p class="card-text">
        Email Address: <?php //echo $_GET['email']; ?>
    </p>
  </div>
</div>
-->

<!-- Prints Values using POST method --> 

<div class="card" style="width: 20rem;">

<div class="card-body">
    <h5 class="card-title">
        <?php echo $_POST['firstname'] . ' ' . $_POST['lastname']; ?>
    </h5>
    <h6 class="card-subtitle mb-2 text-muted"> 
        <?php echo $_POST['specialty']; ?>
    </h6>
    <p class="card-text">
        Date of Birth: <?php echo $_POST['dob']; ?>
    </p>
    <p class="card-text">
        Email Address: <?php echo $_POST['email']; ?>
    </p>
    <p class="card-text">
        Tele: <?php echo $_POST['phone']; ?>
    </p>
  </div>

</div>



<br>
<br>
<?php require_once 'includes/footer.php';?>