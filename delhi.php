<?php

$data = get_csv_content('https://docs.google.com/spreadsheets/d/e/2PACX-1vTSW_DRM9k0Srfq-_6PMA_T1fdoM2wArLWhSVwlWDjccghLJtU4nGLuGxcC2eR4mEn3wsgzyhE6eQh6/pub?gid=0&single=true&output=csv');

		function get_csv_content($spreadsheet_url){
				if(!ini_set('default_socket_timeout', 15))
				echo "<!-- unable to change socket timeout -->";

				if (($handle = fopen($spreadsheet_url, "r")) !== FALSE) {
						while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
								$spreadsheet_data[] = $data;
						}
						fclose($handle);
						return $spreadsheet_data;
				}
		}

		function validate_data($data){
				return true;
		}

?>
<!DOCTYPE html>
<!-- saved from url=(0077)https://d396qusza40orc.cloudfront.net/phoenixassets/web-frameworks/index.html -->
<html lang="en" >
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" >
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Child Care Centre</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
    <link rel="stylesheet" type="text/css" href="css/mystyles.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-social.css">
</head>

<body data-gr-c-s-loaded="true">
    <nav class="nav navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><img src="" height=30 width=41></a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li><a href="index.html"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Home</a></li>
                    <li><a href="Ristorante Con Fusion_ About Us.html"><span class="glyphicon glyphicon-info-sign"></span> About</a></li>
                    <li><a href="Ristorante Con Fusion_ ContactUs.html"><i class="fa fa-envelope-o"></i> Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <header class="jumbotron">

        <!-- Main component for a primary marketing message or call to action -->

        <div class="container">
            <div class="row row-header">
                <div class="col-xs-12 col-sm-8">
                    <h1>Natkhat</h1>
                    <p style="padding:40px;"></p>
                    <p></p>
                </div>
                <div class="col-xs-12 col-sm-2">
                    <p style="padding: 20px;"></p>
                    <img src="" class="img-responsive">
                </div>
                <div class="col-xs-12 col-sm-2">
                </div>
            </div>
        </div>
    </header>

    <div class="container">
        <div class="row row-content">
					<form action="p1.php" method="POST">
						<input type="name" name="id"/>
						<input type="submit" />
					</form>
            <div class="col-sm-12 col-lg-6">
                <img src="img/delhi-district-map.jpg" usemap="#image-map">

                <map name="image-map">
                    <area onclick="fx('South Delhi')" alt="South Delhi" title="South Delhi" coords="251,340,257,333,253,327,245,321,253,315,262,312,269,307,270,299,275,294,282,286,289,284,294,290,301,295,305,305,310,310,315,322,315,329,314,344,309,350,307,360,316,372,317,389,302,395,285,400,270,402,263,390,250,381,241,377,233,367,228,358,227,350,235,344,246,347" shape="poly">
                    <area onclick="fx('New Delhi')" target="" alt="New Delhi" title="New Delhi" coords="190,276,192,283,203,294,212,304,219,312,218,325,230,337,244,335,231,319,235,308,250,306,257,299,253,288,268,285,276,272,286,269,288,257,298,251,304,243,313,235,304,228,296,224,285,221,271,235,253,225,243,225,226,236,235,228,224,242,215,258,213,267,206,274,200,275" shape="poly">
                    <area onclick="fx('South West Delhi')" target="" alt="South West Delhi" title="South West Delhi" coords="35,265,35,275,39,285,50,288,55,297,64,306,65,316,81,313,91,313,100,311,110,311,123,307,134,308,144,309,143,298,149,292,161,294,167,300,178,309,185,316,193,311,207,313,198,302,189,298,182,294,181,289,171,279,176,268,188,263,196,260,202,257,205,249,210,243,192,238,187,253,178,252,169,248,157,245,160,237,140,226,137,214,128,205,114,201,147,231,107,194,94,203,102,212,105,220,100,229,90,231,81,229,73,229,63,229,59,237,56,251,51,259,44,263" shape="poly">
                    <area onclick="fx('West Delhi')" target="" alt="West Delhi" title="West Delhi" coords="120,169,114,173,113,184,117,193,126,194,134,196,140,200,146,205,152,213,153,221,162,225,172,234,176,242,177,229,185,229,193,229,200,233,210,231,219,231,222,224,227,217,235,214,243,213,252,214,261,214,266,222,272,217,254,202,246,196,237,193,226,188,218,184,209,184,200,186,188,183,182,187,177,182,169,175,161,176,155,176,148,186,133,183" shape="poly">
                    <area onclick="fx('Soth East Delhi')" target="" alt="South East Delhi" title="South East Delhi" coords="300,259,297,270,305,276,310,282,315,290,320,299,323,311,323,320,323,329,328,337,335,332,345,329,354,329,365,335,371,328,379,321,373,313,364,301,356,292,351,279,350,269,338,256,326,253,321,242,311,265,312,243,317,257" shape="poly">
                    <area onclick="fx('East Delhi')" target="" alt="East Delhi" title="East Delhi" coords="348,206,342,210,336,216,332,227,330,237,331,245,339,242,345,246,349,254,358,255,364,248,376,245,384,238,381,227,373,222,363,218,354,217" shape="poly">
                    <area onclick="fx('Shahdra')" target="" alt="Shahdra" title="Shahdra" coords="330,197,334,204,343,200,353,199,359,205,364,194,368,191,378,179,373,171,372,161,362,161,360,166,353,179,347,175,340,178,339,191" shape="poly">
                    <area onclick="fx('North East Delhi')" target="" alt="North East Delhi" title="North East Delhi" coords="300,105,303,112,304,121,313,126,317,132,318,144,316,150,313,156,312,164,311,171,315,180,315,188,325,186,330,181,333,169,343,163,349,164,345,155,342,145,329,142,325,127" shape="poly">
                    <area onclick="fx('Central Delhi')" target="" alt="Central Delhi" title="Central Delhi" coords="280,181,273,183,275,191,270,199,277,205,285,208,293,211,302,214,312,218,319,221,324,211,320,202,309,198,306,190,306,179,303,168,307,156,310,146,309,134,302,128,297,120,291,109,283,108,275,115,276,127,275,134,283,135,292,139,298,142,303,152,296,190,296,186,299,178,296,190" shape="poly">
                    <area onclick="fx('North West Delhi')" target="" alt="North West Delhi" title="North West Delhi" coords="109,77,109,87,111,99,110,112,112,123,117,131,114,143,111,153,117,159,124,162,131,167,141,173,150,167,161,164,172,165,179,171,191,170,202,170,213,171,221,172,234,178,244,185,252,183,264,195,264,173,252,166,253,147,246,148,238,164,227,164,225,155,217,147,209,143,205,147,193,148,187,138,174,136,156,130,147,119,146,102,129,100,121,94" shape="poly">
                    <area onclick="fx('North Delhi')" target="" alt="North Delhi" title="North Delhi" coords="162,61,151,59,144,61,136,66,127,71,120,72,124,81,128,86,136,91,147,98,155,106,158,114,164,120,173,123,183,129,192,133,204,132,216,131,223,137,228,144,232,153,238,145,245,138,255,140,261,142,266,152,265,161,274,164,282,170,289,171,293,160,294,153,284,150,274,146,267,139,264,128,262,117,259,105,266,106,274,102,282,92,282,82,286,69,292,72,295,60,291,49,283,38,269,40,266,45,259,55,245,58,239,49,237,41,225,38,216,37,206,29,196,32,185,34,185,42,181,49,177,59,171,64" shape="poly">
                </map>

            </div>
             <div class=" col-xs-offset-1 col-xs-10 col-lg-offset-0 col-lg-push-1 col-lg-5" >
                 <div id="data" style="border: 1px solid; margin-top:30px;">
                    <center> <h3>   NRC details : </h3> </center>

                        <p id="para" style="padding-left:5px;">
                            <br><br><br><br><br> &emsp; &emsp; Select a District on the MAP <br><br><br><br><br><br><br>
                        </p>
                </div>
            </div>
        </div>

    </div>

    <footer class="row-footer">
        <div class="container">
            <div class="row">
                <div class="col-xs-5 col-xs-offset-1 col-sm-2 col-sm-offset-1">
                    <h5>Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="Ristorante%20Con%20Fusion_%20About%20Us.html">About</a></li>
                        <li><a href="menu.html">Menu</a></li>
                        <li><a href="Ristorante Con Fusion_ ContactUs.html">Contact</a></li>
                    </ul>
                </div>
                <div class="col-xs-6 col-sm-5">
                    <h5>Our Address</h5>
                    <address>
		              121, Clear Water Bay Road<br>
		              Clear Water Bay, Kowloon<br>
		              HONG KONG<br>
		              <i class="fa fa-phone"></i>: +852 1234 5678<br>
		              <i class="fa fa-fax"></i>: +852 8765 4321<br>
		              <i class="fa fa-envelope"></i>: <a href="mailto:confusion@food.net">confusion@food.net</a>
		           </address>
                </div>
                <div class="col-xs-12 col-sm-4">
                    <div class="nav navbar-nav" style="padding: 40px 10px;">
                        <a class="btn btn-social-icon btn-google-plus" href="http://google.com/+"><i class="fa fa-google-plus"></i></a>
                        <a class="btn btn-social-icon btn-facebook" href="http://www.facebook.com/profile.php?id="><i class="fa fa-facebook"></i></a>
                        <a class="btn btn-social-icon btn-linkedin" href="http://www.linkedin.com/in/"><i class="fa fa-linkedin"></i></a>
                        <a class="btn btn-social-icon btn-twitter" href="http://twitter.com/"><i class="fa fa-twitter"></i></a>
                        <a class="btn btn-social-icon btn-youtube" href="http://youtube.com/"><i class="fa fa-youtube"></i></a>
                        <a class="btn btn-social-icon" href="mailto:"><i class="fa fa-envelope-o"></i></a>
                    </div>
                </div>
                <div class="col-xs-12">
                    <p style="padding:10px;"></p>
                    <p align="center">© Copyright 2015 Ristorante Con Fusion</p>
                </div>
            </div>
        </div>
    </footer>

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip();
    });
</script>
<script>
    var ar = <?php echo json_encode($data) ?>;

    function fx(dname)
        {

            for(i =1;i<40;i++){
            if(dname==ar[i][0])
                {
                    document.getElementById('para').innerHTML = "<b>" + "District : " + "</b>" + ar[i][0]
																																		+ "<br>" + "<b>" + "Name : " + "</b>" + ar[i][1]
																																		+ "<br>" + "<b>" + "Address : " + "</b>" + ar[i][2]
                                                                    + "<br>" + "<b>" + "Map Link : " + "</b>" +"<a href='"+ ar[i][3] + "' target='_blank'>" +  "CLICK HERE" + "</a>"
                                                                    + "<br>" + "<b>" + "total no. of beds : " + "</b>" + ar[i][4]
                                                                    + "<br>" + "<b>" + "beds available : " + "</b>" + ar[i][5]
                                                                    + "<br>" + "<b>" + "Vitamin A : " + "</b>" + ar[i][6]
																																		+ "<br>" + "<b>" + "Vitamin B : " + "</b>" + ar[i][7]
																																		+ "<br>" + "<b>" + "Vitamin C : " + "</b>" + ar[i][8]
																																		+ "<br>" + "<b>" + "Vitamin D : " + "</b>" + ar[i][9]
																																		+ "<br>" + "<b>" + "Vitamin E : " + "</b>" + ar[i][10]
																																		+ "<br>" + "<b>" + "IRON : " + "</b>" + ar[i][11];



            }

        }
    }

</script>
</body><span class="gr__tooltip"><span class="gr__tooltip-content"></span><i class="gr__tooltip-logo"></i><span class="gr__triangle"></span></span></html>
