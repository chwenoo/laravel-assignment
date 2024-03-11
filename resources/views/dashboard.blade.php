<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
            </div>

            <a href="{{route('articles.index')}}" class="bg-white p-2 rounded-md m-5">Articles</a>
            <a href="{{route('products.index')}}" class="bg-yellow-500 p-2 rounded-md my-5">Products</a>
        </div>
    </div>
</x-app-layout>