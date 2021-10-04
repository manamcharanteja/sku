<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="shortcut icon" type="image/jpg" href="images/sku-logo.png"/>

</head>

<body>

  <?php include("header.php"); ?> 
<p style="margin-top: 10px;"></p>

<!-- Body Start -->

<div class="cl">
        <div>
            <h1>Hostel</h1>
        </div>
        <div>
            <ul class="breadcrumb pull-left">
                <li> Home <span class="divider">/</span></li>
                <li >  Facilities /</li>  
                        <li > hostel </li>
            </ul>
        </div>
    </div>
    <div class="hostel-page">

        <div class="pic">
            <img src="https://res.cloudinary.com/dlawbbgbn/image/upload/v1631099376/thungabadra_nqsvdy.jpg" class="img" />
        </div>
        <div class="datas">
            <h1 class="head-1">Hostel</h1>
            <h4 class="head-4">Hostel for Men/Women</h4>
            <p>Separate hostels for Men / Women students are available in the University. As the accommodation in the hostels is limited, admission into the college does not confer the right to a seat in the hostel. Admission rules of the hostels may be obtained from the Hostel Office.</p>
        </div>

    </div>
    <style type="text/css">

@import url('https://fonts.googleapis.com/css2?family=Bree+Serif&family=Caveat:wght@400;700&family=Lobster&family=Monoton&family=Open+Sans:ital,wght@0,400;0,700;1,400;1,700&family=Playfair+Display+SC:ital,wght@0,400;0,700;1,700&family=Playfair+Display:ital,wght@0,400;0,700;1,700&family=Roboto:ital,wght@0,400;0,700;1,400;1,700&family=Source+Sans+Pro:ital,wght@0,400;0,700;1,700&family=Work+Sans:ital,wght@0,400;0,700;1,700&display=swap');

body {
    margin: 0px;
}

.datas {
    font-family: "Roboto";
    font-weight: 600;
    margin: 15px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    margin-left: 20px;
}

.head-4 {
    color: lightgrey;
    font-size: 22px;
}

.head-1 {
    color: grey;
    font-size: 32px;
}

.para {
    color: #c8cfc8;
    font-size: 20px;
    flex-wrap: wrap;
}

.img {
    width: 90%;
    height: 30vh;
    max-width: 500px;
    margin: 15px;
}

.cls {
    display: flex;
}

.cl {
    display: flex;
    margin-top: 140px;
    background-color: #2aaba8;
    margin-bottom: 25px;
    justify-content: space-between;
    padding-left: 23px;
    padding-right: 23px;
    color: white;
    padding: 20px;
    margin-right: auto;
    margin-left: auto;
}

.breadcrumb {
    justify-content: center;
    background-color: #2aaba8;
    padding-top: 20px;
}

@media screen and (min-width: 767px) {
    .hostel-page {
        display: flex;
        margin-bottom: 25px;
    }

    .img {
        width: 60vw;
        height:30vh;
        margin-bottom: 25px;
    }
}

    </style>



<!-- Body End -->

</body>
<?php include("footer.php"); ?>

</html>