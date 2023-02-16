<div>
    <!-- row 1 -->
    <div class="flex flex-wrap -mx-3">

        <!-- card2 -->
        <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4">
            <div class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
                <div class="flex-auto p-4">
                    <div class="flex flex-row -mx-3">
                        <div class="flex-none w-2/3 max-w-full px-3">
                            <div>
                                <p class="mb-0 font-sans font-semibold leading-normal text-size-sm">Employee
                                </p>
                                <h5 class="mb-0 font-bold">
                                    {{ $user->count() }} Orang
                                </h5>
                            </div>
                        </div>
                        <div class="px-3 text-right basis-1/3">
                            <div class="inline-block w-12 h-12 text-center rounded-lg bg-gradient-fuchsia">
                                <i class="ni ni-world text-size-lg relative top-3.5 text-white"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @if (session()->has('success'))
            <div class="flex p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400"
                role="alert">
                <svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-3" fill="currentColor"
                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                        clip-rule="evenodd"></path>
                </svg>
                <span class="sr-only">Info</span>
                <div>
                    <span class="font-medium">{{ session('success') }}</span>
                </div>
            </div>
        @endif
    </div>

    <!-- cards row 4 -->
    <div class="flex flex-wrap my-6 -mx-3">
        <div class="w-full max-w-full px-3 mt-0 mb-6 lg:mb-0 lg:w-7/12 lg:flex-none">
            <div
                class="border-black/12.5 shadow-soft-xl relative flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border">
                <div class="border-black/12.5 mb-0 rounded-t-2xl border-b-0 border-solid bg-white p-6 pb-0">
                    <div class="flex flex-wrap mt-0 -mx-3">
                        <div class="flex-none w-7/12 max-w-full px-3 mt-0 lg:w-1/2 lg:flex-none">
                            <h6 class="ml-1 font-semibold">Laporan Kerja Per Hari</h6> {{ $today }}
                            <p class="mb-0 leading-normal text-size-sm">
                                <i class="fa fa-check text-cyan-500"></i>
                                <span class="ml-1 font-semibold">{{ $userCategoriesDay->count() }} Teknisi</span>
                                melaporkan hari ini
                            </p>
                        </div>
                    </div>
                </div>
                <div class="flex-auto p-6 px-0 pb-2">
                    <div class="overflow-x-auto">
                        <table class="items-center w-full mb-0 align-top border-gray-200 text-slate-500">
                            <thead class="align-bottom">
                                <tr>
                                    <th
                                        class="px-6 py-3 font-bold tracking-normal text-left uppercase align-middle bg-transparent border-b letter border-b-solid text-size-xxs whitespace-nowrap border-b-gray-200 text-slate-400 opacity-70">
                                        Nama</th>
                                    <th
                                        class="px-6 py-3 pl-2 font-bold tracking-normal text-left uppercase align-middle bg-transparent border-b letter border-b-solid text-size-xxs whitespace-nowrap border-b-gray-200 text-slate-400 opacity-70">
                                        Kategori</th>
                                    <th
                                        class="px-6 py-3 font-bold tracking-normal text-center uppercase align-middle bg-transparent border-b letter border-b-solid text-size-xxs whitespace-nowrap border-b-gray-200 text-slate-400 opacity-70">
                                        Skor</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($userCategoriesDay as $userCategoryDay)
                                    <tr>
                                        <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap">
                                            <div class="flex px-2 py-1">
                                                <div class="mr-2">
                                                    <h6 class="mb-0 leading-normal text-size-sm">{{ $loop->iteration }}.
                                                    </h6>
                                                </div>
                                                <div class="flex flex-col justify-center">
                                                    <h6 class="mb-0 leading-normal text-size-sm">
                                                        {{ $userCategoryDay->name }}
                                                    </h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap">
                                            <span class="font-semibold leading-tight text-size-xs text-slate-400">
                                                @foreach ($userCategoryDay->category->pluck('name')->countBy() as $name => $count)
                                                    {{ $name }} : {{ $count }} <br>
                                                @endforeach
                                            </span>
                                        </td>
                                        <td
                                            class="p-2 leading-normal text-center align-middle bg-transparent border-b text-size-sm whitespace-nowrap">
                                            <span class="font-semibold leading-tight text-size-xs">
                                                {{ $userCategoryDay->category->sum('score') }} </span>
                                        </td>

                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-full max-w-full px-3 mt-0 lg:w-5/12 lg:flex-none">
            <div
                class="border-black/12.5 shadow-soft-xl relative flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border">
                <div class="border-black/12.5 mb-0 rounded-t-2xl border-b-0 border-solid bg-white p-6 pb-0">
                    <div class="flex flex-wrap mt-0 -mx-3">
                        <div class="flex-none w-7/12 max-w-full px-3 mt-0 lg:w-1/2 lg:flex-none">
                            <h6>Laporan yang belum disetujui </h6>
                        </div>
                    </div>
                </div>
                <div class="flex-auto p-6 px-0 pb-2">
                    <div class="overflow-x-auto">
                        <table class="items-center w-full mb-0 align-top border-gray-200 text-slate-500">
                            <thead class="align-bottom">
                                <tr>
                                    <th
                                        class="px-6 py-3 font-bold tracking-normal text-left uppercase align-middle bg-transparent border-b letter border-b-solid text-size-xxs whitespace-nowrap border-b-gray-200 text-slate-400 opacity-70">
                                        Nama</th>
                                    <th
                                        class="px-6 py-3 pl-2 font-bold tracking-normal text-left uppercase align-middle bg-transparent border-b letter border-b-solid text-size-xxs whitespace-nowrap border-b-gray-200 text-slate-400 opacity-70">
                                        kategori</th>

                                </tr>
                            </thead>
                            <tbody>
                                @if ($notApproved->count() === 0)
                                    <tr>
                                        <td colspan="2"
                                            class="p-2 text-center align-middle bg-transparent border-b whitespace-nowrap">
                                            <h6 class="mb-0 leading-normal text-size-sm">
                                                Belum ada laporan yang meminta Persetujuan
                                            </h6>
                                        </td>
                                    </tr>
                                @endif
                                @foreach ($notApproved as $yetApproved)
                                    <tr>
                                        <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap">
                                            <div class="flex px-2 py-1">
                                                <div class="mr-2">
                                                    <h6 class="mb-0 leading-normal text-size-sm">
                                                        {{ $loop->iteration }}.
                                                    </h6>
                                                </div>
                                                <div class="flex flex-col justify-center">
                                                    <h6 class="mb-0 leading-normal text-size-sm">
                                                        {{ $yetApproved->name }}
                                                    </h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap">
                                            <span class="font-semibold leading-tight text-size-xs text-slate-400">
                                                @foreach ($yetApproved->category as $notapprove)
                                                    <div class="flex justify-between mr-2">
                                                        <div>
                                                            {{ $notapprove->name }}
                                                        </div>
                                                        <div>
                                                            <i wire:click='approved({{ $notapprove->pivot->id }})'
                                                                class="fa fa-check  hover:text-lime-600 hover:cursor-pointer mr-2"></i>
                                                            <i wire:click="destroy({{ $notapprove->pivot->id }})"
                                                                class="fa fa-times  hover:text-red-600
                                                            hover:cursor-pointer"></i>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </span>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-full max-w-full px-3 mt-6 lg:w-7/12 lg:flex-none">
            <div
                class="border-black/12.5 shadow-soft-xl relative flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border">
                <div class="border-black/12.5 mb-0 rounded-t-2xl border-b-0 border-solid bg-white p-6 pb-0">
                    <div class="flex flex-wrap justify-between mt-0 -mx-3">
                        <div class="flex-none max-w-full px-3 mt-0">
                            <h6>Laporan Kerja per Bulan</h6>
                            <span>
                                {{ $startMonth }} - {{ $endMonth }}
                            </span>
                            <p class="mb-0 leading-normal text-size-sm">
                                <i class="fa fa-check text-cyan-500"></i>
                                <span class="ml-1 font-semibold">{{ $userCategories->count() }} Teknisi</span>
                                melaporkan
                            </p>
                        </div>
                        <div>
                            <button type="button" wire:click="converToPDF"
                                class="inline-block px-8 py-2 m-0 text-xs font-bold text-center text-white uppercase align-middle transition-all border-0 rounded-lg cursor-pointer ease-soft-in leading-pro tracking-tight-soft bg-gradient-fuchsia shadow-soft-md bg-150 bg-x-25 hover:scale-102 active:opacity-85">pdf</button>
                        </div>
                    </div>
                </div>
                <div class="flex-auto p-6 px-0 pb-2">
                    <div class="overflow-x-auto">
                        <table class="items-center w-full mb-0 align-top border-gray-200 text-slate-500">
                            <thead class="align-bottom">
                                <tr>
                                    <th
                                        class="px-6 py-3 font-bold tracking-normal text-left uppercase align-middle bg-transparent border-b letter border-b-solid text-size-xxs whitespace-nowrap border-b-gray-200 text-slate-400 opacity-70">
                                        Nama</th>
                                    <th
                                        class="px-6 py-3 pl-2 font-bold tracking-normal text-left uppercase align-middle bg-transparent border-b letter border-b-solid text-size-xxs whitespace-nowrap border-b-gray-200 text-slate-400 opacity-70">
                                        kategori</th>
                                    <th
                                        class="px-6 py-3 font-bold tracking-normal text-center uppercase align-middle bg-transparent border-b letter border-b-solid text-size-xxs whitespace-nowrap border-b-gray-200 text-slate-400 opacity-70">
                                        skor</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($userCategories as $userCategory)
                                    <tr>
                                        <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap">
                                            <div class="flex px-2 py-1">
                                                <div class="mr-2">
                                                    <h6 class="mb-0 leading-normal text-size-sm">
                                                        {{ $loop->iteration }}.
                                                    </h6>
                                                </div>
                                                <div class="flex flex-col justify-center">
                                                    <h6 class="mb-0 leading-normal text-size-sm">
                                                        {{ $userCategory->name }}
                                                    </h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap">
                                            <span class="font-semibold leading-tight text-size-xs text-slate-400">
                                                @foreach ($userCategory->category->pluck('name')->countBy() as $name => $count)
                                                    {{ $name }} : {{ $count }} <br>
                                                @endforeach
                                            </span>
                                        </td>
                                        <td
                                            class="p-2 leading-normal text-center align-middle bg-transparent border-b text-size-sm whitespace-nowrap">
                                            <span
                                                class="font-semibold leading-tight text-size-xs">{{ $userCategory->category->sum('score') }}
                                            </span>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>


    </div>
</div>
