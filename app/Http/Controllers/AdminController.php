<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use App\Models\ResumeItem;
use App\Models\Resume;
use App\Models\ResumeRelations;

class AdminController extends Controller
{
    /**
     * Show all the resume items
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index() {
        
        $data['resume-items'] = DB::table('resume_items')->get();
        $data['skills'] = DB::table('resume_items')->where('category', "1")->get();
        $data['education'] = DB::table('resume_items')->where('category', "3")->get();
        $data['work'] = DB::table('resume_items')->where('category', "2")->get();
        $data['other'] = DB::table('resume_items')->where('category', "4")->get();

        return view('admin.index', ['data' => $data]);
    }
    /**
     * Edit resume item
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function edit($id) {
        $data['item'] = DB::table('resume_items')->where('itemId', $id)->first();
        return view('admin.edit', ['data' => $data]);
    }
    /**
     * Edit resume item and submit
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function editSubmit($id) {
        $item = ResumeItem::find($id);
        $item->name = request('name');
        $item->description = request('description');
        $item->category = request('category');
        $item->save();
        return redirect('admin');
    }
    /**
     * Delete the resume item
     * 
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function destroy($id) {
        ResumeRelations::where('itemId', $id)->delete();
        ResumeItem::destroy($id);
        return redirect('admin');
    }
    /**
     * Delete the resume
     * 
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function destroyResume($id) {
        ResumeRelations::where('genId', $id)->delete(); //delete the foreign key
        Resume::destroy($id); // delete primary key
        return redirect('admin/allResumes');
    }
    /**
     * View resumes
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function allResumes() {
        $data['allResumes'] = DB::table('generatedResumes')->get();
        return view('admin.allResumes', ['data' => $data]);
    }
}
