<?php

namespace App\Http\Controllers;

use App\Models\TailorProgram;
use App\Models\TailorProgramOption;
use Illuminate\Http\Request;

class TailorProgramController extends Controller
{
    // Halaman user (frontend)
    public function tailorPrograms()
    {
        $tailorPrograms = TailorProgram::with('SubTailor')->get();

        foreach ($tailorPrograms as $program) {
            $program->sub_reason_title = json_decode($program->sub_reason_title, true) ?? [];
            $program->sub_reason_description = json_decode($program->sub_reason_description, true) ?? [];

            $program->icon_target_audience = json_decode($program->icon_target_audience, true) ?? [];
            $program->description_target_audience = json_decode($program->description_target_audience, true) ?? [];

            $program->highlights_title = json_decode($program->highlights_title, true) ?? [];
            $program->highlights_description = json_decode($program->highlights_description, true) ?? [];

            $program->career_icon = json_decode($program->career_icon, true) ?? [];
            $program->career_description = json_decode($program->career_description, true) ?? [];
        }

        return view('tailor-program', compact('tailorPrograms'));
    }



    // Halaman admin list
    public function list()
    {
        $tailorPrograms = TailorProgram::all();
        return view('admin_new.TailorProgram.tailor-program-list', compact('tailorPrograms'));
    }

    public function create()
    {
        return view('admin_new.TailorProgram.tailor-program-add');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'subtitle' => 'nullable|string',
            'reason_main' => 'nullable|string',
            'price' => 'required|numeric',

            // array validation
            'sub_reason_title' => 'nullable|array',
            'sub_reason_description' => 'nullable|array',

            'icon_target_audience' => 'nullable|array',
            'description_target_audience' => 'nullable|array',

            'highlights_title' => 'nullable|array',
            'highlights_description' => 'nullable|array',

            'career_icon' => 'nullable|array',
            'career_description' => 'nullable|array',
        ]);

        TailorProgram::create([
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'reason_main' => $request->reason_main,
            'price' => $request->price,

            'sub_reason_title' => json_encode($request->sub_reason_title ?? []),
            'sub_reason_description' => json_encode($request->sub_reason_description ?? []),

            'icon_target_audience' => json_encode($request->icon_target_audience ?? []),
            'description_target_audience' => json_encode($request->description_target_audience ?? []),

            'highlights_title' => json_encode($request->highlights_title ?? []),
            'highlights_description' => json_encode($request->highlights_description ?? []),

            'career_icon' => json_encode($request->career_icon ?? []),
            'career_description' => json_encode($request->career_description ?? []),

        ]);

        return redirect()->route('admin.tailor-program-list')->with('success', 'Program successfully updated!');
    }



    public function edit($id)
    {
        $tailorPrograms = TailorProgram::findOrFail($id);

        $tailorPrograms->sub_reason_title = json_decode($tailorPrograms->sub_reason_title, true) ?? [];
        $tailorPrograms->sub_reason_description = json_decode($tailorPrograms->sub_reason_description, true) ?? [];

        $tailorPrograms->icon_target_audience = json_decode($tailorPrograms->icon_target_audience, true) ?? [];
        $tailorPrograms->description_target_audience = json_decode($tailorPrograms->description_target_audience, true) ?? [];

        $tailorPrograms->highlights_title = json_decode($tailorPrograms->highlights_title, true) ?? [];
        $tailorPrograms->highlights_description = json_decode($tailorPrograms->highlights_description, true) ?? [];

        $tailorPrograms->career_icon = json_decode($tailorPrograms->career_icon, true) ?? [];
        $tailorPrograms->career_description = json_decode($tailorPrograms->career_description, true) ?? [];
        return view('admin_new.TailorProgram.tailor-program-edit', compact('tailorPrograms'));
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string',
            'subtitle' => 'nullable|string',
            'reason_main' => 'nullable|string',
            'price' => 'required|numeric',

            // array validation
            'sub_reason_title' => 'nullable|array',
            'sub_reason_description' => 'nullable|array',

            'icon_target_audience' => 'nullable|array',
            'description_target_audience' => 'nullable|array',

            'highlights_title' => 'nullable|array',
            'highlights_description' => 'nullable|array',

            'career_icon' => 'nullable|array',
            'career_description' => 'nullable|array',
        ]);

        $tailorPrograms = TailorProgram::findOrFail($id);

        $tailorPrograms->update([
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'reason_main' => $request->reason_main,
            'price' => $request->price,

            'sub_reason_title' => json_encode($request->sub_reason_title),
            'sub_reason_description' => json_encode($request->sub_reason_description),

            'icon_target_audience' => json_encode($request->icon_target_audience),
            'description_target_audience' => json_encode($request->description_target_audience),

            'highlights_title' => json_encode($request->highlights_title),
            'highlights_description' => json_encode($request->highlights_description),

            'career_icon' => json_encode($request->career_icon),
            'career_description' => json_encode($request->career_description),
        ]);

        return redirect()->route('admin.tailor-program-list')->with('success', 'Program successfully updated!');
    }


    public function destroy($id)
    {
        $tailorPrograms = TailorProgram::findOrFail($id);
        $tailorPrograms->delete();

        return redirect()->route('admin.tailor-program-list')->with('success', 'Program successfully deleted!');
    }
}
