<div>
    <div class="w-full max-w-full px-3 mt-6 lg:w-12/12 lg:flex-none">
        <div
            class="border-black/12.5 shadow-soft-xl relative flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border">
            <div class="border-black/12.5 mb-0 rounded-t-2xl border-b-0 border-solid bg-white p-6 pb-0">
                <div class="flex flex-wrap mt-0 -mx-3">
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
