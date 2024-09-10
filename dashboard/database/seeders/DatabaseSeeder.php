<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);


        \App\Models\Inbox::factory(50)->create();

        DB::table('users')->insert([
            'name' => 'Super Admin',
            'email' => 'info@xyberixsolutions.com',
            'email_verified_at' => now(),
            'user_type' => 'super',
            'password' => '$2y$10$paoqU5OOqqj/nsh0.aRule9IN0OwwX31WS9Uqq6A07wT2h5yOEKq6', //password :Xyberix@123!
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('users')->insert([
            'name' => 'Rafey',
            'email' => 'rafey@xyberixsolutions.com',
            'email_verified_at' => now(),
            'user_type' => 'admin',
            'password' => '$2y$10$paoqU5OOqqj/nsh0.aRule9IN0OwwX31WS9Uqq6A07wT2h5yOEKq6', //password :Xyberix@123!
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('users')->insert([
            'name' => 'Ally',
            'email' => 'ally@xyberixsolutions.com',
            'email_verified_at' => now(),
            'user_type' => 'admin',
            'password' => '$2y$10$paoqU5OOqqj/nsh0.aRule9IN0OwwX31WS9Uqq6A07wT2h5yOEKq6', //password :Xyberix@123!
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('users')->insert([
            'name' => 'Sheheryar',
            'email' => 'sheheryar@xyberixsolutions.com',
            'email_verified_at' => now(),
            'user_type' => 'admin',
            'password' => '$2y$10$paoqU5OOqqj/nsh0.aRule9IN0OwwX31WS9Uqq6A07wT2h5yOEKq6', //password :Xyberix@123!
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('users')->insert([
            'name' => 'Rohaan',
            'email' => 'rohaan@xyberixsolutions.com',
            'email_verified_at' => now(),
            'user_type' => 'admin',
            'password' => '$2y$10$paoqU5OOqqj/nsh0.aRule9IN0OwwX31WS9Uqq6A07wT2h5yOEKq6', //password :Xyberix@123!
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);


        DB::table('roles')->insert([
            'name' => 'super',
            'guard_name' => 'web',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('model_has_roles')->insert([
            'role_id' => 1,
            'model_type' => 'App\Models\User',
            'model_id' => 1,
        ]);


        DB::table('roles')->insert([
            'name' => 'user',
            'guard_name' => 'web',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);


        DB::table('permissions')->insert([
            'name' => 'create',
            'guard_name' => 'web',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('permissions')->insert([
            'name' => 'update',
            'guard_name' => 'web',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('permissions')->insert([
            'name' => 'delete',
            'guard_name' => 'web',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('permissions')->insert([
            'name' => 'show',
            'guard_name' => 'web',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);


        DB::table('model_has_permissions')->insert([
            'permission_id' => 1,
            'model_type' => 'App\Models\User',
            'model_id' => 1,
        ]);

        DB::table('model_has_permissions')->insert([
            'permission_id' => 2,
            'model_type' => 'App\Models\User',
            'model_id' => 1,
        ]);

        DB::table('model_has_permissions')->insert([
            'permission_id' => 3,
            'model_type' => 'App\Models\User',
            'model_id' => 1,
        ]);

        DB::table('model_has_permissions')->insert([
            'permission_id' => 4,
            'model_type' => 'App\Models\User',
            'model_id' => 1,
        ]);

        \App\Models\Task::factory(50)->create();

        $template1= <<<HTML
     <!DOCTYPE html>
<html xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office" lang="en">

<head>
	<title></title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"><!--[if mso]><xml><o:OfficeDocumentSettings><o:PixelsPerInch>96</o:PixelsPerInch><o:AllowPNG/></o:OfficeDocumentSettings></xml><![endif]--><!--[if !mso]><!-->
	<link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@100;200;300;400;500;600;700;800;900" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@100;200;300;400;500;600;700;800;900" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;600;700;800;900" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100;200;300;400;500;600;700;800;900" rel="stylesheet" type="text/css"><!--<![endif]-->
	<style>
		* {
			box-sizing: border-box;
		}

		body {
			margin: 0;
			padding: 0;
		}

		a[x-apple-data-detectors] {
			color: inherit !important;
			text-decoration: inherit !important;
		}

		#MessageViewBody a {
			color: inherit;
			text-decoration: none;
		}

		p {
			line-height: inherit
		}

		.desktop_hide,
		.desktop_hide table {
			mso-hide: all;
			display: none;
			max-height: 0px;
			overflow: hidden;
		}

		.image_block img+div {
			display: none;
		}

		@media (max-width:500px) {
			.social_block.desktop_hide .social-table {
				display: inline-block !important;
			}

			.mobile_hide {
				display: none;
			}

			.row-content {
				width: 100% !important;
			}

			.stack .column {
				width: 100%;
				display: block;
			}

			.mobile_hide {
				min-height: 0;
				max-height: 0;
				max-width: 0;
				overflow: hidden;
				font-size: 0px;
			}

			.desktop_hide,
			.desktop_hide table {
				display: table !important;
				max-height: none !important;
			}

			.row-1 .column-1 .block-5.paragraph_block td.pad {
				padding: 0 5px 20px !important;
			}
		}
	</style>
</head>

<body style="background-color: #c6c6c6; margin: 0; padding: 0; -webkit-text-size-adjust: none; text-size-adjust: none;">
	<table class="nl-container" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #c6c6c6;">
		<tbody>
			<tr>
				<td>
					<table class="row row-1" align="center" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #a6a6a6; background-size: auto;">
						<tbody>
							<tr>
								<td>
									<table class="row-content stack" align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #c6c5c5; background-image: url('https://d15k2d11r6t6rl.cloudfront.net/public/users/Integrators/BeeProAgency/1107273_1092741/editor_images/ffa1b1a9-1f2e-43f8-9f05-16ef3ef06094.jpg'); background-repeat: no-repeat; background-size: cover; border-radius: 0; color: #000000; width: 480.00px; margin: 0 auto;" width="480.00">
										<tbody>
											<tr>
												<td class="column column-1" width="100%" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; padding-top: 20px; vertical-align: top; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;">
													<table class="html_block block-1" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
														<tr>
															<td class="pad">
																<div style="font-family:'Merriweather', 'Georgia', serif;text-align:center;" align="center"></div>
															</td>
														</tr>
													</table>
													<table class="image_block block-2" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
														<tr>
															<td class="pad" style="padding-bottom:10px;padding-left:25px;padding-top:5px;width:100%;padding-right:0px;">
																<div class="alignment" align="left" style="line-height:10px">
																	<div style="max-width: 144px;"><img src="https://www.xyberixsolutions.com/assets/brand-logo.png" style="display: block; height: auto; border: 0; width: 100%;" width="144" alt="I'm an image" title="I'm an image"></div>
																</div>
															</td>
														</tr>
													</table>
													<table class="heading_block block-3" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
														<tr>
															<td class="pad" style="padding-bottom:10px;padding-left:10px;padding-right:10px;padding-top:15px;text-align:center;width:100%;">
																<h1 style="margin: 0; color: #757272; direction: ltr; font-family: 'Roboto Slab', Arial, 'Helvetica Neue', Helvetica, sans-serif; font-size: 29px; font-weight: 700; letter-spacing: 2px; line-height: 120%; text-align: center; margin-top: 0; margin-bottom: 0; mso-line-height-alt: 34.8px;">Your Business's Digital Revolution Starts Here!</h1>
															</td>
														</tr>
													</table>
													<table class="heading_block block-4" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
														<tr>
															<td class="pad" style="padding-bottom:10px;padding-left:10px;padding-right:10px;padding-top:15px;text-align:center;width:100%;">
																<h3 style="margin: 0; color: #757272; direction: ltr; font-family: 'Roboto Slab', Arial, 'Helvetica Neue', Helvetica, sans-serif; font-size: 22px; font-weight: 500; letter-spacing: normal; line-height: 120%; text-align: center; margin-top: 0; margin-bottom: 0; mso-line-height-alt: 26.4px;">Xyberix Solutions, Building Digital Success Stories for Your Business.</h3>
															</td>
														</tr>
													</table>
													<table class="paragraph_block block-5" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;">
														<tr>
															<td class="pad" style="padding-bottom:20px;padding-left:30px;padding-right:30px;padding-top:20px;">
																<div style="color:#757272;direction:ltr;font-family:'Nunito', Arial, 'Helvetica Neue', Helvetica, sans-serif;font-size:12px;font-weight:400;letter-spacing:0px;line-height:150%;text-align:center;mso-line-height-alt:18px;">
																	<p style="margin: 0;">Are you ready to build your digital success story? At Xyberix, we specialize in crafting bespoke web solutions that not only look stunning but also drive real results for your business.</p>
																</div>
															</td>
														</tr>
													</table>
													<table class="button_block block-6" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
														<tr>
															<td class="pad" style="text-align:center;">
																<div class="alignment" align="center"><!--[if mso]>
<v:roundrect xmlns:v="urn:schemas-microsoft-com:vml" xmlns:w="urn:schemas-microsoft-com:office:word" href="https://landingpage.xyberixsolutions.com/" style="height:46px;width:225px;v-text-anchor:middle;" arcsize="83%" stroke="false" fillcolor="#4a4949">
<w:anchorlock/>
<v:textbox inset="0px,0px,0px,0px">
<center style="color:#ffffff; font-family:serif; font-size:17px">
<![endif]--><a href="https://landingpage.xyberixsolutions.com/" target="_blank" style="text-decoration:none;display:inline-block;color:#ffffff;background-color:#4a4949;border-radius:38px;width:auto;border-top:0px solid transparent;font-weight:400;border-right:0px solid transparent;border-bottom:0px solid transparent;border-left:0px solid transparent;padding-top:5px;padding-bottom:5px;font-family:'Merriweather', 'Georgia', serif;font-size:17px;text-align:center;mso-border-alt:none;word-break:keep-all;"><span style="padding-left:20px;padding-right:20px;font-size:17px;display:inline-block;letter-spacing:normal;"><span style="word-break: break-word; line-height: 34px;">Get Free Consultaion</span></span></a><!--[if mso]></center></v:textbox></v:roundrect><![endif]--></div>
															</td>
														</tr>
													</table>
													<table class="social_block block-7" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
														<tr>
															<td class="pad" style="padding-bottom:25px;padding-left:10px;padding-right:10px;padding-top:40px;text-align:center;">
																<div class="alignment" align="center">
																	<table class="social-table" width="184px" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; display: inline-block;">
																		<tr>
																			<td style="padding:0 7px 0 7px;"><a href="https://www.facebook.com/people/Xyberix-Solutions/100094298805051/?mibextid=2JQ9oc" target="_blank"><img src="https://app-rsrc.getbee.io/public/resources/social-networks-icon-sets/circle-dark-gray/facebook@2x.png" width="32" height="32" alt="Facebook" title="facebook" style="display: block; height: auto; border: 0;"></a></td>
																			<td style="padding:0 7px 0 7px;"><a href="https://twitter.com/xyberixs?s=21&t=kXmOtLnYa844an74zFzhSA" target="_blank"><img src="https://app-rsrc.getbee.io/public/resources/social-networks-icon-sets/circle-dark-gray/twitter@2x.png" width="32" height="32" alt="Twitter" title="twitter" style="display: block; height: auto; border: 0;"></a></td>
																			<td style="padding:0 7px 0 7px;"><a href="https://www.linkedin.com/company/xyberixsolutions/" target="_blank"><img src="https://app-rsrc.getbee.io/public/resources/social-networks-icon-sets/circle-dark-gray/linkedin@2x.png" width="32" height="32" alt="Linkedin" title="linkedin" style="display: block; height: auto; border: 0;"></a></td>
																			<td style="padding:0 7px 0 7px;"><a href="https://www.instagram.com/xyberixsolutions/?igshid=MzRlODBiNWFlZA%3D%3D&__coig_restricted=1" target="_blank"><img src="https://app-rsrc.getbee.io/public/resources/social-networks-icon-sets/circle-dark-gray/instagram@2x.png" width="32" height="32" alt="Instagram" title="instagram" style="display: block; height: auto; border: 0;"></a></td>
																		</tr>
																	</table>
																</div>
															</td>
														</tr>
													</table>
													<table class="paragraph_block block-8" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;">
														<tr>
															<td class="pad" style="padding-bottom:30px;padding-left:10px;padding-right:10px;padding-top:30px;">
																<div style="color:#757272;font-family:'Merriweather', 'Georgia', serif;font-size:9px;font-weight:400;line-height:120%;text-align:center;mso-line-height-alt:10.799999999999999px;">
																	<p style="margin: 0; word-break: break-word;">ⓒ Copyright 2023 Xyberix Solution's (LLC). All rights reserved.</p>
																</div>
															</td>
														</tr>
													</table>
												</td>
											</tr>
										</tbody>
									</table>
								</td>
							</tr>
						</tbody>
					</table>
				</td>
			</tr>
		</tbody>
	</table><!-- End -->
</body>

</html>

HTML;

        $template2= <<<HTML
   <!DOCTYPE html>
<html xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office" lang="en">

<head>
	<title></title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"><!--[if mso]><xml><o:OfficeDocumentSettings><o:PixelsPerInch>96</o:PixelsPerInch><o:AllowPNG/></o:OfficeDocumentSettings></xml><![endif]--><!--[if !mso]><!-->
	<link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@100;200;300;400;500;600;700;800;900" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@100;200;300;400;500;600;700;800;900" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;600;700;800;900" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100;200;300;400;500;600;700;800;900" rel="stylesheet" type="text/css"><!--<![endif]-->
	<style>
		* {
			box-sizing: border-box;
		}

		body {
			margin: 0;
			padding: 0;
		}

		a[x-apple-data-detectors] {
			color: inherit !important;
			text-decoration: inherit !important;
		}

		#MessageViewBody a {
			color: inherit;
			text-decoration: none;
		}

		p {
			line-height: inherit
		}

		.desktop_hide,
		.desktop_hide table {
			mso-hide: all;
			display: none;
			max-height: 0px;
			overflow: hidden;
		}

		.image_block img+div {
			display: none;
		}

		@media (max-width:500px) {
			.social_block.desktop_hide .social-table {
				display: inline-block !important;
			}

			.mobile_hide {
				display: none;
			}

			.row-content {
				width: 100% !important;
			}

			.stack .column {
				width: 100%;
				display: block;
			}

			.mobile_hide {
				min-height: 0;
				max-height: 0;
				max-width: 0;
				overflow: hidden;
				font-size: 0px;
			}

			.desktop_hide,
			.desktop_hide table {
				display: table !important;
				max-height: none !important;
			}

			.row-1 .column-1 .block-5.paragraph_block td.pad {
				padding: 0 5px 20px !important;
			}
		}
	</style>
</head>

<body style="background-color: #c6c6c6; margin: 0; padding: 0; -webkit-text-size-adjust: none; text-size-adjust: none;">
	<table class="nl-container" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #c6c6c6;">
		<tbody>
			<tr>
				<td>
					<table class="row row-1" align="center" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #a6a6a6; background-size: auto;">
						<tbody>
							<tr>
								<td>
									<table class="row-content stack" align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #c6c5c5; background-image: url('https://d15k2d11r6t6rl.cloudfront.net/public/users/Integrators/BeeProAgency/1107273_1092741/editor_images/ffa1b1a9-1f2e-43f8-9f05-16ef3ef06094.jpg'); background-repeat: no-repeat; background-size: cover; border-radius: 0; color: #000000; width: 480.00px; margin: 0 auto;" width="480.00">
										<tbody>
											<tr>
												<td class="column column-1" width="100%" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; padding-top: 20px; vertical-align: top; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;">
													<table class="html_block block-1" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
														<tr>
															<td class="pad">
																<div style="font-family:'Merriweather', 'Georgia', serif;text-align:center;" align="center"></div>
															</td>
														</tr>
													</table>
													<table class="image_block block-2" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
														<tr>
															<td class="pad" style="padding-bottom:10px;padding-left:25px;padding-top:5px;width:100%;padding-right:0px;">
																<div class="alignment" align="left" style="line-height:10px">
																	<div style="max-width: 144px;"><img src="https://www.xyberixsolutions.com/assets/brand-logo.png" style="display: block; height: auto; border: 0; width: 100%;" width="144" alt="I'm an image" title="I'm an image"></div>
																</div>
															</td>
														</tr>
													</table>
													<table class="heading_block block-3" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
														<tr>
															<td class="pad" style="padding-bottom:10px;padding-left:10px;padding-right:10px;padding-top:15px;text-align:center;width:100%;">
																<h1 style="margin: 0; color: #757272; direction: ltr; font-family: 'Roboto Slab', Arial, 'Helvetica Neue', Helvetica, sans-serif; font-size: 29px; font-weight: 700; letter-spacing: 2px; line-height: 120%; text-align: center; margin-top: 0; margin-bottom: 0; mso-line-height-alt: 34.8px;">We don't just build websites, we create digital success stories.</h1>
															</td>
														</tr>
													</table>
													<table class="heading_block block-4" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
														<tr>
															<td class="pad" style="padding-bottom:10px;padding-left:10px;padding-right:10px;padding-top:15px;text-align:center;width:100%;">
																<h3 style="margin: 0; color: #757272; direction: ltr; font-family: 'Roboto Slab', Arial, 'Helvetica Neue', Helvetica, sans-serif; font-size: 22px; font-weight: 500; letter-spacing: normal; line-height: 120%; text-align: center; margin-top: 0; margin-bottom: 0; mso-line-height-alt: 26.4px;">Xyberix Solutions, Digital Transformation Experts</h3>
															</td>
														</tr>
													</table>
													<table class="paragraph_block block-5" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;">
														<tr>
															<td class="pad" style="padding-bottom:20px;padding-left:30px;padding-right:30px;padding-top:20px;">
																<div style="color:#757272;direction:ltr;font-family:'Nunito', Arial, 'Helvetica Neue', Helvetica, sans-serif;font-size:12px;font-weight:400;letter-spacing:0px;line-height:150%;text-align:center;mso-line-height-alt:18px;">
																	<p style="margin: 0;">We excel in creating websites that elevate your business, propelling it towards digital success. Our team formulates digital strategies that seamlessly align with your objectives.</p>
																</div>
															</td>
														</tr>
													</table>
													<table class="button_block block-6" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
														<tr>
															<td class="pad" style="text-align:center;">
																<div class="alignment" align="center"><!--[if mso]>
<v:roundrect xmlns:v="urn:schemas-microsoft-com:vml" xmlns:w="urn:schemas-microsoft-com:office:word" href="https://xyberixsolutions.com/service" style="height:44px;width:215px;v-text-anchor:middle;" arcsize="87%" stroke="false" fillcolor="#4a4949">
<w:anchorlock/>
<v:textbox inset="0px,0px,0px,0px">
<center style="color:#ffffff; font-family:serif; font-size:17px">
<![endif]--><a href="https://xyberixsolutions.com/service" target="_blank" style="text-decoration:none;display:inline-block;color:#ffffff;background-color:#4a4949;border-radius:38px;width:auto;border-top:0px solid transparent;font-weight:400;border-right:0px solid transparent;border-bottom:0px solid transparent;border-left:0px solid transparent;padding-top:5px;padding-bottom:5px;font-family:'Merriweather', 'Georgia', serif;font-size:17px;text-align:center;mso-border-alt:none;word-break:keep-all;"><span style="padding-left:20px;padding-right:20px;font-size:17px;display:inline-block;letter-spacing:normal;"><span style="word-break: break-word; line-height: 34px;">Get Free Consultaion</span></span></a><!--[if mso]></center></v:textbox></v:roundrect><![endif]--></div>
															</td>
														</tr>
													</table>
													<table class="social_block block-7" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
														<tr>
															<td class="pad" style="padding-bottom:25px;padding-left:10px;padding-right:10px;padding-top:40px;text-align:center;">
																<div class="alignment" align="center">
																	<table class="social-table" width="184px" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; display: inline-block;">
																		<tr>
																			<td style="padding:0 7px 0 7px;"><a href="https://www.facebook.com/people/Xyberix-Solutions/100094298805051/?mibextid=2JQ9oc" target="_blank"><img src="https://app-rsrc.getbee.io/public/resources/social-networks-icon-sets/circle-dark-gray/facebook@2x.png" width="32" height="32" alt="Facebook" title="facebook" style="display: block; height: auto; border: 0;"></a></td>
																			<td style="padding:0 7px 0 7px;"><a href="https://twitter.com/xyberixs?s=21&t=kXmOtLnYa844an74zFzhSA" target="_blank"><img src="https://app-rsrc.getbee.io/public/resources/social-networks-icon-sets/circle-dark-gray/twitter@2x.png" width="32" height="32" alt="Twitter" title="twitter" style="display: block; height: auto; border: 0;"></a></td>
																			<td style="padding:0 7px 0 7px;"><a href="https://www.linkedin.com/company/xyberixsolutions/" target="_blank"><img src="https://app-rsrc.getbee.io/public/resources/social-networks-icon-sets/circle-dark-gray/linkedin@2x.png" width="32" height="32" alt="Linkedin" title="linkedin" style="display: block; height: auto; border: 0;"></a></td>
																			<td style="padding:0 7px 0 7px;"><a href="https://www.instagram.com/xyberixsolutions/?igshid=MzRlODBiNWFlZA%3D%3D&__coig_restricted=1" target="_blank"><img src="https://app-rsrc.getbee.io/public/resources/social-networks-icon-sets/circle-dark-gray/instagram@2x.png" width="32" height="32" alt="Instagram" title="instagram" style="display: block; height: auto; border: 0;"></a></td>
																		</tr>
																	</table>
																</div>
															</td>
														</tr>
													</table>
													<table class="paragraph_block block-8" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;">
														<tr>
															<td class="pad" style="padding-bottom:30px;padding-left:10px;padding-right:10px;padding-top:30px;">
																<div style="color:#757272;font-family:'Merriweather', 'Georgia', serif;font-size:9px;font-weight:400;line-height:120%;text-align:center;mso-line-height-alt:10.799999999999999px;">
																	<p style="margin: 0; word-break: break-word;">ⓒ Copyright 2023 Xyberix Solution's (LLC). All rights reserved.</p>
																</div>
															</td>
														</tr>
													</table>
												</td>
											</tr>
										</tbody>
									</table>
								</td>
							</tr>
						</tbody>
					</table>
				</td>
			</tr>
		</tbody>
	</table><!-- End -->
</body>

</html>

HTML;

        $template3= <<<HTML
   <!DOCTYPE html>
<html xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office" lang="en">

<head>
	<title></title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"><!--[if mso]><xml><o:OfficeDocumentSettings><o:PixelsPerInch>96</o:PixelsPerInch><o:AllowPNG/></o:OfficeDocumentSettings></xml><![endif]--><!--[if !mso]><!-->
	<link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@100;200;300;400;500;600;700;800;900" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@100;200;300;400;500;600;700;800;900" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;600;700;800;900" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100;200;300;400;500;600;700;800;900" rel="stylesheet" type="text/css"><!--<![endif]-->
	<style>
		* {
			box-sizing: border-box;
		}

		body {
			margin: 0;
			padding: 0;
		}

		a[x-apple-data-detectors] {
			color: inherit !important;
			text-decoration: inherit !important;
		}

		#MessageViewBody a {
			color: inherit;
			text-decoration: none;
		}

		p {
			line-height: inherit
		}

		.desktop_hide,
		.desktop_hide table {
			mso-hide: all;
			display: none;
			max-height: 0px;
			overflow: hidden;
		}

		.image_block img+div {
			display: none;
		}

		@media (max-width:500px) {
			.social_block.desktop_hide .social-table {
				display: inline-block !important;
			}

			.mobile_hide {
				display: none;
			}

			.row-content {
				width: 100% !important;
			}

			.stack .column {
				width: 100%;
				display: block;
			}

			.mobile_hide {
				min-height: 0;
				max-height: 0;
				max-width: 0;
				overflow: hidden;
				font-size: 0px;
			}

			.desktop_hide,
			.desktop_hide table {
				display: table !important;
				max-height: none !important;
			}

			.row-1 .column-1 .block-5.paragraph_block td.pad {
				padding: 0 5px 20px !important;
			}
		}
	</style>
</head>

<body style="background-color: #c6c6c6; margin: 0; padding: 0; -webkit-text-size-adjust: none; text-size-adjust: none;">
	<table class="nl-container" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #c6c6c6;">
		<tbody>
			<tr>
				<td>
					<table class="row row-1" align="center" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #a6a6a6; background-size: auto;">
						<tbody>
							<tr>
								<td>
									<table class="row-content stack" align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #c6c5c5; background-image: url('https://d15k2d11r6t6rl.cloudfront.net/public/users/Integrators/BeeProAgency/1107273_1092741/editor_images/ffa1b1a9-1f2e-43f8-9f05-16ef3ef06094.jpg'); background-repeat: no-repeat; background-size: cover; border-radius: 0; color: #000000; width: 480.00px; margin: 0 auto;" width="480.00">
										<tbody>
											<tr>
												<td class="column column-1" width="100%" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; padding-top: 20px; vertical-align: top; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;">
													<table class="html_block block-1" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
														<tr>
															<td class="pad">
																<div style="font-family:'Merriweather', 'Georgia', serif;text-align:center;" align="center"></div>
															</td>
														</tr>
													</table>
													<table class="image_block block-2" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
														<tr>
															<td class="pad" style="padding-bottom:10px;padding-left:25px;padding-top:5px;width:100%;padding-right:0px;">
																<div class="alignment" align="left" style="line-height:10px">
																	<div style="max-width: 144px;"><img src="https://www.xyberixsolutions.com/assets/brand-logo.png" style="display: block; height: auto; border: 0; width: 100%;" width="144" alt="I'm an image" title="I'm an image"></div>
																</div>
															</td>
														</tr>
													</table>
													<table class="heading_block block-3" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
														<tr>
															<td class="pad" style="padding-bottom:10px;padding-left:10px;padding-right:10px;padding-top:15px;text-align:center;width:100%;">
																<h1 style="margin: 0; color: #787474; direction: ltr; font-family: 'Roboto Slab', Arial, 'Helvetica Neue', Helvetica, sans-serif; font-size: 26px; font-weight: 700; letter-spacing: 2px; line-height: 120%; text-align: center; margin-top: 0; margin-bottom: 0; mso-line-height-alt: 31.2px;"><span class="tinyMce-placeholder">Unlock Growth With Xyberix Solutions!</span></h1>
															</td>
														</tr>
													</table>
													<table class="heading_block block-4" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
														<tr>
															<td class="pad" style="padding-bottom:10px;padding-left:10px;padding-right:10px;padding-top:15px;text-align:center;width:100%;">
																<h3 style="margin: 0; color: #757272; direction: ltr; font-family: 'Roboto Slab', Arial, 'Helvetica Neue', Helvetica, sans-serif; font-size: 24px; font-weight: 500; letter-spacing: normal; line-height: 120%; text-align: center; margin-top: 0; margin-bottom: 0; mso-line-height-alt: 28.799999999999997px;"><span class="tinyMce-placeholder">Your Success Story Begins Here</span></h3>
															</td>
														</tr>
													</table>
													<table class="paragraph_block block-5" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;">
														<tr>
															<td class="pad" style="padding-bottom:20px;padding-left:30px;padding-right:30px;padding-top:20px;">
																<div style="color:#757272;direction:ltr;font-family:'Nunito', Arial, 'Helvetica Neue', Helvetica, sans-serif;font-size:12px;font-weight:400;letter-spacing:0px;line-height:150%;text-align:center;mso-line-height-alt:18px;">
																	<p style="margin: 0; margin-bottom: 0px;">CLICK BELOW to take your business to new heights with our range of digital services. We offer strategic digital transformation, expert website development, and effective marketing strategies tailored according to your business needs. Connect globally with our solutions and optimize performance for streamlined operations. Ready to boost your business? Partner with us and unlock the full potential of digital growth.</p>
																	<p style="margin: 0;">&nbsp;</p>
																</div>
															</td>
														</tr>
													</table>
													<table class="button_block block-6" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
														<tr>
															<td class="pad" style="text-align:center;">
																<div class="alignment" align="center"><!--[if mso]>
<v:roundrect xmlns:v="urn:schemas-microsoft-com:vml" xmlns:w="urn:schemas-microsoft-com:office:word" href="https://www.xyberixsolutions.com/contact/page" style="height:48px;width:171px;v-text-anchor:middle;" arcsize="80%" stroke="false" fillcolor="#4a4949">
<w:anchorlock/>
<v:textbox inset="0px,0px,0px,0px">
<center style="color:#ffffff; font-family:serif; font-size:19px">
<![endif]--><a href="https://www.xyberixsolutions.com/contact/page" target="_blank" style="text-decoration:none;display:inline-block;color:#ffffff;background-color:#4a4949;border-radius:38px;width:auto;border-top:0px solid transparent;font-weight:400;border-right:0px solid transparent;border-bottom:0px solid transparent;border-left:0px solid transparent;padding-top:5px;padding-bottom:5px;font-family:'Merriweather', 'Georgia', serif;font-size:19px;text-align:center;mso-border-alt:none;word-break:keep-all;"><span style="padding-left:20px;padding-right:20px;font-size:19px;display:inline-block;letter-spacing:normal;"><span style="word-break: break-word; line-height: 38px;">Reach Us Now</span></span></a><!--[if mso]></center></v:textbox></v:roundrect><![endif]--></div>
															</td>
														</tr>
													</table>
													<table class="social_block block-7" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
														<tr>
															<td class="pad" style="padding-bottom:25px;padding-left:10px;padding-right:10px;padding-top:40px;text-align:center;">
																<div class="alignment" align="center">
																	<table class="social-table" width="184px" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; display: inline-block;">
																		<tr>
																			<td style="padding:0 7px 0 7px;"><a href="https://www.facebook.com/people/Xyberix-Solutions/100094298805051/?mibextid=2JQ9oc" target="_blank"><img src="https://app-rsrc.getbee.io/public/resources/social-networks-icon-sets/circle-dark-gray/facebook@2x.png" width="32" height="32" alt="Facebook" title="facebook" style="display: block; height: auto; border: 0;"></a></td>
																			<td style="padding:0 7px 0 7px;"><a href="https://twitter.com/xyberixs?s=21&t=kXmOtLnYa844an74zFzhSA" target="_blank"><img src="https://app-rsrc.getbee.io/public/resources/social-networks-icon-sets/circle-dark-gray/twitter@2x.png" width="32" height="32" alt="Twitter" title="twitter" style="display: block; height: auto; border: 0;"></a></td>
																			<td style="padding:0 7px 0 7px;"><a href="https://www.linkedin.com/company/xyberixsolutions/" target="_blank"><img src="https://app-rsrc.getbee.io/public/resources/social-networks-icon-sets/circle-dark-gray/linkedin@2x.png" width="32" height="32" alt="Linkedin" title="linkedin" style="display: block; height: auto; border: 0;"></a></td>
																			<td style="padding:0 7px 0 7px;"><a href="https://www.instagram.com/xyberixsolutions/?igshid=MzRlODBiNWFlZA%3D%3D&__coig_restricted=1" target="_blank"><img src="https://app-rsrc.getbee.io/public/resources/social-networks-icon-sets/circle-dark-gray/instagram@2x.png" width="32" height="32" alt="Instagram" title="instagram" style="display: block; height: auto; border: 0;"></a></td>
																		</tr>
																	</table>
																</div>
															</td>
														</tr>
													</table>
													<table class="paragraph_block block-8" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;">
														<tr>
															<td class="pad" style="padding-bottom:30px;padding-left:10px;padding-right:10px;padding-top:30px;">
																<div style="color:#757272;font-family:'Merriweather', 'Georgia', serif;font-size:9px;font-weight:400;line-height:120%;text-align:center;mso-line-height-alt:10.799999999999999px;">
																	<p style="margin: 0; word-break: break-word;">ⓒ Copyright 2023 Xyberix Solution's (LLC). All rights reserved.</p>
																</div>
															</td>
														</tr>
													</table>
												</td>
											</tr>
										</tbody>
									</table>
								</td>
							</tr>
						</tbody>
					</table>
				</td>
			</tr>
		</tbody>
	</table><!-- End -->
</body>

</html>
HTML;

        DB::table('mail_templates')->insert([
            'subject' => 'Fire Up Your Success : Unlocking Growth Opportunities With Xyberix Solutions',
            'template' => $template1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

    }
}
