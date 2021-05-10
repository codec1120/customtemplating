<x-container>
    <section id="photos" class="my-5 grid grid-cols-2 md:grid-cols-2 gap-5">
        <div x-data="{}">
            <h6 class="font-semibold tracking-wide text-gray-800 mb-5">
                    Staff 1
            </h6>
            <a @click="$dispatch('img-modal', {  imgModalSrc: '{{URL::to('/')}}/images/testimonial/Testimonial 1.jpg', imgModalDesc: 'Testimonial 1' })" class="cursor-pointer">
                <img src="{{URL::to('/')}}/images/testimonial/Testimonial 1.jpg" class="hover:opacity-75 object-fill w-full align-middle border-none" />
            </a>
        </div>
        <div x-data="{}">
            <h6 class="font-semibold tracking-wide text-gray-800 mb-5">
                    Staff 2
            </h6>
            <a @click="$dispatch('img-modal', {  imgModalSrc: '{{URL::to('/')}}/images/testimonial/Testimonial 2.jpg', imgModalDesc: 'Testimonial 2' })" class="cursor-pointer">
                <img src="{{URL::to('/')}}/images/testimonial/Testimonial 2.jpg" class="hover:opacity-75 object-fill w-full align-middle border-none" />
            </a>
        </div>
        <div x-data="{}">
            <h6 class="font-semibold tracking-wide text-gray-800 mb-5">
                    Staff 3
            </h6>
            <a @click="$dispatch('img-modal', {  imgModalSrc: '{{URL::to('/')}}/images/testimonial/Testimonial 3.jpg', imgModalDesc: 'Testimonial 3' })" class="cursor-pointer">
                <img src="{{URL::to('/')}}/images/testimonial/Testimonial 3.jpg" class="hover:opacity-75 object-fill w-full align-middle border-none" />
            </a>
        </div>
        <div x-data="{}">
            <h6 class="font-semibold tracking-wide text-gray-800 mb-5">
                    Staff 4
            </h6>
            <a @click="$dispatch('img-modal', {  imgModalSrc: '{{URL::to('/')}}/images/testimonial/Testimonial 4.jpg', imgModalDesc: 'Testimonial 4' })" class="cursor-pointer">
                <img src="{{URL::to('/')}}/images/testimonial/Testimonial 4.jpg" class="hover:opacity-75 object-fill w-full align-middle border-none" />
            </a>
        </div>
    </section>
     
</x-container>