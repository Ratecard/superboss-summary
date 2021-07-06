@extends('layout.app')

@section('content')
        <div>
            <div class="d-flex justify-content-center">
                <h1>Report</h1>
            </div>
            <div class="d-flex justify-content-center">
                <div style="width: 250px; height: 200px; margin: 10px" class="card bg-primary text-light">
                    <h3>Name</h3>
                    {{$name}}
                </div>
                <div style="width: 250px; height: 200px; margin: 10px" class="card bg-primary text-light">
                    <h3>Messages</h3>
                    {{$statistics['messages']['total']}}
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <div style="width: 250px; height: 200px; margin: 10px" class="card bg-primary text-light">
                    <h3>Total feedback</h3>
                    {{$statistics['messages']['feedback_with_messages']}}
                </div>
                <div style="width: 250px; height: 200px; margin: 10px" class="card bg-primary text-light">
                    <h3>Response rate</h3>
                    {{round($statistics['messages']['conversion'],1)}}
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <div style="width: 250px; height: 200px; margin: 10px" class="card bg-primary text-light">
                    <h3>Average CSAT</h3>
                    {{round($statistics['csat']['avg'],2)}}
                </div>
                <div style="width: 250px; height: 200px; margin: 10px" class="card bg-primary text-light">
                    <h3>Avergage NPS</h3>
                    {{round($statistics['nps']['avg'],1)}}
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <div style="width: 250px; height: 200px; margin: 10px" class="card bg-primary text-light">
                    <h3>Sentiment</h3>
                    {{__("lang.{$statistics['sentiment']['value']}")}}
                </div>
                <div style="width: 250px; height: 200px; margin: 10px" class="card bg-primary text-light">
                    <h3>Engagement</h3>
                    {{__("lang.{$statistics['engagement']['value']}")}}
                </div>
            </div>
            <div class="d-flex justify-center"><a class="btn btn-primary" href="../json">Back</a></div>
        </div>
@endsection

