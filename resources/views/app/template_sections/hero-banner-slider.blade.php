<x-container>
    <section id="photos" class="my-5 grid grid-cols-3 md:grid-cols-3 gap-5">
        <div x-data="{}">
            <h6 class="font-semibold tracking-wide text-gray-800 mb-5">
                    Hero Banner Slider 1
            </h6>
            <a @click="$dispatch('img-modal', {  imgModalSrc: '{{URL::to('/')}}/images/hero-banner-slider/Hero Banner Slider.png', imgModalDesc: 'Hero Banner Slider' })" class="cursor-pointer">
                <img src="{{URL::to('/')}}/images/hero-banner-slider/Hero Banner Slider.png" class="hover:opacity-75 object-fill  w-full align-middle border-none" />
            </a>
        </div>
    </section>
</x-container>