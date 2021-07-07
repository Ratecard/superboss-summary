@extends('layout.app')

@section('content')


    <div class= "p-8 text-center">
            <h4>
            <code class="text-sm font-bold  border-solid border-4 border-light-blue-500 p-3 w-full text-gray-00"> Report</code>
            </h4>
        </div>
    </div>

    <div class="grid grid-cols-4 gap-4">

        <div class="d-flex justify-content-center">
            <div class="relative px-4 rounded-md py-5 bg-white shadow-md sm:p-700 m-5 w-full">
                <li class="flex items-start">
                    <h3>
                        <code class="text-sm font-bold text-gray-400">Name</code>
                    </h3>
                </li>
                <code class="text-sm font-bold text-gray-900"> {{ $name }}
                </code>
            </div>


            <div class="relative px-4 rounded-md py-5 bg-white shadow-md sm:p-700 m-5 w-full ">
                  <h3>
                    <code class="text-sm font-bold text-gray-400"> Messages</code>
                </h3>
                <code class="text-sm font-bold text-gray-900">
                    {{ $statistics['messages']['total'] }}
                </code>
            </div>

        </div>
        <div class="d-flex justify-content-center">
            <div class="relative px-4 rounded-md py-5 bg-white shadow-md sm:p-700 m-5 w-full ">
                <h3>
                    <code class="text-sm font-bold text-gray-400"> Total feedback </code>
                </h3>
                <code class="text-sm font-bold text-gray-900">
                {{ $statistics['messages']['feedback_with_messages'] }}
                </code>
            </div>

            <div class="relative px-4 rounded-md py-5 bg-white shadow-md sm:p-700 m-5 w-full ">
                <h3>
                    <code class="text-sm font-bold text-gray-400">Response rate</code>
                    </h3>
                    <code class="text-sm font-bold text-gray-900">
                {{ round($statistics['messages']['conversion'], 1) }}
                    </code>
            </div>

        </div>
        <div class="d-flex justify-content-center">
            <div class="relative px-4 rounded-md py-5 bg-white shadow-md sm:p-700 m-5 w-full ">
                <h3>
                    <code class="text-sm font-bold text-gray-400">Average CSAT</code>
                </h3>
                <code class="text-sm font-bold text-gray-900">
                {{ round($statistics['csat']['avg'], 2) }}
                </code>
            </div>

            <div class="relative px-4 rounded-md py-5 bg-white shadow-md sm:p-700 m-5 w-full ">
                <h3>
                    <code class="text-sm font-bold text-gray-400">Avergage NPS</code>
                </h3>
                <code class="text-sm font-bold text-gray-900">
                {{ round($statistics['nps']['avg'], 1) }}
                </code>
            </div>
        </div>

        <div class="d-flex justify-content-center">
            <div class="relative px-4 rounded-md py-5 bg-white shadow-md sm:p-700 m-5 w-full ">
                <h3>
                    <code class="text-sm font-bold text-gray-400">Sentiment</code>
                </h3>
                <code class="text-sm font-bold text-gray-900">
                {{ __("lang.{$statistics['sentiment']['value']}") }}
                </code>
            </div>

            <div class="relative px-4 rounded-md py-5 bg-white shadow-md sm:p-700 m-5 w-full ">
                <h3>
                    <code class="text-sm font-bold text-gray-400">Engagement</code>
                </h3>
                <code class="text-sm font-bold text-gray-900">
                {{ __("lang.{$statistics['engagement']['value']}") }}
                </code>
            </div>
        </div>
    </div>
    </div>

    <code class="text-sm font-bold text-gray-800">
    <div class=" space-y-4 d-flex justify-center text-center">
        <a class="btn btn-primaryborder-solid border-4 border-light-blue-500 p-3" href="../json">Back</a>
    </div>
    </code>


@endsection
