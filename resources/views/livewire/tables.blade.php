<div>
    <!-- table 1 -->

    <div class="flex flex-wrap -mx-3">
        <div class="flex-none w-full max-w-full px-3">
            <div
                class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-soft-xl rounded-2xl bg-clip-border">
                <div class="p-6 pb-0 mb-0 bg-white border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
                    <h6>Kategori table</h6>
                </div>
                <div class="flex-auto px-0 pt-0 pb-2">
                    <div class="p-0 overflow-x-auto">
                        <table class="items-center w-full mb-0 align-top border-gray-200 text-slate-500">
                            <thead class="align-bottom">
                                <tr>
                                    <th
                                        class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-size-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                        Nama Kategori</th>
                                    <th
                                        class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-size-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                        Skor</th>
                                    <th
                                        class="px-6 py-3 font-semibold capitalize align-middle bg-transparent border-b border-gray-200 border-solid shadow-none tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories as $category)
                                    <tr>
                                        <td
                                            class="pl-6 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                            <span
                                                class="font-semibold leading-tight text-size-xs text-slate-400">{{ $category->name }}</span>
                                        </td>
                                        <td
                                            class="p-2 text-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                            <span
                                                class="font-semibold leading-tight text-size-xs text-slate-400">{{ $category->score }}</span>
                                        </td>
                                        <th
                                            class="px-6 py-3 font-semibold capitalize align-middle bg-transparent border-b border-gray-200 border-solid shadow-none tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                        </th>

                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- card 2 -->

    <div class="flex flex-wrap -mx-3">
        <div class="flex-none w-full max-w-full px-3">
            <div
                class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-soft-xl rounded-2xl bg-clip-border">
                <div class="p-6 pb-0 mb-0 bg-white border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
                    <h6>Hasil Kerja Karyawan</h6>
                </div>
                <div class="flex-auto px-0 pt-0 pb-2">
                    <div class="p-0 overflow-x-auto">
                        <table class="items-center justify-center w-full mb-0 align-top border-gray-200 text-slate-500">
                            <thead class="align-bottom">
                                <tr>
                                    <th
                                        class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-size-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                        Karyawan</th>
                                    <th
                                        class="px-6 py-3 pl-2 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-size-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                        Kategori</th>
                                    <th
                                        class="px-6 py-3 pl-2 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-size-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                        Total Skor</th>
                                    <th
                                        class="px-6 py-3 font-semibold capitalize align-middle bg-transparent border-b border-gray-200 border-solid shadow-none tracking-none whitespace-nowrap">
                                    </th>
                                </tr>
                            </thead>
                            {{-- <tbody>
                                <tr>
                                    <td
                                        class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                        <div class="flex px-2">
                                            <div>
                                                <img src="../assets/img/small-logos/logo-spotify.svg"
                                                    class="inline-flex items-center justify-center mr-2 text-white transition-all duration-200 rounded-full ease-soft-in-out text-size-sm h-9 w-9"
                                                    alt="spotify" />
                                            </div>
                                            <div class="my-auto">
                                                <h6 class="mb-0 leading-normal text-size-sm">Spotify</h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td
                                        class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                        <p class="mb-0 font-semibold leading-normal text-size-sm">$2,500</p>
                                    </td>
                                    <td
                                        class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                        <span class="font-semibold leading-tight text-size-xs">working</span>
                                    </td>
                                    <td
                                        class="p-2 text-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                        <div class="flex items-center justify-center">
                                            <span class="mr-2 font-semibold leading-tight text-size-xs">60%</span>
                                            <div>
                                                <div
                                                    class="text-size-xs h-0.75 w-30 m-0 flex overflow-visible rounded-lg bg-gray-200">
                                                    <div class="duration-600 ease-soft bg-gradient-cyan -mt-0.38 -ml-px flex h-1.5 w-3/5 flex-col justify-center overflow-hidden whitespace-nowrap rounded bg-fuchsia-500 text-center text-white transition-all"
                                                        role="progressbar" aria-valuenow="60" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td
                                        class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                        <button
                                            class="inline-block px-6 py-3 mb-0 font-bold text-center uppercase align-middle transition-all bg-transparent border-0 rounded-lg shadow-none leading-pro text-size-xs ease-soft-in bg-150 tracking-tight-soft bg-x-25 text-slate-400">
                                            <i class="leading-tight fa fa-ellipsis-v text-size-xs"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                        <div class="flex px-2">
                                            <div>
                                                <img src="../assets/img/small-logos/logo-invision.svg"
                                                    class="inline-flex items-center justify-center mr-2 text-white transition-all duration-200 rounded-full ease-soft-in-out text-size-sm h-9 w-9"
                                                    alt="invision" />
                                            </div>
                                            <div class="my-auto">
                                                <h6 class="mb-0 leading-normal text-size-sm">Invision</h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td
                                        class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                        <p class="mb-0 font-semibold leading-normal text-size-sm">$5,000</p>
                                    </td>
                                    <td
                                        class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                        <span class="font-semibold leading-tight text-size-xs">done</span>
                                    </td>
                                    <td
                                        class="p-2 text-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                        <div class="flex items-center justify-center">
                                            <span class="mr-2 font-semibold leading-tight text-size-xs">100%</span>
                                            <div>
                                                <div
                                                    class="text-size-xs h-0.75 w-30 m-0 flex overflow-visible rounded-lg bg-gray-200">
                                                    <div class="duration-600 ease-soft bg-gradient-lime -mt-0.38 -ml-px flex h-1.5 w-full flex-col justify-center overflow-hidden whitespace-nowrap rounded bg-fuchsia-500 text-center text-white transition-all"
                                                        role="progressbar" aria-valuenow="100" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td
                                        class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                        <button
                                            class="inline-block px-6 py-3 mb-0 font-bold text-center uppercase align-middle transition-all bg-transparent border-0 rounded-lg shadow-none leading-pro text-size-xs ease-soft-in bg-150 tracking-tight-soft bg-x-25 text-slate-400"
                                            aria-haspopup="true" aria-expanded="false">
                                            <i class="leading-tight fa fa-ellipsis-v text-size-xs"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                        <div class="flex px-2">
                                            <div>
                                                <img src="../assets/img/small-logos/logo-jira.svg"
                                                    class="inline-flex items-center justify-center mr-2 text-white transition-all duration-200 rounded-full ease-soft-in-out text-size-sm h-9 w-9"
                                                    alt="jira" />
                                            </div>
                                            <div class="my-auto">
                                                <h6 class="mb-0 leading-normal text-size-sm">Jira</h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td
                                        class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                        <p class="mb-0 font-semibold leading-normal text-size-sm">$3,400</p>
                                    </td>
                                    <td
                                        class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                        <span class="font-semibold leading-tight text-size-xs">canceled</span>
                                    </td>
                                    <td
                                        class="p-2 text-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                        <div class="flex items-center justify-center">
                                            <span class="mr-2 font-semibold leading-tight text-size-xs">30%</span>
                                            <div>
                                                <div
                                                    class="text-size-xs h-0.75 w-30 m-0 flex overflow-visible rounded-lg bg-gray-200">
                                                    <div class="duration-600 ease-soft bg-gradient-red -mt-0.38 w-3/10 -ml-px flex h-1.5 flex-col justify-center overflow-hidden whitespace-nowrap rounded bg-fuchsia-500 text-center text-white transition-all"
                                                        role="progressbar" aria-valuenow="30" aria-valuemin="0"
                                                        aria-valuemax="30"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td
                                        class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                        <button
                                            class="inline-block px-6 py-3 mb-0 font-bold text-center uppercase align-middle transition-all bg-transparent border-0 rounded-lg shadow-none leading-pro text-size-xs ease-soft-in bg-150 tracking-tight-soft bg-x-25 text-slate-400"
                                            aria-haspopup="true" aria-expanded="false">
                                            <i class="leading-tight fa fa-ellipsis-v text-size-xs"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                        <div class="flex px-2">
                                            <div>
                                                <img src="../assets/img/small-logos/logo-slack.svg"
                                                    class="inline-flex items-center justify-center mr-2 text-white transition-all duration-200 rounded-full ease-soft-in-out text-size-sm h-9 w-9"
                                                    alt="slack" />
                                            </div>
                                            <div class="my-auto">
                                                <h6 class="mb-0 leading-normal text-size-sm">Slack</h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td
                                        class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                        <p class="mb-0 font-semibold leading-normal text-size-sm">$1,000</p>
                                    </td>
                                    <td
                                        class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                        <span class="font-semibold leading-tight text-size-xs">canceled</span>
                                    </td>
                                    <td
                                        class="p-2 text-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                        <div class="flex items-center justify-center">
                                            <span class="mr-2 font-semibold leading-tight text-size-xs">0%</span>
                                            <div>
                                                <div
                                                    class="text-size-xs h-0.75 w-30 m-0 flex overflow-visible rounded-lg bg-gray-200">
                                                    <div class="duration-600 ease-soft bg-gradient-lime -mt-0.38 -ml-px flex h-1.5 w-0 flex-col justify-center overflow-hidden whitespace-nowrap rounded bg-fuchsia-500 text-center text-white transition-all"
                                                        role="progressbar" aria-valuenow="0" aria-valuemin="0"
                                                        aria-valuemax="0"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td
                                        class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                        <button
                                            class="inline-block px-6 py-3 mb-0 font-bold text-center uppercase align-middle transition-all bg-transparent border-0 rounded-lg shadow-none leading-pro text-size-xs ease-soft-in bg-150 tracking-tight-soft bg-x-25 text-slate-400"
                                            aria-haspopup="true" aria-expanded="false">
                                            <i class="leading-tight fa fa-ellipsis-v text-size-xs"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                        <div class="flex px-2">
                                            <div>
                                                <img src="../assets/img/small-logos/logo-webdev.svg"
                                                    class="inline-flex items-center justify-center mr-2 text-white transition-all duration-200 rounded-full ease-soft-in-out text-size-sm h-9 w-9"
                                                    alt="webdev" />
                                            </div>
                                            <div class="my-auto">
                                                <h6 class="mb-0 leading-normal text-size-sm">Webdev</h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td
                                        class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                        <p class="mb-0 font-semibold leading-normal text-size-sm">$14,000</p>
                                    </td>
                                    <td
                                        class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                        <span class="font-semibold leading-tight text-size-xs">working</span>
                                    </td>
                                    <td
                                        class="p-2 text-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                        <div class="flex items-center justify-center">
                                            <span class="mr-2 font-semibold leading-tight text-size-xs">80%</span>
                                            <div>
                                                <div
                                                    class="text-size-xs h-0.75 w-30 m-0 flex overflow-visible rounded-lg bg-gray-200">
                                                    <div class="duration-600 ease-soft bg-gradient-cyan -mt-0.38 -ml-px flex h-1.5 w-4/5 flex-col justify-center overflow-hidden whitespace-nowrap rounded bg-fuchsia-500 text-center text-white transition-all"
                                                        role="progressbar" aria-valuenow="80" aria-valuemin="0"
                                                        aria-valuemax="80"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td
                                        class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                        <button
                                            class="inline-block px-6 py-3 mb-0 font-bold text-center uppercase align-middle transition-all bg-transparent border-0 rounded-lg shadow-none leading-pro text-size-xs ease-soft-in bg-150 tracking-tight-soft bg-x-25 text-slate-400"
                                            aria-haspopup="true" aria-expanded="false">
                                            <i class="leading-tight fa fa-ellipsis-v text-size-xs"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        class="p-2 align-middle bg-transparent border-b-0 whitespace-nowrap shadow-transparent">
                                        <div class="flex px-2">
                                            <div>
                                                <img src="../assets/img/small-logos/logo-xd.svg"
                                                    class="inline-flex items-center justify-center mr-2 text-white transition-all duration-200 rounded-full ease-soft-in-out text-size-sm h-9 w-9"
                                                    alt="xd" />
                                            </div>
                                            <div class="my-auto">
                                                <h6 class="mb-0 leading-normal text-size-sm">Adobe XD</h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td
                                        class="p-2 align-middle bg-transparent border-b-0 whitespace-nowrap shadow-transparent">
                                        <p class="mb-0 font-semibold leading-normal text-size-sm">$2,300</p>
                                    </td>
                                    <td
                                        class="p-2 align-middle bg-transparent border-b-0 whitespace-nowrap shadow-transparent">
                                        <span class="font-semibold leading-tight text-size-xs">done</span>
                                    </td>
                                    <td
                                        class="p-2 text-center align-middle bg-transparent border-b-0 whitespace-nowrap shadow-transparent">
                                        <div class="flex items-center justify-center">
                                            <span class="mr-2 font-semibold leading-tight text-size-xs">100%</span>
                                            <div>
                                                <div
                                                    class="text-size-xs h-0.75 w-30 m-0 flex overflow-visible rounded-lg bg-gray-200">
                                                    <div class="duration-600 ease-soft bg-gradient-lime -mt-0.38 -ml-px flex h-1.5 w-full flex-col justify-center overflow-hidden whitespace-nowrap rounded bg-fuchsia-500 text-center text-white transition-all"
                                                        role="progressbar" aria-valuenow="100" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td
                                        class="p-2 align-middle bg-transparent border-b-0 whitespace-nowrap shadow-transparent">
                                        <button
                                            class="inline-block px-6 py-3 mb-0 font-bold text-center uppercase align-middle transition-all bg-transparent border-0 rounded-lg shadow-none leading-pro text-size-xs ease-soft-in bg-150 tracking-tight-soft bg-x-25 text-slate-400"
                                            aria-haspopup="true" aria-expanded="false">
                                            <i class="leading-tight fa fa-ellipsis-v text-size-xs"></i>
                                        </button>
                                    </td>
                                </tr>
                            </tbody> --}}
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
