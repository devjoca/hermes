@extends('layouts.app')

@section('body')
<div class="container mx-auto h-full flex justify-center items-center">
    <div class="w-1/3">
        <h1 class="font-hairline mb-6 text-center">Hermes ⚡️</h1>
        <form action="/login" method="POST">
            {{ csrf_field() }}
            <div class="border-teal p-8 border-t-12 bg-white mb-6 rounded-lg shadow-lg">
                <div class="mb-4">
                    <label class="block text-grey-darker text-sm font-bold mb-2" for="email">
                        Email
                    </label>
                    <input class="shadow appearance-none border rounded w-full h-12 py-2 px-3 text-grey-darker leading-tight focus:outline-none focus:shadow-outline" id="username" type="email" placeholder="Email">
                </div>

                <div class="mb-4">
                    <label class="block text-grey-darker text-sm font-bold mb-2" for="password">
                        Password
                    </label>
                    <input class="shadow appearance-none border rounded w-full h-12 py-2 px-3 text-grey-darker leading-tight focus:outline-none focus:shadow-outline" id="password" type="password" placeholder="************">
                </div>

                <div class="flex items-center justify-between">
                    <button class="bg-green hover:bg-green-dark text-white font-bold w-full h-12 py-2 px-4  rounded focus:outline-none focus:shadow-outline" type="button">
                        Sign In
                    </button>
                </div>
        </form>
    </div>
</div>
@endsection
