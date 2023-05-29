<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\BookingController\StoreRequest;
use App\Http\Requests\BookingController\UpdateRequest;
use App\Models\Booking;
use Illuminate\Http\Request;


class BookingController extends Controller
{
    private Booking $booking;

    /**
     * @param Booking $booking
     */
    public function __construct(Booking $booking)
    {
        $this->booking = $booking;
    }

    /**
     * 一覧
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        return view('bookings.index', [
            'bookings' => Booking::latest()->paginate(12),
        ]);
    }

    /**
     * 登録フォーム表示
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {        
        return view('bookings.create');
    }

    /**
     * 詳細表示
     *
     * @return \Illuminate\View\View
     */
    public function show(Booking $booking)
    {        
        return view('bookings.show', [
            'booking' => $booking,
        ]);
    }

    /**
     * 登録
     *
     * @param StoreRequest $request
     * 
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(StoreRequest $request)
    {
        $this->booking->fill($request->substitutable())->save();

        return to_route('bookings.index')->with('status', '作成しました');
    }

    /**
     * 編集フォーム表示
     *
     * @return \Illuminate\View\View
     */
    public function edit(Booking $booking)
    {
        return view('bookings.edit', [
            'booking' => $booking,
        ]);
    }

    /**
     * 更新
     *
     * @param UpdateRequest $request
     * @param Booking $booking
     * 
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(UpdateRequest $request, Booking $booking)
    {
        $booking->fill($request->substitutable())->save();

        return back()->with('status', '更新しました');
    }

    /**
     * 削除
     *
     * @param Booking $booking
     * 
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Booking $booking)
    {
        $booking->delete();

        return to_route('bookings.index')->with('status', '削除しました');
    }
}