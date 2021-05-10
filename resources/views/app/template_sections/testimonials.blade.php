<x-container>
    <section id="photos" class="my-5 grid grid-cols-2 md:grid-cols-2 gap-5">
        <div x-data="{}">
            <h6 class="font-semibold tracking-wide text-gray-800 mb-5">
                    Testimonial 1
            </h6>
            <a @click="$dispatch('img-modal', {  imgModalSrc: '{{URL::to('/')}}/images/testimonials/Testimonials 1.jpg', imgModalDesc: 'Testimonial 1' })" class="cursor-pointer">
                <img src="{{URL::to('/')}}/images/testimonials/Testimonials 1.jpg" class="hover:opacity-75 object-fill w-full align-middle border-none" />
            </a>
        </div>
        <div x-data="{}">
            <h6 class="font-semibold tracking-wide text-gray-800 mb-5">
                    Testimonial 2
            </h6>
            <a @click="$dispatch('img-modal', {  imgModalSrc: '{{URL::to('/')}}/images/testimonials/Testimonials 2.jpg', imgModalDesc: 'Testimonial 2' })" class="cursor-pointer">
                <img src="{{URL::to('/')}}/images/testimonials/Testimonials 2.jpg" class="hover:opacity-75 object-fill w-full align-middle border-none" />
            </a>
        </div>
        <div x-data="{}">
            <h6 class="font-semibold tracking-wide text-gray-800 mb-5">
                    Testimonial 3
            </h6>
            <a @click="$dispatch('img-modal', {  imgModalSrc: '{{URL::to('/')}}/images/testimonials/Testimonials 3.jpg', imgModalDesc: 'Testimonial 3' })" class="cursor-pointer">
                <img src="{{URL::to('/')}}/images/testimonials/Testimonials 3.jpg" class="hover:opacity-75 object-fill w-full align-middle border-none" />
            </a>
        </div>
        <div x-data="{}">
            <h6 class="font-semibold tracking-wide text-gray-800 mb-5">
                    Testimonial 4
            </h6>
            <a @click="$dispatch('img-modal', {  imgModalSrc: '{{URL::to('/')}}/images/testimonials/Testimonials 4.jpg', imgModalDesc: 'Testimonial 4' })" class="cursor-pointer">
                <img src="{{URL::to('/')}}/images/testimonials/Testimonials 4.jpg" class="hover:opacity-75 object-fill w-full align-middle border-none" />
            </a>
        </div>
        <div x-data="{}">
            <h6 class="font-semibold tracking-wide text-gray-800 mb-5">
                    Testimonial 5
            </h6>
            <a @click="$dispatch('img-modal', {  imgModalSrc: '{{URL::to('/')}}/images/testimonials/Testimonials 5.jpg', imgModalDesc: 'Testimonial 5' })" class="cursor-pointer">
                <img src="{{URL::to('/')}}/images/testimonials/Testimonials 5.jpg" class="hover:opacity-75 object-fill w-full align-middle border-none" />
            </a>
        </div>
        <div x-data="{}">
            <h6 class="font-semibold tracking-wide text-gray-800 mb-5">
                    Testimonial 6
            </h6>
            <a @click="$dispatch('img-modal', {  imgModalSrc: '{{URL::to('/')}}/images/testimonials/Testimonials 6.jpg', imgModalDesc: 'Testimonial 6' })" class="cursor-pointer">
                <img src="{{URL::to('/')}}/images/testimonials/Testimonials 6.jpg" class="hover:opacity-75 object-fill w-full align-middle border-none" />
            </a>
        </div>
        <div x-data="{}">
            <h6 class="font-semibold tracking-wide text-gray-800 mb-5">
                    Testimonial 7
            </h6>
            <a @click="$dispatch('img-modal', {  imgModalSrc: '{{URL::to('/')}}/images/testimonials/Testimonials 7.jpg', imgModalDesc: 'Testimonial 7' })" class="cursor-pointer">
                <img src="{{URL::to('/')}}/images/testimonials/Testimonials 7.jpg" class="hover:opacity-75 object-fill w-full align-middle border-none" />
            </a>
        </div>
        <div x-data="{}">
            <h6 class="font-semibold tracking-wide text-gray-800 mb-5">
                    Testimonial 8
            </h6>
            <a @click="$dispatch('img-modal', {  imgModalSrc: '{{URL::to('/')}}/images/testimonials/Testimonials 8.jpg', imgModalDesc: 'Testimonial 8' })" class="cursor-pointer">
                <img src="{{URL::to('/')}}/images/testimonials/Testimonials 8.jpg" class="hover:opacity-75 object-fill w-full align-middle border-none" />
            </a>
        </div>
        <div x-data="{}">
            <h6 class="font-semibold tracking-wide text-gray-800 mb-5">
                    Testimonial 9
            </h6>
            <a @click="$dispatch('img-modal', {  imgModalSrc: '{{URL::to('/')}}/images/testimonials/Testimonials 9.jpg', imgModalDesc: 'Testimonial 9' })" class="cursor-pointer">
                <img src="{{URL::to('/')}}/images/testimonials/Testimonials 9.jpg" class="hover:opacity-75 object-fill w-full align-middle border-none" />
            </a>
        </div>
    </section>
     
</x-container>