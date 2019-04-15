@extends('layouts.dashboard')

@section('body')
<div class="py-6 border-grey-light">
    <h1>Apps</h1>
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
                Editar | Eliminar
            </td>
        </tr>
        @endforeach
    </table>
</div>
@endsection
