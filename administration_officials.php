<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        .box{
            box-shadow: 0 15px 25px 10px rgb(0 0 0 / 0.2);
            border-radius: 2em;
        }
        .body{
            border-top-right-radius: 6em;
            border-bottom-left-radius: 6em;
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
    <link rel="shortcut icon" type="image/jpg" href="images/sku-logo.png"/>
</head>

<body>

     <?php include("header.php"); ?>

<!-- Body Start -->
<p style="margin-top: 7.5em;"></p>

<section style="margin-top: 4em;">
    <h5 class="text-center"><b>Officials</b></h5>
</section>

<section class="p-4 container">
    <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                <div id="box" class="p-4 mb-3">
                    <h5>Dr. G. Sreeramulu</h5>
                    <p>Fianance Officer</p>
                    <p>Email: fo@skuniversity.ac.in</p>
                    <p>08554-255807(O)</p>
                </div>
        </div>

        <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                <div id="box" class="p-4">
                    <h5>Dr.C.Lokeswarlu</h5>
                   <p>Controller of Examinations</p>
                   <p>Email: ceskuatp2014@gmail.com</p>
                    <p>08554-255712(O), 9440289997</p>
                </div>
        </div>

        <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                <div id="box" class="p-4">
                    <h5>Sri. M.A.Ananda Kumar</h5>
                    <p>Establishment Section</p>
                    <p>Email:</p>
                    <p>Mobile: 9493364489</p>  
                </div>
        </div>

        <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                <div id="box" class="p-4">
                    <h5>Dr. E. Ramesh Babu</h5>
                    <p>Research-cum-Statistical Officer</p>
                    <p>Email:</p>
                    <p>Mobile: 9441166265</p>
                </div>
        </div>
         
    </div>
</section>

<section class="p-4 container">
    <h5 class="text-center"><b>Deputy Registrars</b></h5>
    <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                <div id="box" class="p-4 mb-3">
                    <h5>Sri.S.Nagabhushanam</h5>
                    <p>College of Engineering and Technology</p>
                    <p>Cell: 9849427254</p>
                    <!-- <p>08554-255807(O)</p> -->
                </div>
        </div>

        <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                <div id="box" class="p-4">
                    <h5>Sri.K.Sreeramulu Naik</h5>
                   <p>Principal Office</p>
                   <p>Cell: 9440289997</p>
                    <!-- <p>08554-255712(O), 9440289997</p> --> 
                </div>
        </div>

        <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                <div id="box" class="p-4">
                    <h5>Sri.M.V.Siva Reddy</h5>
                    <p>Directorate of Examination Section</p>
                    <p>Cell: 9440514428</p>
                    <!-- <p>Mobile: 9493364489</p>   -->
                </div>
        </div>

        <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                <div id="box" class="p-4">
                    <h5>Sri. M.A.Ananda Kumar</h5>
                    <p>UGC Section</p>
                    <p>Cell: 9849427254</p>
                    <p>Mobile: 9441166265</p>
                </div>
        </div>

        <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                <div id="box" class="p-4">
                    <h5>Sri.P.Maddileti</h5>
                    <p>Academic Section</p>
                    <p>Cell: 9440224138</p>
                    <!-- <p>Mobile: 9441166265</p> -->
                </div>
        </div>
         
    </div>
</section>

<section class="p-4 container">
    <h5 class="text-center"><b>Assistant Registrars</b></h5>
    <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                <div id="box" class="p-4 mb-3">
                    <h5>Sri.K.Sudhakara Naidu</h5>
                    <p>Directorate of Examinations</p>
                    <p>Cell: 9440333714</p>
                    <!-- <p>08554-255807(O)</p> -->
                </div>
        </div>

        <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                <div id="box" class="p-4">
                    <h5>Sri.S.Chandrayudu</h5>
                   <p>Directorate of Examinations</p>
                   <p>Cell: 9849636046</p>
                    <!-- <p>08554-255712(O), 9440289997</p> --> 
                </div>
        </div>

        <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                <div id="box" class="p-4">
                    <h5>Sri.M.V.Siva Reddy</h5>
                    <p>Directorate of Examination Section</p>
                    <p>Cell: 9440514428</p>
                    <!-- <p>Mobile: 9493364489</p>   -->
                </div>
        </div>

        <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                <div id="box" class="p-4">
                    <h5>Sri.S.Sreerama Naik</h5>
                    <p>UGC Section</p>
                    <p>Cell: 9985131682</p>
                    <!-- <p>Mobile: 9441166265</p> -->
                </div>
        </div>

        <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                <div id="box" class="p-4">
                    <h5>Sri.N.Pulla Reddy</h5>
                    <p>Directorate of Evaluation</p>
                    <p>Cell: 9441984136</p>
                    <!-- <p>Mobile: 9441166265</p> -->
                </div>
        </div>

        <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                <div id="box" class="p-4 mb-3">
                    <h5>Sri.N. Veerabhadraiah</h5>
                    <p>Directorate of Examinations</p>
                    <p>Cell: 8142460558</p>
                    <!-- <p>08554-255807(O)</p> -->
                </div>
        </div>

        <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                <div id="box" class="p-4">
                    <h5>Sri.L.Lingamaiah</h5>
                   <p>v</p>
                   <p>Cell: 9290695102</p>
                    <!-- <p>08554-255712(O), 9440289997</p> --> 
                </div>
        </div>

        <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                <div id="box" class="p-4">
                    <h5>Sri.B.Umapathi</h5>
                    <p>Directorate of Examinations</p>
                    <p>Cell: 9553270610</p>
                    <!-- <p>Mobile: 9493364489</p>   -->
                </div>
        </div>

        <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                <div id="box" class="p-4">
                    <h5>Dr.B.Sreenivasa Reddy</h5>
                    <p>Finance and Accounts</p>
                    <p>Cell: 9441734854</p>
                    <!-- <p>Mobile: 9441166265</p> -->
                </div>
        </div>



        <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                <div id="box" class="p-4">
                    <h5>Sri.M. Thimmappa</h5>
                    <p>Hostel Office</p>
                    <p>Cell: 9985264405</p>
                    <!-- <p>Mobile: 9441166265</p> -->
                </div>
        </div>

        <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                <div id="box" class="p-4">
                    <h5>Sri.G.Kristaiah</h5>
                    <p>Accounts</p>
                    <p>Cell: 9441166268</p>
                    <!-- <p>Mobile: 9493364489</p>   -->
                </div>
        </div>
         
    </div>
</section>

<section class="p-4 container">
    <div class="row">
        <h5 class="text-center"><b>Assistant Registrars</b></h5>
        <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                <div id="box" class="p-4 mb-3">
                    <h5>Dr. K. Ramagopal</h5>
                    <p>Asst Professor</p>
                    <p>SK University</p>
                    <!-- <p>08554-255807(O)</p> -->
                </div>
        </div>
         
    </div>
</section>

</body>
<?php include("footer.php"); ?>

</html>