@extends('layouts.app')

@section('content')
    @include('eat._form', [
        'method'   => 'PUT',
        'action'   => route('eat.update', $eat->id),
        'datetime' => $eat->datetime,
        'store'    => $eat->store,
        'food'     => $eat->food,
        'price'    => $eat->price,
        'rate'     => $eat->rate,
        'note'     => $eat->note,
    ])
@endsection
