@extends('layouts.app')

@section('content')
<div class="container" style="display: flex; flex-flow: column nowrap; align-items: center;">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">{{ __('Name') }}</th>
                <th scope="col">{{ __('Email') }}</th>
                <th scope="col">{{ __('Date') }}</th>
                <th scope="col">{{ __('Actions') }}</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data['allResumes'] as $item)
                <tr>
                    <td>{{$item->name}}</td>
                    <td>{{$item->email}}</td>
                    <td>{{$item->created_at}}</td>
                    <td style="font-size: 12px;">
                        <a href="{{ route('resume', $item->genId) }}">
                            <i class="far fa-eye" style="margin-right: 2px;"></i>{{ __('View') }}
                        </a>
                        <form action="{{ route('admin.deleteResume', $item->genId)}}" method="post" style="margin: 0; padding: 0;">
                            {{ method_field('DELETE')}}
                            @csrf
                            <button type="submit" class="btn btn-link text-danger" style="font-size: 12px; margin: 0; padding: 0; border: 0;">
                                <i class="fas fa-trash-alt" style="margin-right: 2px;"></i>{{ __('Delete') }}
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection