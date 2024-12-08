<?php
    include('connection.php');

    if (isset($_GET['edit_id'])) 
    {
        $id =$_GET['edit_id'];
        
        $sql = "SELECT * FROM excel WHERE id='$id'";

        $result = mysqli_query($conn,$sql);

        $row = mysqli_fetch_array($result);

    }

    if(isset($_POST['submit']))
    
    {

        // echo"<script> alert('$id')</script>";
        $name = $_POST['name'];
        $email = $_POST['email'];
        $esd = $_POST['esd'];
        $call_status = $_POST['call_status'];
        $not_ans = $_POST['not_ans'];
        $comments = $_POST['comments'];
        $location = $_POST['location'];
        $contact = $_POST['contact'];
        $ap = $_POST['ap'];
        $jp = $_POST['jp'];

        $update = "UPDATE excel SET name='$name',email='$email',esd='$esd',call_status='$call_status',not_ans='$not_ans',comments='$comments',location='$location',contact='$contact',ap='$ap',jp='$jp' WHERE id='$id' ";

        $update_result =  mysqli_query($conn , $update);

        if($update_result){
            echo "<script>alert('FORM UPDATE SUCCESSFULLY');window.location.href='dashboard.php';</script>";
        }
        else{
            echo "<script>alert('FORM UPDATE ERROR');</script>";

        }

    }
?>
<!doctype html>
<html lang="en"> 

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>EDIT JOB FORM</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<style>
    #form{
        background-color: skyblue;
        box-shadow :  0px -1px 20px 5px #3202f3;
    }
</style>

<body>
    <div class="container mt-5">
        <div class="row">
            <div id="form" class="col-md-12   p-4 rounded-5 ">
                <form  method="Post">
                    <h1 class="text-center"> EDIT JOB FORM</h1>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group m-3">
                                <label for="companyname" class="form-label">Company Name </label>
                                <input type="text" name="name" value="<?php echo $row['name'] ?>" id="name" class="form-control">
                            </div>

                            <div class="form-group m-3">
                                <label for="HREmail" class="form-label">HR Email</label>
                                <input type="email" name="email" value="<?php echo $row['email'] ?>" id="email" class="form-control">
                            </div>

                            <div class="form-group m-3">
                                <label for="esd" class="form-label">Email Sending Date </label>
                                <input type="date" name="esd" value="<?php echo $row['esd'] ?>" id="esd" class="form-control">
                            </div>

                            <div class="form-group m-3">
                                <label for="CallStatus" class="form-label">Call Status </label>
                                <input type="text" name="call_status" value="<?php echo $row['call_status'] ?>" id="call_status" class="form-control">
                            </div>

                            <div class="form-group m-3">
                                <label for="NotAnswered" class="form-label">Not Answered </label>
                                <input type="text" name="not_ans" value="<?php echo $row['not_ans'] ?> "id="not_ans" class="form-control">
                            </div>
                        </div>

                        <div class="col-md-6">

                            <div class="form-group m-3">
                                <label for="comments" class="form-label">Comments</label>
                                <input type="text" name="comments" value="<?php echo $row['comments'] ?>" id="comments" class="form-control">
                            </div>


                            <div class="form-group m-3">
                                <label for="Location" class="form-label">Location</label>
                                <input type="text" name="location" value="<?php echo $row['location'] ?>" id="location" class="form-control">
                            </div>

                            <div class="form-group m-3">
                                <label for="Contact" class="form-label">Contact</label>
                                <input type="text" name="contact" value="<?php echo $row['contact'] ?>" id="contact" class="form-control">
                            </div>

                            <div class="form-group m-3">
                                <label for="ap" class="form-label">Apply for Profile</label>
                                <input type="text" name="ap"  value="<?php echo $row['ap'] ?>"  id="ap"  class="form-control">
                            </div>

                            <div class="form-group m-3">
                                <label for="jp" class="form-label">Job Post Date</label>
                                <input type="date" name="jp" value="<?php echo $row['jp'] ?>" id="jp"  class="form-control">
                            </div>
                        </div>
                        <div class="col-md-12 d-flex justify-content-center  mt-4">
                        <button class="btn btn-primary" type="submit" name="submit">Submit</button>
                    </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>