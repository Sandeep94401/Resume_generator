<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Resume Generator</title>
</head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<body>
    <div class="container-fluid">
        <h2 class="text-center mt-3 " style="color:#3B5998";>Personal Details</h2>
      
        <form class="row g-3  formborder needs-validation mb-3" action="srt-v0.9\srt-resume.php" method="POST" novalidate>
            <div class="col-md-4 mt-0" id="image">
                <p><input type="file" accept="image/*" name="image" id="file" onchange="loadFile(event)"
                        style="display: none;"></p>
                <!--  <p><label for="file" style="cursor: pointer;">Upload Image</label></p> -->
                <label for="file" style="cursor: pointer;">
                <p><img src="img\human-icon-people-picture-profile-260nw-1013500675.jpg" id="output" width="200" style="border-radius: 50%;,background-position:center;" />
                    </label>
                </p>
            </div>
            <div class=" col-md-8 pt-5">
                <div class="col-md-12">
                    <label for="validationCustom01" class="form-label">First name</label>
                    <input type="text" name="fname" class="form-control" id="inputfname" required>

                </div>

                <div class="col-md-12">
                    <label for="validationCustom01" class="form-label">Last name</label>
                    <input type="text" class="form-control" id="inlname" name="lname" required>

                </div>
            </div>

            <div class="col-md-6">
                <label for="validationCustom01" class="form-label">Email Address</label>
                <input type="email" class="form-control" id="email" name="email" required>

            </div>
            <div class="col-md-6">
                <label for="validationCustom01" class="form-label">Phone Number</label>
                <input type="text" class="form-control" maxlength="10" id="pnumber" name="pnumber" required>

            </div>

            <div class="col-12">
                <label for="validationCustom01" class="form-label">Address</label>
                <input type="text" class="form-control" id="address" name="address" required>

            </div>

            <div class="col-md-6">
                <label for="validationCustom01" class="form-label">City</label>
                <input type="text" class="form-control" id="city" name="city" required>

            </div>
            <div class="col-md-4">
                <label for="validationCustom01" class="form-label">State</label>
                <input type="text" class="form-control" id="state" name="state" required>

            </div>
            <div class="col-md-2">
                <label for="validationCustom01" class="form-label">Zip</label>
                <input type="text" maxlength="6" class="form-control" id="zip" name="zip" required>

            </div>

            <!--Toggle section-->
            <div class="row g-3" id="toggle">

                <div class="col-md-6">
                    <label for="inputZip" class="form-label">Date Of Birth</label>
                    <input type="date" class="form-control" id="dob" name="dob">
                </div>


                <div class="col-md-6">
                    <label for="inputZip" class="form-label">Online Portfolio</label>
                    <input type="text" class="form-control" id="op" name="op">
                </div>

            </div>



            <label for="inputZip" class="form-label">Projects</label>

            <div class="row allinfo" id="all">
                <div class="col-md-4 projectinfo">
                    <div class="form-floating">
                        <input type="text" class="form-control sandy" id="ptitle" name="proj[]">
                        <label class="ladesc1" for="floatingInputGrid">Project Title</label>
                    </div>
                </div>

                <div class="col-md-6 projectinfo2 mt-2" id="pro">
                    <div class="form-floating">
                        <textarea class="form-control sandy" placeholder="" id="pdesc" name="proj[]"></textarea>
                        <label class="ladesc2">Project Description</label>
                    </div>
                </div>
                <div class="col-md-2">
                    <button onclick="addnewproject()" class="btn btn-primary me-md-2 mt-2 addbtn" type="button">Add</button>
                </div>
            </div>


            <div class="row inputedu" id="create">
            </div>


            <label for="inputZip" class="form-label">Technical skills</label>
            <div class="col-md-12 mt-0" id="skills">
                <div class="form-floating">
                    <textarea class="form-control" placeholder="" id="floatingTextarea" name="tskills"></textarea>
                    <label class="ladesc2">Skills</label>
                </div>
            </div>


            <label for="inputZip" class="form-label">Objective</label>
            <div class="col-md-12 mt-0" id="skills">
                <div class="form-floating">
                    <textarea class="form-control" placeholder="" id="floatingTextarea" name="obj"></textarea>
                    <label class="ladesc2">Objective</label>
                </div>
            </div>

            <!--Experience-->


            <label for="inputZip" class="form-label">Experience</label>

            <div class="row g-3">
                <div class="col-md-6 mt-0">
                    <div class="form-floating">
                        <input type="text" class="form-control" id="inputEmail4" name="exp[]">
                        <label class="ladesc2">Company Name</label>
                    </div>
                </div>

                <div class="col-md-4 mt-0">
                    <div class="form-floating">
                        <input type="text" class="form-control" id="inputPassword4" name="exp[]">
                        <label class="ladesc2">Job Role</label>
                    </div>
                </div>


                <div class="col-md-2 mt-0">
                    <button class="btn btn-primary me-md-2 mt-2 addbtn" onclick="addexperience()" type="button">Add</button>
                </div>
                <div class="col-md-12 " id="skills">
                    <div class="form-floating">
                        <textarea class="form-control" placeholder="" id="floatingTextarea" name="exp[]"></textarea>
                        <label class="ladesc2">Job Description</label>
                    </div>
                </div>
            </div>

            <div class="row" id="experience">

            </div>

            <label for="inputZip" class="form-label education">Education</label>

            <div class="row g-3">
                <div class="col-md-6 mt-0">
                    <div class="form-floating">
                        <input type="text" class="form-control educa" id="inputEmail4" name="col[]" value="0">
                        <label class="ladesc2">Collage Name</label>
                    </div>
                </div>

                <div class="col-md-4 mt-0">
                    <div class="form-floating">
                        <input type="text" class="form-control educa" name="col[]" id="inputPassword4">
                        <label class="ladesc2">Course and Branch</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-floating">
                        <input type="text" class="form-control educa" name="col[]" id="inputPassword4">
                        <label class="ladesc2">GPA</label>
                    </div>
                </div>
                <div class="col-md-4 ">
                    <div class="form-floating">
                        <input type="text" class="form-control educa" id="inputPassword4" name="col[]">
                        <label class="ladesc2">Year Of Passing</label>
                    </div>
                </div>


                <div class="col-md-2 mt-0">
                    <button class="btn btn-primary me-md-2 mt-0 addbtn" id="added" value="1" onclick="createNew(this)" type="button">Add</button>
                </div>

            </div>
            <div class="row" id="education">

            </div>


            <div class="d-grid gap-2 d-md-flex justify-content-md-center mb-3">
                <input type="submit" id="submitform" value="Generate Resume"> 
             </div>

        </form>
    </div>

    <script src="app.js">

    </script>



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
        crossorigin="anonymous"></script>
</body>

</html>