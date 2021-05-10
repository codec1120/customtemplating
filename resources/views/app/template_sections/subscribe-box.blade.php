<x-container>
    <section id="photos" class="my-5 grid grid-cols-3 md:grid-cols-3 gap-5">
        <div x-data="{}">
            <h6 class="font-semibold tracking-wide text-gray-800 mb-5">
                    Subscription Box 1
            </h6>
            <a @click="$dispatch('img-modal', {  imgModalSrc: '{{URL::to('/')}}/images/subscribe-box/Subscription Box.jpg', imgModalDesc: 'Subscription Box 1' })" class="cursor-pointer">
                <img src="{{URL::to('/')}}/images/subscribe-box/Subscription Box.jpg" class="hover:opacity-75 object-fill  w-full align-middle border-none" />
            </a>
        </div>
        <div x-data="{}">
        <h6 class="font-semibold tracking-wide text-gray-800 mb-5">
                    Subscription Box 2
            </h6>
            <a @click="$dispatch('img-modal', {  imgModalSrc: '{{URL::to('/')}}/images/subscribe-box/Subscription Box 2.jpg', imgModalDesc: 'Subscription Box 2' })" class="cursor-pointer">
                <img src="{{URL::to('/')}}/images/subscribe-box/Subscription Box 2.jpg" class="hover:opacity-75 object-fill  w-full align-middle border-none" />
            </a>
        </div>
        <div x-data="{}">
        <h6 class="font-semibold tracking-wide text-gray-800 mb-5">
                    Subscription Box 3
            </h6>
            <a @click="$dispatch('img-modal', {  imgModalSrc: '{{URL::to('/')}}/images/subscribe-box/Subscription Box 3.jpg', imgModalDesc: 'Subscription Box 3' })" class="cursor-pointer">
                <img src="{{URL::to('/')}}/images/subscribe-box/Subscription Box 3.jpg" class="hover:opacity-75 object-fill  w-full align-middle border-none" />
            </a>
        </div>
        <div x-data="{}">
        <h6 class="font-semibold tracking-wide text-gray-800 mb-5">
                    Subscription Box 4
            </h6>
            <a @click="$dispatch('img-modal', {  imgModalSrc: '{{URL::to('/')}}/images/subscribe-box/Subscription Box 4.jpg', imgModalDesc: 'Subscription Box 4' })" class="cursor-pointer">
                <img src="{{URL::to('/')}}/images/subscribe-box/Subscription Box 4.jpg" class="hover:opacity-75 object-fill  w-full align-middle border-none" />
            </a>
        </div>
        <div x-data="{}">
        <h6 class="font-semibold tracking-wide text-gray-800 mb-5">
                    Subscription Box 5
            </h6>
            <a @click="$dispatch('img-modal', {  imgModalSrc: '{{URL::to('/')}}/images/subscribe-box/Subscription Box 5.jpg', imgModalDesc: 'Subscription Box 5' })" class="cursor-pointer">
                <img src="{{URL::to('/')}}/images/subscribe-box/Subscription Box 5.jpg" class="hover:opacity-75 object-fill  w-full align-middle border-none" />
            </a>
        </div>
        <div x-data="{}">
        <h6 class="font-semibold tracking-wide text-gray-800 mb-5">
                    Subscription Box 6
            </h6>
            <a @click="$dispatch('img-modal', {  imgModalSrc: '{{URL::to('/')}}/images/subscribe-box/Subscription Box 6.jpg', imgModalDesc: 'Subscription Box 6' })" class="cursor-pointer">
                <img src="{{URL::to('/')}}/images/subscribe-box/Subscription Box 6.jpg" class="hover:opacity-75 object-fill  w-full align-middle border-none" />
            </a>
        </div>
    </section>

    
</x-container>