@extends('layouts.admins.app')

@section('content')
<div class="container">
    <x-parts.admin_basic_card_layout>
        <x-slot name="cardHeader">
            <h4 class="my-2">一覧：{{ $bookings->total() . '件中' . $bookings->firstItem() . '-' . $bookings->lastItem() }}件</h4>
            <a href="{{ route('bookings.create') }}" class="btn btn-outline-primary">作成する</a>
        </x-slot>
        <x-slot name="cardBody">
            <x-parts.basic_table_layout>
                <x-slot name="thead">
                    <tr>
                        <th scope="col" class="text-nowrap">タイトル</th>
                        <th scope="col" class="text-nowrap">作成日</th>
                        <th scope="col" class="text-nowrap">編集</th>
                        <th scope="col" class="text-nowrap">削除</th>
                    </tr>
                </x-slot>
                <x-slot name="tbody">
                    @if($bookings->isNotEmpty())
                        @foreach($bookings as $booking)
                            <tr>
                                <td class="text-nowrap px-2"><a href="{{ route('bookings.show', $booking) }}">{{ $booking->title }}</a></td>
                                <td class="text-nowrap px-2">{{ $booking->created_at }}</td>
                                <td class="text-nowrap px-2"><a href="{{ route('bookings.edit', $booking) }}" class="btn btn-sm btn-outline-secondary">編集</a></td>
                                <td class="text-nowrap px-2">
                                    <form action="{{ route('bookings.destroy', $booking) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-sm btn-outline-danger"
                                            onclick="return confirm('本当に削除しますか？')"
                                        >削除</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    @endif
                </x-slot>
            </x-parts.basic_table_layout>
            <div class="row justify-content-center">
                {{ $bookings->links('pagination::bootstrap-4') }}
            </div>
        </x-slot>
    </x-parts.admin_basic_card_layout>
</div>
@endsection
