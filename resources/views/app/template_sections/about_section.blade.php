<x-container>
    <!-- <div class="flex">
        <div class="w-full pb-14 justify-start">
            <h1 class="text-xl font-extrabold tracking-wide text-gray-900 mb-2">
                About Section
            </h1>
            <p class="text-black text-opacity-50">Please Select Your Desired Layout Style For The About Section</p>
        </div>
    </div>     -->
    <section id="photos" class="my-5 grid grid-cols-2 md:grid-cols-2 gap-5">
        <div x-data="{}">
            <h6 class="font-semibold tracking-wide text-gray-800 mb-5">
                    About Us 1
            </h6>
            <a @click="$dispatch('img-modal', {  imgModalSrc: '{{URL::to('/')}}/images/about/about 1.jpg', imgModalDesc: 'About 1' })" class="cursor-pointer">
                <img src="{{URL::to('/')}}/images/about/about 1.jpg" class="hover:opacity-75 object-fill  h-full w-full align-middle border-none" />
            </a>
        </div>
        <div x-data="{}">
            <h6 class="font-semibold tracking-wide text-gray-800 mb-5">
                    About Us 2
            </h6>
            <a @click="$dispatch('img-modal', {  imgModalSrc: '{{URL::to('/')}}/images/about/about 2.jpg', imgModalDesc: 'About 2' })" class="cursor-pointer">
                <img src="{{URL::to('/')}}/images/about/about 2.jpg" class="hover:opacity-75 object-fill w-full align-middle border-none" />
            </a>
        </div>
        <div x-data="{}">
            <h6 class="font-semibold tracking-wide text-gray-800 mb-5">
                    About Us 3
            </h6>
            <a @click="$dispatch('img-modal', {  imgModalSrc: '{{URL::to('/')}}/images/about/about 3.jpg', imgModalDesc: 'About 3' })" class="cursor-pointer">
                <img src="{{URL::to('/')}}/images/about/about 3.jpg" class="hover:opacity-75 object-fill w-full align-middle border-none" />
            </a>
        </div>
        <div x-data="{}">
            <h6 class="font-semibold tracking-wide text-gray-800 mb-5">
                    About Us 4
            </h6>
            <img src="{{URL::to('/')}}/images/about/about 4.jpg" class="hover:opacity-75 object-fill w-full align-middle border-none" />
        </div>
        <div x-data="{}">
            <h6 class="font-semibold tracking-wide text-gray-800 mb-5">
                    About Us 5
            </h6>
            <a @click="$dispatch('img-modal', {  imgModalSrc: '{{URL::to('/')}}/images/about/about 4.jpg', imgModalDesc: 'About 4' })" class="cursor-pointer">
                <img src="{{URL::to('/')}}/images/about/about 4.jpg" class="hover:opacity-75 object-fill w-full align-middle border-none" />
            </a>
        </div>
        <div x-data="{}">
            <h6 class="font-semibold tracking-wide text-gray-800 mb-5">
                    About Us 6
            </h6>
            <a @click="$dispatch('img-modal', {  imgModalSrc: '{{URL::to('/')}}/images/about/about 5.jpg', imgModalDesc: 'About 5' })" class="cursor-pointer">
                <img src="{{URL::to('/')}}/images/about/about 5.jpg" class="hover:opacity-75 object-fill w-full align-middle border-none" />
            </a>
        </div>
    </section>
     
</x-container>