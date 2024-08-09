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
                                <h2 class="card-title text-primary-500">Cardiac Critical Care <div class="badge">WS 1
                                    </div>
                                </h2>
                                <div class="border my-2 border-primary-600"></div>
                                <p><i class="fa-regular fa-circle-xmark mr-3"></i>Non Hands on workshop</p>
                                <div class="card-actions justify-end">
                                    
                                    <a href="https://expo.virconex-id.com/registration/wecoc2024"
                                        class="btn btn-primary">Register </a>

                                </div>
                            </div>
                        </div>
                        <div class="card bg-price ">
                            <div class="card-body w-full">
                                <div>
                                    <h2 class="card-title text-primary-500">Invasive cardiology: Mastering Coronary
                                        Physiology Assesment: Beyond Anatomy</h2>
                                    <div class="badge">WS 2</div>
                                </div>
                                <div class="border my-2 border-primary-600"></div>
                                <p><i class="fa-regular fa-circle-xmark mr-3"></i>Non Hands on workshop</p>
                                <div class="card-actions justify-end">
                                    <a href="https://expo.virconex-id.com/registration/wecoc2024"
                                        class="btn btn-primary">Register </a>

                                </div>
                            </div>
                        </div>
                        <div class="card bg-price ">
                            <div class="card-body w-full">
                                <div>
                                    <h2 class="card-title text-primary-500">Mitral Regurgitation: From Anatomy to
                                        Treatment, Focus on Echocardiography</h2>
                                    <div class="badge">WS 3</div>
                                </div>
                                <div class="border my-2 border-primary-600"></div>
                                <p><i class="fa-regular fa-circle-xmark mr-3"></i>Non Hands on workshop</p>
                                <div class="card-actions justify-end">
                                    <a href="https://expo.virconex-id.com/registration/wecoc2024"
                                        class="btn btn-primary">Register </a>

                                </div>
                            </div>
                        </div>
                        <div class="card bg-price ">
                            <div class="card-body w-full">
                                <div>
                                    <h2 class="card-title text-primary-500">Acute Heart Failure</h2>
                                    <div class="badge">WS 4</div>
                                </div>
                                <div class="border my-2 border-primary-600"></div>
                                <p><i class="fa-regular fa-circle-xmark mr-3"></i>Non Hands on workshop</p>
                                <div class="card-actions justify-end">
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
                                    <h2 class="card-title text-primary-500">Aritmia - Sudden Cardiac Death</h2>
                                    <div class="badge">WS 5</div>
                                </div>
                                <div class="border my-2 border-primary-600"></div>
                                <p><i class="fa-regular fa-circle-xmark mr-3"></i>Non Hands on workshop</p>
                                <div class="card-actions justify-end">
                                    
                                    <a href="https://expo.virconex-id.com/registration/wecoc2024"
                                        class="btn btn-primary">Register </a>

                                </div>
                            </div>
                        </div>
                        <div class="card bg-price ">
                            <div class="card-body w-full">
                                <div>
                                    <h2 class="card-title text-primary-500">Imaging in Congenital Heart Disease (Focus
                                        in ToF)</h2>
                                    <div class="badge">WS 6</div>
                                </div>
                                <div class="border my-2 border-primary-600"></div>
                                <p><i class="fa-regular fa-circle-check mr-3"></i>Hands on workshop</p>
                                <div class="card-actions justify-end">
                                    <a href="https://expo.virconex-id.com/registration/wecoc2024"
                                        class="btn btn-primary">Register </a>

                                </div>
                            </div>
                        </div>
                        <div class="card bg-price ">
                            <div class="card-body w-full">
                                <div>
                                    <h2 class="card-title text-primary-500">Imaging: Cardiovascular CT in Acute Chest
                                        Pain Settings</h2>
                                    <div class="badge">WS 7</div>
                                </div>
                                <div class="border my-2 border-primary-600"></div>
                                <p><i class="fa-regular fa-circle-check mr-3"></i>Hands on workshop</p>
                                <div class="card-actions justify-end">
                                    <a href="https://expo.virconex-id.com/registration/wecoc2024"
                                        class="btn btn-primary">Register </a>

                                </div>
                            </div>
                        </div>
                        <div class="card bg-price ">
                            <div class="card-body w-full">
                                <div>
                                    <h2 class="card-title text-primary-500">An Overview of Cardiopulmonary Excercise
                                        Testing in Clinical Practice</h2>
                                    <div class="badge">WS 8</div>
                                </div>
                                <div class="border my-2 border-primary-600"></div>
                                <p><i class="fa-regular fa-circle-check mr-3"></i>Hands on workshop</p>
                                <div class="card-actions justify-end">
                                    <a href="https://expo.virconex-id.com/registration/wecoc2024"
                                        class="btn btn-primary">Register </a>

                                </div>
                            </div>
                        </div>
                        <div class="card bg-price ">
                            <div class="card-body w-full">
                                <div>
                                    <h2 class="card-title text-primary-500">Vascular: Mastering Non-invasive Diagnostic
                                        Vascular: Duplex-Doppler Ultrasound and Plethysmography in Carotid, Renal,
                                        Upper-Lower Extremity, and AV Shunt Haemodialysis Access</h2>
                                    <div class="badge">WS 9</div>
                                </div>
                                <div class="border my-2 border-primary-600"></div>
                                <p><i class="fa-regular fa-circle-check mr-3"></i>Hands on workshop</p>
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

    <div class="bg-local pt-24 pb-52 lg:px-20 px-5 bg-blog" id="reg-info">
        <div class="flex-col flex gap-3 mb-10">
            <h4 class="text-2xl text-primary-600 font-semibold">Registration</h4>
            <h1 class="text-4xl text-primary-700 font-semibold">Registration Information</h1>
        </div>

        <livewire:resources.reg-info />

    </div>
</div>