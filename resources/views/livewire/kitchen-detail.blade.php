<div class="max-w-lg mx-auto bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 p-5">
    <img class="rounded-t-lg mb-4" src="{{ asset('storage/' . $kitchen->photos) }}" alt="{{ $kitchen->name }}">
    <h1 class="text-3xl font-bold text-gray-900 dark:text-white mb-4">{{ $kitchen->name }}</h1>
    <p class="text-xl text-gray-700 dark:text-gray-400"><span class="font-semibold">Price:</span> {{ Number::currency($kitchen->price, 'IDR') }}</p>
    <p class="my-4 text-gray-700 dark:text-gray-400">{{ $kitchen->description }}</p>
    <a href="#" class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-800">Reserve</a>
</div>
