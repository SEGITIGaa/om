<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- link cdn tailwind -->
@include('link')

<!-- mun make cdn ieu ewehkeun ge bae -->
@vite('resources/css/app.css')
    <title>Document</title>
</head>
<body class="bg-orange-400 flex">
    <div class="h-screen w-max flex flex-col justify-between py-5 px-3">
        <div class="flex flex-col gap-5">
            <img src="https://img.icons8.com/material-outlined/96/null/shopping-basket.png" class="w-8 cursor-pointer hover:bg-slate-300/50 rounded-lg p-1"/>
            <img src="https://img.icons8.com/material-outlined/96/null/home--v2.png" class="w-8 cursor-pointer hover:bg-slate-300/50 rounded-lg p-1"/>
            <img src="https://img.icons8.com/material-outlined/96/null/shopping-bag--v1.png" class="w-8 cursor-pointer hover:bg-slate-300/50 rounded-lg p-1"/>
            <img src="https://img.icons8.com/material-outlined/96/null/megaphone.png" class="w-8 cursor-pointer hover:bg-slate-300/50 rounded-lg p-1"/>
            <img src="https://img.icons8.com/material-outlined/96/null/settings--v1.png"  class="w-8 cursor-pointer hover:bg-slate-300/50 rounded-lg p-1"/>
        </div>
        <img src="https://img.icons8.com/material-outlined/96/null/communication.png"  class="w-8 cursor-pointer hover:bg-slate-300/50 rounded-lg p-1"/>
    </div>
    <div class="w-full bg-slate-50 rounded-l-2xl shadow-lg">
        <div class="h-max fi justify-between border-b-2 py-2 px-5">
            <h1 class="text-2xl font-semibold text-slate-900">Manage Product</h1>
            <img src="https://img.icons8.com/fluency/96/null/test-account.png" class="w-14"/>
        </div>
        <div class="h-max fi justify-between px-5 py-3">
            <input type="search" name="" id="" placeholder="Search.." class="w-1/2 bg-slate-50 px-5 rounded-lg border-2 border-slate-900 py-2 outline-none  focus:border-2 focus:border-orange-500">
            <div class="fi gap-5">
                <button class="border-2 text-slate-900 border-slate-900 rounded-lg py-2 px-3">Delete Category</button>
                <button class="text-slate-50 bg-slate-900 rounded-lg py-2 px-3">Add New Category</button>
            </div>
        </div>
        <div class="h-max fi justify-between px-5 py-3">
            <div class="fi gap-5">
                <img src="https://img.icons8.com/material-outlined/96/null/sorting-answers.png" class="w-7"/>

                <select name="" id="" class="bg-slate-900 text-slate-50 px-5 py-1 rounded-full">
                    <option value="">Action</option>
                </select>
                <select name="" id="" class="text-slate-900 border-2 border-slate-900 bg-slate-50 px-5 py-1 rounded-full">
                    <option value="">Category</option>
                </select>
                <select name="" id="" class="text-slate-900 border-2 border-slate-900 bg-slate-50 px-5 py-1 rounded-full">
                    <option value="">Quantity</option>
                </select>
                <select name="" id="" class="text-slate-900 border-2 border-slate-900 bg-slate-50 px-5 py-1 rounded-full">
                    <option value="">Price</option>
                </select>
            </div>
        </div>
        <div class="w-full px-5 h-2/3 overflow-scroll">
            <table class="w-full mt-5">
                <tr class="h-10 text-center border-y-2 border-slate-800 bg-slate-200">
                    <th>Nama Karyawan</th>
                    <th>Tanggal kegiatan</th>
                    <th>nama kegiatan</th>
                    <th>Action</th>
                </tr>
                <tr class="h-14 text-center border-b-2 border-slate-500 hover:bg-slate-100">
                    <td>
                        <label for="1" class="fi gap-5 ">
                            <input type="checkbox" name="" id="1">
                            <img src="https://img.icons8.com/color/96/null/circled-user-male-skin-type-7--v1.png" class="w-8"/>
                            Nama Karyawan
                        </label>
                    </td>
                    <td>Tanggal kegiatan</td>
                    <td>nama kegiatan</td>
                    <td>
                        <div class="fi gap-5 justify-center">
                            <img src="https://img.icons8.com/material/96/null/edit--v1.png" class="w-6"/>
                            <img src="https://img.icons8.com/material/96/null/trash--v1.png" class="w-6"/>
                        </div>
                    </td>
                </tr>
                <tr class="h-14 text-center border-b-2 border-slate-500 hover:bg-slate-100">
                    <td>
                        <label for="2" class="fi gap-5 ">
                            <input type="checkbox" name="" id="2">
                            <img src="https://img.icons8.com/color/96/null/circled-user-male-skin-type-7--v1.png" class="w-8"/>
                            Nama Karyawan
                        </label>
                    </td>
                    <td>Tanggal kegiatan</td>
                    <td>nama kegiatan</td>
                    <td>
                        <div class="fi gap-5 justify-center">
                            <img src="https://img.icons8.com/material/96/null/edit--v1.png" class="w-6"/>
                            <img src="https://img.icons8.com/material/96/null/trash--v1.png" class="w-6"/>
                        </div>
                    </td>
                </tr>
                <tr class="h-14 text-center border-b-2 border-slate-500 hover:bg-slate-100">
                    <td>
                        <label for="3" class="fi gap-5 ">
                            <input type="checkbox" name="" id="3">
                            <img src="https://img.icons8.com/color/96/null/circled-user-male-skin-type-7--v1.png" class="w-8"/>
                            Nama Karyawan
                        </label>
                    </td>
                    <td>Tanggal kegiatan</td>
                    <td>nama kegiatan</td>
                    <td>
                        <div class="fi gap-5 justify-center">
                            <img src="https://img.icons8.com/material/96/null/edit--v1.png" class="w-6"/>
                            <img src="https://img.icons8.com/material/96/null/trash--v1.png" class="w-6"/>
                        </div>
                    </td>
                </tr>
                <tr class="h-14 text-center border-b-2 border-slate-500 hover:bg-slate-100">
                    <td>
                        <label for="4" class="fi gap-5 ">
                            <input type="checkbox" name="" id="4">
                            <img src="https://img.icons8.com/color/96/null/circled-user-male-skin-type-7--v1.png" class="w-8"/>
                            Nama Karyawan
                        </label>
                    </td>
                    <td>Tanggal kegiatan</td>
                    <td>nama kegiatan</td>
                    <td>
                        <div class="fi gap-5 justify-center">
                            <img src="https://img.icons8.com/material/96/null/edit--v1.png" class="w-6"/>
                            <img src="https://img.icons8.com/material/96/null/trash--v1.png" class="w-6"/>
                        </div>
                    </td>
                </tr>
            </table>

            <div class="fi gap-5 fixed bottom-5">
                <p>Rows Per Page</p>
                <select name="" id="" class="border-2 border-slate-900 rounded-lg bg-slate-50 ">
                    <option value="">10</option>
                    <option value="">20</option>
                    <option value="">30</option>
                </select>
            </div>
        </div>
    </div>
</body>
</html>