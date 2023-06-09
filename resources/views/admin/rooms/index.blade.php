@extends('layouts.admins.app')

@section('content')
<div class="container">
    <x-parts.admin_basic_card_layout>
        <x-slot name="cardHeader">
            <h4 class="my-2">部屋一覧：{{ $rooms->total() . '件中' . $rooms->firstItem() . '-' . $rooms->lastItem() }}件</h4>
            {{-- <a href="{{ route('rooms.create') }}" class="btn btn-outline-primary">作成する</a> --}}
        </x-slot>
        <x-slot name="cardBody">
            <x-parts.basic_table_layout>
                <x-slot name="thead">
                    <tr>
                        <th scope="col" class="text-nowrap">部屋の番号</th>
                        <th scope="col" class="text-nowrap">部屋のタイプ</th>
                        <th scope="col" class="text-nowrap">部屋の基本価格</th>
                        <th scope="col" class="text-nowrap">最大宿泊人数</th>
                        <th scope="col" class="text-nowrap">作成日</th>
                        {{-- <th scope="col" class="text-nowrap"></th> --}}
                        {{-- <th scope="col" class="text-nowrap"></th> --}}
                    </tr>
                </x-slot>
                <x-slot name="tbody">
                    @if($rooms->isNotEmpty())
                        @foreach($rooms as $room)
                            <tr>
                                <td class="text-nowrap px-2">{{ $room->room_no }}</td>
                                <td class="text-nowrap px-2"><a href="{{ route('rooms.show', $room) }}">{{ App\Enums\RoomType::getRoomTypeName($room->room_type) }}</a></td>
                                <td class="text-nowrap px-2">{{ number_format($room->price) }} 円</td>
                                <td class="text-nowrap px-2">{{ $room->count }} 人</td>
                                <td class="text-nowrap px-2">{{ $room->created_at->format('Y-m-d') }}</td>
                                {{-- <td class="text-nowrap px-2"><a href="{{ route('rooms.edit', $room) }}" class="btn btn-sm btn-outline-secondary">編集</a></td> --}}
                                {{-- <td class="text-nowrap px-2">
                                    <form action="{{ route('rooms.destroy', $room) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-sm btn-outline-danger"
                                            onclick="return confirm('本当に削除しますか？')"
                                        >削除</button>
                                    </form>
                                </td> --}}
                            </tr>
                        @endforeach
                    @endif
                </x-slot>
            </x-parts.basic_table_layout>
            <div class="row justify-content-center">
                {{ $rooms->links('pagination::bootstrap-4') }}
            </div>
        </x-slot>
    </x-parts.admin_basic_card_layout>
</div>
@endsection
