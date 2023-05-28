@extends('layouts.users.app')


@section('content')
<div class="container">
    <x-parts.user_basic_card_layout>
        <x-slot name="cardHeader">
            <h4 class="my-2"><strong>部屋の作成</strong></h4>
        </x-slot>
        <x-slot name="cardBody">
            <form method="POST" action="{{ route('rooms.store') }}"  enctype="multipart/form-data">
                @csrf

                <div class="col-md-8 mb-3 mx-auto">
                    <label class="m-3" for="name"><strong>部屋の名前</strong><span class="badge bg-danger ms-3">必須</span></label>
                    @include('components.form.text', ['name' => 'name', 'required' => true])
                    @include('components.form.error', ['name' => 'name'])
                </div>

                <div class="col-md-8 mb-3 mx-auto">
                    <label class="m-3" for="price"><strong>部屋の価格</strong><span class="badge bg-danger ms-3">必須</span></label>
                    @include('components.form.number', ['name' => 'price', 'required' => true, 'min' => 0 , 'max' => 1000000, 'step' => 1000])
                    @include('components.form.error', ['name' => 'price'])
                </div>

                <div class="col-md-8 mb-3 mx-auto">
                    <label class="m-3" for="count"><strong>部屋に宿泊できる人数</strong><span class="badge bg-danger ms-3">必須</span></label>
                    @include('components.form.number', ['name' => 'count', 'required' => true, 'min' => 0 , 'max' => 50, 'step' => 1])
                    @include('components.form.error', ['name' => 'count'])
                </div>

                <div class="text-center my-4 ">
                    <button type="submit" class="btn btn-sm btn-outline-dark">
                        登録する
                    </button>
                </div>
            </form>
        </x-slot>
    </x-parts.user_basic_card_layout>
</div>
@endsection
