@extends('layouts.users.app')


@section('content')
<div class="container">
    <x-parts.user_basic_card_layout>
        <x-slot name="cardHeader">
            <h4 class="my-2">プランの作成</h4>
        </x-slot>
        <x-slot name="cardBody">
            <form method="POST" action="{{ route('plans.store') }}"  enctype="multipart/form-data">
                @csrf

                <div class="col-md-8 mb-3 mx-auto">
                    <label class="m-3" for="name"><strong>プランのタイトル</strong><span class="badge bg-danger ms-3">必須</span></label>
                    @include('components.form.text', ['name' => 'name', 'required' => true])
                    @include('components.form.error', ['name' => 'name'])
                </div>

                <div class="col-md-8 mb-3 mx-auto">
                    <label class="m-3" for="description"><strong>プランの詳細</strong><span class="badge bg-danger ms-3">必須</span></label>
                    @include('components.form.text', ['name' => 'description', 'required' => true])
                    @include('components.form.error', ['name' => 'description'])
                </div>

                <div class="col-md-8 mb-3 mx-auto">
                    <label class="m-3" for="image"><strong>プランの画像</strong></label>
                    <div class="border border-dark">
                        @include('components.form.file', ['name' => ''])
                    </div>
                </div>

                <div class="text-center my-4">
                    <button type="submit" class="btn btn-outline-dark">
                        登録する
                    </button>
                </div>
            </form>
        </x-slot>
    </x-parts.user_basic_card_layout>
</div>
@endsection
