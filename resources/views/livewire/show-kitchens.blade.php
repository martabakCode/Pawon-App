<div>
    <!-- Hero Section !-->
    <section class="bg-white dark:bg-gray-900 mt-5 py-12">
        <div class="grid max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0 py-16 lg:grid-cols-12">
            <div class="mr-auto place-self-center lg:col-span-7">
                <h1
                    class="max-w-2xl mb-4 text-4xl font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl dark:text-white">
                    Pawon</h1>
                <p class="max-w-2xl mb-6 font-light text-gray-500 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400">From
                    Masak Tanpa Batas, Dapur Siap Pakai!</p>
                <a href="#"
                    class="inline-flex items-center justify-center px-5 py-3 mr-3 text-base font-medium text-center text-white rounded-lg bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 dark:focus:ring-green-900">
                    Get started
                    <svg class="w-5 h-5 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </a>
                <a href="#"
                    class="inline-flex items-center justify-center px-5 py-3 text-base font-medium text-center text-gray-900 border border-gray-300 rounded-lg hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 dark:text-white dark:border-gray-700 dark:hover:bg-gray-700 dark:focus:ring-gray-800">
                    Speak to receptionists
                </a>
            </div>
            <div class="hidden lg:mt-0 lg:col-span-5 lg:flex">
                <img src="{{ asset('images/home-page/hero-section-removebg.png') }}" alt="Hero Section">
            </div>
        </div>
    </section>
    <section class="bg-white dark:bg-gray-900 py-6">
        <div class=" border bg-gray-50 dark:bg-gray-800 ">
            <div class="grid max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16">
                <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white ">
                    Find your best kitchen
                </span>
                <label for="" class="text-slate-400 mb-8">
                    Cook Without Limits!​</label>
                <div class="flex flex-wrap gap-4">
                    @foreach($kitchens as $kitchen)
                    <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                        <a href="{{ route('kitchen.show', $kitchen->id) }}">
                            <img class="rounded-t-lg transition-transform duration-500 ease-in-out transform hover:scale-105"
                                src="{{ asset('storage/' . $kitchen->photos) }}" alt="{{ $kitchen->name }}" />
                        </a>
                        <div class="p-5">
                            <a href="{{ route('kitchen.show', $kitchen->id) }}">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white transition-colors duration-300 ease-in-out hover:text-blue-600">
                                    {{ $kitchen->name }}
                                </h5>
                            </a>
                            <p>
                                <span class="font-semibold">Price:</span> {{ Number::currency($kitchen->price, 'IDR') }}
                            </p>
                            <p class="my-3 font-normal text-gray-700 dark:text-gray-400">
                                {!! Str::limit($kitchen->description, 100, '...') !!}
                            </p>
                            <a href="#"
                                class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                Reserve
                                <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                </svg>
                            </a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
</div>
