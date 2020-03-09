<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>GTD Team</title>
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="">

	<!-- Font Awesome if you need it
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
  -->
	<link rel="stylesheet" href="https://unpkg.com/tailwindcss/dist/tailwind.min.css">
	<!--Replace with your tailwind.css once created-->

	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700" rel="stylesheet">

	<!-- Define your gradient here - use online tools to find a gradient matching your branding-->
	<style>
		.gradient {
			background: linear-gradient(90deg, #81F781 0%, #BF00FF 100%);
		}

		.logo {
			width: 40px;
		}

		.card {
			box-shadow: 5px 5px 5px grey;

		}

		img {
			width: auto;
			height: auto;
		}

		.p-6 {
			padding: 3rem;
		}

		h4 {}

		b {
			padding-left: 20px;
			color: black;
		}

		p {
			padding-left: 20px;
			color: black;
		}
	</style>

</head>

<body class="leading-normal tracking-normal text-white gradient" style="font-family: 'Source Sans Pro', sans-serif;">

	<!--Nav-->
	<nav id="header" class="fixed w-full z-30 top-0 text-white">

		<div class="w-full container mx-auto flex flex-wrap items-center justify-between mt-0 py-0">

			<div class="pl-4 flex items-center">
				<a class="toggleColour text-white no-underline hover:no-underline font-bold text-2xl lg:text-4xl"
					href="#">
					<div class="container">
						<div class="logo">
							<img src= "https://upload.wikimedia.org/wikipedia/commons/thumb/c/cc/Gtd_logo_2019.svg/768px-Gtd_logo_2019.svg.png"
								alt="">
						</div>
					</div>

				</a>
			</div>

			<div class="block lg:hidden pr-4">
				<button id="nav-toggle" class="flex items-center p-1 text-orange-800 hover:text-gray-900">
					<svg class="fill-current h-6 w-6" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
						<title>Menu</title>
						<path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
					</svg>
				</button>
			</div>

			<div class="w-full flex-grow lg:flex lg:items-center lg:w-auto hidden lg:block mt-2 lg:mt-0 bg-white lg:bg-transparent text-black p-4 lg:p-0 z-20"
				id="nav-content">
				<ul class="list-reset lg:flex justify-end flex-1 items-center">
					<li class="mr-3">
						<a class="inline-block py-2 px-4 text-black font-bold no-underline" href="#">HOME</a>
					</li>
					<li class="mr-3">
						<a class="inline-block text-black no-underline hover:text-gray-800 hover:text-underline py-2 px-4"
							href="#About">ABOUT</a>
					</li>
					<li class="mr-3">
						<a class="inline-block text-black no-underline hover:text-gray-800 hover:text-underline py-2 px-4"
							href="#service">SERVICE</a>
					</li>
					<li class="mr-3">
						<a class="inline-block text-black no-underline hover:text-gray-800 hover:text-underline py-2 px-4"
							href="#teammate">TEAMMATE</a>
					</li>

				</ul>
				<button id="navAction"
					class="mx-auto lg:mx-0 hover:underline bg-white text-gray-800 font-bold rounded-full mt-4 lg:mt-0 py-4 px-8 shadow opacity-75">Contact
					Us</button>
			</div>
		</div>

		<hr class="border-b border-gray-100 opacity-25 my-0 py-0" />
	</nav>




	<!--Hero-->
	<div class="pt-24">

		<div class="container px-3 mx-auto flex flex-wrap flex-col md:flex-row items-center">
			<!--Left Col-->
			<div class="flex flex-col w-full md:w-2/5 justify-center items-start text-center md:text-left">
				<p class="uppercase tracking-loose w-full">what is GTD?</p>
				<h1 class="my-4 text-5xl font-bold leading-tight">Get Things Done!</h1>
				<p class="leading-normal text-2xl mb-8"> </p>



				<button
					class="mx-auto lg:mx-0 hover:underline bg-white text-gray-800 font-bold rounded-full my-6 py-4 px-8 shadow-lg">Subscribe</button>

			</div>
			<!--Right Col-->
			<div class="w-full md:w-3/5 py-6 text-center">
				<img class="w-full md:w-4/5 z-50" src="{{ asset('image/hero.png') }}">
			</div>

		</div>

	</div>




	<section class="bg-white border-b py-8" id="About">
		<div class="container max-w-5xl mx-auto m-8">
			<h1 class="w-full my-2 text-5xl font-bold leading-tight text-center text-gray-800">About</h1>
			<div class="w-full mb-4">
				<div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
			</div>

			<div class="flex flex-wrap">
				<div class="w-5/6 sm:w-1/2 p-6">
					<h3 class="text-3xl text-gray-800 font-bold leading-none mb-3">Thiết kế website chuyên nghiệp</h3>
					<p class="text-gray-600 mb-8">Đội ngũ thiết kế giàu kinh nghiệm, mang đến bản thiết kế giao diện web
						chuyên nghiệp, sáng tạo, với thiết kế phẳng theo phong cách mới. Thiết kế web UI & UX giúp
						website của bạn tạo ra những trải nghiệm và tương tác tốt với khách hàng. <br>
						<br /><br />
				</div>
				<div class="w-full sm:w-1/2 p-6">
					<div>
						<img src="{{asset('image/deluxe.png')}}" alt="" width="100%">
					</div>
				</div>
			</div>


			<div class="flex flex-wrap flex-col-reverse sm:flex-row">
				<div class="w-full sm:w-1/2 p-6 mt-6">
					<img src="{{asset('image/undraw_develop_app_kvt2.png')}}" alt="" width="100%">
				</div>
				<div class="w-full sm:w-1/2 p-6 mt-6">
					<div class="align-middle">
						<h3 class="text-3xl text-gray-800 font-bold leading-none mb-3">Tương thích với thiết bị di động
						</h3>
						<p class="text-gray-600 mb-8">Công nghệ thiết kế web responsive sẽ giúp giao diện web chạy trên
							mọi thiết bị di động. Mobile Friendly website xu hướng phát triển web trên toàn thế giới,
							đây là tiêu chí đánh giá của Google giúp website cải thiện tốt hơn trên Google
							rank.<br /><br />
						</p>
					</div>
				</div>

			</div>
			<div class="flex flex-wrap">
				<div class="w-full sm:w-1/2 p-6 mt-6">
					<div class="align-middle">
						<h3 class="text-3xl text-gray-800 font-bold leading-none mb-3">Website không chỉ là nơi bán hàng
							mà còn là nơi làm việc</h3>
						<p class="text-gray-600 mb-8"><br /><br />
						</p>
					</div>
				</div>
				<div class="w-full sm:w-1/2 p-6 mt-6">
					<img src="{{ asset('image/undraw_meet_the_team_e5b7.png') }}" alt="" width="100%">
				</div>

			</div>
		</div>
	</section>

	<section class="bg-gray-100 py-8" id="service">



		<div class="container mx-auto px-2 pt-4 pb-12 text-gray-800">

			<h1 class="w-full my-2 text-5xl font-bold leading-tight text-center text-gray-800">SERVICE</h1>
			<div class="w-full mb-4">
				<div class="text-center">GTD team chuyên nhận thiết kế, xây dựng website </div>
			</div>



			<div class="flex flex-wrap sm:flex-row justify-center pt-12 my-12 sm:my-4">
				<div class="w-1/3 p-2">
					<div class="text-gray text-center bg-gray-400 p-2 py-8">Thương mại điện tử</div>
				</div>
				<div class="w-1/3 p-2">
					<div class="text-gray text-center bg-gray-400 p-2 py-8">Bất động sản, nhà đất</div>
				</div>
				<div class="w-1/3 p-2">
					<div class="text-gray text-center bg-gray-400 p-2 py-8">Khách sạn</div>
				</div>
				<div class="w-1/3 p-2">
					<div class="text-gray text-center bg-gray-400 p-2 py-8">Kiến trúc, nội thất, xây dựng</div>
				</div>
				<div class="w-1/3 p-2">
					<div class="text-gray text-center bg-gray-400 p-2 py-8">Web bán vé máy bay</div>
				</div>
				<div class="w-1/3 p-2">
					<div class="text-gray text-center bg-gray-400 p-2 py-8">Nghệ sỹ, ca sĩ, cá nhân</div>
				</div>
				<div class="w-1/3 p-2">
					<div class="text-gray text-center bg-gray-400 p-2 py-8">Nhà hàng, quán cafe, quán ăn</div>
				</div>
				<div class="w-1/3 p-2">
					<div class="text-gray text-center bg-gray-400 p-2 py-8">Du lịch, travel</div>
				</div>
				<div class="w-1/3 p-2">
					<div class="text-gray text-center bg-gray-400 p-2 py-8">Giáo dục, đào tạo, trường học</div>
				</div>
				<div class="w-1/3 p-2">
					<div class="text-gray text-center bg-gray-400 p-2 py-8">Thời trang, may mặc</div>
				</div>
				<div class="w-1/3 p-2">
					<div class="text-gray text-center bg-gray-400 p-2 py-8">Tin tức, tạp chí online</div>
				</div>
				<div class="w-1/3 p-2">
					<div class="text-gray text-center bg-gray-400 p-2 py-8">Nghệ thuật, Mỹ thuật</div>
				</div>

			</div>

		</div>


	</section>


	<section class="bg-white border-b py-8" id="teammate">

		<div class="container mx-auto flex flex-wrap pt-4 pb-12">

			<h1 class="w-full my-2 text-5xl font-bold leading-tight text-center text-gray-800">TEAMMATE</h1>
			<div class="w-full mb-4">
				<div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
			</div>

			<div class="w-full md:w-1/3 p-6 flex flex-col flex-grow flex-shrink">
				<div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow">
					<div class="card">
						<img src="{{ asset('image/img_avatar.png') }}" alt="" width="100%">
						<div>
							<h4><b>Cao Minh Duc</b></h4>
							<p>Leader</p>
							<p>Developer</p>
							<p>Laravel Certificate</p>
						</div>
					</div>
				</div>

			</div>



			<div class="w-full md:w-1/3 p-6 flex flex-col flex-grow flex-shrink">
				<div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow">
					<div class="card">
						<img src="{{ asset('image/img_avatar.png') }}" alt="" width="100%">
						<div>
							<h4><b>Le Huy Thai</b></h4>
							<p>Developer</p>
						</div>
					</div>
				</div>
			</div>



			<div class="w-full md:w-1/3 p-6 flex flex-col flex-grow flex-shrink">
				<div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow">
					<div class="card">
						<img src="{{ asset('image/img_avatar.png') }}" alt="" width="100%">
						<div>
							<h4><b>Le Manh Hung</b></h4>
							<p>Developer</p>
						</div>
					</div>
				</div>
			</div>


		</div>

	</section>





	<!-- Change the colour #f8fafc to match the previous section colour -->


	<section class="container mx-auto text-center py-6 mb-12">

		<h1 class="w-full my-2 text-5xl font-bold leading-tight text-center text-white">Contact Us!</h1>
		<div class="w-full mb-4">
			<div class="h-1 mx-auto bg-white w-1/6 opacity-25 my-0 py-0 rounded-t"></div>
		</div>

		<a href="https://www.facebook.com/ko.ten.2571997" target="_blank">Messenger!</a>


	</section>


	<!--Footer-->
	<footer class="bg-white">
		<div class="container mx-auto  px-8">

			<div class="w-full flex flex-col md:flex-row py-6">




			</div>
			<div>
				<p class="uppercase text-gray-500 md:mb-6">Links</p>
				<ul class="list-reset mb-6">
					<li class="mt-2 inline-block mr-2 md:block md:mr-0">
						<a href="#" class="no-underline hover:underline text-gray-800 hover:text-orange-500">Contact</a>
					</li>
					<li class="mt-2 inline-block mr-2 md:block md:mr-0">
						<a href="#" class="no-underline hover:underline text-gray-800 hover:text-orange-500">Help</a>
					</li>
					<li class="mt-2 inline-block mr-2 md:block md:mr-0">
						<a href="#" class="no-underline hover:underline text-gray-800 hover:text-orange-500">Support</a>
					</li>
				</ul>
			</div>
		</div>

		<a href="https://www.freepik.com/free-photos-vectors/background" class="text-gray-500">Hung</a>

	</footer>

	<script>
		var scrollpos = window.scrollY;
		var header = document.getElementById("header");
		var navcontent = document.getElementById("nav-content");
		var navaction = document.getElementById("navAction");
		var brandname = document.getElementById("brandname");
		var toToggle = document.querySelectorAll(".toggleColour");

		document.addEventListener('scroll', function () {

			/*Apply classes for slide in bar*/
			scrollpos = window.scrollY;

			if (scrollpos > 10) {
				header.classList.add("bg-white");
				navaction.classList.remove("bg-white");
				navaction.classList.add("gradient");
				navaction.classList.remove("text-gray-800");
				navaction.classList.add("text-white");
				//Use to switch toggleColour colours
				for (var i = 0; i < toToggle.length; i++) {
					toToggle[i].classList.add("text-gray-800");
					toToggle[i].classList.remove("text-white");
				}
				header.classList.add("shadow");
				navcontent.classList.remove("bg-gray-100");
				navcontent.classList.add("bg-white");
			} else {
				header.classList.remove("bg-white");
				navaction.classList.remove("gradient");
				navaction.classList.add("bg-white");
				navaction.classList.remove("text-white");
				navaction.classList.add("text-gray-800");
				//Use to switch toggleColour colours
				for (var i = 0; i < toToggle.length; i++) {
					toToggle[i].classList.add("text-white");
					toToggle[i].classList.remove("text-gray-800");
				}

				header.classList.remove("shadow");
				navcontent.classList.remove("bg-white");
				navcontent.classList.add("bg-gray-100");

			}

		});
	</script>

	<script>
		/*Toggle dropdown list*/
		/*https://gist.github.com/slavapas/593e8e50cf4cc16ac972afcbad4f70c8*/

		var navMenuDiv = document.getElementById("nav-content");
		var navMenu = document.getElementById("nav-toggle");

		document.onclick = check;

		function check(e) {
			var target = (e && e.target) || (event && event.srcElement);

			//Nav Menu
			if (!checkParent(target, navMenuDiv)) {
				// click NOT on the menu
				if (checkParent(target, navMenu)) {
					// click on the link
					if (navMenuDiv.classList.contains("hidden")) {
						navMenuDiv.classList.remove("hidden");
					} else {
						navMenuDiv.classList.add("hidden");
					}
				} else {
					// click both outside link and outside menu, hide menu
					navMenuDiv.classList.add("hidden");
				}
			}

		}

		function checkParent(t, elm) {
			while (t.parentNode) {
				if (t == elm) {
					return true;
				}
				t = t.parentNode;
			}
			return false;
		}
	</script>


</body>

</html>