<?php
session_start();
include "../koneksi.php";
include('cek-login.php');
$select = mysqli_query($koneksi, "SELECT * FROM akun WHERE username = '$_SESSION[siswa]'");
while ($fetch = mysqli_fetch_array($select)) 

?>


<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;">
<title>Verifikasi Email</title>

<style type="text/css">

div, p, a, li, td { -webkit-text-size-adjust:none; }

*{
-webkit-font-smoothing: antialiased;
-moz-osx-font-smoothing: grayscale;
}

.ReadMsgBody
{width: 100%; background-color: #ffffff;}
.ExternalClass
{width: 100%; background-color: #ffffff;}
body{width: 100%; height: 100%; background-color: #ffffff; margin:0; padding:0; -webkit-font-smoothing: antialiased;}
html{width: 100%; background-color: #ffffff;}

@font-face {
    font-family: 'proxima_novalight';src: url('http://rocketway.net/themebuilder/template/templates/titan/font/proximanova-light-webfont.eot');src: url('http://rocketway.net/themebuilder/template/templates/titan/font/proximanova-light-webfont.eot?#iefix') format('embedded-opentype'),url('http://rocketway.net/themebuilder/template/templates/titan/font/proximanova-light-webfont.woff') format('woff'),url('http://rocketway.net/themebuilder/template/templates/titan/font/proximanova-light-webfont.ttf') format('truetype');font-weight: normal;font-style: normal;}

@font-face {
    font-family: 'proxima_nova_rgregular'; src: url('http://rocketway.net/themebuilder/template/templates/titan/font/proximanova-regular-webfont.eot');src: url('http://rocketway.net/themebuilder/template/templates/titan/font/proximanova-regular-webfont.eot?#iefix') format('embedded-opentype'),url('http://rocketway.net/themebuilder/template/templates/titan/font/proximanova-regular-webfont.woff') format('woff'),url('http://rocketway.net/themebuilder/template/templates/titan/font/proximanova-regular-webfont.ttf') format('truetype');font-weight: normal;font-style: normal;}

@font-face {
    font-family: 'proxima_novasemibold';src: url('http://rocketway.net/themebuilder/template/templates/titan/font/proximanova-semibold-webfont.eot');src: url('http://rocketway.net/themebuilder/template/templates/titan/font/proximanova-semibold-webfont.eot?#iefix') format('embedded-opentype'),url('http://rocketway.net/themebuilder/template/templates/titan/font/proximanova-semibold-webfont.woff') format('woff'),url('http://rocketway.net/themebuilder/template/templates/titan/font/proximanova-semibold-webfont.ttf') format('truetype');font-weight: normal;font-style: normal;}
    
@font-face {
	font-family: 'proxima_nova_rgbold';src: url('http://rocketway.net/themebuilder/template/templates/titan/font/proximanova-bold-webfont.eot');src: url('http://rocketway.net/themebuilder/template/templates/titan/font/proximanova-bold-webfont.eot?#iefix') format('embedded-opentype'),url('http://rocketway.net/themebuilder/template/templates/titan/font/proximanova-bold-webfont.woff') format('woff'),url('http://rocketway.net/themebuilder/template/templates/titan/font/proximanova-bold-webfont.ttf') format('truetype');font-weight: normal;font-style: normal;}
	
@font-face {
    font-family: 'proxima_novablack';src: url('http://rocketway.net/themebuilder/template/templates/titan/font/proximanova-black-webfont.eot');src: url('http://rocketway.net/themebuilder/template/templates/titan/font/proximanova-black-webfont.eot?#iefix') format('embedded-opentype'),url('http://rocketway.net/themebuilder/template/templates/titan/font/proximanova-black-webfont.woff') format('woff'),url('http://rocketway.net/themebuilder/template/templates/titan/font/proximanova-black-webfont.ttf') format('truetype');font-weight: normal;font-style: normal;}
    
@font-face {font-family: 'proxima_novathin';src: url('http://rocketway.net/themebuilder/template/templates/mason/font/proximanova-thin-webfont.eot');src: url('http://rocketway.net/themebuilder/template/templates/mason/font/proximanova-thin-webfont.eot?#iefix') format('embedded-opentype'),url('http://rocketway.net/themebuilder/template/templates/mason/font/proximanova-thin-webfont.woff') format('woff'),url('http://rocketway.net/themebuilder/template/templates/mason/font/proximanova-thin-webfont.ttf') format('truetype');font-weight: normal;font-style: normal;}

p {padding: 0!important; margin-top: 0!important; margin-right: 0!important; margin-bottom: 0!important; margin-left: 0!important; }

.hover:hover {opacity:0.85;filter:alpha(opacity=85);}

.image77 img {width: 77px; height: auto;}
.avatar125 img {width: 125px; height: auto;}
.icon61 img {width: 61px; height: auto;}
.logo img {width: 75px; height: auto;}
.icon18 img {width: 18px; height: auto;}

</style>

<!-- @media only screen and (max-width: 640px) 
		   {*/
		   -->
<style type="text/css"> @media only screen and (max-width: 640px){
		body{width:auto!important;}
		table[class=full2] {width: 100%!important; clear: both; }
		table[class=mobile2] {width: 100%!important; padding-left: 20px; padding-right: 20px; clear: both; }
		table[class=fullCenter2] {width: 100%!important; text-align: center!important; clear: both; }
		td[class=fullCenter2] {width: 100%!important; text-align: center!important; clear: both; }
		td[class=pad15] {width: 100%!important; padding-left: 15px; padding-right: 15px; clear: both;}
		
} </style>
<!--

@media only screen and (max-width: 479px) 
		   {
		   -->
<style type="text/css"> @media only screen and (max-width: 479px){
		body{width:auto!important;}
		table[class=full2] {width: 100%!important; clear: both; }
		table[class=mobile2] {width: 100%!important; padding-left: 20px; padding-right: 20px; clear: both; }
		table[class=fullCenter2] {width: 100%!important; text-align: center!important; clear: both; }
		td[class=fullCenter2] {width: 100%!important; text-align: center!important; clear: both; }
		table[class=full] {width: 100%!important; clear: both; }
		table[class=mobile] {width: 100%!important; padding-left: 20px; padding-right: 20px; clear: both; }
		table[class=fullCenter] {width: 100%!important; text-align: center!important; clear: both; }
		td[class=fullCenter] {width: 100%!important; text-align: center!important; clear: both; }
		td[class=pad15] {width: 100%!important; padding-left: 15px; padding-right: 15px; clear: both;}
		.erase {display: none;}
				
		}
} </style>

</head>
<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">


<!-- Notification 6 -->
<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="full2"  bgcolor="#303030"style="background-color: #f2f4f9;">
	<tr>
		<td align="center" style="background-image: url(''); -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover; background-position: center center; background-repeat: no-repeat;" id="not6">
		
			
			<!-- Mobile Wrapper -->
			<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="mobile2">
				<tr>
					<td width="100%" align="center">
					
						<div class="sortable_inner ui-sortable">
						<!-- Space -->
						<table width="600" border="0" cellpadding="0" cellspacing="0" align="center" class="full2" object="drag-module-small">
							<tr>
								<td width="600" height="50"></td>
							</tr>
						</table><!-- End Space -->
						
						<!-- Space -->
						<table width="600" border="0" cellpadding="0" cellspacing="0" align="center" class="full2" object="drag-module-small">
							<tr>
								<td width="600" height="50"></td>
							</tr>
						</table><!-- End Space -->
			
						<!-- Start Top -->
						<table width="600" border="0" cellpadding="0" cellspacing="0" align="center" class="mobile2" bgcolor="#608BFF" style="border-top-left-radius: 5px; border-top-right-radius: 5px; background-color: #608BFF;" object="drag-module-small">
							<tr>
								<td width="600" valign="middle" align="center" class="logo">
									
									<!-- Header Text --> 
									<table width="540" border="0" cellpadding="0" cellspacing="0" align="center" style="text-align: center; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" class="fullCenter2">
										<tr>
											<td width="100%" height="30"></td>
										</tr>
										<tr>
											<td width="100%"><span ><img src="../assets/img/logo5.svg" width="75" alt="" border="0" ></span></td>
										</tr>
										<tr>
											<td width="100%" height="30"></td>
										</tr>
									</table>
								</td>
							</tr>
						</table>
						
						</div>
						
						<!-- Mobile Wrapper -->
						<table width="600" border="0" cellpadding="0" cellspacing="0" align="center" class="full2" object="drag-module-small" style="-webkit-border-bottom-left-radius: 5px; -moz-border-bottom-left-radius: 5px; border-bottom-left-radius: 5px; -webkit-border-bottom-right-radius: 5px; -moz-border-bottom-right-radius: 5px; border-bottom-right-radius: 5px;">
							<tr>
								<td width="600" align="center" style="border-bottom-left-radius: 5px; border-bottom-right-radius: 5px; background-color: rgb(255, 255, 255);" bgcolor="#ffffff">
									
									<div class="sortable_inner ui-sortable">
						
									<table width="600" border="0" cellpadding="0" cellspacing="0" align="center" class="mobile2" bgcolor="#ffffff"object="drag-module-small" style="background-color: rgb(255, 255, 255);">
										<tr>
											<td width="600" valign="middle" align="center">
											 
												<table width="540" border="0" cellpadding="0" cellspacing="0" align="center" style="text-align: center; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" class="fullCenter2">
													<tr>
														<td width="100%" height="30"></td>
													</tr>
												</table>
											</td>
										</tr>
									</table>
									
									<table width="600" border="0" cellpadding="0" cellspacing="0" align="center" class="mobile2" bgcolor="#ffffff"object="drag-module-small" style="background-color: rgb(255, 255, 255);">
										<tr>
											<td width="600" valign="middle" align="center">
											 
												<table width="540" border="0" cellpadding="0" cellspacing="0" align="center" style="text-align: center; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" class="fullCenter2">
													<tr>
														<td valign="middle" width="100%" style="text-align: left; font-family: Helvetica, Arial, sans-serif; font-size: 23px; color: rgb(63, 67, 69); line-height: 30px; font-weight: 100;" >
															<!--[if !mso]><!--><span style="font-family: 'proxima_novathin', Helvetica; font-weight: normal;"><!--<![endif]-->Hi <?php echo "$fetch[fullname]"; ?>, <!--[if !mso]><!--></span><!--<![endif]-->
														</td>
													</tr>
												</table>
											</td>
										</tr>
									</table>
									
									<table width="600" border="0" cellpadding="0" cellspacing="0" align="center" class="mobile2" bgcolor="#ffffff"object="drag-module-small" style="background-color: rgb(255, 255, 255);">
										<tr>
											<td width="600" valign="middle" align="center">
											 
												<table width="540" border="0" cellpadding="0" cellspacing="0" align="center" style="text-align: center; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" class="fullCenter2">
													<tr>
														<td width="100%" height="30"></td>
													</tr>
												</table>
											</td>
										</tr>
									</table>
									
									<table width="600" border="0" cellpadding="0" cellspacing="0" align="center" class="mobile2" bgcolor="#ffffff"object="drag-module-small" style="background-color: rgb(255, 255, 255);">
										<tr>
											<td width="600" valign="middle" align="center">
											 
												<table width="540" border="0" cellpadding="0" cellspacing="0" align="center" style="text-align: center; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" class="fullCenter2">
													<tr>
														<td valign="middle" width="100%" style="text-align: left; font-family: Helvetica, Arial, sans-serif; font-size: 14px; color: rgb(63, 67, 69); line-height: 24px;" >
															<!--[if !mso]><!--><span style="font-family: 'proxima_nova_rgregular', Helvetica; font-weight: normal;"><!--<![endif]-->Terimakasih telah mendaftar,<br>
Kami senang Anda ada di sini! Sebelum Anda mulai menjelajahi, kami hanya perlu memastikan bahwa Anda adalah manusia yang ramah dan bukan robot jahat:<!--[if !mso]><!--></span><!--<![endif]-->
														</td>
													</tr>
												</table>
											</td>
										</tr>
									</table>
									
									<table width="600" border="0" cellpadding="0" cellspacing="0" align="center" class="mobile2" bgcolor="#ffffff"object="drag-module-small" style="background-color: rgb(255, 255, 255);">
										<tr>
											<td width="600" valign="middle" align="center">
											 
												<table width="540" border="0" cellpadding="0" cellspacing="0" align="center" style="text-align: center; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" class="fullCenter2">
													<tr>
														<td width="100%" height="40"></td>
													</tr>
												</table>
											</td>
										</tr>
									</table>
									
									<!----------------- Button Center ----------------->
									<table width="600" border="0" cellpadding="0" cellspacing="0" align="center" class="mobile2" bgcolor="#ffffff"object="drag-module-small" style="background-color: rgb(255, 255, 255);">
										<tr>
											<td width="600" valign="middle" align="center">
											 
												<table width="540" border="0" cellpadding="0" cellspacing="0" align="center" style="text-align: center; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" class="fullCenter2">
													<tr>
														<td>
															<table border="0" cellpadding="0" cellspacing="0" align="left"> 
																<tr> 
																	<td align="center" height="45"bgcolor="#608BFF" style="border-top-left-radius: 5px; border-top-right-radius: 5px; border-bottom-right-radius: 5px; border-bottom-left-radius: 5px; padding-left: 30px; padding-right: 30px; font-weight: bold; font-family: Helvetica, Arial, sans-serif; color: rgb(255, 255, 255); background-color:#608BFF;">
																		<!--[if !mso]><!--><span style="font-family: 'proxima_nova_rgbold', Helvetica; font-weight: normal;"><!--<![endif]-->
																			<a href="https://sclass.hstki.org/library-email/verifikasi.php?Vkey=" style="color: rgb(255, 255, 255); font-size: 15px; text-decoration: none; line-height: 34px; width: 100%;">Verifikasi Email</a>
																		<!--[if !mso]><!--></span><!--<![endif]-->
																	</td> 
																</tr> 
															</table> 
														</td>
													</tr>
												</table>
											</td>
										</tr>
									</table><!----------------- End Button Center ----------------->
									
									<table width="600" border="0" cellpadding="0" cellspacing="0" align="center" class="mobile2" bgcolor="#ffffff"object="drag-module-small" style="background-color: rgb(255, 255, 255);">
										<tr>
											<td width="600" valign="middle" align="center">
											 
												<table width="540" border="0" cellpadding="0" cellspacing="0" align="center" style="text-align: center; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" class="fullCenter2">
													<tr>
														<td width="100%" height="35"></td>
													</tr>
												</table>
											</td>
										</tr>
									</table>
									
									<table width="600" border="0" cellpadding="0" cellspacing="0" align="center" class="mobile2" bgcolor="#ffffff"object="drag-module-small" style="background-color: rgb(255, 255, 255);">
										<tr>
											<td width="600" valign="middle" align="center">
											 
												<table width="540" border="0" cellpadding="0" cellspacing="0" align="center" style="text-align: center; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" class="fullCenter2">
													<tr>
														<td valign="middle" width="100%" style="text-align: left; font-family: Helvetica, Arial, sans-serif; font-size: 14px; color: rgb(63, 67, 69); line-height: 24px;" >
															<!--[if !mso]><!--><span style="font-family: 'proxima_nova_rgregular', Helvetica; font-weight: normal;"><!--<![endif]--> 
															<br><br>
															Thank you!
															<br>
															HSTKI Team
																
															<!--[if !mso]><!--></span><!--<![endif]-->
														</td>
													</tr>
												</table>
											</td>
										</tr>
									</table>
									
									<table width="600" border="0" cellpadding="0" cellspacing="0" align="center" class="mobile2" bgcolor="#ffffff"object="drag-module-small" style="border-bottom-left-radius: 5px; border-bottom-right-radius: 5px; background-color: rgb(255, 255, 255);">
										<tr>
											<td width="600" valign="middle" align="center" style="-webkit-border-bottom-left-radius: 5px; -moz-border-bottom-left-radius: 5px; border-bottom-left-radius: 5px; -webkit-border-bottom-right-radius: 5px; -moz-border-bottom-right-radius: 5px; border-bottom-right-radius: 5px;">
											 
												<table width="540" border="0" cellpadding="0" cellspacing="0" align="center" style="text-align: center; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" class="fullCenter2">
													<tr>
														<td width="100%" height="50"></td>
													</tr>
												</table>
																				
											</td>
										</tr>
									</table>
									
								</div>
								</td>
							</tr>
						</table>
						
						<table width="600" border="0" cellpadding="0" cellspacing="0" align="center" class="full2" object="drag-module-small">
							<tr>
								<td width="600" height="30"></td>
							</tr>
						</table>
						
						<table width="600" border="0" cellpadding="0" cellspacing="0" align="center" class="mobile2" object="drag-module-small">
							<tr>
								<td valign="middle" width="600" style="text-align: left; font-family: Helvetica, Arial, sans-serif; font-size: 13px; color: black; line-height: 24px; font-style: italic;" >
									<!--[if !mso]><!--><span style="font-family: 'proxima_nova_rgregular', Helvetica; font-weight: normal;"><!--<![endif]-->© 2021 HSTKI. All Rights Reserved. <!--<![endif]--></span><!--[if !mso]><!-->
								</td>
							</tr>
						</table>
						
						
						<table width="600" border="0" cellpadding="0" cellspacing="0" align="center" class="mobile2" object="drag-module-small">
							<tr>
								<td width="600" height="30"></td>
							</tr>
						</table>
						
						<table width="600" border="0" cellpadding="0" cellspacing="0" align="center" class="mobile2" object="drag-module-small">
							<tr>
								<td width="600" height="29"></td>
							</tr>
							<tr>
								<td width="600" height="1" style="font-size: 1px; line-height: 1px;">&nbsp;</td>
							</tr>
						</table>
						
						
					</td>
				</tr>
			</table>
			
		</div>
		</td>
	</tr>
</table><!-- End Notification 6 -->
</div>
</body></html>	<style>body{ background: none !important; } </style>