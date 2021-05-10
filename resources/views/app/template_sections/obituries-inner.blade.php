<x-container>
    <section id="photos" class="my-5 grid grid-cols-3 md:grid-cols-3 gap-5">
        <div x-data="{}">
            <h6 class="font-semibold tracking-wide text-gray-800 mb-5">
            Obituary Inner 1
            </h6>
            <a @click="$dispatch('img-modal', {  imgModalSrc: '{{URL::to('/')}}/images/obituries-inner/Obituaries Inner.jpg', imgModalDesc: 'Obituary Inner 1' })" class="cursor-pointer">
                <img src="{{URL::to('/')}}/images/obituries-inner/Obituaries Inner.jpg" class="hover:opacity-75 object-fill  w-full align-middle border-none" />
            </a>
        </div>
        <div x-data="{}">
            <h6 class="font-semibold tracking-wide text-gray-800 mb-5">
            Obituary Inner 2
            </h6>
            <a @click="$dispatch('img-modal', {  imgModalSrc: '{{URL::to('/')}}/images/obituries-inner/Obituaries Inner 2.jpg', imgModalDesc: 'Obituary Inner 2' })" class="cursor-pointer">
                <img src="{{URL::to('/')}}/images/obituries-inner/Obituaries Inner 2.jpg" class="hover:opacity-75 object-fill  w-full align-middle border-none" />
            </a>
        </div>
        <div x-data="{}">
            <h6 class="font-semibold tracking-wide text-gray-800 mb-5">
            Obituary Inner 3
            </h6>
            <a @click="$dispatch('img-modal', {  imgModalSrc: '{{URL::to('/')}}/images/obituries-inner/Obituaries Inner 3.jpg', imgModalDesc: 'Obituary Inner 3' })" class="cursor-pointer">
                <img src="{{URL::to('/')}}/images/obituries-inner/Obituaries Inner 3.jpg" class="hover:opacity-75 object-fill  w-full align-middle border-none" />
            </a>
        </div>
        <div x-data="{}">
            <h6 class="font-semibold tracking-wide text-gray-800 mb-5">
            Obituary Inner 4
            </h6>
            <a @click="$dispatch('img-modal', {  imgModalSrc: '{{URL::to('/')}}/images/obituries-inner/Obituaries Inner 4.jpg', imgModalDesc: 'Obituary Inner 4' })" class="cursor-pointer">
                <img src="{{URL::to('/')}}/images/obituries-inner/Obituaries Inner 4.jpg" class="hover:opacity-75 object-fill  w-full align-middle border-none" />
            </a>
        </div>
        <div x-data="{}">
            <h6 class="font-semibold tracking-wide text-gray-800 mb-5">
            Obituary Inner 5
            </h6>
            <a @click="$dispatch('img-modal', {  imgModalSrc: '{{URL::to('/')}}/images/obituries-inner/Obituaries Inner 5.jpg', imgModalDesc: 'Obituary Inner 5' })" class="cursor-pointer">
                <img src="{{URL::to('/')}}/images/obituries-inner/Obituaries Inner 5.jpg" class="hover:opacity-75 object-fill  w-full align-middle border-none" />
            </a>
        </div>
    </section>
</x-container>