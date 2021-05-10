<x-container>
    <section id="photos" class="my-5 grid grid-cols-3 md:grid-cols-3 gap-5">
        <div x-data="{}">
            <h6 class="font-semibold tracking-wide text-gray-800 mb-5">
                    Top Bar 1
            </h6>
            <a @click="$dispatch('img-modal', {  imgModalSrc: '{{URL::to('/')}}/images/top-bar/Top bar 1.jpg', imgModalDesc: 'Top Bar 1' })" class="cursor-pointer">
                <img src="{{URL::to('/')}}/images/top-bar/Top bar 1.jpg" class="hover:opacity-75 object-fill  w-full align-middle border-none" />
            </a>
        </div>
        <div x-data="{}">
            <h6 class="font-semibold tracking-wide text-gray-800 mb-5">
                    Top Bar 2
            </h6>
            <a @click="$dispatch('img-modal', {  imgModalSrc: '{{URL::to('/')}}/images/top-bar/Top bar 2.jpg', imgModalDesc: 'Top Bar 2' })" class="cursor-pointer">
                <img src="{{URL::to('/')}}/images/top-bar/Top bar 2.jpg" class="hover:opacity-75 object-fill w-full align-middle border-none" />
            </a>
        </div>
        <div x-data="{}">
            <h6 class="font-semibold tracking-wide text-gray-800 mb-5">
                    Top Bar 3
            </h6>
            <a @click="$dispatch('img-modal', {  imgModalSrc: '{{URL::to('/')}}/images/top-bar/Top bar 3.jpg', imgModalDesc: 'Top Bar 3' })" class="cursor-pointer">
                <img src="{{URL::to('/')}}/images/top-bar/Top bar 3.jpg" class="hover:opacity-75 object-fill w-full align-middle border-none" />
            </a>
        </div>
        <div x-data="{}">
            <h6 class="font-semibold tracking-wide text-gray-800 mb-5">
                    Top Bar 4
            </h6>
            <a @click="$dispatch('img-modal', {  imgModalSrc: '{{URL::to('/')}}/images/top-bar/Top bar 4.jpg', imgModalDesc: 'Top Bar 4' })" class="cursor-pointer">
                <img src="{{URL::to('/')}}/images/top-bar/Top bar 4.jpg" class="hover:opacity-75 object-fill w-full align-middle border-none" />
            </a>
        </div>
    </section>

    
</x-container>