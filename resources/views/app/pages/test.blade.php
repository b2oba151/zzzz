@extends('app')
@section('content')
@php
$data = collect([
    (object)[
        'name' => "Accueil",
        'route' => "home",
    ],
    (object)[
        'name' => "Wiki",
        'route' => "home",
    ],
    (object)[
        'name' => "Generalite systeme linux",
        'route' => "home",
    ],
    (object)[
        'name' => "Amorçage, démarrage du système linux",
        'route' => "home",
    ],
    (object)[
        'name' => "chroot sous linux",
        'route' => "home",
    ],
]);
@endphp

{{-- la file d'ariane --}}
<x-breadcrumb :data="$data" />



@endsection
