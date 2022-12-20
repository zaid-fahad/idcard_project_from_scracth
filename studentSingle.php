<?php include 'header.php'; ?>

<?php require 'db_connect.php'; ?>

<!-- get info -->

<?php
$link = $_SERVER['REQUEST_URI'];
$path = parse_url($link, PHP_URL_PATH);
$patharray = explode("/", $link);
$id = $patharray[3];

$sql = "SELECT * FROM basic_info WHERE S_Id = $id";
$result = $conn->query($sql);


$conn = null;

?>
<div class="card m-4">

    <!-- <table class="table"> -->
    <!-- <thead class="table-dark">
            <th scope="col">SID</th>
            <th scope="col">Photo</th>
            <th scope="col">Name</th>
            <th scope="col">Phone</th>
            <th scope="col">Father Name</th>
            <th scope="col">Mother Name</th>
            <th scope="col">Address</th>
            <th scope="col">button</th>
        </thead> -->
    <?php foreach ($result as $row) {
        // $sid = $row['S_id'];
        $sid = $row['S_Id'];
        $name = $row['Name'];
        $phone = $row['Phone'];
        $Fname = $row['F_Name'];
        $Fphone = $row['F_Phone'];
        $Fwork = $row['F_Work'];
        $Mname = $row['M_Name'];
        $Mphone = $row['M_Phone'];
        $Mwork = $row['M_Work'];
        $address = $row['Address'];
        $photo = $row['Photo'];
    ?>



        <img src="<?php echo $photo; ?>" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Name :<?php echo  $name; ?></h5>
            <p class="card-text">Address: <?php echo $address; ?>.</p>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">SID: <?php echo $sid; ?></li>
            <li class="list-group-item">Phone: <?php echo $phone; ?> </li>
            <li class="list-group-item"><?php echo $Fname; ?></br><?php echo $Mname; ?></li>
        </ul>
        <div class="card-body">
            <a class="btn btn-secondary" href="/idcard_project/index.php/<?php echo $sid; ?>" role="button">Back</a></td>
            <a class="btn btn-secondary" href="/idcard_project/addStudent.php/<?php echo $sid; ?>" role="button">Edit</a></td>
        </div>
    <?php } ?>


    <!-- </table> -->

</div>


<?php include 'footer.php'; ?>