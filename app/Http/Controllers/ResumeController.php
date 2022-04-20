<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use App\Models\ResumeItem;
use App\Models\Resume;
use App\Models\ResumeRelations;

class ResumeController extends Controller
{
    /**
     * Show the resume items
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index() {
        
        $data['resume-items'] = DB::table('resume_items')->get();
        $data['skills'] = DB::table('resume_items')->where('category', "1")->get();
        $data['education'] = DB::table('resume_items')->where('category', "3")->get();
        $data['work'] = DB::table('resume_items')->where('category', "2")->get();
        $data['other'] = DB::table('resume_items')->where('category', "4")->get();

        return view('index', ['data' => $data]);
    }
    
    /**
     * Submit new resume
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function create(Request $request) {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:150',
            'email' => 'required|max:200',
            'website' => 'required|max:200',
            'socialMedia' => 'required|max:200'
        ]);
        $resume = new Resume();
        $resume->name = request('name');
        $resume->email = request('email');
        $resume->website = request('website');
        $resume->socialMedia = request('socialMedia');
        $resume->save();
        
        // $name = $request->input('name');

        $id = DB::table('generatedResumes')->latest('genId')->first()->genId;
        $skills = $request->input('skills');
        foreach($skills as $skill) {
            $rel = new ResumeRelations();
            $rel->itemId = $skill;
            $rel->genId = $id;
            $rel->save();
        }
        $education = $request->input('education');
        foreach($education as $edu) {
            $rel = new ResumeRelations();
            $rel->itemId = $edu;
            $rel->genId = $id;
            $rel->save();
        }
        $work = $request->input('work');
        foreach($work as $w) {
            $rel = new ResumeRelations();
            $rel->itemId = $w;
            $rel->genId = $id;
            $rel->save();
        }
        $other = $request->input('other');
        foreach($other as $o) {
            $rel = new ResumeRelations();
            $rel->itemId = $o;
            $rel->genId = $id;
            $rel->save();
        }
        return redirect()->route('resume', $id);
    }
    /**
     * Show the new resume
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function resume($id) {
        $data['resume'] = DB::table('generatedResumes')->where('genId', $id)->first();
        $rels = DB::table('resumeRelations')->where('genId', $id)->get();
        $skills = [];
        $edu = [];
        $work = [];
        $other = [];
        foreach($rels as $rel) {
            $itemId = $rel->itemId;
            $item = DB::table('resume_items')->where('itemId', $itemId)->first();
            if ($item->category == "1") {
                array_push($skills, $item);
            } else if ($item->category == "2") {
                array_push($work, $item);
            } else if ($item->category == "3") {
                array_push($edu, $item);
            } else if ($item->category == "4") {
                array_push($other, $item);
            }
        }
        $data['skills'] = $skills;
        $data['education'] = $edu;
        $data['work'] = $work;
        $data['other'] = $other;
        return view('resume', ['data' => $data]);
    }
}
