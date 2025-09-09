@extends('app')
@section('content')

    <div class="section has-text-centered">
        <div class="container">
            <h1 class="title is-1">{{ __('app.thanks_for_checking_out_openlittermap') }}</h1>
            <h2 class="subtitle is-3" style="margin-bottom: 0;">{{ __('app.oops_this_impact') }}</h2>
            <h2 class="subtitle is-3">{{ __('app.come_back_with') }}</h2>

            <div class="image-container mt-5 mb-5">
                <img
                    src="/assets/images/cleaning-planet.webp"
                    alt="Cleaning Planet"
                    class="image is-inline-block"
                    style="max-width: 650px;"
                />
            </div>

            <p class="mt-5">
                <a href="/" class="button is-primary is-large">{{ __('app.return_to_openlittermap') }}</a>
            </p>
        </div>
    </div>

@stop
