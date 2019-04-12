@extends('layouts.dashboard')

@section('body')
<div class="py-6 border-grey-light border-b">
    <h1>Apps</h1>
</div>
<div>
    <table class="text-left w-full border-collapse bg-white text-center">
        <tr>
            <th class="py-4 px-6 font-bold text-sm text-grey-dark border-b border-grey-light">ID</th>
            <th class="py-4 px-6 font-bold text-sm text-grey-dark border-b border-grey-light">NAME </th>
            <th class="py-4 px-6 font-bold text-sm text-grey-dark border-b border-grey-light">URL</th>
            <th class="py-4 px-6 font-bold text-sm text-grey-dark border-b border-grey-light">SSL?</th>
            <th class="py-4 px-6 font-bold text-sm text-grey-dark border-b border-grey-light">STATUS</th>
            <th class="py-4 px-6 font-bold text-sm text-grey-dark border-b border-grey-light">ACTIONS</th>
        </tr>
        <tr class="border-b">
            <td>1</td>
            <td>Orus Dev</td>
            <td>http://orus.dev.andromeda.tektonlabs.com</td>
            <td>✅</td>
            <td>✅</td>
            <td>
                Editar | Eliminar
            </td>
        </tr>
    </table>
</div>
@endsection
