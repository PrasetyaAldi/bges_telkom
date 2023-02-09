<!-- sidenav  -->
@if (Request::is('virtual-reality'))
    <aside
        class="fixed inset-y-0 xl:animate-fade-up z-10 xl:scale-60 xl:left-[18%] flex-wrap items-center justify-between block w-full p-0 my-4 xl:ml-4 overflow-y-auto antialiased transition-transform duration-200 -translate-x-full bg-white border-0 shadow-none max-w-62.5 ease-nav-brand rounded-2xl xl:translate-x-0">
    @else
        <aside
            class="max-w-62.5 ease-nav-brand z-10 fixed inset-y-0 my-4 block w-full flex-wrap items-center justify-between overflow-y-auto rounded-2xl border-0 bg-white p-0 antialiased shadow-none transition-transform duration-200 

    {{ Request::is('rtl') ? 'xl:right-0 mr-4 translate-x-full' : 'xl:left-0 ml-4 -translate-x-full ' }} xl:translate-x-0 xl:bg-transparent
    ">
@endif
<div class="h-19.5">
    <i class="absolute top-0 right-0 hidden p-4 opacity-50 cursor-pointer fas fa-times text-slate-400 xl:hidden"
        sidenav-close></i>
    <a class="block px-8 py-6 m-0 text-size-sm whitespace-nowrap text-slate-700" href="{{ url('') }}"
        target="_blank">
        <img src="../assets/img/logo_telkom.png"
            class="inline h-full max-w-full transition-all duration-200 ease-nav-brand max-h-8" alt="main_logo" />
        <span
            class="{{ Request::is('rtl') ? 'mr-1' : 'ml-1' }} font-semibold transition-all duration-200 ease-nav-brand">BGES
            Telkom</span>
    </a>
</div>

<hr />

<div class="items-center block w-auto max-h-screen overflow-auto h-sidenav grow basis-full">
    <ul class="flex flex-col pl-0 mb-0">
        @if (!Request::is('karyawan'))
            <li class="mt-0.5 w-full">
                <a class="py-2.7 text-size-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors
                {{ Request::is('dashboard') ? 'shadow-soft-xl rounded-lg bg-white font-semibold text-slate-700' : '' }}"
                    href="{{ url('dashboard') }}">

                    <div
                        class="{{ Request::is('dashboard') ? ' bg-gradient-fuchsia' : '' }} shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center stroke-0 text-center xl:p-2.5">
                        <svg width="12px" height="12px" viewBox="0 0 45 40" version="1.1"
                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <title>shop</title>
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <g transform="translate(-1716.000000, -439.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                    <g transform="translate(1716.000000, 291.000000)">
                                        <g transform="translate(0.000000, 148.000000)">
                                            <path class="{{ Request::is('dashboard') ? '' : 'fill-slate-800' }} "
                                                d="M46.7199583,10.7414583 L40.8449583,0.949791667 C40.4909749,0.360605034 39.8540131,0 39.1666667,0 L7.83333333,0 C7.1459869,0 6.50902508,0.360605034 6.15504167,0.949791667 L0.280041667,10.7414583 C0.0969176761,11.0460037 -1.23209662e-05,11.3946378 -1.23209662e-05,11.75 C-0.00758042603,16.0663731 3.48367543,19.5725301 7.80004167,19.5833333 L7.81570833,19.5833333 C9.75003686,19.5882688 11.6168794,18.8726691 13.0522917,17.5760417 C16.0171492,20.2556967 20.5292675,20.2556967 23.494125,17.5760417 C26.4604562,20.2616016 30.9794188,20.2616016 33.94575,17.5760417 C36.2421905,19.6477597 39.5441143,20.1708521 42.3684437,18.9103691 C45.1927731,17.649886 47.0084685,14.8428276 47.0000295,11.75 C47.0000295,11.3946378 46.9030823,11.0460037 46.7199583,10.7414583 Z">
                                            </path>
                                            <path class="{{ Request::is('dashboard') ? '' : 'fill-slate-800' }}"
                                                d="M39.198,22.4912623 C37.3776246,22.4928106 35.5817531,22.0149171 33.951625,21.0951667 L33.92225,21.1107282 C31.1430221,22.6838032 27.9255001,22.9318916 24.9844167,21.7998837 C24.4750389,21.605469 23.9777983,21.3722567 23.4960833,21.1018359 L23.4745417,21.1129513 C20.6961809,22.6871153 17.4786145,22.9344611 14.5386667,21.7998837 C14.029926,21.6054643 13.533337,21.3722507 13.0522917,21.1018359 C11.4250962,22.0190609 9.63246555,22.4947009 7.81570833,22.4912623 C7.16510551,22.4842162 6.51607673,22.4173045 5.875,22.2911849 L5.875,44.7220845 C5.875,45.9498589 6.7517757,46.9451667 7.83333333,46.9451667 L19.5833333,46.9451667 L19.5833333,33.6066734 L27.4166667,33.6066734 L27.4166667,46.9451667 L39.1666667,46.9451667 C40.2482243,46.9451667 41.125,45.9498589 41.125,44.7220845 L41.125,22.2822926 C40.4887822,22.4116582 39.8442868,22.4815492 39.198,22.4912623 Z">
                                            </path>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </svg>
                    </div>
                    <span
                        class="{{ Request::is('rtl') ? 'mr-1' : 'ml-1' }} duration-300 opacity-100 pointer-events-none ease-soft">Dashboard</span>
                </a>
            </li>
            <li class="w-full mt-4">
                <h6
                    class="{{ Request::is('rtl') ? 'pr-6 mr-2' : 'pl-6 ml-2' }} font-bold leading-tight uppercase text-size-xs opacity-60">
                    Employee</h6>
            </li>

            <li class="mt-0.5 w-full">
                <a class="py-2.7 text-size-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors
              {{ Request::is('user-management') ? 'shadow-soft-xl rounded-lg bg-white font-semibold text-slate-700' : '' }}"
                    href="{{ url('user-management') }}">

                    <div
                        class="{{ Request::is('user-management') ? ' bg-gradient-fuchsia' : '' }} shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center stroke-0 text-center xl:p-2.5">

                        <i style="font-size: 1rem;"
                            class="fas fa-lg fa-list-ul ps-2 pe-2 text-center text-dark {{ Request::is('user-management') ? 'text-white' : 'text-dark' }} "
                            aria-hidden="true"></i>

                    </div>
                    <span
                        class="{{ Request::is('rtl') ? 'mr-1' : 'ml-1' }} duration-300 opacity-100 pointer-events-none ease-soft">Employee
                        Management</span>
                </a>
            </li>

            <li class="w-full mt-4">
                <h6
                    class="{{ Request::is('rtl') ? 'pr-6 mr-2' : 'pl-6 ml-2' }} font-bold leading-tight uppercase text-size-xs opacity-60">
                    Job / Category</h6>
            </li>


            <li class="mt-0.5 w-full">
                <a class="py-2.7 text-size-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors
              {{ Request::is('tables') ? 'shadow-soft-xl rounded-lg bg-white font-semibold text-slate-700' : '' }}"
                    href="{{ url('tables') }}">
                    <div
                        class="{{ Request::is('tables') ? ' bg-gradient-fuchsia' : '' }} shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center stroke-0 text-center xl:p-2.5">

                        <svg width="12px" height="12px" viewBox="0 0 42 42" version="1.1"
                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <title>office</title>
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <g transform="translate(-1869.000000, -293.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                    <g transform="translate(1716.000000, 291.000000)">
                                        <g transform="translate(153.000000, 2.000000)">
                                            <path class="{{ Request::is('tables') ? '' : 'fill-slate-800' }}"
                                                d="M12.25,17.5 L8.75,17.5 L8.75,1.75 C8.75,0.78225 9.53225,0 10.5,0 L31.5,0 C32.46775,0 33.25,0.78225 33.25,1.75 L33.25,12.25 L29.75,12.25 L29.75,3.5 L12.25,3.5 L12.25,17.5 Z">
                                            </path>
                                            <path class="{{ Request::is('tables') ? '' : 'fill-slate-800' }}"
                                                d="M40.25,14 L24.5,14 C23.53225,14 22.75,14.78225 22.75,15.75 L22.75,38.5 L19.25,38.5 L19.25,22.75 C19.25,21.78225 18.46775,21 17.5,21 L1.75,21 C0.78225,21 0,21.78225 0,22.75 L0,40.25 C0,41.21775 0.78225,42 1.75,42 L40.25,42 C41.21775,42 42,41.21775 42,40.25 L42,15.75 C42,14.78225 41.21775,14 40.25,14 Z M12.25,36.75 L7,36.75 L7,33.25 L12.25,33.25 L12.25,36.75 Z M12.25,29.75 L7,29.75 L7,26.25 L12.25,26.25 L12.25,29.75 Z M35,36.75 L29.75,36.75 L29.75,33.25 L35,33.25 L35,36.75 Z M35,29.75 L29.75,29.75 L29.75,26.25 L35,26.25 L35,29.75 Z M35,22.75 L29.75,22.75 L29.75,19.25 L35,19.25 L35,22.75 Z">
                                            </path>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </svg>


                    </div>
                    <span
                        class="{{ Request::is('rtl') ? 'mr-1' : 'ml-1' }} duration-300 opacity-100 pointer-events-none ease-soft">Kategori</span>
                </a>
            </li>
        @endif


        {{-- <li class="mt-0.5 w-full">
            <a class="py-2.7 text-size-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors
              {{ Request::is('billing') ? 'shadow-soft-xl rounded-lg bg-white font-semibold text-slate-700' : '' }}"
                href="{{ url('billing') }}">
                <div
                    class="{{ Request::is('billing') ? ' bg-gradient-fuchsia' : '' }} shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center stroke-0 text-center xl:p-2.5">

                    <svg width="12px" height="12px" viewBox="0 0 43 36" version="1.1"
                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <title>credit-card</title>
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g transform="translate(-2169.000000, -745.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                <g transform="translate(1716.000000, 291.000000)">
                                    <g transform="translate(453.000000, 454.000000)">
                                        <path class="{{ Request::is('billing') ? '' : 'fill-slate-800' }}"
                                            d="M43,10.7482083 L43,3.58333333 C43,1.60354167 41.3964583,0 39.4166667,0 L3.58333333,0 C1.60354167,0 0,1.60354167 0,3.58333333 L0,10.7482083 L43,10.7482083 Z">
                                        </path>
                                        <path class="{{ Request::is('billing') ? '' : 'fill-slate-800' }}"
                                            d="M0,16.125 L0,32.25 C0,34.2297917 1.60354167,35.8333333 3.58333333,35.8333333 L39.4166667,35.8333333 C41.3964583,35.8333333 43,34.2297917 43,32.25 L43,16.125 L0,16.125 Z M19.7083333,26.875 L7.16666667,26.875 L7.16666667,23.2916667 L19.7083333,23.2916667 L19.7083333,26.875 Z M35.8333333,26.875 L28.6666667,26.875 L28.6666667,23.2916667 L35.8333333,23.2916667 L35.8333333,26.875 Z">
                                        </path>
                                    </g>
                                </g>
                            </g>
                        </g>
                    </svg>

                </div>
                <span
                    class="{{ Request::is('rtl') ? 'mr-1' : 'ml-1' }} duration-300 opacity-100 pointer-events-none ease-soft">Billing</span>
            </a>
        </li>


        <li class="mt-0.5 w-full">
            <a class="py-2.7 text-size-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors
              {{ Request::is('virtual-reality') ? 'shadow-soft-xl rounded-lg bg-white font-semibold text-slate-700' : '' }}"
                href="{{ url('virtual-reality') }}">
                <div
                    class="{{ Request::is('virtual-reality') ? ' bg-gradient-fuchsia' : '' }} shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center stroke-0 text-center xl:p-2.5">

                    <svg width="12px" height="12px" viewBox="0 0 42 42" version="1.1"
                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <title>box-3d-50</title>
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g transform="translate(-2319.000000, -291.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                <g transform="translate(1716.000000, 291.000000)">
                                    <g transform="translate(603.000000, 0.000000)">
                                        <path class="{{ Request::is('virtual-reality') ? '' : 'fill-slate-800' }}"
                                            d="M22.7597136,19.3090182 L38.8987031,11.2395234 C39.3926816,10.9925342 39.592906,10.3918611 39.3459167,9.89788265 C39.249157,9.70436312 39.0922432,9.5474453 38.8987261,9.45068056 L20.2741875,0.1378125 L20.2741875,0.1378125 C19.905375,-0.04725 19.469625,-0.04725 19.0995,0.1378125 L3.1011696,8.13815822 C2.60720568,8.38517662 2.40701679,8.98586148 2.6540352,9.4798254 C2.75080129,9.67332903 2.90771305,9.83023153 3.10122239,9.9269862 L21.8652864,19.3090182 C22.1468139,19.4497819 22.4781861,19.4497819 22.7597136,19.3090182 Z">
                                        </path>
                                        <path class="{{ Request::is('virtual-reality') ? '' : 'fill-slate-800' }}"
                                            d="M23.625,22.429159 L23.625,39.8805372 C23.625,40.4328219 24.0727153,40.8805372 24.625,40.8805372 C24.7802551,40.8805372 24.9333778,40.8443874 25.0722402,40.7749511 L41.2741875,32.673375 L41.2741875,32.673375 C41.719125,32.4515625 42,31.9974375 42,31.5 L42,14.241659 C42,13.6893742 41.5522847,13.241659 41,13.241659 C40.8447549,13.241659 40.6916418,13.2778041 40.5527864,13.3472318 L24.1777864,21.5347318 C23.8390024,21.7041238 23.625,22.0503869 23.625,22.429159 Z">
                                        </path>
                                        <path class="{{ Request::is('virtual-reality') ? '' : 'fill-slate-800' }}"
                                            d="M20.4472136,21.5347318 L1.4472136,12.0347318 C0.953235098,11.7877425 0.352562058,11.9879669 0.105572809,12.4819454 C0.0361450918,12.6208008 6.47121774e-16,12.7739139 0,12.929159 L0,30.1875 L0,30.1875 C0,30.6849375 0.280875,31.1390625 0.7258125,31.3621875 L19.5528096,40.7750766 C20.0467945,41.0220531 20.6474623,40.8218132 20.8944388,40.3278283 C20.963859,40.1889789 21,40.0358742 21,39.8806379 L21,22.429159 C21,22.0503869 20.7859976,21.7041238 20.4472136,21.5347318 Z">
                                        </path>
                                    </g>
                                </g>
                            </g>
                        </g>
                    </svg>

                </div>
                <span
                    class="{{ Request::is('rtl') ? 'mr-1' : 'ml-1' }} duration-300 opacity-100 pointer-events-none ease-soft">Virtual
                    Reality</span>
            </a>
        </li> --}}
    </ul>
</div>

{{-- <div class="mx-4">
    <!-- load phantom colors for card after: -->
    <p
        class="hidden after:bg-gradient-dark-gray after:bg-gradient-cyan after:bg-gradient-orange after:bg-gradient-lime after:bg-gradient-red after:bg-gradient-slate">
    </p>

    <div class="after:opacity-65 after:bg-gradient-slate relative flex min-w-0 flex-col items-center break-words rounded-2xl border-0 border-solid border-blue-900 bg-white bg-clip-border shadow-none after:absolute after:top-0 after:bottom-0 after:left-0 after:z-10 after:block after:h-full after:w-full after:rounded-2xl after:content-['']"
        sidenav-card>
        <div class="mb-7.5 absolute h-full w-full rounded-2xl bg-cover bg-center"
            style="background-image: url('../assets/img/curved-images/white-curved.jpeg')"></div>
        <div class="relative z-20 flex-auto w-full p-4 text-left text-white">
            <div
                class="flex items-center justify-center w-8 h-8 mb-4 text-center bg-white bg-center rounded-lg icon shadow-soft-2xl">
                <i class="top-0 z-10 text-transparent ni ni-diamond text-size-lg bg-gradient-slate bg-clip-text opacity-80"
                    sidenav-card-icon></i>
            </div>
            <div class="transition-all duration-200 ease-nav-brand">
                <h6 class="mb-0 text-white {{ Request::is('rtl') ? 'text-right' : '' }}">Need help?</h6>
                <p
                    class="mt-0 mb-4 font-semibold leading-tight text-size-xs {{ Request::is('rtl') ? 'text-right' : '' }}">
                    Please check our docs</p>
                <a href="https://www.creative-tim.com/learning-lab/tailwind/html/quick-start/soft-ui-dashboard/"
                    target="_blank"
                    class="inline-block w-full px-8 py-2 mb-0 font-bold text-center text-black uppercase transition-all ease-in bg-white border-0 border-white rounded-lg shadow-soft-md bg-150 leading-pro text-size-xs hover:shadow-soft-2xl hover:scale-102">Documentation</a>
            </div>
        </div>
    </div> --}}
</div>
</aside>

<!-- end sidenav -->
