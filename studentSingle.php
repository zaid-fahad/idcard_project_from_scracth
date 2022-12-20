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
<div class="container card m-1">

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

        <div class="row m-2">
            <div class="col-4 "><img src="<?php echo 'http://127.0.0.1:2525/idcard_project'  . '/image/std/' . $photo; ?>" class="img-thumbnail rounded float-left m-2" width="200px" alt="srd pic"></div>
            <div class="card-body col-8 p-3">
                <div>
                    <h5 class="card-title">Name : <?php echo  $name; ?></h5>
                    <p class="card-text">Address: <?php echo $address; ?>.</p>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">SID: <?php echo $sid; ?></li>
                        <li class="list-group-item">Phone: <?php echo $phone; ?> </li>
                        <li class="list-group-item">
                            <div class="d-flex ">
                                <ul class="list-group m-2 p-1">
                                    <dt> Father: <?php echo $Fname; ?></dt>
                                    <dd> Work: <?php echo $Fwork; ?>
                                        </br>Phone: <?php echo $Fphone; ?></dd>
                                </ul>
                                <ul class="list-group m-2 p-1">
                                    <dt> Mother: <?php echo $Mname; ?></dt>
                                    <dd> Work: <?php echo $Mwork; ?>
                                        </br>Phone: <?php echo $Mphone; ?></dd>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
                <div>
                    <a class="btn btn-secondary" href="/idcard_project/index.php/<?php echo $sid; ?>" role="button">Back</a></td>
                    <a class="btn btn-secondary" href="/idcard_project/addStudent.php/<?php echo $sid; ?>" role="button">Edit</a></td>
                </div>
            </div>
        <?php } ?>

        </div>
        <!-- </table> -->

</div>


<?php include 'footer.php'; ?>