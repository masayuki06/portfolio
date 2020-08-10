<?php get_header(); ?>


<?php 

	if (isset($_POST['user_sub'])) {
		

		$user_file = $_FILES["user_cv"]["tmp_name"];

		$job_pos = get_the_title();
		$job_loc = $_POST['job_loc'];
		$user_fname = $_POST['user_fname'];
		$user_lname = $_POST['user_lname'];
		$user_email = $_POST['user_email'];
		$user_mobile = $_POST['user_mobile'];
		$user_nationality = ucfirst($_POST['user_nationality']);
		$user_curr_location = $_POST['user_curr_location'];
		$user_bday = $_POST['user_bday'];
		$user_gender = $_POST['user_gender'];
		$user_qualification = $_POST['user_qualification'];
		$user_exp = $_POST['user_exp'];
		$user_employment = $_POST['user_employment'];

		$user_past_industry = $_POST['user_past_industry'];
		$user_past_title = $_POST['user_past_title'];
		$user_past_company = $_POST['user_past_company'];
		$user_past_since = $_POST['user_past_since'];
		$user_past_jcity = $_POST['user_past_jcity'];
		$user_past_notice = $_POST['user_past_notice'];
		$user_past_ctcannum = $_POST['user_past_ctcannum'];
		$user_past_ctcexpected = $_POST['user_past_ctcexpected'];
		$user_lang = ($_POST['user_past_lang'] != '' ? $_POST['user_past_lang'] : $_POST['user_lang'] );


		// Expected CTC: '.$user_past_ctcexpected.' <br>
		require 'PHPMailer-master/PHPMailerAutoload.php';

			$site_url = get_bloginfo('url');

			$b1 = '

			Applicant details:<br>
			==<br>
			Position location: '.$job_loc.' <br>
			Position applied:  '.$job_pos.' <br>
			First Name: '.$user_fname.' <br>
			Last Name: '.$user_lname.' <br>
			Email ID: '.$user_email.' <br>
			Mobile No: '.$user_mobile.' <br>
			Nationality: '.$user_nationality.' <br>
			Your Current Location: '.$user_curr_location.' <br>
			Birth Year: '.$user_bday.' <br>
			Gender (M/F): '.$user_gender.' <br>
			Highest Qualification:  '.$user_qualification.' <br>
			Total Experience (YY) (MM): '.$user_exp.' <br>
			Present Job Status: '.$user_employment.'
			 <br>

			';

			if ($user_employment != 'Fresh') {
				
				$b2 = '
				 <br>
				Past Job Experience <br>
				== <br>
				Industry: '.$user_past_industry.' <br>
				Job Title:  '.$user_past_title.' <br>
				Company name: '.$user_past_company.' <br>
				Employed since:  '.$user_past_since.' <br>
				Job City: '.$user_past_jcity.' <br>
				Notice Period:  '.$user_past_notice.' <br>
				CTC per Annum: '.$user_past_ctcannum.' <br>
				Main Language: '.$user_lang.' <br>


				';

			}else{

				$b2 = '';
			}

			$body= $b1.$b2;
			// print_r($body);
			
	        $mail = new PHPMailer;
	        $mail->From = 'customercare@maraphones.com'; 
	        $mail->FromName = 'Mara Phones';
	        $mail->addAddress('careers@maraphones.com');  // Add a recipient
	        $mail->addAttachment($user_file,$_FILES["user_cv"]["name"]);
	        $mail->Subject = 'Maraphones.com New applicant: '.$job_pos.' ';
	        $mail->Body = $body;
	        $mail->isHTML(true); // Set email format to HTML



	       if(!$mail->send()) {

		         echo 'Message could not be sent.';

		         echo 'Mailer Error: ' . $mail->ErrorInfo;

		         exit; 

		      }else{

		      	$my_post = array(
				  'post_title'    => $user_fname.' '.$user_lname.'('.$job_pos.')',
				  'post_status'   => 'publish',
				  'post_type'     => 'apply-db',
				  'post_content'  => $body,
				  'post_author'   => 1,
				);

				$confirm_post = wp_insert_post( $my_post );	


				update_field('job_title',$job_pos,$confirm_post);
				update_field('position_location',$job_loc,$confirm_post);
				update_field('applicant_first_name',$user_fname,$confirm_post);
				update_field('applicant_last_name',$user_lname,$confirm_post);
				update_field('applicant_email',$user_email,$confirm_post);
				update_field('applicant_mobile',$user_mobile,$confirm_post);
				update_field('applicant_nationality',$user_nationality,$confirm_post);
				update_field('applicant_current_location',$user_curr_location,$confirm_post);
				update_field('applicant_birth_year',$user_bday,$confirm_post);
				update_field('applicant_gender',$user_gender,$confirm_post);
				update_field('applicant_qualification',$user_qualification,$confirm_post);
				update_field('applicant_experience',$user_exp,$confirm_post);
				update_field('applicant_job_status',$user_employment,$confirm_post);
				update_field('main_language',$user_lang,$confirm_post);
				update_field('industry',$user_past_industry,$confirm_post);
				update_field('past_job_title',$user_past_title,$confirm_post);
				update_field('past_company_name',$user_past_company,$confirm_post);
				update_field('past_employed_since',$user_past_since,$confirm_post);
				update_field('past_job_city',$user_past_jcity,$confirm_post);
				update_field('past_notice_period',$user_past_notice,$confirm_post);
				update_field('ctc_per_annum',$user_past_ctcannum,$confirm_post);
				update_field('ctc_expected',$user_past_ctcexpected,$confirm_post);

				$file_temp_name = $confirm_post.'_'.$_FILES['user_cv']['name'];
				
				$up_file = wp_upload_bits($file_temp_name, null, file_get_contents($_FILES['user_cv']['tmp_name']));

				update_field('cv',$up_file['url'],$confirm_post);


				echo '<script type="text/javascript">window.location.href="'.bloginfo('url').'/sa/apply-thank-you/"</script>';

		      }
	}

 ?>
<section class="sub_header sub_header2">
	<div class="container">
		<div class="row">
			<div class="col-md-4 col-sm-4 left">
				<span>Mara Phones Careers</span>
			</div>

			<div class="col-md-8 col-sm-8 right">
				<!-- <ul>
					<li><a href="#">Features</a></li>
					<li><a href="x-specifications.html">Tech specs</a></li>
					<li><a href="#">Buy</a></li>
					<li><a href="#">Apps</a></li>
					<li><a href="accessories.html">Accessories</a></li>
				</ul> -->
			</div>
		</div>
	</div>
</section>

<section class="c_hero car_eer_head">
	<div class="container">
		<div class="row">
			<div class="col-md-12 intro">
				<h1>Careers</h1>
				<p>
					<span>View openings for</span>
					<a href="<?php bloginfo('url'); ?>/careers/?country=South Africa" >South Africa</a>
					<span class="cspace">|</span>
					<a href="<?php bloginfo('url'); ?>/careers/?country=Dubai"  >Dubai</a> 
				</p>
			</div>
		</div>
	</div>
</section>

<section class="career_apply">
	<div class="container">
		<div class="row">
			<div class="col-md-12 intro">
				<a href="JavaScript:Void(0)" onclick="window.history.back();" class="ca_back"><i class="fa fa-chevron-left"></i>GO BACK</a>
				<h2>Apply Now</h2>
			</div>
		</div>

		<div class="row">
			<div class="col-md-12">
				<div class="wrapper">
					<div class="item">
						<span>You are applying for:</span>
					    <h3><?php the_title(); ?></h3>
					</div>

					<div class="frm_wrapper">
						<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

						<script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/55764/jquery.maskedinput.min.js" ></script>

						<script>
							$(document).ready(function($) {
								$("input[name='user_exp']").mask("99 - 99");
								$("input[name='user_past_since']").mask("99 - 9999");


								
							})
							 // $jquery(function() {
							 //   $("input[name='user_exp[]']").mask("99/99/99");
							 // });
						</script>
						
						<form action="" method="POST" enctype="multipart/form-data" accept-charset="utf-8">	
							<div class="your_info">
								<h4>Your Information</h4>

								<input type="hidden" name="job_loc" value="<?php the_field('country'); ?>" >
								<fieldset class="half">
									<label>First Name<span>*</span></label>
									<input type="text" onkeypress="return alphaOnly(event)" name="user_fname" value="" required="">
								</fieldset>

								<fieldset class="half">
									<label>Last Name<span>*</span></label>
									<input type="text" onkeypress="return alphaOnly(event)" name="user_lname" value="" required>
								</fieldset>

								<fieldset class="half">
									<label>Email ID<span>*</span></label>
									<input type="email" name="user_email" value="" required>
								</fieldset>

								<fieldset class="half">
									<label>Mobile No<span>*</span></label>
									<input onkeypress="return isNumberKey(event)" type="text" id="phone" name="user_mobile" value="" placeholder="" required>
								</fieldset>

								<fieldset class="half">
									<label>Nationality<span>*</span></label>
									<select name="user_nationality" required>
										<option disabled="" selected="" value="">- Please select -</option>
										  <option value="south african">South African</option>
										  <option value="rwandan">Rwandan</option>
										  <option value="afghan">Afghan</option>
										  <option value="albanian">Albanian</option>
										  <option value="algerian">Algerian</option>
										  <option value="american">American</option>
										  <option value="andorran">Andorran</option>
										  <option value="angolan">Angolan</option>
										  <option value="antiguans">Antiguans</option>
										  <option value="argentinean">Argentinean</option>
										  <option value="armenian">Armenian</option>
										  <option value="australian">Australian</option>
										  <option value="austrian">Austrian</option>
										  <option value="azerbaijani">Azerbaijani</option>
										  <option value="bahamian">Bahamian</option>
										  <option value="bahraini">Bahraini</option>
										  <option value="bangladeshi">Bangladeshi</option>
										  <option value="barbadian">Barbadian</option>
										  <option value="barbudans">Barbudans</option>
										  <option value="batswana">Batswana</option>
										  <option value="belarusian">Belarusian</option>
										  <option value="belgian">Belgian</option>
										  <option value="belizean">Belizean</option>
										  <option value="beninese">Beninese</option>
										  <option value="bhutanese">Bhutanese</option>
										  <option value="bolivian">Bolivian</option>
										  <option value="bosnian">Bosnian</option>
										  <option value="brazilian">Brazilian</option>
										  <option value="british">British</option>
										  <option value="bruneian">Bruneian</option>
										  <option value="bulgarian">Bulgarian</option>
										  <option value="burkinabe">Burkinabe</option>
										  <option value="burmese">Burmese</option>
										  <option value="burundian">Burundian</option>
										  <option value="cambodian">Cambodian</option>
										  <option value="cameroonian">Cameroonian</option>
										  <option value="canadian">Canadian</option>
										  <option value="cape verdean">Cape Verdean</option>
										  <option value="central african">Central African</option>
										  <option value="chadian">Chadian</option>
										  <option value="chilean">Chilean</option>
										  <option value="chinese">Chinese</option>
										  <option value="colombian">Colombian</option>
										  <option value="comoran">Comoran</option>
										  <option value="congolese">Congolese</option>
										  <option value="costa rican">Costa Rican</option>
										  <option value="croatian">Croatian</option>
										  <option value="cuban">Cuban</option>
										  <option value="cypriot">Cypriot</option>
										  <option value="czech">Czech</option>
										  <option value="danish">Danish</option>
										  <option value="djibouti">Djibouti</option>
										  <option value="dominican">Dominican</option>
										  <option value="dutch">Dutch</option>
										  <option value="east timorese">East Timorese</option>
										  <option value="ecuadorean">Ecuadorean</option>
										  <option value="egyptian">Egyptian</option>
										  <option value="emirian">Emirian</option>
										  <option value="equatorial guinean">Equatorial Guinean</option>
										  <option value="eritrean">Eritrean</option>
										  <option value="estonian">Estonian</option>
										  <option value="ethiopian">Ethiopian</option>
										  <option value="fijian">Fijian</option>
										  <option value="filipino">Filipino</option>
										  <option value="finnish">Finnish</option>
										  <option value="french">French</option>
										  <option value="gabonese">Gabonese</option>
										  <option value="gambian">Gambian</option>
										  <option value="georgian">Georgian</option>
										  <option value="german">German</option>
										  <option value="ghanaian">Ghanaian</option>
										  <option value="greek">Greek</option>
										  <option value="grenadian">Grenadian</option>
										  <option value="guatemalan">Guatemalan</option>
										  <option value="guinea-bissauan">Guinea-Bissauan</option>
										  <option value="guinean">Guinean</option>
										  <option value="guyanese">Guyanese</option>
										  <option value="haitian">Haitian</option>
										  <option value="herzegovinian">Herzegovinian</option>
										  <option value="honduran">Honduran</option>
										  <option value="hungarian">Hungarian</option>
										  <option value="icelander">Icelander</option>
										  <option value="indian">Indian</option>
										  <option value="indonesian">Indonesian</option>
										  <option value="iranian">Iranian</option>
										  <option value="iraqi">Iraqi</option>
										  <option value="irish">Irish</option>
										  <option value="israeli">Israeli</option>
										  <option value="italian">Italian</option>
										  <option value="ivorian">Ivorian</option>
										  <option value="jamaican">Jamaican</option>
										  <option value="japanese">Japanese</option>
										  <option value="jordanian">Jordanian</option>
										  <option value="kazakhstani">Kazakhstani</option>
										  <option value="kenyan">Kenyan</option>
										  <option value="kittian and nevisian">Kittian and Nevisian</option>
										  <option value="kuwaiti">Kuwaiti</option>
										  <option value="kyrgyz">Kyrgyz</option>
										  <option value="laotian">Laotian</option>
										  <option value="latvian">Latvian</option>
										  <option value="lebanese">Lebanese</option>
										  <option value="liberian">Liberian</option>
										  <option value="libyan">Libyan</option>
										  <option value="liechtensteiner">Liechtensteiner</option>
										  <option value="lithuanian">Lithuanian</option>
										  <option value="luxembourger">Luxembourger</option>
										  <option value="macedonian">Macedonian</option>
										  <option value="malagasy">Malagasy</option>
										  <option value="malawian">Malawian</option>
										  <option value="malaysian">Malaysian</option>
										  <option value="maldivan">Maldivan</option>
										  <option value="malian">Malian</option>
										  <option value="maltese">Maltese</option>
										  <option value="marshallese">Marshallese</option>
										  <option value="mauritanian">Mauritanian</option>
										  <option value="mauritian">Mauritian</option>
										  <option value="mexican">Mexican</option>
										  <option value="micronesian">Micronesian</option>
										  <option value="moldovan">Moldovan</option>
										  <option value="monacan">Monacan</option>
										  <option value="mongolian">Mongolian</option>
										  <option value="moroccan">Moroccan</option>
										  <option value="mosotho">Mosotho</option>
										  <option value="motswana">Motswana</option>
										  <option value="mozambican">Mozambican</option>
										  <option value="namibian">Namibian</option>
										  <option value="nauruan">Nauruan</option>
										  <option value="nepalese">Nepalese</option>
										  <option value="new zealander">New Zealander</option>
										  <option value="ni-vanuatu">Ni-Vanuatu</option>
										  <option value="nicaraguan">Nicaraguan</option>
										  <option value="nigerien">Nigerien</option>
										  <option value="north korean">North Korean</option>
										  <option value="northern irish">Northern Irish</option>
										  <option value="norwegian">Norwegian</option>
										  <option value="omani">Omani</option>
										  <option value="pakistani">Pakistani</option>
										  <option value="palauan">Palauan</option>
										  <option value="panamanian">Panamanian</option>
										  <option value="papua new guinean">Papua New Guinean</option>
										  <option value="paraguayan">Paraguayan</option>
										  <option value="peruvian">Peruvian</option>
										  <option value="polish">Polish</option>
										  <option value="portuguese">Portuguese</option>
										  <option value="qatari">Qatari</option>
										  <option value="romanian">Romanian</option>
										  <option value="russian">Russian</option>
										  <option value="saint lucian">Saint Lucian</option>
										  <option value="salvadoran">Salvadoran</option>
										  <option value="samoan">Samoan</option>
										  <option value="san marinese">San Marinese</option>
										  <option value="sao tomean">Sao Tomean</option>
										  <option value="saudi">Saudi</option>
										  <option value="scottish">Scottish</option>
										  <option value="senegalese">Senegalese</option>
										  <option value="serbian">Serbian</option>
										  <option value="seychellois">Seychellois</option>
										  <option value="sierra leonean">Sierra Leonean</option>
										  <option value="singaporean">Singaporean</option>
										  <option value="slovakian">Slovakian</option>
										  <option value="slovenian">Slovenian</option>
										  <option value="solomon islander">Solomon Islander</option>
										  <option value="somali">Somali</option>
										  <option value="south korean">South Korean</option>
										  <option value="spanish">Spanish</option>
										  <option value="sri lankan">Sri Lankan</option>
										  <option value="sudanese">Sudanese</option>
										  <option value="surinamer">Surinamer</option>
										  <option value="swazi">Swazi</option>
										  <option value="swedish">Swedish</option>
										  <option value="swiss">Swiss</option>
										  <option value="syrian">Syrian</option>
										  <option value="taiwanese">Taiwanese</option>
										  <option value="tajik">Tajik</option>
										  <option value="tanzanian">Tanzanian</option>
										  <option value="thai">Thai</option>
										  <option value="togolese">Togolese</option>
										  <option value="tongan">Tongan</option>
										  <option value="trinidadian or tobagonian">Trinidadian or Tobagonian</option>
										  <option value="tunisian">Tunisian</option>
										  <option value="turkish">Turkish</option>
										  <option value="tuvaluan">Tuvaluan</option>
										  <option value="ugandan">Ugandan</option>
										  <option value="ukrainian">Ukrainian</option>
										  <option value="uruguayan">Uruguayan</option>
										  <option value="uzbekistani">Uzbekistani</option>
										  <option value="venezuelan">Venezuelan</option>
										  <option value="vietnamese">Vietnamese</option>
										  <option value="welsh">Welsh</option>
										  <option value="yemenite">Yemenite</option>
										  <option value="zambian">Zambian</option>
										  <option value="zimbabwean">Zimbabwean</option>
									</select>
								</fieldset>

								<fieldset class="half">
									<label>Your Current Location<span>*</span></label>
									<input type="text" onkeypress="return alphaOnly(event)" name="user_curr_location" value="" placeholder="" required>
								</fieldset>

								<fieldset class="half">
									<label>Birth Year<span>*</span></label>
									<select name="user_bday" required>
										<option disabled="" selected="" value="">- Please select -</option>
									    <option value="2010">2010</option>
									    <option value="2009">2009</option>
									    <option value="2008">2008</option>
									    <option value="2007">2007</option>
									    <option value="2006">2006</option>
									    <option value="2005">2005</option>
									    <option value="2004">2004</option>
									    <option value="2003">2003</option>
									    <option value="2002">2002</option>
									    <option value="2001">2001</option>
									    <option value="2000">2000</option>
									    <option value="1999">1999</option>
									    <option value="1998">1998</option>
									    <option value="1997">1997</option>
									    <option value="1996">1996</option>
									    <option value="1995">1995</option>
									    <option value="1994">1994</option>
									    <option value="1993">1993</option>
									    <option value="1992">1992</option>
									    <option value="1991">1991</option>
									    <option value="1990">1990</option>
									    <option value="1989">1989</option>
									    <option value="1988">1988</option>
									    <option value="1987">1987</option>
									    <option value="1986">1986</option>
									    <option value="1985">1985</option>
									    <option value="1984">1984</option>
									    <option value="1983">1983</option>
									    <option value="1982">1982</option>
									    <option value="1981">1981</option>
									    <option value="1980">1980</option>
									    <option value="1979">1979</option>
									    <option value="1978">1978</option>
									    <option value="1977">1977</option>
									    <option value="1976">1976</option>
									    <option value="1975">1975</option>
									    <option value="1974">1974</option>
									    <option value="1973">1973</option>
									    <option value="1972">1972</option>
									    <option value="1971">1971</option>
									    <option value="1970">1970</option>
									    <option value="1969">1969</option>
									    <option value="1968">1968</option>
									    <option value="1967">1967</option>
									    <option value="1966">1966</option>
									    <option value="1965">1965</option>
									    <option value="1964">1964</option>
									    <option value="1963">1963</option>
									    <option value="1962">1962</option>
									    <option value="1961">1961</option>
									    <option value="1960">1960</option>
									    <option value="1959">1959</option>
									    <option value="1958">1958</option>
									    <option value="1957">1957</option>
									    <option value="1956">1956</option>
									    <option value="1955">1955</option>
									    <option value="1954">1954</option>
									    <option value="1953">1953</option>
									    <option value="1952">1952</option>
									    <option value="1951">1951</option>
									    <option value="1950">1950</option>
									    <option value="1949">1949</option>
									    <option value="1948">1948</option>
									    <option value="1947">1947</option>
									    <option value="1946">1946</option>
									    <option value="1945">1945</option>
									    <option value="1944">1944</option>
									    <option value="1943">1943</option>
									    <option value="1942">1942</option>
									    <option value="1941">1941</option>
									    <option value="1940">1940</option>
									    <option value="1939">1939</option>
									    <option value="1938">1938</option>
									    <option value="1937">1937</option>
									    <option value="1936">1936</option>
									    <option value="1935">1935</option>
									    <option value="1934">1934</option>
									    <option value="1933">1933</option>
									    <option value="1932">1932</option>
									    <option value="1931">1931</option>
									    <option value="1930">1930</option>
									    <option value="1929">1929</option>
									    <option value="1928">1928</option>
									    <option value="1927">1927</option>
									    <option value="1926">1926</option>
									    <option value="1925">1925</option>
									    <option value="1924">1924</option>
									    <option value="1923">1923</option>
									    <option value="1922">1922</option>
									    <option value="1921">1921</option>
									    <option value="1920">1920</option>
									    <option value="1919">1919</option>
									    <option value="1918">1918</option>
									    <option value="1917">1917</option>
									    <option value="1916">1916</option>
									    <option value="1915">1915</option>
									    <option value="1914">1914</option>
									    <option value="1913">1913</option>
									    <option value="1912">1912</option>
									    <option value="1911">1911</option>
									    <option value="1910">1910</option>
									    <option value="1909">1909</option>
									    <option value="1908">1908</option>
									    <option value="1907">1907</option>
									    <option value="1906">1906</option>
									    <option value="1905">1905</option>
									</select>
								</fieldset>

								<fieldset class="half">
									<label>Gender (M/F)<span>*</span></label>
									<select name="user_gender" required="">
										<option disabled="" selected="" value="">- Please select -</option>
										<option value="Male">Male</option>
										<option value="Female">Female</option>
									</select>
								</fieldset>

								<fieldset class="half">
									<label>Highest Qualification<span>*</span></label>
									<select name="user_qualification" required>
										<option disabled="" selected="" value="">- Please select -</option>
										<option value="School">School</option>
										<option value="High School">High School</option>
										<option value="Diploma">Diploma</option>
										<option value="Bachelor Degree">Bachelor Degree</option>
										<option value="Masters Degree">Masters Degree</option>
										<option value="PHD">PHD</option>
									</select>
								</fieldset>

								<fieldset class="half">
									<label>Total Experience (YY) – (MM)<span>*</span></label>
									<input name="user_exp" required="" onkeypress="return isNumberKey(event)" type="text" value="">
								</fieldset>

								<fieldset class="half">
									<label>Present Job Status<span>*</span></label>
									<select name="user_employment" id="u_employment" required >
										<option disabled="" selected="" value="">- Please select -</option>
										<option value="Employed">Employed</option>
										<option value="Unemployed">Unemployed</option>
										<option value="Fresh">Fresh </option>
									</select>
								</fieldset>

								<fieldset class="half fresh_lang" id="other_lang" style="display: none;">
									<label>Main Language<span>*</span></label>
									<select required="" name="user_main_lang" >
										<option disabled="" selected="" value="">- Please select -</option>
										<option value="">English</option>
										<option value="">French</option>
										<option value="">Arabic</option>
										<option value="">Portuguese</option>
									</select>
								</fieldset>
							</div>	

							<div class="past_job" style="display: none;">
								<h4 id="h_change">Past Job Experience</h4>

								<fieldset class="half">
									<label>Industry<span>*</span></label>
									<select name="user_past_industry" required="" >
										<option disabled="" selected="" value="">- Please select -</option>
										<option  value="Accounting / Finance">Accounting / Finance</option>
										<option  value="Administrative / Clerical / Support">Administrative / Clerical / Support</option>
										<option  value="Advertising / Personal Relation">Advertising / Personal Relation</option>
										<option  value="Airlines / Avionics / Aerospace">Airlines / Avionics / Aerospace</option>
										<option  value="Architectural and Interior Design">Architectural and Interior Design</option>
										<option  value="Arts / Entertainment">Arts / Entertainment</option>
										<option  value="Automotive">Automotive</option>
										<option  value="Banking">Banking</option>
										<option  value="Biotech">Biotech</option>
										<option  value="Broadcast / Journalism">Broadcast / Journalism</option>
										<option  value="Business Development - Mobile">Business Development - Mobile</option>
										<option  value="Business Development - IT Devices/Electronics">Business Development - IT Devices/Electronics</option>
										<option  value="Business Development - Others">Business Development - Others</option>
										<option  value="Construction">Construction</option>
										<option  value="Consultant">Consultant</option>
										<option  value="Customer Services / Call Centre">Customer Services / Call Centre</option>
										<option  value="Defence">Defence</option>
										<option  value="Distribution">Distribution</option>
										<option  value="Editorial / Content Writing">Editorial / Content Writing</option>
										<option  value="Education / Training / Academia">Education / Training / Academia</option>
										<option  value="Engineering – Aerospace and Aeronautical">Engineering – Aerospace and Aeronautical</option>
										<option  value="Engineering – Agricultural">Engineering – Agricultural</option>
										<option  value="Engineering – Automotive">Engineering – Automotive</option>
										<option  value="Engineering – Biological">Engineering – Biological</option>
										<option  value="Engineering – Biomechanical">Engineering – Biomechanical</option>
										<option  value="Engineering – Biomedical">Engineering – Biomedical</option>
										<option  value="Engineering – Chemical">Engineering – Chemical</option>
										<option  value="Engineering – Civil">Engineering – Civil</option>
										<option  value="Engineering – Computer">Engineering – Computer</option>
										<option  value="Engineering – Electrical">Engineering – Electrical</option>
										<option  value="Engineering – Electromechanical">Engineering – Electromechanical</option>
										<option  value="Engineering – Electronic">Engineering – Electronic</option>
										<option  value="Engineering – Geotechnical">Engineering – Geotechnical</option>
										<option  value="Engineering – Mechanical">Engineering – Mechanical</option>
										<option  value="Engineering – Telecommunication">Engineering – Telecommunication</option>
										<option  value="Event Management">Event Management</option>
										<option  value="Fashion and Textile">Fashion and Textile</option>
										<option  value="Freelance">Freelance</option>
										<option  value="Fund Raising">Fund Raising</option>
										<option  value="General Labor">General Labor</option>
										<option  value="Government / Ministry">Government / Ministry</option>
										<option  value="Green Jobs">Green Jobs</option>
										<option  value="Health Care / Medical">Health Care / Medical</option>
										<option  value="Hospitality">Hospitality</option>
										<option  value="Human Resource - Manufacturing">Human Resource - Manufacturing</option>
										<option  value="Human Resource - Others">Human Resource - Others</option>
										<option  value="Information Technology">Information Technology</option>
										<option  value="Internships / Trainees">Internships / Trainees</option>
										<option  value="Legal and Corporate Affairs">Legal and Corporate Affairs</option>
										<option  value="Maintenance & Repair - Manufacturing">Maintenance & Repair - Manufacturing</option>
										<option  value="Maintenance & Repair - Others">Maintenance & Repair - Others</option>
										<option  value="Management / Consulting">Management / Consulting</option>
										<option  value="Manufacturing - Mobile">Manufacturing - Mobile</option>
										<option  value="Manufacturing - Electronics">Manufacturing - Electronics</option>
										<option  value="Manufacturing - Others">Manufacturing - Others</option>
										<option  value="Marketing">Marketing</option>
										<option  value="Material">Material</option>
										<option  value="Media">Media</option>
										<option  value="Mining / Oil and Gas">Mining / Oil and Gas</option>
										<option  value="Non Profit / NGO / Volunteer">Non Profit / NGO / Volunteer</option>
										<option  value="Operations">Operations</option>
										<option  value="Other Jobs">Other Jobs</option>
										<option  value="Pharmaceutical">Pharmaceutical</option>
										<option  value="Procurement and Supply Chain">Procurement and Supply Chain</option>
										<option  value="Publishing">Publishing</option>
										<option  value="Real Estate">Real Estate</option>
										<option  value="Research & Development - Mobile">Research & Development - Mobile</option>
										<option  value="Research & Development - Electronics">Research & Development - Electronics</option>
										<option  value="Research & Development - Others">Research & Development - Others</option>
										<option  value="Restaurant / Food Services / Catering">Restaurant / Food Services / Catering</option>
										<option  value="Retail">Retail</option>
										<option  value="Sales - Mobile">Sales - Mobile</option>
										<option  value="Sales - IT Devices/Electronics">Sales - IT Devices/Electronics</option>
										<option  value="Sales - Other">Sales - Other</option>
										<option  value="Security and Law Enforcement">Security and Law Enforcement</option>
										<option  value="Shipping and Maritime">Shipping and Maritime</option>
										<option  value="Sports">Sports</option>
										<option  value="Strategic Management">Strategic Management</option>
										<option  value="Technology">Technology</option>
										<option  value="Telecommunication">Telecommunication</option>
										<option  value="Transportation / Logistics">Transportation / Logistics</option>
										<option  value="Travel and Tourism">Travel and Tourism</option>
										<option  value="Veterans">Veterans</option>
										<option  value="Web Development / Graphic Designing">Web Development / Graphic Designing</option>
									</select>
								</fieldset>

								<fieldset class="half">
									<label>Job Title<span>*</span></label>
									<input onkeypress="return alphaOnly(event)" type="text" required=""  name="user_past_title" value="" placeholder="">
								</fieldset>

								<fieldset class="half">
									<label>Name of The Company<span>*</span></label>
									<input type="text" required=""  onkeypress="return alphaOnly(event)" name="user_past_company" value="" placeholder="">
								</fieldset>

								<fieldset class="half">
									<label>Since (MM – YYYY)<span>*</span></label>
									<input onkeypress="return isNumberKey(event)" type="text" type="text" required=""  name="user_past_since" value="" placeholder="">
								</fieldset>

								<fieldset class="half">
									<label>Job City<span>*</span></label>
									<input onkeypress="return alphaOnly(event)" type="text" required=""  name="user_past_jcity" value="" placeholder="">
								</fieldset>

								<fieldset class="half">
									<label>Notice Period<span>*</span></label>
									<select required=""  name="user_past_notice">
									<option value="">- Please select - </option>
									<option value="Immediate">Immediate</option>
									<option value="0 - 15 days">0 - 15 days</option>
									<option value="30 days">30 days</option>
									<option value="45 days">45 days</option>
									<option value="60+ days">60+ days</option>
									</select>
								</fieldset>

								<fieldset class="half">
									<label>CTC per Annum(In USD)<span>*</span></label>
									<input required=""  onkeypress="return isNumberKey(event)" type="text" name="user_past_ctcannum" value="" placeholder="">
								</fieldset>

								<!-- <fieldset class="half">
									<label>Expected CTC(In USD)<span>*</span></label>
									<input required=""  onkeypress="return isNumberKey(event)" type="text" name="user_past_ctcexpected" value="" placeholder="">
								</fieldset>
 -->
								<fieldset class="half">
									<label>Main Language<span>*</span></label>
									<select required=""  name="user_past_lang" >
										<option disabled="" selected="" value="">- Please select -</option>
										<option value="English">English</option>
										<option value="French">French</option>
										<option value="Arabic">Arabic</option>
										<option value="Portuguese">Portuguese</option>
									</select>
								</fieldset>
							</div>

							<div class="ca_btn">
								<fieldset class="c_full">
									<div class="c-file-upload">
									    <div class="cf_uploader file-select-button" id="fileName">
									    	Upload Your CV <span>(PDF)</span>
									    	<img src="<?php echo get_template_directory_uri(); ?>/assets/img/ico-upload.png" alt="">
									    	 <div class="file-select-name" id="cnoFile"></div> 
									    </div> 
									   
									    <!-- [file* file-814 filetypes:pdf] -->
									    <input type="file" name="user_cv" class="wpcf7-file " required="">
									</div>
								</fieldset>

								<fieldset class="sub_mit">
									<input type="submit" value="SUBMIT YOUR APPLICATION" name="user_sub">
								</fieldset>
							</div>
						</form>
					</div>
					
					<div class="note">
						<p>Note: We only review the CVs uploaded through the Application form. CVs submitted through other channels may not be reviewed by HR.</p>	
					</div>	
				</div>
			</div>
		</div>
	</div>
</section>

<?php get_footer();?>
