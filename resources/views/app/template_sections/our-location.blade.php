<x-container>
    <section id="photos" class="my-5 grid grid-cols-3 md:grid-cols-3 gap-5">
        <div x-data="{}">
            <h6 class="font-semibold tracking-wide text-gray-800 mb-5">
                    Location 1
            </h6>
            <a @click="$dispatch('img-modal', {  imgModalSrc: '{{URL::to('/')}}/images/our-location/Location 1.jpg', imgModalDesc: 'Location 1' })" class="cursor-pointer">
                <img src="{{URL::to('/')}}/images/our-location/Location 1.jpg" class="hover:opacity-75 object-fill  w-full align-middle border-none" />
            </a>
        </div>
        <div x-data="{}">
            <h6 class="font-semibold tracking-wide text-gray-800 mb-5">
            Location 2
            </h6>
            <a @click="$dispatch('img-modal', {  imgModalSrc: '{{URL::to('/')}}/images/our-location/Location 2.jpg', imgModalDesc: 'Location 2' })" class="cursor-pointer">
                <img src="{{URL::to('/')}}/images/our-location/Location 2.jpg" class="hover:opacity-75 object-fill  w-full align-middle border-none" />
            </a>
        </div>
        <div x-data="{}">
            <h6 class="font-semibold tracking-wide text-gray-800 mb-5">
            Location 3
            </h6>
            <a @click="$dispatch('img-modal', {  imgModalSrc: '{{URL::to('/')}}/images/our-location/Location 3.jpg', imgModalDesc: 'Location 3' })" class="cursor-pointer">
                <img src="{{URL::to('/')}}/images/our-location/Location 3.jpg" class="hover:opacity-75 object-fill  w-full align-middle border-none" />
            </a>
        </div>
        <div x-data="{}">
            <h6 class="font-semibold tracking-wide text-gray-800 mb-5">
            Location 4
            </h6>
            <a @click="$dispatch('img-modal', {  imgModalSrc: '{{URL::to('/')}}/images/our-location/Location Grid 1.jpg', imgModalDesc: 'Location 4' })" class="cursor-pointer">
                <img src="{{URL::to('/')}}/images/our-location/Location Grid 1.jpg" class="hover:opacity-75 object-fill  w-full align-middle border-none" />
            </a>
        </div>
        <div x-data="{}">
            <h6 class="font-semibold tracking-wide text-gray-800 mb-5">
            Location 5
            </h6>
            <a @click="$dispatch('img-modal', {  imgModalSrc: '{{URL::to('/')}}/images/our-location/Location Grid 2.jpg', imgModalDesc: 'Location 5' })" class="cursor-pointer">
                <img src="{{URL::to('/')}}/images/our-location/Location Grid 2.jpg" class="hover:opacity-75 object-fill  w-full align-middle border-none" />
            </a>
        </div>
        <div x-data="{}">
            <h6 class="font-semibold tracking-wide text-gray-800 mb-5">
            Location 6
            </h6>
            <a @click="$dispatch('img-modal', {  imgModalSrc: '{{URL::to('/')}}/images/our-location/Location Grid 3.jpg', imgModalDesc: 'Location 6' })" class="cursor-pointer">
                <img src="{{URL::to('/')}}/images/our-location/Location Grid 3.jpg" class="hover:opacity-75 object-fill  w-full align-middle border-none" />
            </a>
        </div>
    </section>

    
</x-container>