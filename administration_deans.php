<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="shortcut icon" type="image/jpg" href="images/sku-logo.png"/>
    <style type="text/css">
    #box{
        transition: .5s;
        border: 1px solid lightgray;
        border-radius: 20px; 
        line-height: 1em;
    }
    #box h5{
        font-size: 20px;
    }
    #box:hover h5{
        color: red;
    }
    #box:hover{
        transition: .5s;
        box-shadow: 1px 5px 15px 15px lightgray;
    }
            .box{
            box-shadow: 0 15px 25px 10px rgb(0 0 0 / 0.2);
            border-radius: 2em;

        }
        .body{
            transition: 1s;
            border-radius:2em;
            /*border-bottom-left-radius: 6em;*/
            box-shadow: 0 3px 10px rgb(0 0 0 / 0.2);
        }
        .module-border-wrap {
              position: relative;
              background: linear-gradient(to right, red, purple);
        }

        .module {
          
            background: white;
            border-top-right-radius: 6em;
            border-bottom-left-radius: 6em; 
        }
        .body img{

            border-radius: 50%;
            height: 200px;
            width: 200px;
        }

        .body1{
            transition: 1s;
            border-radius:2em;
            /*border-bottom-left-radius: 6em;*/
            box-shadow: 0 3px 10px rgb(0 0 0 / 0.2);
        }

        .body1 img{
            border-radius: 50%;
            height: 150px;
            width: 150px;
        }
    
        .body:hover, .body1:hover{
            background: linear-gradient(to bottom right, red, purple);
            color: white;
            transition: 1s;
        }

    </style>
</head>

<body>

    <?php include("header.php"); ?>

<!-- Body Start -->
<p style="margin-top: 7em;"></p>
<section class="container p-4 mt-4">
    <div class="container">
        <h3 class="p-2"><b style="color: blue;">Deans</b><hr style="height: 5px;color: red;width: 10%;"></h3>
        <p style="text-align: justify;line-height: 1.8em;">A Dean is usually the head of a significant collection of departments within a university with responsibilities for setting academic policies, overseeing the budget, fundraising, and other administration. Such a dean is usually a tenured professor from one of the departments.</p>
    </div>
</section>


<!-- <section class="container mt-4">
    <div class="container">
        <h3 class="p-2"><b style="color: red;">Academic senate members</b><hr style="height: 5px;color: #B22222;width: 10%;border-radius: 20%;"></h3>
    </div>
</section> -->

<section class="p-4 container">
    <div class="row">
        <div class="col-lg-4">
                <div id="box" class="p-4 mb-3">
                    <h5>Prof. G. Narasimhan</h5>
                    <p>Faculty of Languages</p>
                    <p>Sri Krishnadevaraya University</p>
                    <p>Mobile: 9000127115</p>
                </div>
        </div>

        <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                <div id="box" class="p-4">
                    <h5>Prof. K. Bhaskar</h5>
                   <p> Faculty of Social Sciences</p>
                   <p>Sri Krishnadevarya University</p>
                    <p>Mobile: 9704282009</p>
                </div>
        </div>

        <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                <div id="box" class="p-4">
                    <h5>Prof. K. Rashavendra Rao</h5>
                    <p>Faculty of Physical Sciences</p>
                    <p>Sri Krishnadevaraya University</p>
                    <p>Mobile: 9440204722</p>
                </div>
        </div>

        <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                <div id="box" class="p-4">
                    <h5>Prof. S. Shankar Naik</h5>
                    <p>Faculty of Life Sciences</p>
                    <p>Sri Krishnadevaraya University</p>
                    <p>Mobile: 9440432028</p>
                </div>
        </div>

        <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                <div id="box" class="p-4">
                    <h5>Prof. B. Krishna Reddy</h5>
                    <p>Faculty of Commerce and Management</p>
                    <p>Sri Krishnadevaraya University</p>
                    <p>Mobile: 9440209689</p>
                </div>
        </div>

        <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                <div id="box" class="p-4">
                    <h5>Prof. J. Vijaya Kumar</h5>
                    <p>Faculty of Law</p>
                    <p>Sri Krishnadevaraya University</p>
                    <p>Mobile: 9440044453</p>
                </div>
        </div>

        <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                <div id="box" class="p-4">
                    <h5>Prof. K. Nagabhushan Raju</h5>
                    <p>Engineering And Technology</p>
                    <p>Sri Krishnadevaraya University</p>
                    <p>Mobile: 9866590987</p>
                </div>
        </div>
         
    </div>
</section>


<div class="p-4">
<section class="p-1 container module-border-wrap">
    <div class="module row">
        <div class="p-3 col-lg-3 col-md-3 col-sm-6 col-12 body1" align="center">
            <div class="p-2">
                <img src="images/muralidhararao.jpg" width="100%" height="100%">
            </div>
            <div class="p-2">
                <h5><b>Dr. D. Muralidhara Rao</b></h5>
                <p>UGC Affairs and Development</p>
                <p style="margin-top: -10px;">Email:- rao.muralidhara@gmail.com</p>
            </div>
        </div>

        <div class="p-3 col-lg-3 col-md-3 col-sm-6 col-12 body1" align="center">
            <div class="p-2">
                <img src="images/VIJAYA KRISHNA NAIDU.jpeg" width="100%" height="100%">
            </div>
            <div class="p-2">
                <h5><b>Prof. R. Vijaya Krishna Naidu</b></h5>
                <p>College Development Council</p>
            </div>
        </div>

        <div class="p-3 col-lg-3 col-md-3 col-sm-6 col-12 body1" align="center">
            <div class="p-2">
                <img src="images/premachand.jpg" width="100%" height="100%">
            </div>
            <div class="p-2">
                <h5><b>Prof. P. Premachand Babu</b></h5>
                <p>Career Guidance & Placements</p>
                <p style="margin-top: -10px;">Mobile: 9490188361</p>
            </div>
        </div>

        <div class="p-3 col-lg-3 col-md-3 col-sm-6 col-12 body1" align="center">
            <div class="p-2">
                <img src="images/muralimba.jpg" width="100%" height="100%">
            </div>
            <div class="p-2">
                <h5><b>Prof. P. Murali Krishna</b></h5>
                <p>Industry Interaction & International Collaboration</p>
                <p style="margin-top: -10px;">Mobile: 9440556990</p>
            </div>
        </div>

    </div>
</section>

</div>

</body>
<?php include("footer.php"); ?>

</html>