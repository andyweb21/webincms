<x-app-layout>
    <x-slot:title>Dashboard</x-slot:title>
    <div>
        <x-breadcrumb>
            <x-breadcrumb.item>Dashboard</x-breadcrumb.item>
        </x-breadcrumb>

        <div id="header-content" class="flex justify-between items-center mt-4">
            <h2 class="font-semibold text-3xl">Dashboard</h2>
            <!-- <div>
                <x-button theme="primary" type="button" onclick="toggleModal('modal-id')">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-5 h-5 mr-2"><path fill="none" d="M0 0h24v24H0z"/><path fill="currentColor" d="M4 3h16a1 1 0 0 1 1 1v16a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1zm1 2v14h14V5H5zm6 6V7h2v4h4v2h-4v4h-2v-4H7v-2h4z"/></svg>    
                    Add Post
                </x-button>
            </div> -->
        </div>

        <div id="main-content" class="mt-8">
            <div class="w-full relative pb-6 mx-auto">
                <div class="flex gap-6">
                    <x-card>
                        <x-slot:title>Total Post</x-slot:title>
                        <x-slot:value>3.897</x-slot:value>
                        <x-slot:icon>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-5 h-5"><path fill="none" d="M0 0h24v24H0z"/><path fill="currentColor" d="M7 6V3a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1h-3v3c0 .552-.45 1-1.007 1H4.007A1.001 1.001 0 0 1 3 21l.003-14c0-.552.45-1 1.006-1H7zM5.002 8L5 20h10V8H5.002zM9 6h8v10h2V4H9v2zm-2 5h6v2H7v-2zm0 4h6v2H7v-2z"/></svg>
                        </x-slot:icon>
                    </x-card>
                    <x-card bgicon="bg-slate-500">
                        <x-slot:title>Total Page</x-slot:title>
                        <x-slot:value>924</x-slot:value>
                        <x-slot:icon>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-5 h-5"><path fill="none" d="M0 0h24v24H0z"/><path fill="currentColor" d="M21 16l-6.003 6H4a1 1 0 0 1-1-1V3a1 1 0 0 1 1-1h16a1 1 0 0 1 1 1v13zm-2-1V4H5v16h9v-5h5z"/></svg>
                        </x-slot:icon>
                    </x-card>
                    <x-card bgicon="bg-blue-500">
                        <x-slot:title>Total Users</x-slot:title>
                        <x-slot:value>2.356</x-slot:value>
                        <x-slot:icon>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path fill="currentColor" d="M2 22a8 8 0 1 1 16 0H2zm8-9c-3.315 0-6-2.685-6-6s2.685-6 6-6 6 2.685 6 6-2.685 6-6 6zm7.363 2.233A7.505 7.505 0 0 1 22.983 22H20c0-2.61-1-4.986-2.637-6.767zm-2.023-2.276A7.98 7.98 0 0 0 18 7a7.964 7.964 0 0 0-1.015-3.903A5 5 0 0 1 21 8a4.999 4.999 0 0 1-5.66 4.957z"/></svg>
                        </x-slot:icon>
                    </x-card>
                    <x-card bgicon="bg-gray-500">
                        <x-slot:title>Media File</x-slot:title>
                        <x-slot:value>4998</x-slot:value>
                        <x-slot:icon>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-5 h-5"><path fill="none" d="M0 0h24v24H0z"/><path fill="currentColor" d="M5 11.1l2-2 5.5 5.5 3.5-3.5 3 3V5H5v6.1zm0 2.829V19h3.1l2.986-2.985L7 11.929l-2 2zM10.929 19H19v-2.071l-3-3L10.929 19zM4 3h16a1 1 0 0 1 1 1v16a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1zm11.5 7a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z"/></svg>
                        </x-slot:icon>
                    </x-card>
                </div>
            </div>
        </div>

    </div>
    <x-slot:footer>
        <div class="hidden overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center" id="modal-id">
        <div class="relative w-auto my-6 mx-auto max-w-3xl">
            <!--content-->
            <div class="border-0 rounded-lg shadow-lg relative flex flex-col w-full bg-white outline-none focus:outline-none">
            <!--header-->
            <div class="flex items-start justify-between p-5 border-b border-solid border-slate-200 rounded-t">
                <h3 class="text-3xl font-semibold">
                Modal Title
                </h3>
                <button class="p-1 ml-auto bg-transparent border-0 text-black opacity-5 float-right text-3xl leading-none font-semibold outline-none focus:outline-none" onclick="toggleModal('modal-id')">
                <span class="bg-transparent text-black opacity-5 h-6 w-6 text-2xl block outline-none focus:outline-none">
                    ×
                </span>
                </button>
            </div>
            <!--body-->
            <div class="relative p-6 flex-auto">
                <p class="my-4 text-slate-500 text-lg leading-relaxed">
                I always felt like I could do anything. That’s the main
                thing people are controlled by! Thoughts- their perception
                of themselves! They're slowed down by their perception of
                themselves. If you're taught you can’t do anything, you
                won’t do anything. I was taught I could do everything.
                </p>
            </div>
            <!--footer-->
            <div class="flex items-center justify-end p-6 border-t border-solid border-slate-200 rounded-b">
                <button class="text-red-500 background-transparent font-bold uppercase px-6 py-2 text-sm outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" type="button" onclick="toggleModal('modal-id')">
                Close
                </button>
                <button class="bg-emerald-500 text-white active:bg-emerald-600 font-bold uppercase text-sm px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" type="button" onclick="toggleModal('modal-id')">
                Save Changes
                </button>
            </div>
            </div>
        </div>
        </div>
        <div class="hidden opacity-25 fixed inset-0 z-40 bg-black" id="modal-id-backdrop"></div>
        <script type="text/javascript">
        function toggleModal(modalID){
            document.getElementById(modalID).classList.toggle("hidden");
            document.getElementById(modalID + "-backdrop").classList.toggle("hidden");
            document.getElementById(modalID).classList.toggle("flex");
            document.getElementById(modalID + "-backdrop").classList.toggle("flex");
        }
        </script>
    </x-slot:footer>
</x-app-layout>