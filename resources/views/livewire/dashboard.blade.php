<div>
    <!-- row 1 -->
    <div class="flex flex-wrap -mx-3">
        <!-- card1 -->
        {{-- <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4">
            <div class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
                <div class="flex-auto p-4">
                    <div class="flex flex-row -mx-3">
                        <div class="flex-none w-2/3 max-w-full px-3">
                            <div>
                                <p class="mb-0 font-sans font-semibold leading-normal text-size-sm">Today's Money</p>
                                <h5 class="mb-0 font-bold">
                                    $53,000
                                    <span
                                        class="leading-normal text-size-sm font-weight-bolder text-lime-500">+55%</span>
                                </h5>
                            </div>
                        </div>
                        <div class="px-3 text-right basis-1/3">
                            <div class="inline-block w-12 h-12 text-center rounded-lg bg-gradient-fuchsia">
                                <i class="ni ni-money-coins text-size-lg relative top-3.5 text-white"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}

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

        <!-- card3 -->
        {{-- <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4">
            <div class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
                <div class="flex-auto p-4">
                    <div class="flex flex-row -mx-3">
                        <div class="flex-none w-2/3 max-w-full px-3">
                            <div>
                                <p class="mb-0 font-sans font-semibold leading-normal text-size-sm">New Clients</p>
                                <h5 class="mb-0 font-bold">
                                    +3,462
                                    <span class="leading-normal text-red-600 text-size-sm font-weight-bolder">-2%</span>
                                </h5>
                            </div>
                        </div>
                        <div class="px-3 text-right basis-1/3">
                            <div class="inline-block w-12 h-12 text-center rounded-lg bg-gradient-fuchsia">
                                <i class="ni ni-paper-diploma text-size-lg relative top-3.5 text-white"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}

        <!-- card4 -->
        {{-- <div class="w-full max-w-full px-3 sm:w-1/2 sm:flex-none xl:w-1/4">
            <div class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
                <div class="flex-auto p-4">
                    <div class="flex flex-row -mx-3">
                        <div class="flex-none w-2/3 max-w-full px-3">
                            <div>
                                <p class="mb-0 font-sans font-semibold leading-normal text-size-sm">Sales</p>
                                <h5 class="mb-0 font-bold">
                                    $103,430
                                    <span
                                        class="leading-normal text-size-sm font-weight-bolder text-lime-500">+5%</span>
                                </h5>
                            </div>
                        </div>
                        <div class="px-3 text-right basis-1/3">
                            <div class="inline-block w-12 h-12 text-center rounded-lg bg-gradient-fuchsia">
                                <i class="ni ni-cart text-size-lg relative top-3.5 text-white"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
    </div>

    <!-- cards row 4 -->
    <div class="flex flex-wrap my-6 -mx-3">
        <div class="w-full max-w-full px-3 mt-0 mb-6 lg:mb-0 lg:w-5/12 lg:flex-none">
            <div
                class="border-black/12.5 shadow-soft-xl relative flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border">
                <div class="border-black/12.5 mb-0 rounded-t-2xl border-b-0 border-solid bg-white p-6 pb-0">
                    <div class="flex flex-wrap mt-0 -mx-3">
                        <div class="flex-none w-7/12 max-w-full px-3 mt-0 lg:w-1/2 lg:flex-none">
                            <h6>Laporan Kerja Per Hari</h6>
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
        <div class="w-full max-w-full px-3 mt-0 lg:w-7/12 lg:flex-none">
            <div
                class="border-black/12.5 shadow-soft-xl relative flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border">
                <div class="border-black/12.5 mb-0 rounded-t-2xl border-b-0 border-solid bg-white p-6 pb-0">
                    <div class="flex flex-wrap mt-0 -mx-3">
                        <div class="flex-none w-7/12 max-w-full px-3 mt-0 lg:w-1/2 lg:flex-none">
                            <h6>Laporan Kerja per Bulan</h6>
                            <p class="mb-0 leading-normal text-size-sm">
                                <i class="fa fa-check text-cyan-500"></i>
                                <span class="ml-1 font-semibold">{{ $userCategories->count() }} Teknisi</span>
                                melaporkan
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
                                                    <h6 class="mb-0 leading-normal text-size-sm">{{ $loop->iteration }}.
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
                                {{-- <tr>
                                    <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap">
                                        <div class="flex px-2 py-1">
                                            <div>
                                                <img src="../assets/img/small-logos/logo-atlassian.svg"
                                                    class="inline-flex items-center justify-center mr-4 text-white transition-all duration-200 ease-soft-in-out text-size-sm h-9 w-9 rounded-xl"
                                                    alt="atlassian" />
                                            </div>
                                            <div class="flex flex-col justify-center">
                                                <h6 class="mb-0 leading-normal text-size-sm">Add Progress Track
                                                </h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap">
                                        <div class="mt-2 avatar-group">
                                            <a href="javascript:;"
                                                class="relative z-20 inline-flex items-center justify-center w-6 h-6 text-white transition-all duration-200 border-2 border-white border-solid rounded-full ease-soft-in-out text-size-xs hover:z-30"
                                                data-target="tooltip_trigger" data-placement="bottom">
                                                <img src="../assets/img/team-2.jpg" class="w-full rounded-full"
                                                    alt="team5" />
                                            </a>
                                            <div data-target="tooltip"
                                                class="hidden px-2 py-1 text-white bg-black rounded-lg text-size-sm"
                                                role="tooltip">
                                                Romina Hadid
                                                <div class="invisible absolute h-2 w-2 bg-inherit before:visible before:absolute before:h-2 before:w-2 before:rotate-45 before:bg-inherit before:content-['']"
                                                    data-popper-arrow></div>
                                            </div>
                                            <a href="javascript:;"
                                                class="relative z-20 inline-flex items-center justify-center w-6 h-6 -ml-4 text-white transition-all duration-200 border-2 border-white border-solid rounded-full ease-soft-in-out text-size-xs hover:z-30"
                                                data-target="tooltip_trigger" data-placement="bottom">
                                                <img src="../assets/img/team-4.jpg" class="w-full rounded-full"
                                                    alt="team6" />
                                            </a>
                                            <div data-target="tooltip"
                                                class="hidden px-2 py-1 text-white bg-black rounded-lg text-size-sm"
                                                role="tooltip">
                                                Jessica Doe
                                                <div class="invisible absolute h-2 w-2 bg-inherit before:visible before:absolute before:h-2 before:w-2 before:rotate-45 before:bg-inherit before:content-['']"
                                                    data-popper-arrow></div>
                                            </div>
                                        </div>
                                    </td>
                                    <td
                                        class="p-2 leading-normal text-center align-middle bg-transparent border-b text-size-sm whitespace-nowrap">
                                        <span class="font-semibold leading-tight text-size-xs"> $3,000 </span>
                                    </td>
                                    <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap">
                                        <div class="w-3/4 mx-auto">
                                            <div>
                                                <div>
                                                    <span class="font-semibold leading-tight text-size-xs">10%</span>
                                                </div>
                                            </div>
                                            <div
                                                class="text-size-xs h-0.75 w-30 m-0 flex overflow-visible rounded-lg bg-gray-200">
                                                <div class="duration-600 ease-soft bg-gradient-cyan -mt-0.38 w-1/10 -ml-px flex h-1.5 flex-col justify-center overflow-hidden whitespace-nowrap rounded bg-fuchsia-500 text-center text-white transition-all"
                                                    role="progressbar" aria-valuenow="10" aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap">
                                        <div class="flex px-2 py-1">
                                            <div>
                                                <img src="../assets/img/small-logos/logo-slack.svg"
                                                    class="inline-flex items-center justify-center mr-4 text-white transition-all duration-200 ease-soft-in-out text-size-sm h-9 w-9 rounded-xl"
                                                    alt="team7" />
                                            </div>
                                            <div class="flex flex-col justify-center">
                                                <h6 class="mb-0 leading-normal text-size-sm">Fix Platform Errors
                                                </h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap">
                                        <div class="mt-2 avatar-group">
                                            <a href="javascript:;"
                                                class="relative z-20 inline-flex items-center justify-center w-6 h-6 text-white transition-all duration-200 border-2 border-white border-solid rounded-full ease-soft-in-out text-size-xs hover:z-30"
                                                data-target="tooltip_trigger" data-placement="bottom">
                                                <img src="../assets/img/team-3.jpg" class="w-full rounded-full"
                                                    alt="team8" />
                                            </a>
                                            <div data-target="tooltip"
                                                class="hidden px-2 py-1 text-white bg-black rounded-lg text-size-sm"
                                                role="tooltip">
                                                Romina Hadid
                                                <div class="invisible absolute h-2 w-2 bg-inherit before:visible before:absolute before:h-2 before:w-2 before:rotate-45 before:bg-inherit before:content-['']"
                                                    data-popper-arrow></div>
                                            </div>
                                            <a href="javascript:;"
                                                class="relative z-20 inline-flex items-center justify-center w-6 h-6 -ml-4 text-white transition-all duration-200 border-2 border-white border-solid rounded-full ease-soft-in-out text-size-xs hover:z-30"
                                                data-target="tooltip_trigger" data-placement="bottom">
                                                <img src="../assets/img/team-1.jpg" class="w-full rounded-full"
                                                    alt="team9" />
                                            </a>
                                            <div data-target="tooltip"
                                                class="hidden px-2 py-1 text-white bg-black rounded-lg text-size-sm"
                                                role="tooltip">
                                                Jessica Doe
                                                <div class="invisible absolute h-2 w-2 bg-inherit before:visible before:absolute before:h-2 before:w-2 before:rotate-45 before:bg-inherit before:content-['']"
                                                    data-popper-arrow></div>
                                            </div>
                                        </div>
                                    </td>
                                    <td
                                        class="p-2 leading-normal text-center align-middle bg-transparent border-b text-size-sm whitespace-nowrap">
                                        <span class="font-semibold leading-tight text-size-xs"> Not set </span>
                                    </td>
                                    <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap">
                                        <div class="w-3/4 mx-auto">
                                            <div>
                                                <div>
                                                    <span class="font-semibold leading-tight text-size-xs">100%</span>
                                                </div>
                                            </div>
                                            <div
                                                class="text-size-xs h-0.75 w-30 m-0 flex overflow-visible rounded-lg bg-gray-200">
                                                <div class="duration-600 ease-soft bg-gradient-lime -mt-0.38 -ml-px flex h-1.5 w-full flex-col justify-center overflow-hidden whitespace-nowrap rounded bg-fuchsia-500 text-center text-white transition-all"
                                                    role="progressbar" aria-valuenow="100" aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap">
                                        <div class="flex px-2 py-1">
                                            <div>
                                                <img src="../assets/img/small-logos/logo-spotify.svg"
                                                    class="inline-flex items-center justify-center mr-4 text-white transition-all duration-200 ease-soft-in-out text-size-sm h-9 w-9 rounded-xl"
                                                    alt="spotify" />
                                            </div>
                                            <div class="flex flex-col justify-center">
                                                <h6 class="mb-0 leading-normal text-size-sm">Launch our Mobile App
                                                </h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap">
                                        <div class="mt-2 avatar-group">
                                            <a href="javascript:;"
                                                class="relative z-20 inline-flex items-center justify-center w-6 h-6 text-white transition-all duration-200 border-2 border-white border-solid rounded-full ease-soft-in-out text-size-xs hover:z-30"
                                                data-target="tooltip_trigger" data-placement="bottom">
                                                <img src="../assets/img/team-4.jpg" class="w-full rounded-full"
                                                    alt="user1" />
                                            </a>
                                            <div data-target="tooltip"
                                                class="hidden px-2 py-1 text-white bg-black rounded-lg text-size-sm"
                                                role="tooltip">
                                                Ryan Tompson
                                                <div class="invisible absolute h-2 w-2 bg-inherit before:visible before:absolute before:h-2 before:w-2 before:rotate-45 before:bg-inherit before:content-['']"
                                                    data-popper-arrow></div>
                                            </div>
                                            <a href="javascript:;"
                                                class="relative z-20 inline-flex items-center justify-center w-6 h-6 -ml-4 text-white transition-all duration-200 border-2 border-white border-solid rounded-full ease-soft-in-out text-size-xs hover:z-30"
                                                data-target="tooltip_trigger" data-placement="bottom">
                                                <img src="../assets/img/team-3.jpg" class="w-full rounded-full"
                                                    alt="user2" />
                                            </a>
                                            <div data-target="tooltip"
                                                class="hidden px-2 py-1 text-white bg-black rounded-lg text-size-sm"
                                                role="tooltip">
                                                Romina Hadid
                                                <div class="invisible absolute h-2 w-2 bg-inherit before:visible before:absolute before:h-2 before:w-2 before:rotate-45 before:bg-inherit before:content-['']"
                                                    data-popper-arrow></div>
                                            </div>
                                            <a href="javascript:;"
                                                class="relative z-20 inline-flex items-center justify-center w-6 h-6 -ml-4 text-white transition-all duration-200 border-2 border-white border-solid rounded-full ease-soft-in-out text-size-xs hover:z-30"
                                                data-target="tooltip_trigger" data-placement="bottom">
                                                <img src="../assets/img/team-4.jpg" class="w-full rounded-full"
                                                    alt="user3" />
                                            </a>
                                            <div data-target="tooltip"
                                                class="hidden px-2 py-1 text-white bg-black rounded-lg text-size-sm"
                                                role="tooltip">
                                                Alexander Smith
                                                <div class="invisible absolute h-2 w-2 bg-inherit before:visible before:absolute before:h-2 before:w-2 before:rotate-45 before:bg-inherit before:content-['']"
                                                    data-popper-arrow></div>
                                            </div>
                                            <a href="javascript:;"
                                                class="relative z-20 inline-flex items-center justify-center w-6 h-6 -ml-4 text-white transition-all duration-200 border-2 border-white border-solid rounded-full ease-soft-in-out text-size-xs hover:z-30"
                                                data-target="tooltip_trigger" data-placement="bottom">
                                                <img src="../assets/img/team-1.jpg" class="w-full rounded-full"
                                                    alt="user4" />
                                            </a>
                                            <div data-target="tooltip"
                                                class="hidden px-2 py-1 text-white bg-black rounded-lg text-size-sm"
                                                role="tooltip">
                                                Jessica Doe
                                                <div class="invisible absolute h-2 w-2 bg-inherit before:visible before:absolute before:h-2 before:w-2 before:rotate-45 before:bg-inherit before:content-['']"
                                                    data-popper-arrow></div>
                                            </div>
                                        </div>
                                    </td>
                                    <td
                                        class="p-2 leading-normal text-center align-middle bg-transparent border-b text-size-sm whitespace-nowrap">
                                        <span class="font-semibold leading-tight text-size-xs"> $20,500 </span>
                                    </td>
                                    <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap">
                                        <div class="w-3/4 mx-auto">
                                            <div>
                                                <div>
                                                    <span class="font-semibold leading-tight text-size-xs">100%</span>
                                                </div>
                                            </div>
                                            <div
                                                class="text-size-xs h-0.75 w-30 m-0 flex overflow-visible rounded-lg bg-gray-200">
                                                <div class="duration-600 ease-soft bg-gradient-lime -mt-0.38 -ml-px flex h-1.5 w-full flex-col justify-center overflow-hidden whitespace-nowrap rounded bg-fuchsia-500 text-center text-white transition-all"
                                                    role="progressbar" aria-valuenow="100" aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap">
                                        <div class="flex px-2 py-1">
                                            <div>
                                                <img src="../assets/img/small-logos/logo-jira.svg"
                                                    class="inline-flex items-center justify-center mr-4 text-white transition-all duration-200 ease-soft-in-out text-size-sm h-9 w-9 rounded-xl"
                                                    alt="jira" />
                                            </div>
                                            <div class="flex flex-col justify-center">
                                                <h6 class="mb-0 leading-normal text-size-sm">Add the New Pricing
                                                    Page</h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap">
                                        <div class="mt-2 avatar-group">
                                            <a href="javascript:;"
                                                class="relative z-20 inline-flex items-center justify-center w-6 h-6 text-white transition-all duration-200 border-2 border-white border-solid rounded-full ease-soft-in-out text-size-xs hover:z-30"
                                                data-target="tooltip_trigger" data-placement="bottom">
                                                <img src="../assets/img/team-4.jpg" class="w-full rounded-full"
                                                    alt="user5" />
                                            </a>
                                            <div data-target="tooltip"
                                                class="hidden px-2 py-1 text-white bg-black rounded-lg text-size-sm"
                                                role="tooltip">
                                                Ryan Tompson
                                                <div class="invisible absolute h-2 w-2 bg-inherit before:visible before:absolute before:h-2 before:w-2 before:rotate-45 before:bg-inherit before:content-['']"
                                                    data-popper-arrow></div>
                                            </div>
                                        </div>
                                    </td>
                                    <td
                                        class="p-2 leading-normal text-center align-middle bg-transparent border-b text-size-sm whitespace-nowrap">
                                        <span class="font-semibold leading-tight text-size-xs"> $500 </span>
                                    </td>
                                    <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap">
                                        <div class="w-3/4 mx-auto">
                                            <div>
                                                <div>
                                                    <span class="font-semibold leading-tight text-size-xs">25%</span>
                                                </div>
                                            </div>
                                            <div
                                                class="text-size-xs h-0.75 w-30 m-0 flex overflow-visible rounded-lg bg-gray-200">
                                                <div class="duration-600 ease-soft bg-gradient-cyan -mt-0.38 -ml-px flex h-1.5 w-1/4 flex-col justify-center overflow-hidden whitespace-nowrap rounded bg-fuchsia-500 text-center text-white transition-all"
                                                    role="progressbar" aria-valuenow="25" aria-valuemin="0"
                                                    aria-valuemax="25"></div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="p-2 align-middle bg-transparent border-0 whitespace-nowrap">
                                        <div class="flex px-2 py-1">
                                            <div>
                                                <img src="../assets/img/small-logos/logo-invision.svg"
                                                    class="inline-flex items-center justify-center mr-4 text-white transition-all duration-200 ease-soft-in-out text-size-sm h-9 w-9 rounded-xl"
                                                    alt="invision" />
                                            </div>
                                            <div class="flex flex-col justify-center">
                                                <h6 class="mb-0 leading-normal text-size-sm">Redesign New Online
                                                    Shop</h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="p-2 align-middle bg-transparent border-0 whitespace-nowrap">
                                        <div class="mt-2 avatar-group">
                                            <a href="javascript:;"
                                                class="relative z-20 inline-flex items-center justify-center w-6 h-6 text-white transition-all duration-200 border-2 border-white border-solid rounded-full ease-soft-in-out text-size-xs hover:z-30"
                                                data-target="tooltip_trigger" data-placement="bottom">
                                                <img src="../assets/img/team-1.jpg" class="w-full rounded-full"
                                                    alt="user6" />
                                            </a>
                                            <div data-target="tooltip"
                                                class="hidden px-2 py-1 text-white bg-black rounded-lg text-size-sm"
                                                role="tooltip">
                                                Ryan Tompson
                                                <div class="invisible absolute h-2 w-2 bg-inherit before:visible before:absolute before:h-2 before:w-2 before:rotate-45 before:bg-inherit before:content-['']"
                                                    data-popper-arrow></div>
                                            </div>
                                            <a href="javascript:;"
                                                class="relative z-20 inline-flex items-center justify-center w-6 h-6 -ml-4 text-white transition-all duration-200 border-2 border-white border-solid rounded-full ease-soft-in-out text-size-xs hover:z-30"
                                                data-target="tooltip_trigger" data-placement="bottom">
                                                <img src="../assets/img/team-4.jpg" class="w-full rounded-full"
                                                    alt="user7" />
                                            </a>
                                            <div data-target="tooltip"
                                                class="hidden px-2 py-1 text-white bg-black rounded-lg text-size-sm"
                                                role="tooltip">
                                                Jessica Doe
                                                <div class="invisible absolute h-2 w-2 bg-inherit before:visible before:absolute before:h-2 before:w-2 before:rotate-45 before:bg-inherit before:content-['']"
                                                    data-popper-arrow></div>
                                            </div>
                                        </div>
                                    </td>
                                    <td
                                        class="p-2 leading-normal text-center align-middle bg-transparent border-0 text-size-sm whitespace-nowrap">
                                        <span class="font-semibold leading-tight text-size-xs"> $2,000 </span>
                                    </td>
                                    <td class="p-2 align-middle bg-transparent border-0 whitespace-nowrap">
                                        <div class="w-3/4 mx-auto">
                                            <div>
                                                <div>
                                                    <span class="font-semibold leading-tight text-size-xs">40%</span>
                                                </div>
                                            </div>
                                            <div
                                                class="text-size-xs h-0.75 w-30 m-0 flex overflow-visible rounded-lg bg-gray-200">
                                                <div class="duration-600 ease-soft bg-gradient-cyan -mt-0.38 -ml-px flex h-1.5 w-2/5 flex-col justify-center overflow-hidden whitespace-nowrap rounded bg-fuchsia-500 text-center text-white transition-all"
                                                    role="progressbar" aria-valuenow="40" aria-valuemin="0"
                                                    aria-valuemax="40"></div>
                                            </div>
                                        </div>
                                    </td>
                                </tr> --}}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
