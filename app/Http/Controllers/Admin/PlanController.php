<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\PlanController\StoreRequest;
use App\Http\Requests\Admin\PlanController\UpdateRequest;
use App\Models\Plan;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class PlanController extends Controller
{
    private Plan $plan;

    public function __construct(Plan $plan)
    {
        $this->plan = $plan;
    }

    /**
     * 一覧
     */
    public function index(Request $request): View
    {
        return view('admin.plans.index', [
            'plans' => Plan::latest()->paginate(12),
        ]);
    }

    /**
     * 登録フォーム表示
     */
    public function create(): View
    {        
        return view('admin.plans.create');
    }

    /**
     * 詳細表示
     */
    public function show(Plan $plan): View
    {        
        return view('admin.plans.show', [
            'plan' => $plan,
        ]);
    }

    /**
     * 登録
     */
    public function store(StoreRequest $request): RedirectResponse
    {
        $this->plan->fill($request->substitutable())->save();

        return to_route('admin.plans.index')->with('status', '作成しました');
    }

    /**
     * 編集フォーム表示
     */
    public function edit(Plan $plan): View
    {
        return view('admin.plans.edit', [
            'plan' => $plan,
        ]);
    }

    /**
     * 更新
     */
    public function update(UpdateRequest $request, Plan $plan): RedirectResponse
    {
        $plan->fill($request->substitutable())->save();

        // return back()->with('status', '更新しました');
        return to_route('admin.plans.index')->with('status', '更新しました');
    }

    /**
     * 削除
     */
    public function destroy(Plan $plan): RedirectResponse
    {
        $plan->delete();

        return to_route('admin.plans.index')->with('status', '削除しました');
    }
}