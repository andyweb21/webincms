<x-guest-layout>
<div class="h-screen overflow-hidden flex items-center justify-center bg-slate-900">
    <div class="w-full bg-white dark:bg-gray-900">
        <div class="flex justify-center h-screen">
            <div class="hidden bg-cover lg:block lg:w-2/3" style="background-image: url(/assets/img/screen.jpg)">
                <div class="flex items-center h-full px-20 bg-gray-900 bg-opacity-40">
                    <div>
                        <h2 class="text-4xl font-bold text-white">WebinCMS</h2>
                        
                        <p class="max-w-xl mt-3 text-gray-300">Powerfull content management system (CMS) with tons of features.</p>
                    </div>
                </div>
            </div>
            
            <div class="flex items-center w-full max-w-md px-6 mx-auto lg:w-2/6">
                <div class="flex-1">
                    <div class="text-center">
                        <h2 class="text-4xl font-bold text-center text-gray-700 dark:text-white">WebinCMS</h2>
                        
                        <p class="mt-3 text-gray-500 dark:text-gray-300">Sign in to access your account</p>
                    </div>

                    <div class="mt-8">
                        @if ($errors->any())
                            <div class="bg-yellow-200 p-4">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form method="POST" action="/auth/login">
                            @csrf
                            <div>
                                <x-label for="email" color="text-gray-600 dark:text-gray-200">Email Address</x-label>
                                <x-input theme="dark" type="email" name="email" id="email" placeholder="example@example.com" required></x-input>
                            </div>

                            <div class="mt-6">
                                <div class="flex justify-between mb-2">
                                    <x-label for="password" color="text-gray-600 dark:text-gray-200">Password</x-label>
                                    <!-- <a href="#" class="text-sm text-gray-400 focus:text-blue-500 hover:text-blue-500 hover:underline">Forgot password?</a> -->
                                </div>
                                <x-input theme="dark" type="password" name="password" id="password" placeholder="Your Password" required></x-input>
                            </div>

                            <div class="mt-6">
                                <x-button type="submit" theme="primary" extclass="justify-center">Sign In</x-button>
                            </div>

                        </form>

                        <p class="mt-6 text-sm text-center text-gray-400">Don&#x27;t have an account yet? <a href="#" class="text-blue-500 focus:outline-none focus:underline hover:underline">Contact Administrator</a>.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>