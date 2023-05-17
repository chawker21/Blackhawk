@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">


            <div class="col col-sm-6">
                <div class="card">

                    <div class="card-header"><a href="/openFEC">Back to ID entry</a></div>

                    <div class="card-body">

                        {{--{{ $candidate->name}}<br>--}}
                        {{--first_file_date: {{ $candidate->first_file_date}}<br>--}}
                        {{--state:{{ $candidate->state}}<br>--}}
                        {{--district:{{ $candidate->district}}<br>--}}
                        {{--incumbent_challenge:{{ $candidate->incumbent_challenge}}<br>--}}
                        {{--party:{{ $candidate->party_full}}<br>--}}
                        {{--last_file_date:{{ $candidate->last_file_date}}<br>--}}
                        {{--candidate_status:{{ $candidate->candidate_status}}<br>--}}
                        {{--federal_funds_flag:{{ $candidate->federal_funds_flag}}<br>--}}
                        {{--address_street_1:{{ $candidate->address_street_1}}<br>--}}
                        {{--active_through:{{ $candidate->active_through}}<br>--}}
                        {{--CandidateID:{{ $candidate->candidate_id}}<br>--}}
                        {{--address_city:{{ $candidate->address_city}}<br>--}}
                        {{--address_zip:{{ $candidate->address_zip}}<br>--}}
                        {{--incumbant:{{ $candidate->incumbent_challenge_full}}<br>--}}
                        {{--Office:{{ $candidate->office_full}}<br>--}}
                        {{--<a href="{{$candidate->FEC}}">FEC PAGE</a>--}}

                    </div>

                </div>
            </div>


        </div>
    </div>
    </div>

@endsection

