<?php
    include ("connection.php");

    if(isset($_GET['delete_id']))
    {
        $delete =$_GET['delete_id'];

        $sql = "DELETE FROM excel WHERE id='$delete';";

        $result = mysqli_query($conn , $sql);

        if($result){
            echo "<script>alert('FORm DELETE SUCCESSFULLY');</script>";

        }

        else{
            echo "<script>alert('FORM DELETE ERROR');</script>";

        }
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> DashBoard of JOb Excel</title>

    <!-- Bootstrap CSS CDN --><!-- Bootstrap JS CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css"
        integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1>JOB EXCEL SHEET</h1>
            </div>
            <div class="col-md-12 d-flex justify-content-end">
                <a href="add_job.php" class="btn btn-primary mt-3 mb-3">Add Jobs</a>
            </div>
        </div>

        <div class="row">
            <table class="table table-striped pt-4">
                <thead>
                    <tr>

                        <th>Sr no.</th>
                        <th>company Name</th>
                        <th>HR Email</th>
                        <th>Email Sending Date</th>
                        <th> Call Status</th>
                        <th>NOt Answered</th>
                        <th>Comments</th>
                        <th>Location</th>
                        <th>Contact</th>
                        <th>Apply for Profile</th>
                        <th>Job Post Date</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                    include('connection.php');

                    $sql = "SELECT * FROM excel";

                    $result = mysqli_query($conn, $sql);

                    while ($row = mysqli_fetch_array($result)) {


                        ?>
                        <tr>

                            <td><?php echo $row['id'] ?></td>
                            <td><?php echo $row['name'] ?></td>
                            <td><?php echo $row['email'] ?></td>
                            <td><?php echo $row['esd'] ?></td>
                            <td><?php echo $row['call_status'] ?></td>
                            <td><?php echo $row['not_ans'] ?></td>
                            <td><?php echo $row['comments'] ?></td>
                            <td><?php echo $row['location'] ?></td>
                            <td><?php echo $row['contact'] ?></td>
                            <td><?php echo $row['ap'] ?></td>
                            <td><?php echo $row['jp'] ?></td>
                            <td><a href="edit.php?edit_id=<?php echo $row['id'] ?>"><i
                                        class="fa-solid fa-pen-to-square text-success p-2"></i></a> <a
                                    href="dashboard.php?delete_id=<?php echo $row['id'] ?>"><i
                                        class="fa-solid fa-trash text-danger p-2"></i></a></td>

                        </tr>
                        <?php
                    }
                    ?>

                </tbody>

            </table>
        </div>
    </div>
</body>

</html>