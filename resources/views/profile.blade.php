<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-300 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        @if ($updated)
            <div class="py-3 sm:mx-0 mx-4">
                <div class="bg-teal-100 dark:bg-blue-400 border-t-4 border-teal-500 dark:border-blue-600 rounded-b text-teal-900 dark:text-blue-900 px-4 py-3 shadow-md"
                    role="alert">
                    <div class="flex">
                        <div class="py-1"><svg class="fill-current h-6 w-6 text-teal-500 dark:text-blue-600 mr-4"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path
                                    d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z" />
                            </svg></div>
                        <div>
                            <p class="font-bold">Updated!</p>
                            <p class="text-sm">Refresh to see the changes.</p>
                        </div>
                    </div>
                </div>
            </div>
        @endif
        <div class="py-6 flex flex-col sm:block">
            <img class="w-24 h-24 mb-4 float-left self-center rounded-full sm:mr-6 sm:w-36 sm:h-36"
                src="/storage/uploads/avatars/{{ Auth::user()->avatar }}">

            <form class="flex flex-col self-center items-center gap-8 max-w-4xl sm:items-stretch"
                enctype="multipart/form-data" action="{{ route('profile') }}" method="POST">
                @csrf
                <div class="flex flex-col items-center dark:text-white sm:items-stretch">
                    <label>Update profile image</label>
                    <input class="ml-20 sm:ml-0" type="file" name="avatar">
                </div>
                <input class="bg-blue-400 hover:bg-blue-700 text-white font-bold w-52 py-2 px-4 rounded" type="submit"
                    value="Submit">
            </form>
        </div>
    </div>
</x-app-layout>
