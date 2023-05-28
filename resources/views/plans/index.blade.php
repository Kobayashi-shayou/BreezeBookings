@extends('layouts.users.app')

@section('content')
<div class="container">
    <x-parts.user_basic_card_layout>
        <x-slot name="cardHeader">
            <h4 class="my-2">一覧：{{ $plans->total() . '件中' . $plans->firstItem() . '-' . $plans->lastItem() }}件</h4>
            <a href="{{ route('plans.create') }}" class="btn btn-outline-primary">作成する</a>
        </x-slot>
        <x-slot name="cardBody">
            <x-parts.basic_table_layout>
                <x-slot name="thead">
                    <tr>
                        <th scope="col" class="text-nowrap">プランのタイトル</th>
                        <th scope="col" class="text-nowrap">詳細</th>
                        <th scope="col" class="text-nowrap">編集</th>
                        <th scope="col" class="text-nowrap">削除</th>
                    </tr>
                </x-slot>
                <x-slot name="tbody">
                    @if($plans->isNotEmpty())
                        @foreach($plans as $plan)
                            <tr>
                                <td class="text-nowrap px-2"><a href="{{ route('plans.show', $plan) }}">{{ $plan->name }}</a></td>
                                <td class="text-nowrap px-2">{{ $plan->description }}</td>
                                <td class="text-nowrap px-2"><a href="{{ route('plans.edit', $plan) }}" class="btn btn-sm btn-outline-secondary">編集</a></td>
                                <td class="text-nowrap px-2">
                                    <form action="{{ route('plans.destroy', $plan) }}" method="POST">
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
                {{ $plans->links('pagination::bootstrap-4') }}
            </div>
        </x-slot>
    </x-parts.user_basic_card_layoutd>
</div>
@endsection
