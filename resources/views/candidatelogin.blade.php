@extends('layout.logintheme')
@section('content')
<link href="https://www.day2daywholesale.com/_next/static/css/b71d463df487ea9c.css" rel="stylesheet" />
<link href="http://149.102.249.46/public/assets/css/login.css" rel="stylesheet" />
<body>
	<div class="w-screen h-screen overflow-y-scroll">
		<div class="w-full h-full flex">
			<div
				class="h-full w-1/2  hidden land:flex flex-col items-start p-10 justify-between" style="background-image: linear-gradient(133.03deg, #101D3B 3.21%, #97172D 100%);">
				<a href="/">
				<img src="{!! asset('public/loginimg/mainlogo.png') !!}" style="width: 24%;">
				</a>
				<div class="-mt-20 flex flex-col gap-5 w-[80%]">
					<!-- <div class="w-full flex gap-10 items-center">
						<div class="2xl:w-60 2xl:h-60 w-[40%] h-[100%] relative"><img alt="" sizes="100vw"
								
							src="{!! asset('public/img/logo.png') !!}"
								decoding="async" data-nimg="fill" class="object-cover" loading="lazy"
								style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
						</div>
						<div class="flex flex-col w-[54%] gap-4">
							<h2
								class="text-white font-bold w-full text-[24px] 2xl:text-[40px] font-primary mt-2 uppercase">
								Start your journey with us.</h2>
				
						</div>
					</div> -->
					<div class="row">
<div class="col-lg-12">
	<img alt="" sizes="100vw"
								
									
	src="{!! asset('public/img/hp.png') !!}"
								decoding="async" data-nimg="fill" class="object-cover" loading="lazy"
								style="margin-top:20px; margin-left:20% !important; width:90%; inset: 0px; color: transparent;">
</div>

					</div>
				</div>
				<div class="w-full flex">
					<p class="text-white">© Copyright <?php echo(date('Y'))?> Bizz World Communications. All rights reserved</p>
				</div>
			</div>
			<div
				class="w-full land:w-1/2 flex flex-col items-start px-10 py-10 pb-40 sm:pb-40 justify-between overflow-y-scroll">
				<div>
					<h2 class="text-[26px] font-bold text-primaryText font-primary mt-10" >Welcome to Bizz World Communications!</h2>
					<h2 class=" text-primaryText font-primary" style="line-height:30px;"><br>We would like to extend a warm welcome to you as you prepare to submit your job application form. We are thrilled that you have taken an interest in our organization and are excited to learn more about you.<br><br>

At <b>Bizz World Communications</b>, we are committed to creating a supportive and inclusive work environment where everyone can thrive. We believe that our employees are our most valuable asset and we are always looking for talented individuals who share our values and vision.<br><br>

We understand that the application process can be a bit daunting, but we assure you that we will review your application with care and consideration. We are looking for candidates who are passionate, motivated, and eager to make a positive impact in their roles.<br><br>

Thank you for considering <b>Bizz World Communications</b> as your potential employer. We look forward to reviewing your application and getting to know you better.</h2>
</div>


				
				<div class=" sm:w-[50%] 2xl:w-[40%] flex mt-10 justify-between items-center">				<a style="text-decoration:none;" href="{{URL('jobform')}}"><button
							class="w-44 h-12 disabled:cursor-not-allowed submit disabled:shadow-none flex items-center justify-center rounded-md  transition duration-100  text-sx font-primary font-semibold hover:shadow-lg  select-none"
							style="color: white; transform: none;    background-image: linear-gradient(133.03deg, #101D3B 3.21%, #97172D 100%);" type="submit" ><span>Apply Now</span></button></a>
					
					
					</div>
				<div></div>
			</div>
		</div>
	</div>

</body>

<script type="text/javascript">
	function viewPassword() {
		var passwordInput = document.getElementById('password-field');
		var passStatus = document.getElementById('pass-status');

		if (passwordInput.type == 'password') {
			passwordInput.type = 'text';
			passStatus.className = 'fa fa-fw fa-eye-slash field-icon toggle-password';

		}
		else {
			passwordInput.type = 'password';
			passStatus.className = 'fa fa-fw fa-eye field-icon toggle-password';
		}
	}
</script>
@endsection