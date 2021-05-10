<x-container>
    <!-- <div class="flex">
        <div class="w-full pb-14 justify-start">
            <h1 class="text-xl font-extrabold tracking-wide text-gray-900 mb-2">
                Pre-Build Header Section
            </h1>
            <p class="text-black text-opacity-50">Please Select Your Desired Layout Style For The Obituaries Section</p>
        </div>
    </div>     -->
    <section id="photos" class="my-5 grid grid-cols-2 md:grid-cols-2 gap-5">
        <div x-data="{}">
            <h6 class="font-semibold tracking-wide text-gray-800 mb-5">
                    Pre-Build Header 1
            </h6>
            <a @click="$dispatch('img-modal', {  imgModalSrc: '{{URL::to('/')}}/images/pre_headers/Header 1.jpg', imgModalDesc: 'Header 1' })" class="cursor-pointer">
                <img src="{{URL::to('/')}}/images/pre_headers/Header 1.jpg" class="hover:opacity-75 object-fill w-full align-middle border-none" />
            </a>
        </div>
        <div x-data="{}">
            <h6 class="font-semibold tracking-wide text-gray-800 mb-5">
                    Pre-Build Header 2
            </h6>
            <a @click="$dispatch('img-modal', {  imgModalSrc: '{{URL::to('/')}}/images/pre_headers/Header 2.jpg', imgModalDesc: 'Header 2' })" class="cursor-pointer">
                <img src="{{URL::to('/')}}/images/pre_headers/Header 2.jpg" class="hover:opacity-75 object-fill w-full align-middle border-none" />
            </a>
        </div>
        <div x-data="{}">
            <h6 class="font-semibold tracking-wide text-gray-800 mb-5">
                    Pre-Build Header 3
            </h6>
            <a @click="$dispatch('img-modal', {  imgModalSrc: '{{URL::to('/')}}/images/pre_headers/Header 3.jpg', imgModalDesc: 'Header 3' })" class="cursor-pointer">
                <img src="{{URL::to('/')}}/images/pre_headers/Header 3.jpg" class="hover:opacity-75 object-fill w-full align-middle border-none" />
            </a>
        </div>
        <div x-data="{}">
            <h6 class="font-semibold tracking-wide text-gray-800 mb-5">
                    Pre-Build Header 4
            </h6>
            <a @click="$dispatch('img-modal', {  imgModalSrc: '{{URL::to('/')}}/images/pre_headers/Header 4.jpg', imgModalDesc: 'Header 4' })" class="cursor-pointer">
                <img src="{{URL::to('/')}}/images/pre_headers/Header 4.jpg" class="hover:opacity-75 object-fill w-full align-middle border-none" />
            </a>
        </div>
        <div x-data="{}">
            <h6 class="font-semibold tracking-wide text-gray-800 mb-5">
                    Pre-Build Header 5
            </h6>
            <a @click="$dispatch('img-modal', {  imgModalSrc: '{{URL::to('/')}}/images/pre_headers/Header 5.jpg', imgModalDesc: 'Header 5' })" class="cursor-pointer">
                <img src="{{URL::to('/')}}/images/pre_headers/Header 5.jpg" class="hover:opacity-75 object-fill w-full align-middle border-none" />
            </a>
        </div>
    </section>
     
</x-container>