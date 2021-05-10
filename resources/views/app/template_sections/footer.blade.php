<x-container>
    <section id="photos" class="my-5 grid grid-cols-3 md:grid-cols-3 gap-5">
        <div x-data="{}">
            <h6 class="font-semibold tracking-wide text-gray-800 mb-5">
            Footer 1
            </h6>
            <a @click="$dispatch('img-modal', {  imgModalSrc: '{{URL::to('/')}}/images/footer/Footer 1.jpg', imgModalDesc: 'Footer 1' })" class="cursor-pointer">
                <img src="{{URL::to('/')}}/images/footer/Footer 1.jpg" class="hover:opacity-75 object-fill  w-full align-middle border-none" />
            </a>
        </div>
        <div x-data="{}">
            <h6 class="font-semibold tracking-wide text-gray-800 mb-5">
            Footer 2
            </h6>
            <a @click="$dispatch('img-modal', {  imgModalSrc: '{{URL::to('/')}}/images/footer/Footer 2.jpg', imgModalDesc: 'Footer 2' })" class="cursor-pointer">
                <img src="{{URL::to('/')}}/images/footer/Footer 2.jpg" class="hover:opacity-75 object-fill  w-full align-middle border-none" />
            </a>
        </div>
        <div x-data="{}">
            <h6 class="font-semibold tracking-wide text-gray-800 mb-5">
            Footer 3
            </h6>
            <a @click="$dispatch('img-modal', {  imgModalSrc: '{{URL::to('/')}}/images/footer/Footer 3.jpg', imgModalDesc: 'Footer 3' })" class="cursor-pointer">
                <img src="{{URL::to('/')}}/images/footer/Footer 3.jpg" class="hover:opacity-75 object-fill  w-full align-middle border-none" />
            </a>
        </div>
        <div x-data="{}">
            <h6 class="font-semibold tracking-wide text-gray-800 mb-5">
            Footer 4
            </h6>
            <a @click="$dispatch('img-modal', {  imgModalSrc: '{{URL::to('/')}}/images/footer/Footer 4.jpg', imgModalDesc: 'Footer 4' })" class="cursor-pointer">
                <img src="{{URL::to('/')}}/images/footer/Footer 4.jpg" class="hover:opacity-75 object-fill  w-full align-middle border-none" />
            </a>
        </div>
        <div x-data="{}">
            <h6 class="font-semibold tracking-wide text-gray-800 mb-5">
            Footer 5
            </h6>
            <a @click="$dispatch('img-modal', {  imgModalSrc: '{{URL::to('/')}}/images/footer/Footer 5.jpg', imgModalDesc: 'Footer 5' })" class="cursor-pointer">
                <img src="{{URL::to('/')}}/images/footer/Footer 5.jpg" class="hover:opacity-75 object-fill  w-full align-middle border-none" />
            </a>
        </div>
        <div x-data="{}">
            <h6 class="font-semibold tracking-wide text-gray-800 mb-5">
            Footer 6
            </h6>
            <a @click="$dispatch('img-modal', {  imgModalSrc: '{{URL::to('/')}}/images/footer/Footer 6.jpg', imgModalDesc: 'Footer 6' })" class="cursor-pointer">
                <img src="{{URL::to('/')}}/images/footer/Footer 6.jpg" class="hover:opacity-75 object-fill  w-full align-middle border-none" />
            </a>
        </div>
        <div x-data="{}">
            <h6 class="font-semibold tracking-wide text-gray-800 mb-5">
            Footer 7
            </h6>
            <a @click="$dispatch('img-modal', {  imgModalSrc: '{{URL::to('/')}}/images/footer/Footer 7.jpg', imgModalDesc: 'Footer 7' })" class="cursor-pointer">
                <img src="{{URL::to('/')}}/images/footer/Footer 7.jpg" class="hover:opacity-75 object-fill  w-full align-middle border-none" />
            </a>
        </div>
    </section>

    
</x-container>