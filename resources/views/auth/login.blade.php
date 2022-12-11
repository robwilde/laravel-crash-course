@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-8/12 bg-white p-6 rounded-lg">
            <form action="{{ route('login') }}" method="post">
                @csrf

                <div class="mb-4">
                    <label for="email" class="sr-only">Email</label>
                    <input type="email" name="email" id="email" placeholder="Your Email" class="bg-gray-100 border-2 w-full p-4 rounded-lg"
                           value="{{ old('email') }}">
                </div>

                <div class="mb-4">
                    <label for="password" class="sr-only">Password</label>
                    <input type="password" name="password" id="password" placeholder="Your Password" class="bg-gray-100 border-2 w-full p-4 rounded-lg"
                           value="">
                </div>

                <div class="">
                    <button type="submit" class="bg-blue-500 text-white px-4 py-3 rounded font-medium w-full">login</button>
                </div>
            </form>
        </div>
    </div>
@endsection
