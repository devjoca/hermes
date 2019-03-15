@extends('layouts.app')

@section('body')
<div class="container mx-auto h-full flex justify-center items-center">
    <div class="w-1/3">
        <h1 class="font-hairline mb-6 text-center">Welcome to Hermes</h1>
            <form action="/login" method="POST">
                {{ csrf_field() }}
                <div class="border-teal p-8 border-t-12 bg-white mb-6 rounded-lg shadow-lg">
                    <div class="mb-4">
                        <label class="font-bold text-grey-darker block mb-2">Email</label>
                        <input type="text" class="block appearance-none w-full bg-white border border-grey-light hover:border-grey px-2 py-2 rounded shadow" placeholder="Email">
                    </div>

                    <div class="mb-4">
                        <label class="font-bold text-grey-darker block mb-2">Password</label>
                        <input type="password" class="block appearance-none w-full bg-white border border-grey-light hover:border-grey px-2 py-2 rounded shadow" placeholder="Password">
                    </div>

                    <div class="flex items-center justify-between">
                        <button class="bg-teal-dark hover:bg-teal text-white font-bold py-2 px-4 rounded">
                            Login
                        </button>
                    </div>
            </form>
    </div>
</div>
@endsection
