<x-container>
    <section id="photos" class="my-5 grid grid-cols-3 md:grid-cols-3 gap-5">
        <div x-data="{}">
            <h6 class="font-semibold tracking-wide text-gray-800 mb-5">
                    Hero Banner Home 1
            </h6>
            <a @click="$dispatch('img-modal', {  imgModalSrc: '{{URL::to('/')}}/images/hero-banner-home/Hero Banner Home 1.jpg', imgModalDesc: 'Hero Banner Home 1' })" class="cursor-pointer">
                <img src="{{URL::to('/')}}/images/hero-banner-home/Hero Banner Home 1.jpg" class="hover:opacity-75 object-fill  w-full align-middle border-none" />
            </a>
        </div>
        <div x-data="{}">
            <h6 class="font-semibold tracking-wide text-gray-800 mb-5">
                    Hero Banner Home 2
            </h6>
            <a @click="$dispatch('img-modal', {  imgModalSrc: '{{URL::to('/')}}/images/hero-banner-home/Hero Banner Home 2.jpg', imgModalDesc: 'Hero Banner Home 2' })" class="cursor-pointer">
                <img src="{{URL::to('/')}}/images/hero-banner-home/Hero Banner Home 2.jpg" class="hover:opacity-75 object-fill  w-full align-middle border-none" />
            </a>
        </div>
        <div x-data="{}">
            <h6 class="font-semibold tracking-wide text-gray-800 mb-5">
                    Hero Banner Home 3
            </h6>
            <a @click="$dispatch('img-modal', {  imgModalSrc: '{{URL::to('/')}}/images/hero-banner-home/Hero Banner Home 3.jpg', imgModalDesc: 'Hero Banner Home 3' })" class="cursor-pointer">
                <img src="{{URL::to('/')}}/images/hero-banner-home/Hero Banner Home 3.jpg" class="hover:opacity-75 object-fill  w-full align-middle border-none" />
            </a>
        </div>
        <div x-data="{}">
            <h6 class="font-semibold tracking-wide text-gray-800 mb-5">
                    Hero Banner Home 4
            </h6>
            <a @click="$dispatch('img-modal', {  imgModalSrc: '{{URL::to('/')}}/images/hero-banner-home/Hero Banner Home 4.jpg', imgModalDesc: 'Hero Banner Home 4' })" class="cursor-pointer">
                <img src="{{URL::to('/')}}/images/hero-banner-home/Hero Banner Home 4.jpg" class="hover:opacity-75 object-fill  w-full align-middle border-none" />
            </a>
        </div>
        <div x-data="{}">
            <h6 class="font-semibold tracking-wide text-gray-800 mb-5">
                    Hero Banner Home 5
            </h6>
            <a @click="$dispatch('img-modal', {  imgModalSrc: '{{URL::to('/')}}/images/hero-banner-home/Hero Banner Home 5.jpg', imgModalDesc: 'Hero Banner Home 5' })" class="cursor-pointer">
                <img src="{{URL::to('/')}}/images/hero-banner-home/Hero Banner Home 5.jpg" class="hover:opacity-75 object-fill  w-full align-middle border-none" />
            </a>
        </div>
        <div x-data="{}">
            <h6 class="font-semibold tracking-wide text-gray-800 mb-5">
                    Hero Banner Home 6
            </h6>
            <a @click="$dispatch('img-modal', {  imgModalSrc: '{{URL::to('/')}}/images/hero-banner-home/Hero Banner Home 6.jpg', imgModalDesc: 'Hero Banner Home 6' })" class="cursor-pointer">
                <img src="{{URL::to('/')}}/images/hero-banner-home/Hero Banner Home 6.jpg" class="hover:opacity-75 object-fill  w-full align-middle border-none" />
            </a>
        </div>
    </section>

    
</x-container>