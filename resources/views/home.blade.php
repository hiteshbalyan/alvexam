@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('inline-js')
    <script>
      $(document).ready(function () {
        (function () {

        })();
        $.get("{{ route('api.getPaper') }}").done(function (paper) {
          // get Periodic statistic data

        });
        $.get("{{ route('api.getToken') }}")
            .done(function () {
              console.log(arguments);
            })
      });
    </script>
@endsection
