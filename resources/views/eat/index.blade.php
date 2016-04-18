@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        我們吃了？
                        <a class="pull-right text-primary" href="{{ route('eat.create') }}">新增</a>
                    </div>

                    <ul class="list-group">
                        @foreach ($eats as $eat)
                            <li class="list-group-item">
                                <p class="function-bar">
                                    @can('manage', $eat)
                                        <a class="text-muted" href="{{ route('eat.edit', $eat->id) }}">
                                            <i class="fa fa-pencil fa-lg"></i>
                                        </a>
                                        <a class="text-muted" href="{{ route('eat.destroy', $eat->id) }}" data-method="DELETE">
                                            <i class="fa fa-trash fa-lg"></i>
                                        </a>
                                    @else
                                        <span class="text-muted small">
                                            <i class="fa fa-angle-double-right"></i>
                                            {{ $eat->user->name }}
                                        </span>
                                    @endcan
                                </p>
                                <p class="pull-right">
                                    @for ($i = 0; $i < $eat->rate; $i++)
                                        <i class="fa fa-star"></i>
                                    @endfor
                                    @for ($i = 0; $i < 5 - $eat->rate; $i++)
                                        <i class="fa fa-star-o text-muted"></i>
                                    @endfor
                                </p>
                                <p class="text-muted small">{{ $eat->datetime }}</p>
                                <p>{{ $eat->store }} - {{ $eat->food }}</p>
                                <p>$ {{ number_format($eat->price) }}</p>
                                @if ($eat->note)
                                    <hr>
                                    <p>{!! nl2br(e($eat->note)) !!}</p>
                                @endif
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="text-center">
                    {!! $eats->render() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
