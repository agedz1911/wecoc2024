<div class="bg-slate-50">
    <div class=" pt-20 pb-40 lg:px-20 px-5" id="at-glance">
        <div class="flex-col flex gap-3 mb-10">
            <h4 class="text-2xl text-primary-600 font-semibold">Scientific Program</h4>
            <h1 class="text-4xl text-primary-700 font-semibold">Program at A Glance</h1>
        </div>

        <div class="container mx-auto items-center">
            <livewire:resources.at-glance />
            
        </div>
    </div>
    <div class="bg-local pt-28 pb-52 lg:px-20 px-5 bg-doctor bg-primary-50" id="schedule-sympo">
        <div class="flex-col flex gap-3 mb-16">
            <h4 class="text-2xl text-primary-600 font-semibold">Scientific Program</h4>
            <h1 class="text-4xl text-primary-700 font-semibold">Symposium Schedule</h1>
        </div>

        <div>
            <livewire:resources.schedule />

        </div>
    </div>
    <div class="bg-local pt-28 pb-52 lg:px-20 px-5 bg-doctor bg-primary-50" id="schedule-ws">
        <div class="flex-col flex gap-3 mb-16">
            <h4 class="text-2xl text-primary-600 font-semibold">Scientific Program</h4>
            <h1 class="text-4xl text-primary-700 font-semibold">Workshop Schedule</h1>
        </div>

        <div class="">
            <livewire:resources.workshop />
        </div>
    </div>
    <div class=" pt-28 pb-52 lg:px-20 px-5 b" id="scientific-corner">
        <div class="flex-col flex gap-3 mb-16">
            <h4 class="text-2xl text-primary-600 font-semibold">Scientific Program</h4>
            <h1 class="text-4xl text-primary-700 font-semibold">Scientific Corner</h1>
        </div>

        <div class="h-96">
            <div class="flex flex-col items-center justify-center h-full">
                <h1 class="text-4xl text-gray-400">Coming soon</h1>
            </div>
        </div>
    </div>
</div>
