<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;
use App\Models\HomeModel;
use App\Models\LegacyModel;
use App\Models\CareerModel;
use Illuminate\Support\Facades\Storage;

class AboutController extends Controller
{
    // ABOUT US
    public function about() {
        return view('user/aboutus/about');
    }

    // OUR LEGACY
    public function ourlegacy() {
        $data = LegacyModel::all();
        return view('user/aboutus/ourlegacy', ['data' => $data]);
    }
    public function adminlegacy() {
        $data = LegacyModel::all();
        return view('admin/adminlegacy', ['data' => $data]);
    }
    // UPDATE TEXT
    public function updatelegacy(Request $request) {
        $legacy = LegacyModel::first();

        $legacy->title1 = $request->input('title1');
        $legacy->stmt1 = $request->input('stmt1');
        $legacy->stmt2 = $request->input('stmt2');
        $legacy->h2 = $request->input('h2');

        $legacy->save();

        return redirect()->back()->with('success', 'Data updated successfully');
    }

    // UPDATE VIDEO
    public function updateVideo(Request $request) {
        $legacy = LegacyModel::first(); 
        $legacy->video = $request->input('video');
        $legacy->save();

        return redirect()->back()->with('success', 'Video ID updated successfully');
    }

    



    public function careers() {
        $data = CareerModel::all();
        return view('user/aboutus/careers', ['data' => $data]);
    }
    // public function submitForm(Request $request) {
    //     $request->validate([
    //         'full_name' => 'required|string',
    //         'contactNumber' => 'nullable|string',
    //         'email' => 'required|email',
    //         'job_position' => 'nullable|string',
    //         'message' => 'nullable|string',
    //         'terms_check' => 'accepted',
    //     ]);

    //     $data = $request->all();

    //     Mail::to('potkira316@gmail.com')->send(new ContactFormMail($data));

    //     return redirect()->route('careers')->with('success', 'Form submitted successfully!');
    // }


    // CAREERS
    public function admincareers() {
        $data = CareerModel::all();
        return view('admin/admincareers', ['data' => $data]);
    }

    // update text
    public function updatecareer(Request $request) {
        $career = CareerModel::first();

        $career->title1 = $request->input('title1');
        $career->stmt1 = $request->input('stmt1');
        $career->stmt1_2 = $request->input('stmt1_2');
        $career->title2 = $request->input('title2');
        $career->stmt2 = $request->input('stmt2');
        $career->h1 = $request->input('h1');
        $career->h1_stmt = $request->input('h1_stmt');
        $career->h2 = $request->input('h2');
        $career->h2_stmt = $request->input('h2_stmt');
        $career->h3 = $request->input('h3');
        $career->h3_stmt = $request->input('h3_stmt');
        $career->h4 = $request->input('h4');
        $career->h4_stmt = $request->input('h4_stmt');
        $career->h5 = $request->input('h5');
        $career->h5_stmt = $request->input('h5_stmt');

        $career->save();

        return redirect()->back()->with('success', 'Data updated successfully');
    }

    // update image
    public function updateimg(Request $request) {
        $career = CareerModel::first();
        
        $career->img1 = $this->uploadAndSave($request->file('img1'), 'ayala', $career->img1);
        $career->img2 = $this->uploadAndSave($request->file('img2'), 'ayala', $career->img2);
        $career->img3 = $this->uploadAndSave($request->file('img3'), 'ayala', $career->img3);
        $career->img4 = $this->uploadAndSave($request->file('img4'), 'ayala', $career->img4);
        $career->img5 = $this->uploadAndSave($request->file('img5'), 'ayala', $career->img5);
        $career->img6 = $this->uploadAndSave($request->file('img6'), 'ayala', $career->img6);
        
        $career->save();

        return redirect()->route('admincareers')->with('success', 'Image uploaded successfully!');
       
    }
    private function uploadAndSave($file, $directory, $currentValue) {
        if ($file) {
            $fileName = $directory . '/' . $file->getClientOriginalName();
            $destinationPath = public_path($directory);

            try {
                $file->move($destinationPath, $fileName);
            } catch (\Exception $e) {
                \Log::error('Error uploading file: ' . $e->getMessage());
                \Log::error('File details: ' . print_r($file, true));
                return $currentValue;
            }
            return $fileName;
        }
        return $currentValue;
    }


    // AWARDS
    public function awards() {
        return view('user/aboutus/awards');
    }


    
}
