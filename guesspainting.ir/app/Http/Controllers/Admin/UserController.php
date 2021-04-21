<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Http\Requests\WordRequest;
use App\Models\Word;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;

class UserController extends Controller
{
    public function index()
    {
        return view('admin.dashboard.index');
    }
    public function addwords() {
        return view('admin.addwords.create');
    }
    public function store(WordRequest $wordRequest)
    {
        $user_data = [
            'word' => request()->input('word'),
            'word_time' => request()->input('word_time'),
            'word_score' => request()->input('word_score'),
            'hardness_level' => request()->input('hardness_level'),
        ];
        $new_user_object = Word::create($user_data);
        if ($new_user_object instanceof Word) {
            return redirect()->route('admin.addwords')->with('success', true);
        }
    }
    public function words()
    {
        $words = Word::all();
        return view('admin.words.index', compact('words'));
    }
    public function delete($word_id)
    {
        if ($word_id && ctype_digit($word_id)) {
            $WordItem = Word::find($word_id);
            if ($WordItem instanceof Word) {
                $WordItem->delete();
                return redirect()->route('admin.words')->with('word_deleted', true);
            }
        }
    }
    public function edit($word_id)
    {
        if ($word_id && ctype_digit($word_id)) {
            $WordItem = Word::find($word_id);
            if ($WordItem instanceof Word) {
                return view('admin.words.edit', compact('WordItem'));
            }
        }
    }
    public function update(WordRequest $WordRequest, $word_id)
    {
        $inputs = request()->except('_token');
        $WordItem = Word::find($word_id);
        $WordItem->update($inputs);
        return redirect()->route('admin.words')->with('word_edited', true);
    }
}