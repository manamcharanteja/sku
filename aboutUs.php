<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from www.svcolleges.edu.in/contactus.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Aug 2021 10:31:48 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
   <link rel="shortcut icon" type="image/jpg" href="images/sku-logo.png" />
</head>

<body>
<br><br>
<?php include("header.php");?>

<section class="contact_herosection container">
    <div class=" contact_herotext">
        <h2>Contact Us</h2>
        <!-- <img src="img"> -->
    </div>
</section>



<section class="p-4 container">
    <div class="row">
    <div class="col-lg-6 col-md-6 cl-sm-12 col-12" style="text-align: justify;line-height: 2em;">
        <h2 style="word-spacing: 2px;text-shadow: .4em .4em .3em rgba(0, 0, 0, 0.6);font-weight: bolder;letter-spacing: 3px;" class="text-center pt-4"><span style="color: red;">About</span> <span style="color: green;">SKU</span></h2>
        <p class="text-justify pt-4" style="text-indent: 2em;">Sri Krishnadevaraya University, Ananthapuramu, had its beginning as a Postgraduate Centre of Sri Venkateswara University in the year 1967-68. It gained autonomy in the year 1976. Fulfilling the desires of the people of the region, the Autonomous Postgraduate Centre was accorded the status of a University in the year 1981.</p><p> Initially, Sri Krishnadevaraya University functioned as a unitary University. It was conferred the status of an affiliating University in the year 1988. Presently, it caters to the higher education needs of Rayalaseema region in general and Ananthapuramu District in particular.</p><p> The Postgraduate Centre at Kurnool, which was brought under the jurisdiction of the University in the year 1993, became a separate University in 2008.</p>
        <p class="text-justify pt-2">
        Starting with just five departments of study and a hundred students, the University has now five colleges on the campus: SKU College of Arts, SKU College of Sciences, SKU College of Engineering and Technology, SKU College of Education, and SKU College of Pharmacy.</p>


    </div>

    <div class="col-lg-6 col-md-6 cl-sm-12 col-12">
        <img src="images/slide-05_mobile.jpg" width="100%" height="100%" style="margin-top: -1em;">
    </div>
</div>
</section>
    
    <style type="text/css">
        .vm{
            /*transition: .5s;*/
            background: linear-gradient(to bottom right, #7A7FBA, #11C37C);
            border-top-left-radius: 7em;
            border-bottom-right-radius: 7em; 
        }
        .vm:hover{
            /*transition: .5s;*/
            /*background: linear-gradient(to top left, #7A7FBA, #11C37C);*/
            background: linear-gradient(to top right, red, #f06d06);
        }
        .vm1{
            /*transition: .5s;*/
            background: linear-gradient(to top right, red, #f06d06);
            border-top-left-radius: 7em;
            border-bottom-right-radius: 7em; 
        }
         .vm1:hover{
            /*transition: .5s;*/
            background: linear-gradient(to top left, #7A7FBA, #11C37C);
            /*background: linear-gradient(to top right, red, #f06d06);*/
        }
    </style>

    <div class="p-4 container">
        <h2>What We<hr style="width: 100px;color: red;height: 2px;"></h2>
    </div>

<section class=" container" style="padding-top: 3em;padding-bottom: 3em;">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
            <img src="images/sku_vision.jpg" width="80%" height="80%">
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-12 vm p-4">
            <h3 class="text-center text-white" style="letter-spacing: 2px;">VISION</h3>
            <p class="p-2">Striving for Academic Excellence and Promoting Social Transformation</p>
        </div>
    </div>
</section>

<section class=" container" style="padding-top: 3em;padding-bottom: 3em;">
    <div class="row">
        
        <div class="col-lg-6 col-md-6 col-sm-12 col-12 vm1 p-4">
            <h3 class="text-center text-white" style="letter-spacing: 2px;text-align: justify;">MISSION</h3>
            <p class="p-2" style="text-align: justify;">Equipping the students with knowledge and competence to face national and global challenges, Promoting creative talent among the students to generate new knowledge, Adopting innovative methods in teaching-learning, research and extension activities to improve quality of higher education, Practicing inclusive policies for bringing about equity in accessing advanced learning opportunities, Ensuring participation of all stakeholders in the development of the University to acquire global recognition and fame, Facilitating the application of knowledge for improving the quality of life of the people in the region, and Upholding human rights, value system and cultural heritage while promoting scientific temper in the region.</p>
        </div>

        <div class="col-lg-6 col-md-6 col-sm-12 col-12" align="center">
            <img src="images/sku_mission.jpg" width="80%" height="80%">
        </div>

    </div>
</section>

<?php include("footer.php");?>

<script>
    function populate(s1, s2) {
        var s1 = document.getElementById(s1);
        var s2 = document.getElementById(s2);
        s2.innerHTML = "";
        if (s1.value == "SVCE") {
            var optionArrays = ["Computer Science & Engineering|Computer Science & Engineering", "CSE(Artificial Intelligence & Machine learning)|CSE(Artificial Intelligence & Machine learning)", "Electronics & Communications Engineering|Electronics & Communications Engineering", "Electrical & Electronics Engineering|Electrical & Electronics Engineering", "Information Technology|Information Technology", "ComputerEngineering|ComputerEngineering", "Mechanical Engineering|Mechanical Engineering", "Civil Engineering|Civil Engineering", "Civil Engineering|Civil Engineering", "Master as Computer Applications|Master as Computer Applications", "Computer Science & Engineering(M.tech)|Computer Science & Engineering(M.tech)", "Digital System & Computer Electronics(M.tech)|Digital System & Computer Electronics(M.tech)", "VLSI Design(M.tech)|VLSI Design(M.tech)", "Embedded Systems(M.tech)|Embedded Systems(M.tech)", "Power Systems(M.tech)|Power Systems(M.tech)", "Advanced Manufacturing Systems(M.tech)|Advanced Manufacturing Systems(M.tech)", ];

            for (var option in optionArrays) {
                var pair = optionArrays[option].split("|");
                var newOption = document.createElement("option");
                newOption.value = pair[0];
                newOption.innerHTML = pair[1];
                s2.options.add(newOption);
            }
        } else if (s1.value == "SVEC") {
            var optionArrays = ["Computer Science & Engineering|Computer Science & Engineering", "CSE(Artificial Intelligence & Machine learning)|CSE(Artificial Intelligence & Machine learning)", "Electronics & Communications Engineering|Electronics & Communications Engineering", "Electrical & Electronics Engineering|Electrical & Electronics Engineering", "Information Technology|Information Technology", "ComputerEngineering|ComputerEngineering", "Computer Science & Engineering(M.tech)|Computer Science & Engineering(M.tech)", "VLSI Design(M.tech)|VLSI Design(M.tech)", "Embedded Systems(M.tech)|Embedded Systems(M.tech)", ];

            for (var option in optionArrays) {
                var pair = optionArrays[option].split("|");
                var newOption = document.createElement("option");
                newOption.value = pair[0];
                newOption.innerHTML = pair[1];
                s2.options.add(newOption);
            }
        } else if (s1.value == "SVCK") {
            var optionArrays = ["Computer Science & Engineering|Computer Science & Engineering", "CSE(Artificial Intelligence & Machine learning)|CSE(Artificial Intelligence & Machine learning)", "Electronics & Communications Engineering|Electronics & Communications Engineering", "Electrical & Electronics Engineering|Electrical & Electronics Engineering", "Information Technology|Information Technology", "ComputerEngineering|ComputerEngineering", "Mechanical Engineering|Mechanical Engineering", "Civil Engineering|Civil Engineering", ];
            console.log(optionArrays);
            for (var option in optionArrays) {
                var pair = optionArrays[option].split("|");
                var newOption = document.createElement("option");
                newOption.value = pair[0];
                newOption.innerHTML = pair[1];
                s2.options.add(newOption);
            }
        } else if (s1.value == "SVDC") {
            var optionArrays = ["Mathematics ,Physics ,Chemistry(B.Sc)|Mathematics ,Physics ,Chemistry(B.Sc)", "Mathematics ,Physics ,Computer Science(B.Sc)|Mathematics ,Physics ,Computer Science(B.sc)", "Computer Application(B.Com)|Computer Application(B.Com)", "B.Com-General|B.Com-General", "Computer Science(M.Sc)|Computer Science(M.Sc)", "Mathematics(M.Sc)|Mathematics(M.SC)", "Physics(M.Sc)|Physics(M.Sc)", ];
            for (var option in optionArrays) {
                var pair = optionArrays[option].split("|");
                var newOption = document.createElement("option");
                newOption.value = pair[0];
                newOption.innerHTML = pair[1];
                s2.options.add(newOption);
            }
        }
    }
</script>


</body>


<!-- Mirrored from www.svcolleges.edu.in/contactus.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Aug 2021 10:31:48 GMT -->
</html>