<div class="flex items-center px-5 h-20">
    <img src="/assets/img/webincms.png" alt="" class="max-w-full">
    <!-- <div class="ml-1">
        <h3 class="text-lg font-medium tracking-wide truncate text-gray-100 font-sans">WebinCMS</h3>
    </div> -->
</div>
<div class="overflow-y-auto overflow-x-hidden flex flex-col flex-grow">
<ul class="flex flex-col py-6 space-y-1 sidebar-menu flex-grow">
    <li class="{{ (Request::is('/')?'active':'') }}">
        <a href="{{ route('dashboard') }}" class="sidebar-menu__item">
            <span class="inline-flex justify-center items-center ml-4">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-5 h-5"><path fill="none" d="M0 0h24v24H0z"/><path fill="currentColor" d="M19 21H5a1 1 0 0 1-1-1v-9H1l10.327-9.388a1 1 0 0 1 1.346 0L23 11h-3v9a1 1 0 0 1-1 1zM6 19h12V9.157l-6-5.454-6 5.454V19zm2-4h8v2H8v-2z"/></svg>
            </span>
            <span class="ml-2 text-md tracking-wide truncate font-sans">Dashboard</span>
        </a>
    </li>
    <li class="{{ (str_contains(Route::currentRouteName(), 'post')?'active':'') }}">
        <a href="{{ route('post') }}" class="sidebar-menu__item">
            <span class="inline-flex justify-center items-center ml-4">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-5 h-5"><path fill="none" d="M0 0h24v24H0z"/><path fill="currentColor" d="M7 6V3a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1h-3v3c0 .552-.45 1-1.007 1H4.007A1.001 1.001 0 0 1 3 21l.003-14c0-.552.45-1 1.006-1H7zM5.002 8L5 20h10V8H5.002zM9 6h8v10h2V4H9v2zm-2 5h6v2H7v-2zm0 4h6v2H7v-2z"/></svg>
            </span>
            <span class="ml-2 text-md tracking-wide truncate font-sans">Post</span>
        </a>
        @if(in_array(Route::currentRouteName(), ['post','post.add','categories']))
        <ul>
            <li><a href="{{ route('post.add') }}" class="sidebar-menu__subitem {{ (Route::currentRouteName() === 'post.add'?'active':'') }}">Add Post</a></li>
            <li><a href="{{ route('categories') }}" class="sidebar-menu__subitem {{ (Route::currentRouteName() === 'categories'?'active':'') }}">Category</a></li>
        </ul>
        @endif
    </li>
    <li class="{{ (str_contains(Route::currentRouteName(), 'page')?'active':'') }}">
        <a href="{{ route('page') }}" class="sidebar-menu__item">
            <span class="inline-flex justify-center items-center ml-4">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-5 h-5"><path fill="none" d="M0 0h24v24H0z"/><path fill="currentColor" d="M21 16l-6.003 6H4a1 1 0 0 1-1-1V3a1 1 0 0 1 1-1h16a1 1 0 0 1 1 1v13zm-2-1V4H5v16h9v-5h5z"/></svg>
            </span>
            <span class="ml-2 text-md tracking-wide truncate font-sans">Page</span>
        </a>
    </li>
    <!-- <li class="{{ (Request::is('comments')?'active':'') }}">
        <a href="{{ route('comments') }}" class="sidebar-menu__item pr-6">
            <span class="inline-flex justify-center items-center ml-4">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-5 h-5"><path fill="none" d="M0 0h24v24H0z"/><path fill="currentColor" d="M5.455 15L1 18.5V3a1 1 0 0 1 1-1h15a1 1 0 0 1 1 1v12H5.455zm-.692-2H16V4H3v10.385L4.763 13zM8 17h10.237L20 18.385V8h1a1 1 0 0 1 1 1v13.5L17.545 19H9a1 1 0 0 1-1-1v-1z"/></svg>
            </span>
            <span class="ml-2 text-md tracking-wide truncate font-sans">Comments</span>
            <span class="px-2 py-0.5 ml-auto text-xs font-medium tracking-wide text-gray-300 bg-gray-800 rounded">10</span>
        </a>
    </li>
    <li class="{{ (Request::is('media')?'active':'') }}">
        <a href="{{ route('media') }}" class="sidebar-menu__item pr-5">
            <span class="inline-flex justify-center items-center ml-4">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-5 h-5"><path fill="none" d="M0 0h24v24H0z"/><path fill="currentColor" d="M5 11.1l2-2 5.5 5.5 3.5-3.5 3 3V5H5v6.1zm0 2.829V19h3.1l2.986-2.985L7 11.929l-2 2zM10.929 19H19v-2.071l-3-3L10.929 19zM4 3h16a1 1 0 0 1 1 1v16a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1zm11.5 7a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z"/></svg>
            </span>
            <span class="ml-2 text-md tracking-wide truncate font-sans">Media</span>
        </a>
    </li> -->
    <li class="px-5 py-4">
        <div class="border-b border-b-slate-800 w-full"></div>
    </li>
    <li class="{{ (Request::is('menu')?'active':'') }}">
        <a href="{{ route('menu') }}" class="sidebar-menu__item pr-5">
            <span class="inline-flex justify-center items-center ml-4">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-5 h-5"><path fill="none" d="M0 0h24v24H0z"/><path fill="currentColor" d="M8 4h13v2H8V4zm-5-.5h3v3H3v-3zm0 7h3v3H3v-3zm0 7h3v3H3v-3zM8 11h13v2H8v-2zm0 7h13v2H8v-2z"/></svg>
            </span>
            <span class="ml-2 text-md tracking-wide truncate font-sans">Menu</span>
        </a>
    </li>
    <li class="{{ (str_contains(Route::currentRouteName(), 'users')?'active':'') }}">
        <a href="{{ route('users') }}" class="sidebar-menu__item pr-5">
            <span class="inline-flex justify-center items-center ml-4">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-5 h-5"><path fill="none" d="M0 0h24v24H0z"/><path fill="currentColor" d="M2 22a8 8 0 1 1 16 0h-2a6 6 0 1 0-12 0H2zm8-9c-3.315 0-6-2.685-6-6s2.685-6 6-6 6 2.685 6 6-2.685 6-6 6zm0-2c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm8.284 3.703A8.002 8.002 0 0 1 23 22h-2a6.001 6.001 0 0 0-3.537-5.473l.82-1.824zm-.688-11.29A5.5 5.5 0 0 1 21 8.5a5.499 5.499 0 0 1-5 5.478v-2.013a3.5 3.5 0 0 0 1.041-6.609l.555-1.943z"/></svg>
            </span>
            <span class="ml-2 text-md tracking-wide truncate font-sans">Users</span>
        </a>
    </li>
    <li class="{{ (Request::is('settings')?'active':'') }}">
        <a href="{{ route('settings') }}" class="sidebar-menu__item">
            <span class="inline-flex justify-center items-center ml-4">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-5 h-5"><path fill="none" d="M0 0h24v24H0z"/><path fill="currentColor" d="M2 12c0-.865.11-1.703.316-2.504A3 3 0 0 0 4.99 4.867a9.99 9.99 0 0 1 4.335-2.505 3 3 0 0 0 5.348 0 9.99 9.99 0 0 1 4.335 2.505 3 3 0 0 0 2.675 4.63c.206.8.316 1.638.316 2.503 0 .865-.11 1.703-.316 2.504a3 3 0 0 0-2.675 4.629 9.99 9.99 0 0 1-4.335 2.505 3 3 0 0 0-5.348 0 9.99 9.99 0 0 1-4.335-2.505 3 3 0 0 0-2.675-4.63C2.11 13.704 2 12.866 2 12zm4.804 3c.63 1.091.81 2.346.564 3.524.408.29.842.541 1.297.75A4.993 4.993 0 0 1 12 18c1.26 0 2.438.471 3.335 1.274.455-.209.889-.46 1.297-.75A4.993 4.993 0 0 1 17.196 15a4.993 4.993 0 0 1 2.77-2.25 8.126 8.126 0 0 0 0-1.5A4.993 4.993 0 0 1 17.195 9a4.993 4.993 0 0 1-.564-3.524 7.989 7.989 0 0 0-1.297-.75A4.993 4.993 0 0 1 12 6a4.993 4.993 0 0 1-3.335-1.274 7.99 7.99 0 0 0-1.297.75A4.993 4.993 0 0 1 6.804 9a4.993 4.993 0 0 1-2.77 2.25 8.126 8.126 0 0 0 0 1.5A4.993 4.993 0 0 1 6.805 15zM12 15a3 3 0 1 1 0-6 3 3 0 0 1 0 6zm0-2a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/></svg>
            </span>
            <span class="ml-2 text-md tracking-wide truncate font-sans">Settings</span>
        </a>
    </li>
</ul>
<ul class="justify-items-end flex border-t border-t-slate-800">
    <li class="w-1/2 border-r border-r-slate-800">
        <a href="{{ route('profile') }}" class="sidebar-menu__item">
            <span class="inline-flex justify-center items-center ml-4">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-5 h-5"><path fill="none" d="M0 0h24v24H0z"/><path fill="currentColor" d="M20 22h-2v-2a3 3 0 0 0-3-3H9a3 3 0 0 0-3 3v2H4v-2a5 5 0 0 1 5-5h6a5 5 0 0 1 5 5v2zm-8-9a6 6 0 1 1 0-12 6 6 0 0 1 0 12zm0-2a4 4 0 1 0 0-8 4 4 0 0 0 0 8z"/></svg>
            </span>
            <span class="ml-2 text-md tracking-wide truncate font-sans">Admin</span>
        </a>
    </li>
    <li class="w-1/2">
        <a href="{{ route('logout') }}" class="relative sidebar-menu__red flex flex-row items-center h-11 focus:outline-none text-slate-400 hover:text-red-400">
            <span class="inline-flex justify-center items-center ml-4">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-5 h-5"><path fill="none" d="M0 0h24v24H0z"/><path fill="currentColor" d="M5 22a1 1 0 0 1-1-1V3a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v3h-2V4H6v16h12v-2h2v3a1 1 0 0 1-1 1H5zm13-6v-3h-7v-2h7V8l5 4-5 4z"/></svg>
            </span>
            <span class="ml-2 text-md tracking-wide truncate font-sans">Logout</span>
        </a>
    </li>
</ul>
</div>