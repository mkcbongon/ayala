<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;
use App\Models\HomeModel;
use App\Models\PropertiesModel;
use App\Models\PropamModel;
use App\Models\NearbyModel;
use App\Models\GalleryModel;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    // ADMIN
    public function signup() {
        return view('admin/auth');
    }
    public function adminhome() {
        $data = HomeModel::all();
        return view('admin/adminhome', ['data' => $data]);
    }
    
    public function updatehome(Request $request)
    {
        // \Log::info('Received data:', $request->all());
        $home = HomeModel::first(); 

        $home->h1 = $request->input('h1');
        $home->carousel1 = $request->input('carousel1');
        $home->carousel2_desc = $request->input('carousel2_desc');
        $home->carousel2 = $request->input('carousel2');
        $home->carousel3_desc = $request->input('carousel3_desc');
        $home->carousel3 = $request->input('carousel3');
        $home->carousel4_desc = $request->input('carousel4_desc');
        $home->carousel4 = $request->input('carousel4');
        $home->title1 = $request->input('title1');
        $home->stmt1 = $request->input('stmt1');
        $home->h3 = $request->input('h3');
        $home->title2 = $request->input('title2');
        $home->stmt2 = $request->input('stmt2');
        $home->quote = $request->input('quote');
        $home->title3 = $request->input('title3');
        $home->stmt3 = $request->input('stmt3');
        $home->stmt4 = $request->input('stmt4');
        $home->stmt4_1 = $request->input('stmt4_1');
        $home->title4 = $request->input('title4');
        $home->title5 = $request->input('title5');
        $home->stmt5 = $request->input('stmt5');
        $home->stmt5_1 = $request->input('stmt5_1');
        $home->stmt5_2 = $request->input('stmt5_2');
        $home->img4_title = $request->input('img4_title');
        $home->img4_stmnt = $request->input('img4_stmnt');

        $home->save();

        return redirect()->back()->with('success', 'Data updated successfully');
    }

    // UPLOAD BACKGROUND CAROUSEL
    public function updatebg(Request $request) {
        $home = HomeModel::first(); 

        $home->carousel1_img = $this->uploadAndSave($request->file('caoursel1_img'), 'ayala', $home->carousel1_img);
        $home->carousel2_img = $this->uploadAndSave($request->file('caoursel2_img'), 'ayala', $home->carousel2_img);
        $home->carousel3_img = $this->uploadAndSave($request->file('caoursel3_img'), 'ayala', $home->carousel3_img);
        $home->carousel4_img = $this->uploadAndSave($request->file('caoursel4_img'), 'ayala', $home->carousel4_img);

        $home->save();

        return redirect()->route('adminhome')->with('success', 'Image uploaded successfully!');
    }
    private function uploadAndSave($file, $directory, $currentValue)
    {
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
        // return '';
    }

    public function changeImg(Request $request) {
        $home = HomeModel::first();
        
        $home->img1 = $this->uploadAndSave($request->file('img1'), 'ayala', $home->img1);
        $home->img2 = $this->uploadAndSave($request->file('img2'), 'ayala', $home->img2);
        $home->img3 = $this->uploadAndSave($request->file('img3'), 'ayala', $home->img3);
        $home->img4 = $this->uploadAndSave($request->file('img4'), 'ayala', $home->img4);
        $home->bg_img = $this->uploadAndSave($request->file('bg_img'), 'ayala', $home->bg_img);
        
        $home->save();

        return redirect()->route('adminhome')->with('success', 'Image uploaded successfully!');
       
    }

    
    














    // HOME PAGE
    public function home() {
        $data = HomeModel::all();
        return view('user/home', ['data' => $data]);
    }

    

    
    public function contact() {
        return view('user/contact');

    }
    public function submitform(Request $request) {
        $request->validate([
            'full_name' => 'required|string',
            'contactNumber' => 'nullable|string',
            'email' => 'required|email',
            'message' => 'nullable|string',
        ]);

        $data = $request->all();

        // $template = 'inquiries';

        Mail::to('potkira316@gmail.com')->send(new ContactFormMail($data));
        
        return redirect()->back()->with('success', 'Form submitted successfully!');
    }


   

    public function properties($category = null) {
        if ($category) {
            $data = PropertiesModel::where('category', $category)->get();
        } else {
            $data = PropertiesModel::all();
        }
    
        return view('user/properties', ['data' => $data]);
    }
    
    


    public function property($id) {
        $data = PropertiesModel::find($id);

        if (!$data) {
            return redirect()->back()->with('error', 'Property not found');
        }

        $near = NearbyModel::all();
        $propam = PropamModel::all();
        $gallery = GalleryModel::all();

        return view('user/property', ['data' => $data, 'near' => $near, 'propam' => $propam, 'gallery' => $gallery]);
    }


    
}
