@extends('layouts.users.app')


@section('content')
<div class="container">
    <x-parts.user_basic_card_layout>
        <x-slot name="cardHeader">
            <h4 class="my-2"><strong>部屋の作成</strong></h4>
            <a href="{{ route('rooms.index') }}" class="btn btn-outline-primary">戻る</a>
        </x-slot>
        <x-slot name="cardBody">
            <form method="POST" action="{{ route('rooms.store') }}"  enctype="multipart/form-data">
                @csrf

                <div class="col-md-8 mb-3 mx-auto">
                    <label class="m-3" for="room_type"><strong>部屋のタイプ</strong><span class="badge bg-danger ms-3">必須</span></label>
                    @include('components.form.select', ['name' => 'room_type', 'required' => true, 'data' => App\Enums\RoomType::toSelectArray()])
                    @include('components.form.error', ['name' => 'room_type'])
                </div>

                <div class="col-md-8 mb-3 mx-auto">
                    <label class="m-3" for="room_no"><strong>部屋番号</strong><span class="badge bg-danger ms-3">必須</span></label>
                    @include('components.form.number', ['name' => 'room_no', 'required' => true, 'min' => 0 , 'max' => 1000, 'step' => 100])
                    @include('components.form.error', ['name' => 'room_no'])
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
