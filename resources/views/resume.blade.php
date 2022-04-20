@extends('layouts.app')

@section('content')
<div class="container" style="display: flex; flex-flow: column nowrap; align-items: center;">
    <div class="card" style="width: 575px;">
        <div class="card-header">

            <div class="lead"> {{$data['resume']->name}} </div>
            <div>{{ __('Email:') }}  <a href="mailto:tmungann@gmail.com?Subject=Resume%20Response" target="_blank">{{$data['resume']->email}}</a></div>
            <div>{{ __('Website:') }}  <a href="https://tolgamungan.com" target="_blank">{{$data['resume']->website}}</a></div>
            <div>{{ __('Social Media:') }}  <a href="https://tolgamungan.com" target="_blank">{{$data['resume']->socialMedia}}</a></div>

        </div>

        <div class="card-body">

            <form method="POST" action="{{ route('create') }}">
                @csrf
            <div class="card" style="margin-bottom: 20px;">
                <div class="card-header">{{ __('Skills') }} </div>
                <div class="card-body list-group list-group-flush">
                    @foreach($data['skills'] as $skill)
                        <div style="margin: 5px;" class="list-group-item">
                            <div class="lead">{{$skill->name}}</div>
                            <div>{{$skill->description}}</div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="card" style="margin-bottom: 20px;">
                <div class="card-header">{{ __('Education') }} </div>
                <div class="card-body list-group list-group-flush">
                    @foreach($data['education'] as $education)
                        <div style="margin: 5px;" class="list-group-item">
                            <div class="lead">{{$education->name}}</div>
                            <div>{{$education->description}}</div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="card" style="margin-bottom: 20px;">
                <div class="card-header">{{ __('Work') }} </div>
                <div class="card-body list-group list-group-flush">
                    @foreach($data['work'] as $work)
                        <div style="margin: 5px;" class="list-group-item">
                            <div class="lead">{{$work->name}}</div>
                            <div>{{$work->description}}</div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="card" style="margin-bottom: 20px;">
                <div class="card-header">{{ __('Hobbies, Awards, Projects, Certifications, Volunteer, Interests') }} </div>
                <div class="card-body list-group list-group-flush">
                    @foreach($data['other'] as $other)
                        <div style="margin: 5px;" class="list-group-item">
                            <div class="lead">{{$other->name}}</div>
                            <div>{{$other->description}}</div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="card">
                <div class="card-header">{{ __('References') }}</div>
                <div class="card-body list-group list-group-flush">
                    <div class="list-group-item">
                        <div>Matt Redmond - NSCC Instructor</div>
                        <div><a href="mailto:matthew.redmond@nscc.ca">matthew.redmond@nscc.ca</a></div>
                    </div>
                    <div class="list-group-item">
                        <div>Peter Wilson - Employer</div>
                        <div><a href="mailto:peter@email.com">peter@email.com</a></div>
                    </div>
                </div><br>
                <div>
                <h5>Thank you for your time and consideration and very much look forward to hearing from you</h5>
                </div>
            </div>
        </form>
        </div>

    </div>
</div>
@endsection