@extends('layouts.users.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <x-parts.user_basic_card_layout>
                <x-slot name="cardHeader">
                    <h4 class="my-2">ログイン画面</h4>
                </x-slot>
                <x-slot name="cardBody">
                    <h4 class="my-2">ログイン</h4>
                </x-slot>
            </x-parts.user_basic_card_layout>
        </div>
    </div>
</div>
@endsection
