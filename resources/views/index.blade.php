@extends('layouts.app')

@section('content')
<div class="container" style="display: flex; flex-flow: column nowrap; align-items: center;">
    <div class="card" style="width: 575px;">
        <div class="card-header">
            <strong> Resume Builder</strong>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('create') }}">
                @csrf
                <div class="card-text" style="margin-bottom: 10px;">{{ __('Tell me who this resume is for?') }}</div>
                <div class="row" style="margin-bottom: 10px; margin-left: 5px;">
                    <div class="col">{{ __('Name:') }}
                        <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autocomplete="name" placeholder="Peter Wilson" style="width: 350px;" maxlength="150" pattern="^([a-zA-Z]+\s)*[a-zA-Z]+$">
                    </div>
                    <div class="col">{{ __('Email:') }}
                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="peter@email.com" style="width: 350px;" maxlength="200">
                    </div>
                    <div class="col">{{ __('Website:') }} 
                        <input id="website" type="url" class="form-control" name="website" value="{{ old('website') }}" required autocomplete="website" placeholder="https://peterwilson.com" style="width: 350px;" maxlength="200">
                    </div>
                    <div class="col">{{ __('Social Media:') }} 
                        <input id="socialMedia" type="url" class="form-control" name="socialMedia" value="{{ old('socialMedia') }}" required autocomplete="socialMedia" placeholder="https://www.linkedin.com/in/peter-wilson123/" style="width: 350px;" maxlength="200">
                    </div>
                </div>
                <div class="card-text" style="margin-bottom: 10px;">{{ __('What Interests You?') }}</div>
                <div class="row">

                    {{--*** Skills ***--}}
                    <div class="col" style="margin: 10px;">
                        <button class="btn btn-light" type="button" data-target="#skillsDropdown" data-toggle="collapse" aria-expanded="false" aria-controls="skillsDropdown" style="width: 350px;">
                            {{ __('Skills') }}
                        </button>

                        <div class="collapse show" id="skillsDropdown">
                            <select multiple style="border-radius: 0.25rem !important; margin-top: 5px; height: 250px; width: 350px;" name="skills[]" id="skills" required>
                                @foreach($data['skills'] as $skill)
                                        <option class="dropdown-item" value="{{$skill->itemId}}">{{$skill->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    {{--*** Education ***--}}
                    <div class="col" style="margin: 10px;">
                        <button class="btn btn-light" type="button" data-target="#eduDropdown" data-toggle="collapse" aria-expanded="false" aria-controls="eduDropdown" style="width: 350px;">
                            {{ __('Education') }}&nbsp;&nbsp;
                        </button>
                        <div class="collapse show" id="eduDropdown">
                            <select multiple style="border-radius: 0.25rem !important; margin-top: 5px; height: 250px; width: 350px;" name="education[]" id="education" required>
                                @foreach($data['education'] as $edu)
                                    <option class="dropdown-item" value="{{$edu->itemId}}">{{$edu->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    
                    <div class="w-100"></div>
                    
                    
                    {{--*** Work Experience ***--}}
                    <div class="col" style="margin: 10px;">
                        <button class="btn btn-light" type="button" data-target="#expDropdown" data-toggle="collapse" aria-expanded="false" aria-controls="expDropdown" style="width: 350px;">
                            {{ __('Work Experience') }}&nbsp;&nbsp;
                        </button>
                        <div class="collapse show" id="expDropdown">
                            <select multiple="multiple" multiple style="border-radius: 0.25rem !important; margin-top: 5px; height: 250px; width: 350px;" name="work[]" id="work" required>
                                @foreach($data['work'] as $work)
                                <option class="dropdown-item" value="{{$work->itemId}}">{{$work->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    
                    {{--*** Others ***--}}
                    <div class="col" style="margin: 10px;">
                        <button class="btn btn-light" type="button" data-target="#certDropdown" data-toggle="collapse" aria-expanded="false" aria-controls="certDropdown" style="width: 350px;">
                            {{ __('Hobbies, Awards, Projects, Certifications, Volunteer, Interests') }} &nbsp;&nbsp;
                        </button>
                        <div class="collapse show" id="certDropdown">
                            <select multiple style="border-radius: 0.25rem !important; margin-top: 5px; height: 250px; width: 350px;" name="other[]" id="other" required>
                                @foreach($data['other'] as $other)
                                <option class="dropdown-item" value="{{$other->itemId}}">{{$other->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>

                <div class="form-group my-4" style="margin: 5px; margin-top: 10px;">
                    
                    <button type="submit" class="btn btn-primary" style="margin-right: 10px;">{{ __('Build Resume') }}</button>
                
                    <input type="reset" class="btn btn-danger" value="{{ __('Start Over') }}">
 
                </div>
            </form>
        </div>
    </div>
</div>


@endsection