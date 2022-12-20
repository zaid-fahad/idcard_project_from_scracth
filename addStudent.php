    <?php include 'header.php';?>

    
        <div class="card m-4">            
            <!-- student add form start-->
            <!-- <div class="row align-items-center"> -->
                 <!-- heading -->
                <p class="card-header h4 text-center text-bg-secondary"> Add student</p>
                <div class="card-body p-4">
                    <form class="row g-3">
                        <br>
                        <p class="h4">Student Info</p>
                        <div class="col-md-7">
                            <label for="StudentName" class="form-label">Student Name</label>
                            <input type="text" class="form-control" id="StudentName">
                        </div>
                        <div class="col-md-5">
                            <label for="StudentPhone" class="form-label">Student Phone</label>
                            <input type="text" class="form-control" id="StudentPhone">
                        </div>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">StudentPhoto</label>
                            <input class="form-control" type="file" id="formFile">
                        </div>
                        <div class="col-md-3">
                            <label for="Class" class="form-label">Class</label>
                            <select id="Class" class="form-select">
                                <option selected>Choose...</option>
                                <option>...</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label for="Department" class="form-label">Department</label>
                            <select id="Department" class="form-select">
                                <option selected>Choose...</option>
                                <option>...</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label for="Section" class="form-label">Section</label>
                            <select id="Section" class="form-select">
                                <option selected>Choose...</option>
                                <option>...</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label for="Roll" class="form-label">Roll</label>
                            <input type="text" class="form-control" id="Roll">
                        </div>
                        <br>
                        <p class="h4">Father Info</p>
                        <div class="col-md-7">
                            <label for="FatherName" class="form-label">Father Name</label>
                            <input type="text" class="form-control" id="FatherName">
                        </div>
                        <div class="col-md-5">
                            <label for="FatherWork" class="form-label">Father Work</label>
                            <input type="text" class="form-control" id="FatherWork">
                        </div>
                        <div class="col-md-7">
                            <label for="FatherPhone" class="form-label">Father Phone</label>
                            <input type="text" class="form-control" id="FatherPhone">
                        </div>

                        <br>
                        <p class="h4">Mother Info</p>
                        <div class="col-md-7">
                            <label for="MotherName" class="form-label">Mother Name</label>
                            <input type="text" class="form-control" id="MotherName">
                        </div>
                        <div class="col-md-5">
                            <label for="MotherWork" class="form-label">Mother Work</label>
                            <input type="text" class="form-control" id="MotherWork">
                        </div>
                        <div class="col-md-7">
                            <label for="MotherPhone" class="form-label">Mother Phone</label>
                            <input type="text" class="form-control" id="MotherPhone">
                        </div>

                        <br>
                        <p class="h4">Address Info</p>
                        <div class="col-12">
                        <label for="inputAddress" class="form-label">Address</label>
                        <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                        </div>
                        <div class="col-md-6">
                        <label for="inputCity" class="form-label">City</label>
                        <input type="text" class="form-control" id="inputCity">
                        </div>
                        <div class="col-md-4">
                        <label for="inputState" class="form-label">State</label>
                        <select id="inputState" class="form-select">
                            <option selected>Choose...</option>
                            <option>...</option>
                        </select>
                        </div>
                        <div class="col-md-2">
                        <label for="inputZip" class="form-label">Zip</label>
                        <input type="text" class="form-control" id="inputZip">
                        </div>

                        <div class="d-grid d-md-flex justify-content-md-center">
                            <button type="submit" class="btn btn-primary m-3">Add Student</button>
                        </div>
                    </form>
                </div>
            <!-- </div> -->
            <!-- student add form end-->
        </div>
    

        
    <?php include 'footer.php';?>