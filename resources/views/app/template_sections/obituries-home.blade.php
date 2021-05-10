<x-container>
    <section id="photos" class="my-5 grid grid-cols-3 md:grid-cols-3 gap-5">
        <div x-data="{}">
            <h6 class="font-semibold tracking-wide text-gray-800 mb-5">
                    Home Obituary 1
            </h6>
            <a @click="$dispatch('img-modal', {  imgModalSrc: '{{URL::to('/')}}/images/obituries-home/1.jpg', imgModalDesc: 'Home Obituary 1' })" class="cursor-pointer">
                <img src="{{URL::to('/')}}/images/obituries-home/1.jpg" class="hover:opacity-75 object-fill  w-full align-middle border-none" />
            </a>
        </div>
        <div x-data="{}">
            <h6 class="font-semibold tracking-wide text-gray-800 mb-5">
                    Home Obituary 2
            </h6>
            <a @click="$dispatch('img-modal', {  imgModalSrc: '{{URL::to('/')}}/images/obituries-home/2.jpg', imgModalDesc: 'Home Obituary 2' })" class="cursor-pointer">
                <img src="{{URL::to('/')}}/images/obituries-home/2.jpg" class="hover:opacity-75 object-fill  w-full align-middle border-none" />
            </a>
        </div>
        <div x-data="{}">
            <h6 class="font-semibold tracking-wide text-gray-800 mb-5">
                    Home Obituary 3
            </h6>
            <a @click="$dispatch('img-modal', {  imgModalSrc: '{{URL::to('/')}}/images/obituries-home/3.jpg', imgModalDesc: 'Home Obituary 3' })" class="cursor-pointer">
                <img src="{{URL::to('/')}}/images/obituries-home/3.jpg" class="hover:opacity-75 object-fill  w-full align-middle border-none" />
            </a>
        </div>
        <div x-data="{}">
            <h6 class="font-semibold tracking-wide text-gray-800 mb-5">
                    Home Obituary 4
            </h6>
            <a @click="$dispatch('img-modal', {  imgModalSrc: '{{URL::to('/')}}/images/obituries-home/4.jpg', imgModalDesc: 'Home Obituary 4' })" class="cursor-pointer">
                <img src="{{URL::to('/')}}/images/obituries-home/4.jpg" class="hover:opacity-75 object-fill  w-full align-middle border-none" />
            </a>
        </div>
        <div x-data="{}">
            <h6 class="font-semibold tracking-wide text-gray-800 mb-5">
                    Home Obituary 5
            </h6>
            <a @click="$dispatch('img-modal', {  imgModalSrc: '{{URL::to('/')}}/images/obituries-home/5.jpg', imgModalDesc: 'Home Obituary 5' })" class="cursor-pointer">
                <img src="{{URL::to('/')}}/images/obituries-home/5.jpg" class="hover:opacity-75 object-fill  w-full align-middle border-none" />
            </a>
        </div>
        <div x-data="{}">
            <h6 class="font-semibold tracking-wide text-gray-800 mb-5">
                    Home Obituary 6
            </h6>
            <a @click="$dispatch('img-modal', {  imgModalSrc: '{{URL::to('/')}}/images/obituries-home/6.jpg', imgModalDesc: 'Home Obituary 6' })" class="cursor-pointer">
                <img src="{{URL::to('/')}}/images/obituries-home/6.jpg" class="hover:opacity-75 object-fill  w-full align-middle border-none" />
            </a>
        </div>
    </section>
</x-container>