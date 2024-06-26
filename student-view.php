<?php
require 'dbcon.php';
?>
<header>
    <title>Student View</title>
</header>
<?php include 'includes/header.php';?>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <p class="fs-2 fw-bolder" >
                            Student View
                            <a href="index.php" class="btn btn-danger mt-2 float-end" >back</a>
                        </p>
                    </div>
                    <div class="card-body">

                        <?php
                        if(isset($_GET['id'])){
                                $student_id = mysqli_real_escape_string($con, $_GET['id']);
                                $query = "SELECT * FROM students WHERE id='$student_id' ";
                                $query_run = mysqli_query($con, $query);
                                if(mysqli_num_rows($query_run) > 0){
                                    $student = mysqli_fetch_array($query_run);
                                    ?>

                        


                        <div class="mb-3">
                            <h4 class="fw-bold" >Student Name :</h4>
                            
                            <p class="fs-5 fst-italic">
                                    <?=$student['name']; ?>
                            </p>
                        </div>


                        <div class="mb-3">
                            <h4 class="fw-bold">Student E-mail :</h4>
                            
                            <p class="fs-5 fst-italic">
                                    <?=$student['email']; ?>
                            </p>
                        </div>


                        <div class="mb-3">
                            <h4 class="fw-bold">Student Phone :</h4>
                            
                            <p class="fs-5 fst-italic">
                                    <?=$student['phone']; ?>
                            </p>
                        </div>


                        <div class="mb-3">
                            <h4 class="fw-bold">Student Course :</h4>
                            
                            <p class="fs-5 fst-italic">
                                    <?=$student['course']; ?>
                            </p>
                        </div>



                                    <?php
                                }
                                else{
                                    echo "<h4>No Such ID Found</h4>";
                                }

                        }
                        ?>


                    </div>
                </div>
            </div>
        </div>
    </div>


    <?php include 'includes/footer.php';?>