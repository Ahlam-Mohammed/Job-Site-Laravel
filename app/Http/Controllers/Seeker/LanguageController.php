<?php

namespace App\Http\Controllers\Seeker;

use App\Http\Controllers\Controller;
use App\Models\Language;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LanguageController extends Controller
{
    public function index()
    {
        $languages = User::find(Auth::id())->languages()->get();
        return view('web.seeker.dashboard.language.languages', compact('languages'));
    }

    public function store(Request $request)
    {
        $request->validate( Language::$validate );

        Language::create($request->all());

        return redirect()->route('seeker.languages.index')
            ->with('success', 'Language has been added');
    }

    public function update(Request $request, $id)
    {
        $request->validate( Language::$validate );

        $language = Language::find($id);
        $language->update($request->all());

        return redirect()->route('seeker.languages.index')
            ->with('success','Language updated successfully');

    }

    public function destroy(Language $language)
    {
        $language->delete();
        return redirect()->route('seeker.languages.index')
            ->with('success', 'Language deleted successfully');
    }
}
