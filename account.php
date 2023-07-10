<?php include 'src/inc/head.php' ?>

<body>

	<?php include 'src/inc/nav.php' ?>
	<main class="relative overflow-hidden">
		<section class="py-24">
			<div class="container relative">
				<div class="spotlight"></div>
				<h1 class="text-6xl accent-color-gradient animate-reveal">
					Account
				</h1>
			</div>
		</section>

		<section class="py-24 border-b border-slate-800">
			<div class="container">


				<h2 class="mb-8 text-4xl">
					Your Information, Username
				</h2>

				<div class="flex items-start gap-16">
					<div class="flex flex-col gap-16 basis-1/2">
						<div x-data="{ password: false }" class="border border-slate-800">
							<div class="flex border-b border-slate-800">
								<div class="p-4 grow">
									<h3 class="text-2xl">Password</h3>
									<span class="text-gray-400 ">We recommend updating your password periodically to prevent unauthorized access.</span>
								</div>
								<div>
									<button @click="password = !false" :class="{'hidden': password, 'block':!password }" type="button" class="flex items-center text-xs uppercase hover:text-amber-300">
										update
										<div class="flex items-center justify-center w-6 h-6 ml-2 rounded-bl-lg bg-slate-800">
											<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
												<path stroke-linecap="round" stroke-linejoin="round" d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0l3.181 3.183a8.25 8.25 0 0013.803-3.7M4.031 9.865a8.25 8.25 0 0113.803-3.7l3.181 3.182m0-4.991v4.99" />
											</svg>
										</div>
									</button>
									<button x-cloak @click="password = false" :class="{'hidden': !password, 'block':password }" type="button" class="flex items-center text-xs uppercase hover:text-amber-300">
										cancel
										<div class="flex items-center justify-center w-6 h-6 ml-2 rounded-bl-lg bg-slate-800">
											<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
												<path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
											</svg>
										</div>
									</button>
								</div>
							</div>
							<div x-show="!password" class="p-4">
								Last updated 19.12.2022
							</div>
							<div x-cloak x-show="password" class="p-4">
								<form class="" x-data x-ajax id="login" method="post" action="" novalidate>

									<div class="py-2" x-data="{ show: true }">
										<label for="oldpassword" class="text-sm text-slate-300">Old Password</label>
										<div class="relative">
											<input placeholder="" :type="show ? 'password' : 'text'" id="oldpassword" class="block w-full px-3 py-2 bg-black border-2 rounded-lg placeholder-slate-600 border-slate-800 text-md focus:placeholder-slate-500 focus:border-slate-500 focus:outline-none">
											<div class="absolute inset-y-0 right-0 flex items-center pr-3 text-sm leading-5">
												<svg x-cloak xmlns="http://www.w3.org/2000/svg" fill="none" @click="show = !show" :class="{'hidden': !show, 'block':show }" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 cursor-pointer stroke-slate-300">
													<path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
													<path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
												</svg>
												<svg x-cloak xmlns="http://www.w3.org/2000/svg" fill="none" @click="show = !show" :class="{'block': !show, 'hidden':show }" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 cursor-pointer stroke-gray-300">
													<path stroke-linecap="round" stroke-linejoin="round" d="M3.98 8.223A10.477 10.477 0 001.934 12C3.226 16.338 7.244 19.5 12 19.5c.993 0 1.953-.138 2.863-.395M6.228 6.228A10.45 10.45 0 0112 4.5c4.756 0 8.773 3.162 10.065 7.498a10.523 10.523 0 01-4.293 5.774M6.228 6.228L3 3m3.228 3.228l3.65 3.65m7.894 7.894L21 21m-3.228-3.228l-3.65-3.65m0 0a3 3 0 10-4.243-4.243m4.242 4.242L9.88 9.88" />
												</svg>
											</div>
										</div>
									</div>

									<div class="py-2" x-data="{ show: true }">
										<label for="newpassword" class="text-sm text-slate-300">New Password</label>
										<div class="relative">
											<input placeholder="" :type="show ? 'password' : 'text'" id="newpassword" class="block w-full px-3 py-2 bg-black border-2 rounded-lg placeholder-slate-600 border-slate-800 text-md focus:placeholder-slate-500 focus:border-slate-500 focus:outline-none">
											<div class="absolute inset-y-0 right-0 flex items-center pr-3 text-sm leading-5">
												<svg x-cloak xmlns="http://www.w3.org/2000/svg" fill="none" @click="show = !show" :class="{'hidden': !show, 'block':show }" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 cursor-pointer stroke-slate-300">
													<path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
													<path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
												</svg>
												<svg x-cloak xmlns="http://www.w3.org/2000/svg" fill="none" @click="show = !show" :class="{'block': !show, 'hidden':show }" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 cursor-pointer stroke-gray-300">
													<path stroke-linecap="round" stroke-linejoin="round" d="M3.98 8.223A10.477 10.477 0 001.934 12C3.226 16.338 7.244 19.5 12 19.5c.993 0 1.953-.138 2.863-.395M6.228 6.228A10.45 10.45 0 0112 4.5c4.756 0 8.773 3.162 10.065 7.498a10.523 10.523 0 01-4.293 5.774M6.228 6.228L3 3m3.228 3.228l3.65 3.65m7.894 7.894L21 21m-3.228-3.228l-3.65-3.65m0 0a3 3 0 10-4.243-4.243m4.242 4.242L9.88 9.88" />
												</svg>
											</div>
										</div>
									</div>

									<div class="py-2" x-data="{ show: true }">
										<label for="confirmpassword" class="text-sm text-slate-300">Confirm Password</label>
										<div class="relative">
											<input placeholder="" :type="show ? 'password' : 'text'" id="confirmpassword" class="block w-full px-3 py-2 bg-black border-2 rounded-lg placeholder-slate-600 border-slate-800 text-md focus:placeholder-slate-500 focus:border-slate-500 focus:outline-none">
											<div class="absolute inset-y-0 right-0 flex items-center pr-3 text-sm leading-5">
												<svg x-cloak xmlns="http://www.w3.org/2000/svg" fill="none" @click="show = !show" :class="{'hidden': !show, 'block':show }" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 cursor-pointer stroke-slate-300">
													<path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
													<path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
												</svg>
												<svg x-cloak xmlns="http://www.w3.org/2000/svg" fill="none" @click="show = !show" :class="{'block': !show, 'hidden':show }" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 cursor-pointer stroke-gray-300">
													<path stroke-linecap="round" stroke-linejoin="round" d="M3.98 8.223A10.477 10.477 0 001.934 12C3.226 16.338 7.244 19.5 12 19.5c.993 0 1.953-.138 2.863-.395M6.228 6.228A10.45 10.45 0 0112 4.5c4.756 0 8.773 3.162 10.065 7.498a10.523 10.523 0 01-4.293 5.774M6.228 6.228L3 3m3.228 3.228l3.65 3.65m7.894 7.894L21 21m-3.228-3.228l-3.65-3.65m0 0a3 3 0 10-4.243-4.243m4.242 4.242L9.88 9.88" />
												</svg>
											</div>
										</div>
									</div>

									<button class="block w-full px-6 py-3 mt-8 font-bold text-black uppercase rounded-full bg-gradient-to-tr accent-color-gradient hover:bg-gradient-to-r">Save</button>
								</form>
							</div>
						</div>

						<div x-data="{ password: false }" class="border border-slate-800">
							<div class="flex border-b border-slate-800">
								<div class="p-4 grow">
									<h3 class="text-2xl">Email</h3>
									<span class="text-gray-400 ">After changing your email address, a confirmation will be sent to your new email address.</span>
								</div>
								<div>
									<button @click="password = !false" :class="{'hidden': password, 'block':!password }" type="button" class="flex items-center text-xs uppercase hover:text-amber-300">
										update
										<div class="flex items-center justify-center w-6 h-6 ml-2 rounded-bl-lg bg-slate-800">
											<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
												<path stroke-linecap="round" stroke-linejoin="round" d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0l3.181 3.183a8.25 8.25 0 0013.803-3.7M4.031 9.865a8.25 8.25 0 0113.803-3.7l3.181 3.182m0-4.991v4.99" />
											</svg>
										</div>
									</button>
									<button x-cloak @click="password = false" :class="{'hidden': !password, 'block':password }" type="button" class="flex items-center text-xs uppercase hover:text-amber-300">
										cancel
										<div class="flex items-center justify-center w-6 h-6 ml-2 rounded-bl-lg bg-slate-800">
											<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
												<path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
											</svg>
										</div>
									</button>
								</div>
							</div>
							<div x-show="!password" class="p-4">
								username@domain.tld
							</div>
							<div x-cloak x-show="password" class="p-4">
								<form class="" x-data x-ajax id="login" method="post" action="" novalidate>

									<div class="py-2">
										<label for="email" class="text-sm text-slate-300">New E-Mail</label>
										<input type="email" placeholder="username@domain.tld" id="email" class="block w-full px-3 py-2 bg-black border-2 rounded-lg peer placeholder-slate-600 border-slate-800 text-md focus:placeholder-slate-500 focus:border-slate-500 focus:outline-none">
									</div>

									<button class="block w-full px-6 py-3 mt-8 font-bold text-black uppercase rounded-full bg-gradient-to-tr accent-color-gradient hover:bg-gradient-to-r">Save</button>
								</form>
							</div>
						</div>
					</div>
					<div class="flex flex-col gap-16 basis-1/2">
						<div class="border border-slate-800">
							<div class="flex border-b border-slate-800">
								<div class="p-4 grow">
									<h3 class="text-2xl">Game</h3>
								</div>
							</div>
							<div class="">


								<div class="flex flex-wrap p-4 border-b gap-x-8 gap-y-2 border-slate-800">
									<h4 class="text-xl basis-full shrink-0 grow-0">Black Desert</h4>
									<div class=" grow">
										<div class="py-2 text-xs text-gray-300 uppercase">Characters 5/20</div>
										<div>Fluffy, Luna, Cracker, Pig, Robin</div>
									</div>
									<div class="text-right">
										<div class="text-xs text-gray-300 uppercase">first played</div>
										<div>01.07.2020</div>
									</div>
									<div class="text-right">
										<div class="text-xs text-gray-300 uppercase">last played</div>
										<div>12.01.2023</div>
									</div>
								</div>



								<div class="flex flex-wrap p-4 gap-x-8 gap-y-2">
									<h4 class="text-xl basis-full shrink-0 grow-0">Fiesta</h4>
									<div class="grow">
										<div class="text-xs text-gray-300 uppercase">Characters 5/20</div>
										<div>Fluffy, Luna, Cracker, Pig, Robin</div>
									</div>
									<div class="text-right">
										<div class="text-xs text-gray-300 uppercase">first played</div>
										<div>01.07.2020</div>
									</div>
									<div class="text-right">
										<div class="text-xs text-gray-300 uppercase">last played</div>
										<div>12.01.2023</div>
									</div>
								</div>



							</div>
						</div>
					</div>
				</div>
			</div>
		</section>




		<section class="py-24 border-b border-slate-800">
			<div class="container">
				<h2 class="text-4xl font-bold tracking-tight text-slate-400">
					Balance & History



				</h2>
				redeem code
				coins
				history




			</div>
		</section>
	</main>
	<?php include 'src/inc/footer.php' ?>

</body>

</html>
