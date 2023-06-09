<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\RoomController\StoreRequest;
use App\Http\Requests\Admin\RoomController\UpdateRequest;
use App\Models\Room;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use \Illuminate\View\View;

class RoomController extends Controller
{
    private Room $room;

    /**
     * @param Room $room
     */
    public function __construct(Room $room)
    {
        $this->room = $room;
    }

    /**
     * 一覧
     */
    public function index(Request $request): View
    {
        return view('admin.rooms.index', [
            'rooms' => Room::latest()->paginate(12),
        ]);
    }

    /**
     * 登録フォーム表示
     */
    public function create(): View
    {        
        return view('admin.rooms.create');
    }

    /**
     * 詳細表示
     */
    public function show(Room $room): View
    {        
        return view('admin.rooms.show', [
            'room' => $room,
        ]);
    }

    /**
     * 登録
     */
    public function store(StoreRequest $request): RedirectResponse
    {
        $this->room->fill($request->substitutable())->save();

        return to_route('admin.rooms.index')->with('status', '作成しました');
    }

    /**
     * 編集フォーム表示
     *
     * @return \Illuminate\View\View
     */
    public function edit(Room $room): View
    {
        return view('admin.rooms.edit', [
            'room' => $room,
        ]);
    }

    /**
     * 更新
     */
    public function update(UpdateRequest $request, Room $room): RedirectResponse
    {
        $room->fill($request->substitutable())->save();

        // return back()->with('status', '更新しました');
        return to_route('admin.rooms.index')->with('status', '更新しました');
    }

    /**
     * 削除
     */
    public function destroy(Room $room): RedirectResponse
    {
        $room->delete();

        return to_route('admin.rooms.index')->with('status', '削除しました');
    }

    /**
     * トップページ
     */
    public function top(): View 
    {
        return view('admin.top', [
            'rooms' => Room::latest()->paginate(20),
        ]);
    }
}