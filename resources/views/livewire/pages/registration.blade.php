<div class="bg-slate-50">
    <div class="pt-16 pb-52 lg:px-20 px-5">
        <div class="flex-col flex gap-3 mb-10">
            <h4 class="text-2xl text-primary-600 font-semibold">Registration</h4>
            <h1 class="text-4xl text-primary-700 font-semibold">Registration Fee</h1>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5 md:gap-7 lg:gap-10">
            <div class="card bg-price shadow-xl">
                <div class="card-body w-full">
                    <h2 class="card-title text-primary-500 text-4xl">Specialist</h2>
                    <div class="border my-5 border-primary-600"></div>
                    <div class="grid grid-cols-2 gap-5  w-full mx-3 text-slate-600 font-semibold">
                        <p>Symposium</p>
                        <p>Rp. 1.500.000</p>
                        <p>Symposium +1
                            Workshop non
                            Hands-On</p>
                        <p>Rp. 2.500.000</p>

                        <p>Symposium
                            +1
                            Workshop
                            Hands-On</p>
                        <p>Rp. 3.500.000</p>

                        <p>Extra
                            Workshop
                            Non Hands-On</p>
                        <p>Rp. 1.000.000</p>
                        <p>Extra
                            Workshop Hands-On</p>
                        <p>Rp. 2.000.000</p>
                    </div>
                    <div class="card-actions justify-end">
                        <a href="https://expo.virconex-id.com/registration/wecoc2024" class="btn btn-primary">Register
                        </a>

                    </div>
                </div>
            </div>
            <div class="card bg-price shadow-xl">

                <div class="card-body w-full">
                    <h2 class="card-title text-primary-500 text-4xl">General
                        Practitioners</h2>
                    <div class="border my-5 border-primary-600"></div>

                    <div class="grid grid-cols-2 gap-5  w-full mx-3 text-slate-600 font-semibold">
                        <p>Symposium</p>
                        <p>Rp. 1.000.000</p>
                        <p>Symposium +1
                            Workshop non
                            Hands-On</p>
                        <p>Rp. 1.500.000</p>

                        <p>Symposium
                            +1
                            Workshop
                            Hands-On</p>
                        <p>Rp. 2.250.000</p>

                        <p>Extra
                            Workshop
                            Non Hands-On</p>
                        <p>Rp. 750.000</p>
                        <p>Extra
                            Workshop Hands-On</p>
                        <p>Rp. 1.500.000</p>
                    </div>
                    <div class="card-actions justify-end">
                        <a href="https://expo.virconex-id.com/registration/wecoc2024" class="btn btn-primary">Register
                        </a>
                    </div>
                </div>
            </div>
            <div class="card bg-price shadow-xl">

                <div class="card-body w-full">
                    <h2 class="card-title text-primary-500 text-4xl">Nurse/
                        Technician
                        /Radiografer</h2>
                    <div class="border my-5 border-primary-600"></div>
                    <div class="grid grid-cols-2 gap-5  w-full mx-3 text-slate-600 font-semibold">
                        <p>Symposium</p>
                        <p>Rp. 1.000.000</p>
                        <p>Symposium +1
                            Workshop non
                            Hands-On</p>
                        <p>Rp. 1.500.000</p>

                        <p>Symposium
                            +1
                            Workshop
                            Hands-On</p>
                        <p>Rp. 1.750.000</p>

                        <p>Extra
                            Workshop
                            Non Hands-On</p>
                        <p>Rp. 750.000</p>
                        <p>Extra
                            Workshop Hands-On</p>
                        <p>Rp. 1.000.000</p>


                    </div>
                    <div class="card-actions justify-end">
                        <a href="https://expo.virconex-id.com/registration/wecoc2024" class="btn btn-primary">Register
                        </a>
                    </div>
                </div>
            </div>
            <div class="card bg-price shadow-xl">

                <div class="card-body w-full">
                    <h2 class="card-title text-primary-500 text-4xl">Student</h2>
                    <div class="border my-5 border-primary-600"></div>
                    <div class="grid grid-cols-2 gap-5  w-full mx-3 text-slate-600 font-semibold">
                        <p>Symposium</p>
                        <p>Rp. 750.000</p>
                        <p>Symposium +1
                            Workshop non
                            Hands-On</p>
                        <p>Rp. 1.250.000</p>

                        <p>Symposium
                            +1
                            Workshop
                            Hands-On</p>
                        <p>Rp. 1.500.000</p>

                        <p>Extra
                            Workshop
                            Non Hands-On</p>
                        <p>Rp. 500.000</p>
                        <p>Extra
                            Workshop Hands-On</p>
                        <p>Rp. 750.000</p>


                    </div>
                    <div class="card-actions justify-end">
                        <a href="https://expo.virconex-id.com/registration/wecoc2024" class="btn btn-primary">Register
                        </a>

                    </div>
                </div>
            </div>
        </div>
        <div class="flex-col flex gap-3 my-10">
            <h1 class="text-4xl text-primary-700 font-semibold">Workshops</h1>

        </div>
        <div x-data="{ openTab: 1 }" class="p-2">
            <div class="w-full mx-auto">
                <div class="mb-4 flex space-x-4 p-2 bg-white rounded-lg shadow-md">
                    <button x-on:click="openTab = 1" :class="{ 'bg-primary-600 text-white': openTab === 1 }"
                        class="flex-1 py-2 px-4 rounded-md focus:outline-none focus:shadow-outline-primary transition-all duration-300">25
                        October 2024</button>
                    <button x-on:click="openTab = 2" :class="{ 'bg-primary-600 text-white': openTab === 2 }"
                        class="flex-1 py-2 px-4 rounded-md focus:outline-none focus:shadow-outline-primary transition-all duration-300">26
                        October 2024</button>
                </div>

                <div x-show="openTab === 1"
                    class="transition-all duration-300 bg-white p-4 rounded-lg shadow-md border-l-4 border-primary-600">
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-2 ">
                        <div class="card bg-price ">
                            <div class="card-body w-full">
                                <h2 class="card-title">Echocardiography (Mitral Regurgitation: from Anatomy to
                                    Treatment, Focus on Echocardiography)
                                    <div class="badge">
                                        WS1
                                    </div>
                                </h2>
                                <div class="border my-2 border-primary-600"></div>
                                {{-- <p><i class="fa-regular fa-circle-xmark mr-3"></i>Non Hands on workshop</p> --}}
                                <div class="card-actions justify-between items-center">
                                    <div class="flex flex-row items-center gap-1">
                                        <i class="fa-solid fa-user-clock text-lg"></i>
                                        @php
                                        $produkIds = ['WGP001', 'WGP01', 'WSN001', 'WSN01', 'WSP001', 'WSP01', 'WSR001',
                                        'WSR01', 'WSS001', 'WSS01', 'WST001', 'WST01'];
                                        $totalKuota = 0;
                                        foreach ($produks as $produk) {
                                        if (in_array($produk['id_produk'], $produkIds)) {
                                        $totalKuota += $produk['kuota'];
                                        }
                                        }
                                        @endphp
                                        <p class="text-sm text-gray-600">Kuota Left: {{ $totalKuota }}</p>
                                    </div>
                                    <a href="https://expo.virconex-id.com/registration/wecoc2024"
                                        class="btn btn-primary">Register </a>

                                </div>
                            </div>
                        </div>

                        <div class="card bg-price ">
                            <div class="card-body w-full">
                                <div>
                                    <h2 class="card-title">Invasive cardiology (Mastering Coronary Physiology Assesment:
                                        Beyond Anatomy) </h2>
                                    <div class="badge">WS 2</div>
                                </div>
                                <div class="border my-2 border-primary-600"></div>
                                {{-- <p><i class="fa-regular fa-circle-xmark mr-3"></i>Non Hands on workshop</p> --}}
                                <div class="card-actions justify-between items-center">
                                    <div class="flex flex-row items-center gap-1">
                                        <i class="fa-solid fa-user-clock text-lg"></i>
                                        @php
                                        $produkIds = ['WGP002', 'WGP02', 'WSP002', 'WSP02', 'WSS002', 'WSS02'];
                                        $totalKuota = 0;
                                        foreach ($produks as $produk) {
                                        if (in_array($produk['id_produk'], $produkIds)) {
                                        $totalKuota += $produk['kuota'];
                                        }
                                        }
                                        @endphp
                                        <p class="text-sm text-gray-600">Kuota Left: {{ $totalKuota }}</p>
                                    </div>
                                    <a href="https://expo.virconex-id.com/registration/wecoc2024"
                                        class="btn btn-primary">Register </a>

                                </div>
                            </div>
                        </div>
                        <div class="card bg-price ">
                            <div class="card-body w-full">
                                <div>
                                    <h2 class="card-title">Cardiac Critical Care (Optimizing Treatment For Patients With
                                        Acute Coronary Syndromes: From First Recognition To Hospital Discharge) </h2>
                                    <div class="badge">WS 3</div>
                                </div>
                                <div class="border my-2 border-primary-600"></div>
                                {{-- <p><i class="fa-regular fa-circle-xmark mr-3"></i>Non Hands on workshop</p> --}}
                                <div class="card-actions justify-between items-center">
                                    @php
                                    $produkIds = ['WGP003', 'WGP03', 'WSP003', 'WSP03', 'WSS003', 'WSS03'];
                                    $totalKuota = 0;
                                    foreach ($produks as $produk) {
                                    if (in_array($produk['id_produk'], $produkIds)) {
                                    $totalKuota += $produk['kuota'];
                                    }
                                    }
                                    @endphp
                                    <p class="text-sm text-gray-600">Kuota Left: {{ $totalKuota }}</p>
                                    <a href="https://expo.virconex-id.com/registration/wecoc2024"
                                        class="btn btn-primary">Register </a>

                                </div>
                            </div>
                        </div>
                        <div class="card bg-price ">
                            <div class="card-body w-full">
                                <div>
                                    <h2 class="card-title">Clinical Cardiology - Heart Failure (Sustainable Chain of
                                        Heart Failure Management: From Acute to Stable-Chronic HF Setting) </h2>
                                    <div class="badge">WS 4</div>
                                </div>
                                <div class="border my-2 border-primary-600"></div>
                                {{-- <p><i class="fa-regular fa-circle-xmark mr-3"></i>Non Hands on workshop</p> --}}
                                <div class="card-actions justify-between items-center">
                                    @php
                                    $produkIds = ['WGP004', 'WGP04', 'WSN004', 'WSN04', 'WSP004', 'WSP04', 'WSR004',
                                    'WSR04', 'WSS004', 'WSS04', 'WST004', 'WST04'];
                                    $totalKuota = 0;
                                    foreach ($produks as $produk) {
                                    if (in_array($produk['id_produk'], $produkIds)) {
                                    $totalKuota += $produk['kuota'];
                                    }
                                    }
                                    @endphp
                                    <p class="text-sm text-gray-600">Kuota Left: {{ $totalKuota }}</p>
                                    <a href="https://expo.virconex-id.com/registration/wecoc2024"
                                        class="btn btn-primary">Register </a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div x-show="openTab === 2"
                    class="transition-all duration-300 bg-white p-4 rounded-lg shadow-md border-l-4 border-primary-600">
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-2 ">
                        <div class="card bg-price ">
                            <div class="card-body w-full">
                                <div>
                                    <h2 class="card-title">Imaging (Cardiovascular CT in Acute Chest Pain Settings)</h2>
                                    <div class="badge">WS 5</div>
                                </div>
                                <div class="border my-2 border-primary-600"></div>
                                {{-- <p><i class="fa-regular fa-circle-xmark mr-3"></i>Non Hands on workshop</p> --}}
                                <div class="card-actions justify-between items-center">
                                    @php
                                    $produkIds = ['WGP005', 'WGP05', 'WSN005', 'WSN05', 'WSP005', 'WSP05', 'WSR005',
                                    'WSR05', 'WSS005', 'WSS05', 'WST005', 'WST05'];
                                    $totalKuota = 0;
                                    foreach ($produks as $produk) {
                                    if (in_array($produk['id_produk'], $produkIds)) {
                                    $totalKuota += $produk['kuota'];
                                    }
                                    }
                                    @endphp
                                    <p class="text-sm text-gray-600">Kuota Left: {{ $totalKuota }}</p>
                                    <a href="https://expo.virconex-id.com/registration/wecoc2024"
                                        class="btn btn-primary">Register </a>

                                </div>
                            </div>
                        </div>
                        <div class="card bg-price ">
                            <div class="card-body w-full">
                                <div>
                                    <h2 class="card-title">Cardiac rehabilitation (An Overview of Cardiopulmonary
                                        Exercise Testing in Clinical Practice)</h2>
                                    <div class="badge">WS 6</div>
                                </div>
                                <div class="border my-2 border-primary-600"></div>
                                {{-- <p><i class="fa-regular fa-circle-check mr-3"></i>Hands on workshop</p> --}}
                                <div class="card-actions justify-between items-center">
                                    @php
                                    $produkIds = ['WGP006', 'WGP06', 'WSN006', 'WSN06', 'WSP006', 'WSP06', 'WSR006',
                                    'WSR06', 'WSS006', 'WSS06', 'WST006', 'WST06'];
                                    $totalKuota = 0;
                                    foreach ($produks as $produk) {
                                    if (in_array($produk['id_produk'], $produkIds)) {
                                    $totalKuota += $produk['kuota'];
                                    }
                                    }
                                    @endphp
                                    <p class="text-sm text-gray-600">Kuota Left: {{ $totalKuota }}</p>
                                    <a href="https://expo.virconex-id.com/registration/wecoc2024"
                                        class="btn btn-primary">Register </a>

                                </div>
                            </div>
                        </div>
                        <div class="card bg-price ">
                            <div class="card-body w-full">
                                <div>
                                    <h2 class="card-title ">Vascular (Mastering Non-invasive Diagnostic
                                        Vascular: Duplex-Doppler Ultrasound and Plethysmography in Carotid, Renal,
                                        Upper-Lower Extremity, and AV Shunt Haemodialysis Access)</h2>
                                    <div class="badge">WS 7</div>
                                </div>
                                <div class="border my-2 border-primary-600"></div>
                                {{-- <p><i class="fa-regular fa-circle-check mr-3"></i>Hands on workshop</p> --}}
                                <div class="card-actions justify-between items-center">
                                    @php
                                    $produkIds = ['WGP007', 'WGP07', 'WSN007', 'WSN07', 'WSP007', 'WSP07', 'WSR007',
                                    'WSR07', 'WSS007', 'WSS07', 'WST007', 'WST07'];
                                    $totalKuota = 0;
                                    foreach ($produks as $produk) {
                                    if (in_array($produk['id_produk'], $produkIds)) {
                                    $totalKuota += $produk['kuota'];
                                    }
                                    }
                                    @endphp
                                    <p class="text-sm text-gray-600">Kuota Left: {{ $totalKuota }}</p>
                                    <a href="https://expo.virconex-id.com/registration/wecoc2024"
                                        class="btn btn-primary">Register </a>

                                </div>
                            </div>
                        </div>
                        <div class="card bg-price ">
                            <div class="card-body w-full">
                                <div>
                                    <h2 class="card-title">Arrhythmia (Recognizing and Managing Different Faces of
                                        Sudden Cardiac Death) </h2>
                                    <div class="badge">WS 8</div>
                                </div>
                                <div class="border my-2 border-primary-600"></div>
                                {{-- <p><i class="fa-regular fa-circle-check mr-3"></i>Hands on workshop</p> --}}
                                <div class="card-actions justify-between items-center">
                                    @php
                                    $produkIds = ['WGP008', 'WGP08', 'WSN008', 'WSN08', 'WSP008', 'WSP08', 'WSR008',
                                    'WSR08', 'WSS008', 'WSS08', 'WST008', 'WST08'];
                                    $totalKuota = 0;
                                    foreach ($produks as $produk) {
                                    if (in_array($produk['id_produk'], $produkIds)) {
                                    $totalKuota += $produk['kuota'];
                                    }
                                    }
                                    @endphp
                                    <p class="text-sm text-gray-600">Kuota Left: {{ $totalKuota }}</p>
                                    <a href="https://expo.virconex-id.com/registration/wecoc2024"
                                        class="btn btn-primary">Register </a>

                                </div>
                            </div>
                        </div>
                        <div class="card bg-price ">
                            <div class="card-body w-full">
                                <div>
                                    <h2 class="card-title ">Pediatric Cardiology (Tetralogy Of Fallot: From Diagnosis to
                                        Post Intervention Care, A 360 Degree ) </h2>
                                    <div class="badge">WS 9</div>
                                </div>
                                <div class="border my-2 border-primary-600"></div>
                                {{-- <p><i class="fa-regular fa-circle-check mr-3"></i>Hands on workshop</p> --}}
                                <div class="card-actions justify-between items-center">
                                    @php
                                    $produkIds = ['WGP009', 'WGP09', 'WSN009', 'WSN09', 'WSP009', 'WSP09', 'WSR009',
                                    'WSR09', 'WSS009', 'WSS09', 'WST009', 'WST09'];
                                    $totalKuota = 0;
                                    foreach ($produks as $produk) {
                                    if (in_array($produk['id_produk'], $produkIds)) {
                                    $totalKuota += $produk['kuota'];
                                    }
                                    }
                                    @endphp
                                    <p class="text-sm text-gray-600">Kuota Left: {{ $totalKuota }}</p>
                                    <a href="https://expo.virconex-id.com/registration/wecoc2024"
                                        class="btn btn-primary">Register </a>

                                </div>
                            </div>
                        </div>
                        <div class="card bg-price ">
                            <div class="card-body w-full">
                                <div>
                                    <h2 class="card-title ">Nursing Session (Cardiac Emergency Nursing
                                        Management) </h2>
                                    <div class="badge">WS 10</div>
                                </div>
                                <div class="border my-2 border-primary-600"></div>
                                {{-- <p><i class="fa-regular fa-circle-check mr-3"></i>Non Hands on workshop</p> --}}
                                <div class="card-actions justify-end">
                                    <a href="https://expo.virconex-id.com/registration/wecoc2024"
                                        class="btn btn-primary">Register </a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- <div class="bg-local pt-24 pb-52 lg:px-20 px-5 bg-blog" id="reg-info">
        <div class="flex-col flex gap-3 mb-10">
            <h4 class="text-2xl text-primary-600 font-semibold">Registration</h4>
            <h1 class="text-4xl text-primary-700 font-semibold">Registration Information</h1>
        </div>

        <livewire:resources.reg-info />

    </div> --}}
</div>