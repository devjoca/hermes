@extends('layouts.dashboard')

@section('body')
<div class="py-6 border-grey-light">
    <div class="flex mb-4">
        <div class="w-3/4 h-12">
            <h1>Apps</h1>
        </div>
        <div class="w-1/4 h-12">
            <a class="py-4 px-6 mt-4 bg-teal-dark rounded font-bold text-white cursor-pointer align-middle no-underline" href="/monitors/create">Create</a>
        </div>
    </div>
</div>
<div>
    <table class="text-left w-full border-collapse bg-white text-center">
        <tr>
            <th class="py-4 px-6 font-bold text-sm text-grey-dark border-b border-grey-light">#</th>
            <th class="py-4 px-6 font-bold text-sm text-grey-dark border-b border-grey-light">URL</th>
            <th class="py-4 px-6 font-bold text-sm text-grey-dark border-b border-grey-light">STATUS</th>
            <th class="py-4 px-6 font-bold text-sm text-grey-dark border-b border-grey-light">SSL?</th>
            <th class="py-4 px-6 font-bold text-sm text-grey-dark border-b border-grey-light">ACTIONS</th>
        </tr>
        @foreach($monitors as $monitor)
        <tr class="border-b">
            <td>{{ $loop->iteration }}</td>
            <td><a href="{{ $monitor['url'] }}" target="_blank">{{ $monitor['url'] }}</a></td>
            <td>{{ $monitor['status'] }}</td>
            <td>{{ $monitor['certificate_check_enabled'] ? $monitor['certificate_status'] : 'not enabled' }}</td>
            <td>
                <delete-button url="{{ url('monitor/'. $monitor['id']) }}"></delete-button>
            </td>
        </tr>
        @endforeach
        @if($monitors->isEmpty())
        <tr class="border-b">
            <td colspan="5">There are no rows to show 👀</td>
        </tr>
        @endif
    </table>
</div>
@endsection
