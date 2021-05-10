<x-container>
    <!-- <div class="flex">
        <div class="w-full pb-14 justify-start">
            <h1 class="text-xl font-extrabold tracking-wide text-gray-900 mb-2">
                Service Overiview Section
            </h1>
            <p class="text-black text-opacity-50">Please Select Your Desired Layout Style For The Service Overiviews Section</p>
        </div>
    </div>     -->
    <section id="photos" class="my-5 grid grid-cols-2 md:grid-cols-2 gap-5">
        <div x-data="{}">
            <h6 class="font-semibold tracking-wide text-gray-800 mb-5">
                    Service 1
            </h6>
            <a @click="$dispatch('img-modal', {  imgModalSrc: '{{URL::to('/')}}/images/service_overview/Services 1.jpg', imgModalDesc: 'Service 1' })" class="cursor-pointer">
                <img src="{{URL::to('/')}}/images/service_overview/Services 1.jpg" class="hover:opacity-75 object-fill w-full align-middle border-none" />
            </a>
        </div>
        <div x-data="{}">
            <h6 class="font-semibold tracking-wide text-gray-800 mb-5">
                    Service 2
            </h6>
            <a @click="$dispatch('img-modal', {  imgModalSrc: '{{URL::to('/')}}/images/service_overview/Services 2.jpg', imgModalDesc: 'Service 2' })" class="cursor-pointer">
                <img src="{{URL::to('/')}}/images/service_overview/Services 2.jpg" class="hover:opacity-75 object-fill w-full align-middle border-none" />
            </a>
        </div>
        <div x-data="{}">
            <h6 class="font-semibold tracking-wide text-gray-800 mb-5">
                    Service 3
            </h6>
            <a @click="$dispatch('img-modal', {  imgModalSrc: '{{URL::to('/')}}/images/service_overview/Services 3.jpg', imgModalDesc: 'Service 3' })" class="cursor-pointer">
                <img src="{{URL::to('/')}}/images/service_overview/Services 3.jpg" class="hover:opacity-75 object-fill w-full align-middle border-none" />
            </a>
        </div>
        <div x-data="{}">
            <h6 class="font-semibold tracking-wide text-gray-800 mb-5">
                    Service 4
            </h6>
            <a @click="$dispatch('img-modal', {  imgModalSrc: '{{URL::to('/')}}/images/service_overview/Services 4.jpg', imgModalDesc: 'Service 4' })" class="cursor-pointer">
                <img src="{{URL::to('/')}}/images/service_overview/Services 4.jpg" class="hover:opacity-75 object-fill w-full align-middle border-none" />
            </a>
        </div>
        <div x-data="{}">
            <h6 class="font-semibold tracking-wide text-gray-800 mb-5">
                    Service 5
            </h6>
            <a @click="$dispatch('img-modal', {  imgModalSrc: '{{URL::to('/')}}/images/service_overview/Services 5.jpg', imgModalDesc: 'Service 5' })" class="cursor-pointer">
                <img src="{{URL::to('/')}}/images/service_overview/Services 5.jpg" class="hover:opacity-75 object-fill w-full align-middle border-none" />
            </a>
        </div>
        <div x-data="{}">
            <h6 class="font-semibold tracking-wide text-gray-800 mb-5">
                    Service 6
            </h6>
            <a @click="$dispatch('img-modal', {  imgModalSrc: '{{URL::to('/')}}/images/service_overview/Services 6.jpg', imgModalDesc: 'Service 6' })" class="cursor-pointer">
                <img src="{{URL::to('/')}}/images/service_overview/Services 6.jpg" class="hover:opacity-75 object-fill w-full align-middle border-none" />
            </a>
        </div>
    </section>
     
</x-container>