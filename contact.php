<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
	<title>Dalex Company Limited | Contact</title>
	<meta name="description" content="Contact Dalex Company Limited for equipment sales, maintenance, repairs and support from our Lagos office and regional coverage across Nigeria.">
	<meta name="keywords" content="Contact Dalex, Dalex contact page, Lagos office, equipment support Nigeria, maintenance request, sales inquiry, office equipment service, business equipment support, Lagos Nigeria">
	<meta name="author" content="Ademola Omomeji, THEADEMOLA, THEADEMOLAOMOMEJI">
	<meta name="robots" content="index, follow">
	<link rel="canonical" href="https://dalexcompany.com/contact.php">
	<link rel="shortcut icon" type="image/x-icon" href="images/favicon.png">
	<meta name="theme-color" content="#D53130">
	<meta property="og:type" content="website">
	<meta property="og:site_name" content="Dalex Company Limited">
	<meta property="og:url" content="https://dalexcompany.com/contact.php">
	<meta property="og:title" content="Dalex Company Limited | Contact">
	<meta property="og:description" content="Contact Dalex Company Limited for equipment sales, maintenance, repairs and support from our Lagos office and regional coverage across Nigeria.">
	<meta property="og:image" content="https://dalexcompany.com/images/dalexicon.png">
	<meta property="og:image:alt" content="Dalex Company Limited logo">
	<meta property="twitter:card" content="summary_large_image">
	<meta property="twitter:url" content="https://dalexcompany.com/contact.php">
	<meta property="twitter:title" content="Dalex Company Limited | Contact">
	<meta property="twitter:description" content="Contact Dalex Company Limited for equipment sales, maintenance, repairs and support from our Lagos office and regional coverage across Nigeria.">
	<meta property="twitter:image" content="https://dalexcompany.com/images/dalexicon.png">
	<meta property="twitter:image:alt" content="Dalex Company Limited logo">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
	<link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap" rel="stylesheet">
	<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
	<link href="css/slicknav.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/swiper-bundle.min.css">
	<link href="css/all.min.css" rel="stylesheet" media="screen">
	<link href="css/animate.css" rel="stylesheet">
	<link rel="stylesheet" href="css/magnific-popup.css">
	<link rel="stylesheet" href="css/mousecursor.css">
	<link href="css/custom.css" rel="stylesheet" media="screen">
	<link href="css/overrides.css" rel="stylesheet" media="screen">
</head>
<body>
	<div class="preloader">
		<div class="loading-container">
			<div class="loading"></div>
			<div id="loading-icon"><img src="images/dalexlogo.jpg" alt=""></div>
		</div>
	</div>

	<div class="page-shell">
	
	<?php
	include("header.php");
	?>

		<main>
			<section class="page-hero">
				<div class="container">
					<div class="page-hero-card">
						<span class="eyebrow wow fadeInUp">Contact Dalex</span>
						<h1 class="text-anime-style-2">Talk to us about sales, maintenance or support.</h1>
						<p class="wow fadeInUp" data-wow-delay="0.15s">Whether you need a quote, a service visit or advice on the right equipment, our team is ready to respond.</p>
						<div class="breadcrumbs wow fadeInUp" data-wow-delay="0.25s">
							<a href="index.php">home</a>
							<span>/</span>
							<span>contact</span>
						</div>
					</div>
				</div>
			</section>

			<section class="section-block pt-0">
				<div class="container">
					<div class="contact-grid">
						<div class="contact-card wow fadeInUp">
							<div class="contact-icon"><i class="fa-solid fa-phone"></i></div>
							<h3>Call us</h3>
							<p><a href="tel:+2348099913501">+234-809-991-3501</a></p>
							<p><a href="tel:+2349090018300">+234-909-001-8300</a></p>
						</div>
						<div class="contact-card wow fadeInUp" data-wow-delay="0.1s">
							<div class="contact-icon"><i class="fa-solid fa-envelope"></i></div>
							<h3>Email us</h3>
							<p><a href="mailto:info@dalexcompanyltd.com">info@dalexcompanyltd.com</a></p>
							<p>General inquiries and support requests.</p>
						</div>
						<div class="contact-card wow fadeInUp" data-wow-delay="0.2s">
							<div class="contact-icon"><i class="fa-solid fa-location-dot"></i></div>
							<h3>Visit us</h3>
							<p>Plot 413B Omofade Crescent, Omole Phase 1, Off Agidingbi, Ikeja, Lagos, Nigeria.</p>
						</div>
					</div>
				</div>
			</section>

			<section class="section-block">
				<div class="container">
					<div class="story-layout contact-form-layout">
						<div class="story-card wow fadeInUp" data-wow-delay="0.15s">
							<span class="section-tag">Send a message</span>
							<h2 class="section-title">Tell us what you need and we'll route it to the right team.</h2>
							<form method="post">

							<?php
							date_default_timezone_set("Africa/Lagos");
							$date = date("Y");
							error_reporting(E_ALL);
							if(isset($_REQUEST['submit'])){
								$fullname = trim(addslashes($_REQUEST['fullname']));
								$email = trim(addslashes($_REQUEST['email']));
								$message = trim(addslashes($_REQUEST['message']));

// Create instance of PHPMailer
	$mail = new PHPMailer();
//Set mailer to use smtp
	$mail->isSMTP();
//Define smtp host
	$mail->Host = "mail.dalexcompany.com";
//Enable smtp authentication
	$mail->SMTPAuth = true;
//Set smtp encryption type (ssl/tls)
	$mail->SMTPSecure = "ssl";
//Port to connect smtp
	$mail->Port = "465";
//Set gmail username
	$mail->Username = "info@dalexcompany.com";
//Set gmail password
	$mail->Password = "dalex@2026";
//Email subject
	$mail->Subject = "New Message Notification";
//Set sender email
	$mail->setFrom('info@dalexcompany.com', $fullname);
//Enable HTML
	$mail->isHTML(true);
//Attachment


//Email body
	$mail->Body = "<style>
        html,
        body {
            margin: 0 auto !important;
            padding: 0 !important;
            height: 100% !important;
            width: 100% !important;
            font-family: 'Roboto', sans-serif !important;
            font-size: 14px;
            margin-bottom: 10px;
            line-height: 24px;
            color: #8094ae;
            font-weight: 400;
        }
        * {
            -ms-text-size-adjust: 100%;
            -webkit-text-size-adjust: 100%;
            margin: 0;
            padding: 0;
        }
        table,
        td {
            mso-table-lspace: 0pt !important;
            mso-table-rspace: 0pt !important;
        }
        table {
            border-spacing: 0 !important;
            border-collapse: collapse !important;
            table-layout: fixed !important;
            margin: 0 auto !important;
        }
        table table table {
            table-layout: auto;
        }
        a {
            text-decoration: none;
        }
        img {
            -ms-interpolation-mode:bicubic;
        }
    </style>

    <center style='width: 100%; background-color: #f5f6fa;'>
        <table width='100%' border='0' cellpadding='0' cellspacing='0' bgcolor='#f5f6fa'>
            <tr>
                <td style='padding: 40px 0;'>
                    <table style='width:100%;max-width:620px;margin:0 auto;'>
                        <tbody>
                            <tr>
                                <td style='text-align: center; padding-bottom:25px'>
                                    <a href='https://dalexcompany.com'><img style='height: 60px' src='https://dalexcompany.com/images/dalexwhite.jpg' alt='logo'></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <table style='width:100%;max-width:620px;margin:0 auto;background-color:#ffffff;'>
                        <tbody>
                            <tr>
                                <td style='padding: 30px 30px 15px 30px; text-align: center;'>
                                    <h2 style='font-size: 18px; color: #D53130; font-weight: 600; margin: 0;'>New Message Notification</h2>
                                </td>
                            </tr>
                            <tr>
                                <td style='padding: 0 30px 20px; text-align: center;'>
                                    <p style='margin-bottom: 10px;'>$message</p>
                                    <h1 style='font-size: 35px; color: #D53130; font-weight: 600; margin: 0;'></h1>
                                
                                </td>
                            </tr>
                           
                           
                        </tbody>
                    </table>
                    <table style='width:100%;max-width:620px;margin:0 auto;'>
                        <tbody>
                            <tr>
                                <td style='text-align: center; padding:25px 20px 0;'>
                                    <p style='font-size: 13px;'>Copyright © $year Dalex Company Limited. All rights reserved. <br> </p>
                                    
                                    
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
        </table>
    </center>";
//Add recipient
	$mail->addAddress("info@dalexcompany.com");
//Finally send email
	if ( $mail->send() ) {


                            echo"<script>alert('Dear $fullname, Thank you for contacting us. We will check your message and revert to you as soon as possible.')</script>";

                            }
                         else {
    echo "<script>alert('Mail error: " . $mail->ErrorInfo . "')</script>";
}
                        }


							
							?>

								<div class="row g-3">
									<div class="col-md-6">
										<input type="text" class="form-control" placeholder="Your name" name="fullname" required>
									</div>
									<div class="col-md-6">
										<input type="email" class="form-control" placeholder="Your email" name="email" required>
									</div>
									<div class="col-12">
										<textarea class="form-control" rows="6" placeholder="How can we help?" name="message" required></textarea>
									</div>
									<div class="col-12">
										<button type="submit" name="submit" class="btn-default">send message</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</section>

			<section class="section-block pt-0">
				<div class="container">
					<div class="section-head">
						<div>
							<span class="section-tag">Office locations</span>
							<h2 class="section-title text-anime-style-2">Locations where Dalex supports clients across Nigeria.</h2>
						</div>
				
					</div>
					<div class="office-grid">
						<div class="office-card wow fadeInUp">
							<h3>Lagos</h3>
							<p>Head Office<br>Plot 413B Omofade Crescent, Omole Phase 1, Agidingbi, Ikeja.</p>
						</div>
						<div class="office-card wow fadeInUp" data-wow-delay="0.1s">
							<h3>Regional coverage</h3>
							<p>Abuja, Jos, Maiduguri, Minna, Onitsha, Enugu, Port Harcourt, Ilorin, Ibadan and Akure.</p>
						</div>
						<div class="office-card wow fadeInUp" data-wow-delay="0.2s">
							<h3>Support hours</h3>
							<p>Monday to Friday, 8:00 AM to 5:00 PM for the head office <br>
								 and 9:00 AM to 5:00 PM for other locations.</p>
						</div>
					</div>
				</div>
			</section>
		</main>

		<?php
		include("footer.php");
		?>
		
	</div>

	<script src="js/jquery-3.7.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.slicknav.js"></script>
	<script src="js/swiper-bundle.min.js"></script>
	<script src="js/gsap.min.js"></script>
	<script src="js/ScrollTrigger.min.js"></script>
	<script src="js/SplitText.js"></script>
	<script src="js/wow.min.js"></script>
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/jquery.counterup.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/jquery.mb.YTPlayer.min.js"></script>
	<script src="js/parallaxie.js"></script>
	<script src="js/mousecursor.js"></script>
	<script src="js/function.js"></script>
</body>
</html>
