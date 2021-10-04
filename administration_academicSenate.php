<!DOCTYPE html>
<html lang="en">
<head>
    <style>
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

            #box{
        transition: .5s;
    }
    #box:hover h5{
        color: green;
    }
    #box:hover{
        transition: .5s;
        box-shadow: 1px 5px 15px 10px lightgray;
}

    </style>
<link rel="shortcut icon" type="image/jpg" href="images/sku-logo.png"/>
</head>

<body>

     <?php include("header.php"); ?>
     <p style="margin-top: 7.5em;"></p>
<!-- Body Start -->

<section class="container p-4 mt-4">
    <div class="container">
        <h3 class="p-2"><b style="color: green;">Academic Senate</b><hr style="height: 5px;color: red;width: 10%;border-radius: 20%;"></h3>
        <p style="text-align: justify;line-height: 1.8em;">The Academic senate is the authority of the University which consists of Class-1,Ex-Officio Members like All members of the Board of Management, All Deans of Faculties, All Ex-Vice-Chancellors of the University concerned, The Director of Technical Education, The Director of Medical Education, The Director of The School Education, The Director of Adult Education, The Director of Intermediate Education, The Chairman of The Andhra Pradesh state council of higher education or in his absence the Vice Chirman there of, The Director Telugu Academy, All Members of the University planning and monitoring Board. Class-2 Life Members are All donors who are earlier members of the erstwhile senate and All persons who donate an amount of not less rupees five lakhs to the University. Class-3 Members to be nominated by the Govt. Class-4 Elected Members.
The Academic senate shall have the authority to provide instruction and training in such branches of learning as it thinks fit it shall exercise general supervision over the Academic policies of the University and provide leadership for raising the standard and quality of education and research</p>
    </div>
</section>


<section class="container mt-4">
    <div class="container">
        <h3 class="p-2"><b style="color: red;">Academic senate members</b><hr style="height: 5px;color: #B22222;width: 10%;border-radius: 20%;"></h3>
    </div>
</section>

<section class="p-4 container">
    <div class="row">
        <div class="col-lg-4">
                <div id="box" class="p-4 mb-3">
                    <h5>Prof. M.Ramakrishna Reddy</h5>
                    <p>Vice-Chancellor</p>
                    <p>Sri Krishnadevaraya University</p>
                    <p>Ananthapuram</p>
                </div>
        </div>

        <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                <div id="box" class="p-4">
                    <h5>Prof. K. Krishna Naik</h5>
                    <p>Rector</p>
                    <p>Sri Krishnadevaraya University</p>
                    <p>Ananthapuram</p>
                </div>
        </div>

        <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                <div id="box" class="p-4">
                    <h5>Dr. P.Venkata Ramana</h5>
                    <p>Registrar</p>
                    <p>Sri Krishnadevaraya University</p>
                    <p>Ananthapuram</p>
                </div>
        </div>

        <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                <div id="box" class="p-4">
                    <h5>Prof. M.Ramakrishna Reddy</h5>
                    <p>Vice-Chancellor</p>
                    <p>Sri Krishnadevaraya University</p>
                    <p>Ananthapuram</p>
                </div>
        </div>

        <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                <div id="box" class="p-4">
                    <h5>Prof. M.Ramakrishna Reddy</h5>
                    <p>Vice-Chancellor</p>
                    <p>Sri Krishnadevaraya University</p>
                    <p>Ananthapuram</p>
                </div>
        </div>

        <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                <div id="box" class="p-4">
                    <h5>Prof. M.Ramakrishna Reddy</h5>
                    <p>Vice-Chancellor</p>
                    <p>Sri Krishnadevaraya University</p>
                    <p>Ananthapuram</p>
                </div>
        </div>
         
    </div>
</section>


<!-- Body End -->


</body>
<?php include("footer.php"); ?>

</html>