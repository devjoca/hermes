@extends('layouts.dashboard')

@section('body')
<div class="py-6 border-grey-light">
    <div class="flex mb-4">
        <div class="w-3/4 h-12">
            <h1>Create App</h1>
        </div>
    </div>
</div>
<div>
    <form action="/apps" method="POST">
        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full px-3">
                @csrf
                <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-password">
                    URL
                </label>
                <input required class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-grey" name="url" type="text" placeholder="Put the URL of the app you want to be monitored!! 👁">
                <button type="submit" class="py-4 px-6 mt-4 bg-teal-dark rounded font-bold text-white cursor-pointer align-middle no-underline">Create</button>
            </div>
        </div>

    </form>

</div>
@endsection
