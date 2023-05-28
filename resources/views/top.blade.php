@extends('layouts.users.app')

@section('content')
<div class="container">
    <x-parts.user_basic_card_layout>

        <x-slot name="cardHeader">
            <h4 class="my-2">お部屋一覧：{{ $rooms->total() . '件中' . $rooms->firstItem() . '-' . $rooms->lastItem() }}件</h4>
            {{-- <a href="{{ route('rooms.create') }}" class="btn btn-outline-primary">作成する</a> --}}
        </x-slot>
        <x-slot name="cardBody">
        @foreach ($rooms as $room)
            {{-- 部屋案内のcard --}}
            <div class="card mt-3 mx-5 border-secondary" style="max-width: 100%;">
                <div class="row g-0">
                    <div class="col-md m-3 d-flex align-items-center">
                        {{-- imageがない場合はこちら: no_image_logo.png を使用 --}}
                        {{-- <img src="{{ asset('/storage/images/no_image_logo.png') }}" alt="画像はこちらに表示されます"> --}}
                        <img src="{{ asset('/storage/images/room01.jpeg') }}" alt="画像はこちらに表示されます">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body d-flex flex-column justify-content-between">
                                <h5 class="card-title"><strong>{{ $room->name }}</strong></h5>
                                <p class="card-text">最大宿泊人数 : {{ $room->count }} 人</p>
                                <p class="card-text">価格 : {{ number_format($room->price) }} 円</p>
                            <div class="position-absolute bottom-0 end-0 m-2">
                                <small class="text-muted">最終更新日 : {{ $room->updated_at->format('Y-m-d') }}</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        </x-slot>

        {{-- <div class="row justify-content-center">
            {{ $rooms->links('pagination::bootstrap-4') }}
        </div> --}}
    </x-parts.user_basic_card_layout>
</div>
@endsection
