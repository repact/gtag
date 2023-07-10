<?php include 'src/inc/head.php' ?>

<body>
    <main class="relative overflow-hidden">
        <section class="flex items-center min-h-screen py-24 border-b border-slate-800">
            <div class="container relative">
                <div class="spotlight"></div>
                <div class="max-w-sm px-6 mx-auto my-24">
                    <a class="flex items-center justify-center mb-8" href="/core" aria-label="CORE">
                        <svg class="w-48 h-20 -mt-4">
                            <use href="#core-logo">
                        </svg>
                        <div class="inline px-2 ml-4 text-black uppercase rounded-lg bg-cyan-500">id</div>
                    </a>
                    <form class="max-w-lg mx-auto" x-data x-ajax id="login" method="post" action="" novalidate>
                        <div class="py-2">
                            <label for="email" class="text-sm text-slate-300">Email</label>
                            <input required placeholder=" " type="email" id="email" class="block w-full px-3 py-2 bg-black border-2 rounded-lg required:border-red-500 border-slate-800 text-md valid:border-slate-800 placeholder-shown:!border-slate-800 focus:border-slate-500 invalid:focus:border-red-400 focus:outline-none peer">

                            <p class="hidden mt-2 text-sm text-red-500 peer-invalid:block peer-placeholder-shown:!hidden">
                                Please provide a valid email address.
                            </p>
                        </div>
                        <div class="py-2" x-data="{ show: true }">
                            <label for="password" class="text-sm text-slate-300">Password</label>
                            <div class="relative">
                                <input placeholder="" :type="show ? 'password' : 'text'" id="password" class="block w-full px-3 py-2 bg-black border-2 rounded-lg placeholder-slate-600 border-slate-800 text-md focus:placeholder-slate-500 focus:border-slate-500 focus:outline-none">
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
                        <button class="block w-full px-6 py-3 mt-8 mb-4 font-bold text-black uppercase rounded-full bg-gradient-to-tr accent-color-gradient hover:bg-gradient-to-r">Log in now</button>
                    </form>
                    <div class="grid grid-cols-2 text-sm text-center uppercase divide-x divide-slate-800">
                        <a href="forgot" class="flex items-center justify-center gap-2 hover:text-white accent-color-text">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0l3.181 3.183a8.25 8.25 0 0013.803-3.7M4.031 9.865a8.25 8.25 0 0113.803-3.7l3.181 3.182m0-4.991v4.99" />
                            </svg>
                            Can’t log in?
                        </a>
                        <a href="create" class="flex items-center justify-center gap-2 hover:text-white accent-color-text">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 7.5v3m0 0v3m0-3h3m-3 0h-3m-2.25-4.125a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zM4 19.235v-.11a6.375 6.375 0 0112.75 0v.109A12.318 12.318 0 0110.374 21c-2.331 0-4.512-.645-6.374-1.766z" />
                            </svg>
                            Create CORE ID
                        </a>
                    </div>
                    <a href="/core" class="flex items-center justify-center w-full pt-8 text-xs text-gray-400 uppercase">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
                        </svg>
                        back
                    </a>
                </div>
            </div>
        </section>
    </main>
    <?php include 'src/inc/footer.php' ?>

</body>

</html>
