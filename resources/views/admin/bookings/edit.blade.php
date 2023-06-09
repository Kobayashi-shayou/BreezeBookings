@extends('layouts.admins.app')

@section('content')
<div class="container">
    <x-parts.admin_basic_card_layout>
        <x-slot name="cardHeader">
            <h4 class="my-2">〜〜編集</h4>
        </x-slot>
        <x-slot name="cardBody">
            <form method="POST" action="{{ route('bookings.update', $booking) }}"  enctype="multipart/form-data">
                @csrf
                @method('PATCH')

                <div class="col-md-8 mb-3 mx-auto">
                    <label class="" for="title">タイトル</label>
                    @include('components.form.text', ['name' => 'title', 'value' => $booking->title, 'required' => true])
                    @include('components.form.error', ['name' => 'title'])
                </div>

                <div class="text-center my-4">
                    <button type="submit" class="btn btn-outline-dark">
                        更新する
                    </button>
                </div>
            </form>
        </x-slot>
    </x-parts.admin_basic_card_layout>
</div>
@endsection
