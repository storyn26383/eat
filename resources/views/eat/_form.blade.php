<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">我吃了？</div>

                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ $action }}">
                        {!! csrf_field() !!}
                        {!! method_field($method) !!}

                        <div class="form-group{{ $errors->has('datetime') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">我哪時吃的？</label>

                            <div class="col-md-6">
                                <div class="input-group" data-target="datetimepicker">
                                    <input type="text" class="form-control" name="datetime" value="{{ old('datetime', $datetime) }}" readonly>
                                    <span class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </span>
                                </div>

                                @if ($errors->has('datetime'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('datetime') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('store') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">我在哪吃的？</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="store" value="{{ old('store', $store) }}">

                                @if ($errors->has('store'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('store') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('food') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">我吃了什麼？</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="food" value="{{ old('food', $food) }}">

                                @if ($errors->has('food'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('food') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('price') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">我花了多少？</label>

                            <div class="col-md-6">
                                <div class="input-group">
                                    <span class="input-group-addon">$</span>
                                    <input type="text" class="form-control" name="price" value="{{ old('price', $price) }}">
                                </div>

                                @if ($errors->has('price'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('price') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('rate') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">我給他幾分？</label>

                            <div class="col-md-6">
                                @for ($i = 1; $i <= 5; $i++)
                                    <label class="radio-inline">
                                        <input type="radio" name="rate" value="{{ $i }}" @if ($i === old('rate', $rate)) checked @endif > {{ $i }}
                                    </label>
                                @endfor

                                @if ($errors->has('rate'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('rate') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('note') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">我有話想說～</label>

                            <div class="col-md-6">
                                <textarea class="form-control" name="note" rows="5">{{ old('note', $note) }}</textarea>

                                @if ($errors->has('note'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('note') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-check"></i>送出
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>