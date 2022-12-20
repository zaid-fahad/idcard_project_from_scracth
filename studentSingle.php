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
<div style="
    display: grid !important;
    justify-content: space-around;
    align-items: end;
    justify-items: center;">

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
<div class="card m-4">
<p class="card-header h4 text-center text-bg-secondary"> Student Information </p>
 <!-- <div class="h3 p-3"> <center>Student Information</center></div>    -->
<img src="<?php echo 'http://127.0.0.1:2525/idcard_project'  . '/image/std/' . $photo; ?>" class="img-thumbnail rounded" width="200px" style="align-self:center; margin: 30px 0px 15px 0px;" alt="srd pic">

        <div class="card-body">
            <h5 class="card-title">Name : <?php echo  $name; ?></h5>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">SID: <?php echo $sid; ?></li>
            <li class="list-group-item">Phone: <?php echo $phone; ?> </li>
            <li class="list-group-item">Address: <?php echo $address; ?>.</li>
            
            <li class="list-group-item">
            <div class="d-flex justify-content-between ">
                <ul class="list-group m-2">
                    <dt> Father: <?php echo $Fname; ?></dt>
                    <dd> Work: <?php echo $Fwork; ?>
                    </br>Phone: <?php echo $Fphone; ?></dd>
                </ul>
                <ul class="list-group m-2">
                    <dt> Mother: <?php echo $Mname; ?></dt>
                    <dd> Work: <?php echo $Mwork; ?>
                    </br>Phone: <?php echo $Mphone; ?></dd>
                </ul>
            </div>
            </li>
        </ul>
        <div class="card-body d-flex justify-content-center">
            <a class="btn btn-secondary m-1" href="/idcard_project/index.php/<?php echo $sid; ?>" role="button">Back</a></td>
            <a class="btn btn-secondary m-1" href="/idcard_project/addStudent.php/<?php echo $sid; ?>" role="button">Edit</a></td>
        </div>
    <?php } ?>

</div>
    <!-- </table> -->

</div>


<?php include 'footer.php'; ?>