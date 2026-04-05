<?php
include '../Project.php';
$Project->Add();

?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
</head>

<body class="BodyBGfullview">









    <!-- HEADER -->
    <div class="card carDbg rounded-0">
        <div class="card-body">
            <div class="row">
                <div class="col-12 textcolor">
                    <p class="mb-0">General De Jesus College Online Payment System</p>
                </div>
            </div>

        </div>
    </div>






    <!-- MAIN CONTENT -->
    <form method="POST" class="container pt-5 pb-5">
        <div class="card shadow-sm">
            <div class="card-body p-4">
                <h1 class="textcolorgreen mb-4">STUDENT PROFILE</h1>
            </div>



            <!-- Profile Information -->

            <div class="row px-4 gy-3 pb-4">
                <div>
                    <h4 class=" textcolorgreen ">
                        PERSONAL INFORMATION
                    </h4>
                </div>
                <div class="col-12 col-sm-3">
                    <label class="textcolorgreen">First Name</label>
                    <input name="first_name" type="text" class="form-control mt-2" placeholder="Michael">
                </div>
                <div class="col-12 col-sm-3">
                    <label class="textcolorgreen">Last Name</label>
                    <input name="last_name" type="text" class="form-control mt-2" placeholder="Garcia">
                </div>
                <div class="col-12 col-sm-3">
                    <label class="textcolorgreen">Middle Name</label>
                    <input name="middle_name" type="text" class="form-control mt-2" placeholder="Bañez">
                </div>
                <div class="col-12 col-sm-3">
                    <label class="textcolorgreen">Suffix</label>
                    <input name="suffix" type="text" class="form-control mt-2" placeholder="Jr.">
                </div>
            </div>
            <!-- contact info -->

            <div class="row px-4 gy-3 pb-4">
                <div>
                    <h4 class=" textcolorgreen ">
                        YEAR LEVEL & PROGRAM
                    </h4>
                </div>
                <div class="col-12 col-sm-3">
                    <label class="textcolorgreen">Year Level</label>
                    <input name="yr_lvl" type="text" class="form-control mt-2" placeholder="3rd Year">
                </div>

                <div class="col-12 col-sm-3">
                    <label class="textcolorgreen">Program</label>
                    <input name="course" type="text" class="form-control mt-2" placeholder="Computer Science">
                </div>

            </div>
            <!-- contact info -->


            <div class="row px-4 gy-3 pb-4">
                <div>
                    <h4 class=" textcolorgreen">
                        CONTACT INFORMATION
                    </h4>
                </div>
                <div class="col-12 col-sm-3">
                    <label class="textcolorgreen">Contact Number</label>
                    <input name="contact_number" type="text" class="form-control mt-2" placeholder="09123456789">
                </div>

                <div class="col-12 col-sm-3">
                    <label class="textcolorgreen">Email</label>
                    <input name="email" type="text" class="form-control mt-2" placeholder="michael.garcia@example.com">
                </div>

            </div>


            <!-- BACK BUTTON -->
            <div class="d-flex justify-content-between px-4 pt-2 pb-4">
                <button href="" class="text-decoration-none textcolorgreen btn BtN">
                    Back
                </button>
                <button type="submit" name="Add" class="textcolorgreen btn BtN">
                    Submit Information
                </button>
            </div>
        </div>
    </form>

    </form>
</body>