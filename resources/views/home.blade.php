@extends('layouts.app')

@section('content')
    <section>
        <div class="d-flex align-items-center justify-content-center flex-column" style="min-height: 100vh">
            <h1>{{ __('messages.welcome') }}</h1>
            <p>{{ __('messages.starter_msg', ['version' => __('messages.laravel_version')]) }}</p>
            <a href="{{ route('changeLang', __('settings.next_lang')) }}">
                {{ __('messages.next_lang') }}
            </a>

            <h4 class="mt-5 list-title">{{ __('messages.project_includes') }}</h4>
            <ul class="ps-5 main-list">
                <li>{{ __('messages.includes.cairo') }}</li>
                <li>{{ __('messages.includes.bootstrap') }}</li>
                <li>{{ __('messages.includes.fontawesome') }}</li>
                <li>{{ __('messages.includes.custom_style') }}</li>
                <li>{{ __('messages.includes.languages') }}</li>
                <li>{{ __('messages.includes.jquery') }}</li>
            </ul>
        </div>
    </section>
@endsection
