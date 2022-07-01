<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <img src="/storage/uploads/avatars/{{ Auth::user()->avatar }}" class="userAvatar">

            <form enctype="multipart/form-data" action="{{ route('profile') }}" method="POST">
                @csrf
                <label>Update profile image</label>
                <br />
                <input type="file" name="avatar">
                <input type="submit">
            </form>
        </div>
    </div>
</x-app-layout>
