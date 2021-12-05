<?php

namespace App\Http\Controllers;

use App\Models\CollegeSchedule;
use Illuminate\Http\Request;

class CollegeScheduleController extends Controller
{
    public function list()
    {
        $data = CollegeSchedule::orderByDesc('created_at')->get();
        return view('list', [
            'data' => $data
        ]);
    }

    public function input()
    {
        return view('input');
    }

    public function store()
    {
        $data = request()->all();

        CollegeSchedule::create($data);

        return redirect('/');
    }

    public function edit($id)
    {
        $data = CollegeSchedule::find($id);

        return view('edit', [
            'data' => $data
        ]);
    }

    public function update(CollegeSchedule $id)
    {
        $data = request()->all();

        $id->update($data);

        return redirect('/');
    }
    public function delete(CollegeSchedule $id)
    {
        $id->delete();

        return redirect('/');
    }
}
