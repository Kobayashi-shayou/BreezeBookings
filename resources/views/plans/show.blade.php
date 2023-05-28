@extends('layouts.users.app')

@section('content')
<div class="container">
    <x-parts.user_basic_card_layout>
        <x-slot name="cardHeader">
            <h4 class="my-2">〜〜詳細</h4>
        </x-slot>
        <x-slot name="cardBody">
            <p>{{ $plan->title }}</p>
        </x-slot>
    </x-parts.user_basic_card_layout>
</div>
@endsection
