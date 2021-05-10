<x-container>
    <section id="photos" class="my-5 grid grid-cols-3 md:grid-cols-3 gap-5">
        <div x-data="{}">
            <h6 class="font-semibold tracking-wide text-gray-800 mb-5">
                    Tile Box 1
            </h6>
            <a @click="$dispatch('img-modal', {  imgModalSrc: '{{URL::to('/')}}/images/tile-boxes/Tileboxes 1.jpg', imgModalDesc: 'Tile Box 1' })" class="cursor-pointer">
                <img src="{{URL::to('/')}}/images/tile-boxes/Tileboxes 1.jpg" class="hover:opacity-75 object-fill  w-full align-middle border-none" />
            </a>
        </div>
        <div x-data="{}">
        <h6 class="font-semibold tracking-wide text-gray-800 mb-5">
                    Tile Box 2
            </h6>
            <a @click="$dispatch('img-modal', {  imgModalSrc: '{{URL::to('/')}}/images/tile-boxes/Tileboxes 2.jpg', imgModalDesc: 'Tile Box 2' })" class="cursor-pointer">
                <img src="{{URL::to('/')}}/images/tile-boxes/Tileboxes 2.jpg" class="hover:opacity-75 object-fill  w-full align-middle border-none" />
            </a>
        </div>
        <div x-data="{}">
        <h6 class="font-semibold tracking-wide text-gray-800 mb-5">
                    Tile Box 3
            </h6>
            <a @click="$dispatch('img-modal', {  imgModalSrc: '{{URL::to('/')}}/images/tile-boxes/Tileboxes 3.jpg', imgModalDesc: 'Tile Box 3' })" class="cursor-pointer">
                <img src="{{URL::to('/')}}/images/tile-boxes/Tileboxes 3.jpg" class="hover:opacity-75 object-fill  w-full align-middle border-none" />
            </a>
        </div>
        <div x-data="{}">
        <h6 class="font-semibold tracking-wide text-gray-800 mb-5">
                    Tile Box 4
            </h6>
            <a @click="$dispatch('img-modal', {  imgModalSrc: '{{URL::to('/')}}/images/tile-boxes/Tileboxes 4.jpg', imgModalDesc: 'Tile Box 4' })" class="cursor-pointer">
                <img src="{{URL::to('/')}}/images/tile-boxes/Tileboxes 4.jpg" class="hover:opacity-75 object-fill  w-full align-middle border-none" />
            </a>
        </div>
        <div x-data="{}">
        <h6 class="font-semibold tracking-wide text-gray-800 mb-5">
                    Tile Box 5
            </h6>
            <a @click="$dispatch('img-modal', {  imgModalSrc: '{{URL::to('/')}}/images/tile-boxes/Tileboxes 5.jpg', imgModalDesc: 'Tile Box 5' })" class="cursor-pointer">
                <img src="{{URL::to('/')}}/images/tile-boxes/Tileboxes 5.jpg" class="hover:opacity-75 object-fill  w-full align-middle border-none" />
            </a>
        </div>
        <div x-data="{}">
        <h6 class="font-semibold tracking-wide text-gray-800 mb-5">
                    Tile Box 6
            </h6>
            <a @click="$dispatch('img-modal', {  imgModalSrc: '{{URL::to('/')}}/images/tile-boxes/Tileboxes 6.jpg', imgModalDesc: 'Tile Box 6' })" class="cursor-pointer">
                <img src="{{URL::to('/')}}/images/tile-boxes/Tileboxes 6.jpg" class="hover:opacity-75 object-fill  w-full align-middle border-none" />
            </a>
        </div>
        <div x-data="{}">
        <h6 class="font-semibold tracking-wide text-gray-800 mb-5">
                    Tile Box 7
            </h6>
            <a @click="$dispatch('img-modal', {  imgModalSrc: '{{URL::to('/')}}/images/tile-boxes/Tileboxes 7.jpg', imgModalDesc: 'Tile Box 7' })" class="cursor-pointer">
                <img src="{{URL::to('/')}}/images/tile-boxes/Tileboxes 7.jpg" class="hover:opacity-75 object-fill  w-full align-middle border-none" />
            </a>
        </div>
    </section>

    
</x-container>