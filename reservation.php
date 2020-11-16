<!DOCTYPE html>
<html lang="en">
<head>
<title>Restu Adi Travel | About Page</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<meta name="keywords" content="Commute Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />

    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
	
	<!-- css files -->
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css' /><!-- bootstrap css -->
    <link href="css/style.css" rel='stylesheet' type='text/css' /><!-- custom css -->
    <link href="css/font-awesome.min.css" rel="stylesheet"><!-- fontawesome css -->
	<!-- //css files -->
	
	<!-- google fonts -->
    <link href="//fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i" rel="stylesheet">
	<!-- //google fonts -->
	
</head>
<body>

<?php include'header.php'; ?>

<!-- banner -->
<div class="inner-banner" id="home">
	<div class="inner-banner-overlay">
		<div class="container">
			
		</div>
	</div>
</div>
<!-- //banner -->

<!-- page details -->
<div class="breadcrumb-agile">
	<div class="container">
		<ol class="breadcrumb">
			<li class="breadcrumb-item">
				<a href="index.php">Home</a>
			</li>
			<li class="breadcrumb-item active" aria-current="page">Reservation</li>
		</ol>
	</div>
</div>
<!-- //page details -->


<!-- Reservation form -->
<div class="container">
    <br>
    <div class="row">
        <div class="col-sm">
            <h6>Restu adi travel Reservation form</h6>
            <p>Field marked with an <span style="color: red;">*</span> are required</p>
            <hr>
            <h5>Personal Information :</h5>
            <br>
            <form>
                <div class="row">
                    <div class="col">
                        <label for="first-name">First Name <span style="color: red;">*</span></label>
                        <input type="text" id="first-name" class="form-control" placeholder="First name">
                    </div>

                    <div class="col">
                        <label for="last-name">Last Name <span style="color: red;">*</span></label>
                        <input type="text" class="form-control" id="last-name" placeholder="Last name">
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col">
                        <label for="email">Email <span style="color: red;">*</span></label>
                        <input type="text" id="email" class="form-control" placeholder="Your email">
                    </div>

                    <div class="col">
                        <label for="phone-number">Phone Number <span style="color: red;">*</span></label>
                        <input type="text" class="form-control" id="phone-number" placeholder="Your Whatsapp Phone Number">
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col">
                        <label for="city">City <span style="color: red;">*</span></label>
                        <input type="text" id="city" class="form-control" placeholder="Your city">
                    </div>

                    <div class="col">
                        <label for="country">Country <span style="color: red;">*</span></label>
                        <input type="text" class="form-control" id="country" placeholder="Your country">
                    </div>
                </div>
                <hr>
                <h5>Detail Information :</h5>
                <br>
                <div class="row">
                    <div class="col">
                        <label>Select Services <span style="color: red;">*</span></label>
                        <fieldset class="form-group">
                            <div class="row">
                              <div class="col-sm-10">
                                <div class="form-check">
                                  <input class="form-check-input" type="radio" name="select-services" id="select-services" value="option1" checked>
                                  <label class="form-check-label" for="select-services1">
                                    Daily Transfer
                                  </label>
                                </div>
                                <div class="form-check">
                                  <input class="form-check-input" type="radio" name="select-services" id="select-services" value="option2">
                                  <label class="form-check-label" for="select-services2">
                                    Charter Boat
                                  </label>
                                </div>
                                <div class="form-check disabled">
                                  <input class="form-check-input" type="radio" name="select-services" id="select-services" value="option3" disabled>
                                  <label class="form-check-label" for="select-services">
                                    Tour Package
                                  </label>
                                </div>
                              </div>
                            </div>
                          </fieldset>
                    </div>

                    <div class="col">
                        <label for="country">Select Method <span style="color: red;">*</span></label>
                        <fieldset class="form-group">
                            <div class="row">
                              <div class="col-sm-10">
                                <div class="form-check">
                                  <input class="form-check-input" type="radio" name="select-method" id="select-method1" value="option1" checked>
                                  <label class="form-check-label" for="select-method1">
                                    One way
                                  </label>
                                </div>
                                <div class="form-check">
                                  <input class="form-check-input" type="radio" name="select-method" id="select-method2" value="option2">
                                  <label class="form-check-label" for="select-method2">
                                    Return
                                  </label>
                                </div>
                                <div class="form-check disabled">
                                  <input class="form-check-input" type="radio" name="select-method" id="select-method3" value="option3" disabled>
                                  <label class="form-check-label" for="select-method3">
                                    Package
                                  </label>
                                </div>
                              </div>
                            </div>
                          </fieldset>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col">
                        <label for="city">Departure Date <span style="color: red;">*</span></label>
                        <input type="date" id="city" class="form-control" placeholder="Your city">
                    </div>

                    <div class="col">
                        <label for="country">Return Date <span style="color: red;">*</span></label>
                        <input type="date" class="form-control" id="country" placeholder="Your country">
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col">
                        <label for="total-adult">Total Adult <span style="color: red;">*</span></label>
                        <input type="number" id="total-adult" class="form-control" placeholder="Pax">
                    </div>

                    <div class="col">
                        <label for="total-child">Total Childern</label>
                        <input type="number" class="form-control" id="total-child" placeholder="Pax">
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col">
                        <label for="departure-from">Departure from <span style="color: red;">*</span></label>
                        <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
                            <option value="1">Sanur(Bali) to lembongan island - Time: 10.00 Am</option>
                            <option value="1">Sanur(Bali) to lembongan island - Time: 01.00 Pm</option>
                            <option value="1">Sanur(Bali) to lembongan island - Time: 04.00 Pm</option>
                            <option selected>Choose...</option>
                            <option value="1">Lembongan island to Sanur(Bali) - Time: 08.30 Am</option>
                            <option value="1">Lembongan island to Sanur(Bali) - Time: 11.30 Am</option>
                            <option value="1">Lembongan island to Sanur(Bali) - Time: 03.00 Pm</option>
                        </select>                        
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col">
                        <label for="total-adult">Pick up Information <span style="color: red;">*</span></label>
                        
                        <div class="form-check">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1">
                        <label class="form-check-label" for="exampleRadios1">
                        Airport
                        </label>
                        </div>
                        <div class="form-check">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                        <label class="form-check-label" for="exampleRadios2">
                        Hotel/Villa
                        </label>
                        </div>
                        <div class="form-check disabled">
                        <input checked class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3">
                        <label class="form-check-label" for="exampleRadios3">
                        Don't Picked up
                        </label>
                    </div>
                    </div>

                    <div class="col">
                        <label for="pickup-addres">Pickup Address</label>
                        <input type="text" class="form-control" id="pickup-addres" placeholder="Pickup Address">
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col">
                        <label for="inquires">Inquires/Message :</label>
                        
                        <textarea class="form-control" name="inquires" id="inquires" cols="30" rows="10"></textarea>
                    </div>
                </div>

            </form>
            <br>
        </div>
    </div>
</div>
<!-- /reservation form -->


<?php include'footer.php'; ?>
	
</body>
</html>