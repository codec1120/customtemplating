<x-container>
    <section id="photos" class="my-5 grid grid-cols-2 md:grid-cols-2 gap-5">
        <div x-data="{}">
            <h6 class="font-semibold tracking-wide text-gray-800 mb-5">
                    Obituary 1
            </h6>
            <a @click="$dispatch('img-modal', {  imgModalSrc: '{{URL::to('/')}}/images/obituary/1.jpg', imgModalDesc: '1' })" class="cursor-pointer">
                <img src="{{URL::to('/')}}/images/obituary/1.jpg" class="hover:opacity-75 object-fill w-full align-middle border-none" />
            </a>
        </div>
        <div x-data="{}">
            <h6 class="font-semibold tracking-wide text-gray-800 mb-5">
                    Obituary 2
            </h6>
            <a @click="$dispatch('img-modal', {  imgModalSrc: '{{URL::to('/')}}/images/obituary/2.jpg', imgModalDesc: 'Obituary 2' })" class="cursor-pointer">
                <img src="{{URL::to('/')}}/images/obituary/2.jpg" class="hover:opacity-75 object-fill w-full align-middle border-none" />
            </a>
        </div>
        <div x-data="{}">
            <h6 class="font-semibold tracking-wide text-gray-800 mb-5">
                    Obituary 3
            </h6>
            <a @click="$dispatch('img-modal', {  imgModalSrc: '{{URL::to('/')}}/images/obituary/3.jpg', imgModalDesc: 'Obituary 3' })" class="cursor-pointer">
                <img src="{{URL::to('/')}}/images/obituary/3.jpg" class="hover:opacity-75 object-fill w-full align-middle border-none" />
            </a>
        </div>
        <div x-data="{}">
            <h6 class="font-semibold tracking-wide text-gray-800 mb-5">
                    Obituary 4
            </h6>
            <a @click="$dispatch('img-modal', {  imgModalSrc: '{{URL::to('/')}}/images/obituary/4.jpg', imgModalDesc: 'Obituary 4' })" class="cursor-pointer">
                <img src="{{URL::to('/')}}/images/obituary/4.jpg" class="hover:opacity-75 object-fill w-full align-middle border-none" />
            </a>
        </div>
        <div x-data="{}">
            <h6 class="font-semibold tracking-wide text-gray-800 mb-5">
                    Obituary 5
            </h6>
            <a @click="$dispatch('img-modal', {  imgModalSrc: '{{URL::to('/')}}/images/obituary/5.jpg', imgModalDesc: 'Obituary 5' })" class="cursor-pointer">
                <img src="{{URL::to('/')}}/images/obituary/5.jpg" class="hover:opacity-75 object-fill w-full align-middle border-none" />
            </a>
        </div>
        <div x-data="{}">
            <h6 class="font-semibold tracking-wide text-gray-800 mb-5">
                    Obituary 6
            </h6>
            <a @click="$dispatch('img-modal', {  imgModalSrc: '{{URL::to('/')}}/images/obituary/6.jpg', imgModalDesc: 'Obituary 6' })" class="cursor-pointer">
                <img src="{{URL::to('/')}}/images/obituary/6.jpg" class="hover:opacity-75 object-fill w-full align-middle border-none" />
            </a>
        </div>
    </section>
     
</x-container>