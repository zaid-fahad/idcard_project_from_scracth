<?php include 'header.php';?>

<?php require 'db_connect.php';?>

<!-- get info -->

<?php 

$sql = "SELECT * FROM basic_info";
$result = $conn->query($sql);


$conn = null;

?>
<div class="card m-4">

    <table class="table">
        <thead class="table-dark">
        <th scope="col">SID</th>
        <th scope="col">Photo</th>
        <th scope="col">Name</th>
        <th scope="col">Phone</th>
        <th scope="col">Father Name</th>
        <th scope="col">Mother Name</th>
        <th scope="col">Address</th>
        <th scope="col">button</th>
    </thead>
<?php foreach($result as $row) {
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
    <tbody> 
    <?php echo('</tr>');?>
        <th scope="row"><?php echo $sid;?></th>
        <td><?php echo $photo;?></td>
        <td><?php echo $name;?></td>
        <td><?php echo $phone;?></td>
        <td><?php echo $Fname;?></td>
        <td><?php echo $Mname;?></td>
        <td><?php echo $address;?></td>
        <td><a class="btn btn-secondary" href="/idcard_project/studentSingle.php/<?php echo $sid;?>" role="button">Link</a></td>
       <?php echo('</tr>');?>
       <?php } ?>
    </tbody>
</table>

</div>
 
     <!-- echo $sid,$name,$phone, $Fname, $Fwork, $Fphone,$Mname,$Mphone,$Mwork,$address; -->



<!-- <div class="card m-4">

<table class="table table-striped">
    <thead class="table-dark">
        <th scope="col">SID</th>
        <th scope="col">Photo</th>
        <th scope="col">Name</th>
        <th scope="col">Phone</th>
        <th scope="col">Father Name</th>
        <th scope="col">Mother Name</th>
        <th scope="col">Address</th>
        <th scope="col">button</th>
    </thead> -->
    <!--  -->





<?php include 'footer.php';?>