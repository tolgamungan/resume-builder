@extends('layouts.app')

@section('content')
<div class="container" style="display: flex; flex-flow: column nowrap; align-items: center;">
<div class="card" style="width: 575px;">
    <div class="card-header">
        {{ __('Edit Resume Item') }}
    </div>
    <div class="card-body">
        <form method="post" action="{{ route('admin.editItem', ($data['item']->itemId)) }}">
            @csrf
            <div style="margin-bottom: 10px;">
                <label for="name">{{ __('Name') }}</label>
                <input id="name" type="text" name="name" class="form-control" value="{{ $data['item']->name }}" required autocomplete="name" maxlength="150">
            </div>

            <div style="margin-bottom: 10px;">
                <label for="description">{{ __('Description') }}</label>
                <input id="description" type="text" name="description" class="form-control" value="{{ $data['item']->description }}" required autocomplete="description" maxlength="250">
            </div>

            <div>
                <label for="category">{{ __('Category') }}</label>
                <select name="category" required class="form-control" style="width: 250px;">
                    @if($data['item']->category == "1")
                        <option value="1" selected>Skills</option>
                        <option value="2">Work</option>
                        <option value="3">Education</option>
                        <option value="4">Extra</option>
                    @elseif($data['item']->category == "2")
                        <option value="1">Skills</option>
                        <option value="2" selected>Work</option>
                        <option value="3">Education</option>
                        <option value="4">Extra</option>
                    @elseif($data['item']->category == "3")
                        <option value="1">Skills</option>
                        <option value="2">Work</option>
                        <option value="3" selected>Education</option>
                        <option value="4">Extra</option>
                    @elseif($data['item']->category == "4")
                        <option value="1">Skills</option>
                        <option value="2">Work</option>
                        <option value="3">Education</option>
                        <option value="4" selected>Extra</option>
                    @endif
                </select>
            </div>
            <div class="form-group my-3" style="margin: 5px; margin-top: 10px;">
                <button type="submit" class="btn btn-primary" style="margin-right: 10px;">{{ __('Edit') }}</button>
                <a class="btn btn-danger" href="{{ route('admin.index') }}">{{ __('Cancel') }}</a>
            </div>
        </form>
    </div>

</div>
@endsection