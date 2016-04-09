@extends('layouts.app')

@section('content')
    @include('eat._form', [
        'action'   => route('eat.store'),
        'datetime' => Carbon\Carbon::now()->format('Y-m-d H:i'),
        'store'    => null,
        'food'     => null,
        'price'    => null,
        'rate'     => null,
        'note'     => null,
    ])
@endsection
