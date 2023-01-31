
<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Index</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-100">



<div class=" flex h-screen">
    <!-- SideBar -->
    <div class="w-60 bg-white p-3 flex flex-col justify-between pb-5 pt-20 h-screen">
        <ul class="flex flex-col gap-4 text-lg -mt-10">
            <li>
                <a href="#" class="flex gap-2 items-center space-x-3 text-violet-500 p-2 rounded-md font-medium hover:bg-gray-200 bg-gray-200 focus:shadow-outline">
                    <span class="text-gray-600">
                        <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                    </span>
                    <span>Home</span>
                </a>
            </li>
           
            <li>
                <a href="#" class="flex gap-2 items-center space-x-3 text-gray-700 p-2 rounded-md font-medium hover:bg-gray-200 focus:bg-gray-200 focus:shadow-outline">
                    <span class="text-gray-600">
                        <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                    </span>
                    <span>My profile</span>
                </a>
            </li>
            <li>
                <a href="#" class="flex gap-2 items-center space-x-3 text-gray-700 p-2 rounded-md font-medium hover:bg-gray-200 focus:bg-gray-200 focus:shadow-outline">
                    <span class="text-gray-600">
                        <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                        </svg>
                    </span>
                    <span>Change password</span>
                </a>
            </li>
            <li>
                <div class="relative text-slate-500 font-light bg-transparent flex items-center justify-center border-none outline-none rounded-sm border-4 mr-5 group">
                        <h5 class="font-medium text-gray-600">
                            Menu
                        </h5>
                        <div class="absolute p-2 opacity-0 -z-10 w-40 translate-x-28 text-sm group-hover:translate-x-52 group-hover:z-10 group-hover:opacity-100 bg-gray-200 mt-1 rounded-md font-semibold text-violet-500 text-left transition-all group-hover:duration-300 -left-16">
                        <ul class="flex flex-col gap-5">
                            <li class="dropdown-items">
                                Home
                            </li>
                            <li class="dropdown-items">
                                Company
                            </li>
                            <li class="dropdown-items">
                                Team
                            </li>
                            <li class="dropdown-items">
                                Features
                            </li>
                        </ul>
                    </div>
                </div>
            </li>
        </ul>
       <div class="border-t-4">
            <a href="#" class="flex items-center text-gray-700 p-2 rounded-md font-medium gap-2 hover:bg-gray-200 focus:bg-gray-200 focus:shadow-outline">
                <span class="text-lg">Logout</span>
                <span class="text-gray-600">
                    <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                    </svg>
                </span>
            </a>
       </div>
    </div>


    <!-- halaman konten -->
    <div class="bg-white h-96 shadow-sm p-5 relative top-40 w-full flex flex-col pt-20 mx-20 items-center px-20 rounded-xl">
        <table class=" w-full border-2 rounded-xl">
            <div class="flex items-center justify-between w-full my-3 ">
                 <h1 class="font-bold text-4xl">Log Book</h1>
                 <button class="bg-red-500 rounded-xl px-2 py-1">Create</button>
            </div>
            <tr class="border-2 h-10 bg-slate-200">
                <th class="border-2">KEGIATAN</th>
                <th class="border-2">TANGGAL</th>
                <th class="border-2">KENDALA</th>
                <th class="border-2">ACTION</th>
            </tr>
            <tr class="h-14">
                <td class="border-2">haii</td>
                <td class="border-2">kamu</td>
                <td class="border-2">negro</td>
                <td class="border-2 flex justify-center gap-5 py-3">
                    <button id="hapus" class="bg-red-500 rounded-xl px-2 py-1">Delete</button>
                    <button class="bg-sky-500 rounded-xl px-2 py-1">Edit</button>
                </td>
            </tr>
        </table>
    </div>
</div>

<div id="popup" class="hidden items-center justify-center h-screen w-full absolute top-0 bg-slate-600/60">
    <div class="bg-white w-96 h-60 rounded-xl relative flex flex-col">
        <button id="close" class="text-violet-500 bg-gray-200 rounded-full px-3 py-1 absolute right-3 top-3 "> x </button>

        <p class="text-center mb-10 mt-20">Mau Join Gay Pasir Impun?</p>
        <div class="flex items-center justify-center gap-5">
            <button class="border-4 border-sky-500 text-sky-500 font-semibold py-2 px-5 rounded-xl">iyah</button>
            <button id="engga" class="bg-red-500 text-slate-50 font-semibold py-2 px-5 rounded-xl border-4 border-red-500">Engga</button>
        </div>
    </div>
</div>
</body>
<script>
    let hapus = document.querySelector("#hapus");
    let popup = document.querySelector("#popup");
    let close = document.querySelector("#close");
    let engga = document.querySelector("#engga");

    hapus.addEventListener("click", function() {
        popup.classList.add("flex");
        popup.classList.remove("hidden");
    });
    close.addEventListener("click", function() {
        popup.classList.add("hidden");
        popup.classList.remove("flex");
    });
    engga.addEventListener("click", function() {
        popup.classList.add("hidden");
        popup.classList.remove("flex");
    });
</script>
</html>