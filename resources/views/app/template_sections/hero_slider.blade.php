<x-container>
    <!-- <div class="flex">
        <div class="w-full pb-14 justify-start">
            <h1 class="text-xl font-extrabold tracking-wide text-gray-900 mb-2">
                Hero/Slider Section
            </h1>
            <p class="text-black text-opacity-50">Please Select Your Desired Layout Style For The Hero/Slider Section</p>
        </div>
    </div>     -->
    <section id="photos" class="my-5 grid grid-cols-2 md:grid-cols-2 gap-5">
        <div x-data="{}">
            <h6 class="font-semibold tracking-wide text-gray-800 mb-5">
                    Hero 1
            </h6>
            <a @click="$dispatch('img-modal', {  imgModalSrc: '{{URL::to('/')}}/images/hero_slider/hero 1.jpg', imgModalDesc: 'Hero 1' })" class="cursor-pointer">
                <img src="{{URL::to('/')}}/images/hero_slider/hero 1.jpg" class="hover:opacity-75 object-fill w-full align-middle border-none" />
            </a>
        </div>
        <div x-data="{}">
            <h6 class="font-semibold tracking-wide text-gray-800 mb-5">
                    Hero 2
            </h6>
            <a @click="$dispatch('img-modal', {  imgModalSrc: '{{URL::to('/')}}/images/hero_slider/hero 2.jpg', imgModalDesc: 'Hero 2' })" class="cursor-pointer">
                <img src="{{URL::to('/')}}/images/hero_slider/hero 2.jpg" class="hover:opacity-75 object-fill w-full align-middle border-none" />
            </a>
        </div>
        <div x-data="{}">
            <h6 class="font-semibold tracking-wide text-gray-800 mb-5">
                    Hero 3
            </h6>
            <a @click="$dispatch('img-modal', {  imgModalSrc: '{{URL::to('/')}}/images/hero_slider/hero 3.jpg', imgModalDesc: 'Hero 3' })" class="cursor-pointer">
                <img src="{{URL::to('/')}}/images/hero_slider/hero 3.jpg" class="hover:opacity-75 object-fill w-full align-middle border-none" />
            </a>
        </div>
        <div x-data="{}">
            <h6 class="font-semibold tracking-wide text-gray-800 mb-5">
                    Hero 4
            </h6>
            <a @click="$dispatch('img-modal', {  imgModalSrc: '{{URL::to('/')}}/images/hero_slider/hero 4.jpg', imgModalDesc: 'Hero 4' })" class="cursor-pointer">
                <img src="{{URL::to('/')}}/images/hero_slider/hero 4.jpg" class="hover:opacity-75 object-fill w-full align-middle border-none" />
            </a>
        </div>
        <div x-data="{}">
            <h6 class="font-semibold tracking-wide text-gray-800 mb-5">
                    Hero 5
            </h6>
            <a @click="$dispatch('img-modal', {  imgModalSrc: '{{URL::to('/')}}/images/hero_slider/hero 5.jpg', imgModalDesc: 'Hero 5' })" class="cursor-pointer">
                <img src="{{URL::to('/')}}/images/hero_slider/hero 5.jpg" class="hover:opacity-75 object-fill w-full align-middle border-none" />
            </a>
        </div>
    </section>
     
</x-container>