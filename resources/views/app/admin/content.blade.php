<x-container>
    <div class="flex">
        <div class="w-full pb-14 justify-start">
            <h1 class="text-xl font-extrabold tracking-wide text-gray-900 mb-2">
                Main Title Admin
            </h1>
            <p class="text-black text-opacity-50">Please Select Your Desired Layout Style For The Obituaries Section</p>
        </div>
        <div class="w-full pb-14 flex justify-end">
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                Upload Image
            </button>
        </div>
    </div>    
    <section id="photos" class="my-5 grid grid-cols-3 md:grid-cols-3 gap-5">
        <div>
            <h6 class="font-semibold tracking-wide text-gray-800 mb-5">
                    test12312
            </h6>
            <img src="{{URL::to('/')}}/images/Group 1563.png" class="hover:opacity-75 object-fill w-full align-middle border-none" />
        </div>
        <div>
            <h6 class="font-semibold tracking-wide text-gray-800 mb-5">
                    test12312
            </h6>
            <img src="{{URL::to('/')}}/images/Group 1563.png" class="hover:opacity-75 object-fill w-full align-middle border-none" />
        </div>
        <div>
            <h6 class="font-semibold tracking-wide text-gray-800 mb-5">
                    test12312
            </h6>
            <img src="{{URL::to('/')}}/images/Group 1563.png" class="hover:opacity-75 object-fill w-full align-middle border-none" />
        </div>
    </section>
     
</x-container>