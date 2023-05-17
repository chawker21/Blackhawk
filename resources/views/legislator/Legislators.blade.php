@extends('legislator.layouts.app')
@section('content')
    @foreach($legislators as $legislator)
        <div class="container">
            <div class="card">
                <h5 class="card-header"><a name="{{$legislator->full_name}}">{{$legislator->full_name}}</a> | {{$legislator->birthday}} | {{$legislator->gender}}</h5>
                <div class="card-body">
                    <h5 class="card-title">{{$legislator->party}}
                        @if($legislator->type == 'rep')
                            representative
                        @elseif($legislator->type == 'sen')
                            Senator
                        @else
                            Politician
                        @endif
                            | state: {{$legislator->state}} |
                        @if($legislator->district == '00')
                            senate class: {{$legislator->senate_class}} |
                        @else
                            district: {{$legislator->district}} |
                        @endif
                        <br>address: {{$legislator->address}}<br>
                        phone: {{$legislator->phone}}<br>
                        homepage: <a href="{{$legislator->url}}">{{$legislator->url}}</a><br>
                        contact: <a href="{{$legislator->contact_form}}">{{$legislator->contact_form}}</a><br>
                           </h5><br>
                </div>
            </div>
        </div>
    @endforeach
@endsection