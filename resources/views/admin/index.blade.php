@extends('layouts.app')

@section('content')
<div class="container" style="display: flex; flex-flow: column nowrap; align-items: center;">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Category</th>
                <th scope="col">Description</th>
                <th scope="col">Date</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data['resume-items'] as $item)
                <tr>
                    <td>{{$item->name}}</td>
                    <td>
                        @if($item->category == "1")
                            Skill
                        @elseif($item->category == "2")
                            Work
                        @elseif($item->category == "3")
                            Education
                        @elseif($item->category == "4")
                            Extra
                        @endif
                    </td>
                    <td>{{$item->description}}</td>
                    <td>{{$item->created_at}}</td>
                    <td style="font-size: 12px;">
                        <a href="{{ route('admin.edit', $item->itemId) }}">
                            <i class="far fa-edit" style="margin-right: 2px;"></i>{{ __('Edit') }}
                        </a><br>
                        <form action="{{ route('admin.delete', $item->itemId)}}" method="post" style="margin: 0; padding: 0;">
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