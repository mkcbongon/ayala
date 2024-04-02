<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;
use App\Models\ResidencesModel;
use App\Models\PremierModel;
use App\Models\MakatiModel;
use App\Models\BannerModel;
use Illuminate\Support\Facades\Storage;


class ResidencesController extends Controller
{
    public function residences() {
        $banner = BannerModel::all();
        $data = ResidencesModel::all();
        return view('user/residences/residences', ['banner' => $banner, 'data' => $data]);
    }
    public function adminresidences() {
        $banner = BannerModel::all();
        $data = ResidencesModel::all();
        return view('admin/adminresidences', ['banner' => $banner, 'data' => $data]);
    }
    // update text
    public function updateres(Request $request)
    {
        $res = ResidencesModel::first(); 

        $res->ft_title = $request->input('ft_title');
        $res->spanA = $request->input('spanA');
        $res->titleA = $request->input('titleA');
        $res->conA = $request->input('conA');
        $res->loc1 = $request->input('loc1');
        $res->sub1 = $request->input('sub1');
        $res->con1 = $request->input('con1');
        $res->loc2 = $request->input('loc2');
        $res->sub2 = $request->input('sub2');
        $res->con2 = $request->input('con2');
        $res->loc3 = $request->input('loc3');
        $res->sub3 = $request->input('sub3');
        $res->con3 = $request->input('con3');
        $res->loc4 = $request->input('loc4');
        $res->sub4 = $request->input('sub4');
        $res->con4 = $request->input('con4');
        $res->spanB = $request->input('spanB');
        $res->titleB = $request->input('titleB');
        $res->conB = $request->input('conB');
        $res->con5 = $request->input('con5');
        $res->sub6 = $request->input('sub6');
        $res->con6 = $request->input('con6');
        $res->sub = $request->input('sub');
        $res->con = $request->input('con');
        $res->sub7 = $request->input('sub7');
        $res->con7 = $request->input('con7');
        $res->con8 = $request->input('con8');
        $res->sub9 = $request->input('sub9');
        $res->con9 = $request->input('con9');

        $res->save();

        return redirect()->back()->with('success', 'Data updated successfully');
    }
    // update img
    public function updateresimg(Request $request) {
        $res = ResidencesModel::first();
        
        $res->ft_img1 = $this->uploadAndSave($request->file('ft_img1'), 'ayala', $res->ft_img1);
        $res->ft_img2 = $this->uploadAndSave($request->file('ft_img2'), 'ayala', $res->ft_img2);
        $res->ft_img3 = $this->uploadAndSave($request->file('ft_img3'), 'ayala', $res->ft_img3);
        $res->ft_img4 = $this->uploadAndSave($request->file('ft_img4'), 'ayala', $res->ft_img4);
        $res->ft_img5 = $this->uploadAndSave($request->file('ft_img5'), 'ayala', $res->ft_img5);
        $res->img1 = $this->uploadAndSave($request->file('img1'), 'ayala', $res->img1);
        $res->img2 = $this->uploadAndSave($request->file('img2'), 'ayala', $res->img2);
        $res->img3 = $this->uploadAndSave($request->file('img3'), 'ayala', $res->img3);
        $res->img4 = $this->uploadAndSave($request->file('img4'), 'ayala', $res->img4);
        $res->img5 = $this->uploadAndSave($request->file('img5'), 'ayala', $res->img5);
        $res->img6 = $this->uploadAndSave($request->file('img6'), 'ayala', $res->img6);
        $res->img7 = $this->uploadAndSave($request->file('img7'), 'ayala', $res->img7);
        $res->img8 = $this->uploadAndSave($request->file('img8'), 'ayala', $res->img8);
        $res->img9 = $this->uploadAndSave($request->file('img9'), 'ayala', $res->img9);
        
        $res->save();

        return redirect()->back()->with('success', 'Image updated successfully');
       
    }


////////////////////////////////////////////////////////
    public function premier() {
        $data = PremierModel::all();
        return view('user/residences/premier', ['data' => $data]);
    }
    public function adminpremier() {
        $data = PremierModel::all();
        return view('admin/adminpremier', ['data' => $data]);
    }

    // update text
    public function updatepremier(Request $request) {
        $premier = PremierModel::first();

        $premier->h1 = $request->input('h1');
        $premier->p1 = $request->input('p1');
        $premier->h2 = $request->input('h2');
        $premier->span = $request->input('span');
        $premier->h3 = $request->input('h3');
        $premier->p3a = $request->input('p3a');
        $premier->p3b = $request->input('p3b');

        $premier->save();

        return redirect()->back()->with('success', 'Data updated successfully');
    }

    // create new section
    public function createpremier(Request $request) {
        $premier = new PremierModel;

        $premier->loc = $request->input('loc') ?? '';
        $premier->title = $request->input('title') ?? '';
        $premier->con1 = $request->input('con1') ?? '';
        $premier->sub1 = $request->input('sub1') ?? '';
        $premier->con2 = $request->input('con2') ?? '';
        $premier->sub2 = $request->input('sub2') ?? '';
        $premier->con3 = $request->input('con3') ?? '';
        $premier->sub3 = $request->input('sub3') ?? '';
        $premier->con4 = $request->input('con4') ?? '';
        $premier->sub4 = $request->input('sub4') ?? '';
        $premier->con5 = $request->input('con5') ?? '';
        $premier->img1 = $this->upload($request->file('img1'), 'ayala', $premier->img1);
        $premier->img2 = $this->upload($request->file('img2'), 'ayala', $premier->img2);
        $premier->img3 = $this->upload($request->file('img3'), 'ayala', $premier->img3);
        $premier->img4 = $this->upload($request->file('img4'), 'ayala', $premier->img4);

        $premier->save();

        return redirect()->back()->with('success', 'Data created successfully');
    }

    // edit section
    public function editpremiersection(Request $request, $id) {
        $premier = PremierModel::findOrFail($id);

        $premier->loc = $request->input('loc') ?? '';
        $premier->title = $request->input('title') ?? '';
        $premier->con1 = $request->input('con1') ?? '';
        $premier->sub1 = $request->input('sub1') ?? '';
        $premier->con2 = $request->input('con2') ?? '';
        $premier->sub2 = $request->input('sub2') ?? '';
        $premier->con3 = $request->input('con3') ?? '';
        $premier->sub3 = $request->input('sub3') ?? '';
        $premier->con4 = $request->input('con4') ?? '';
        $premier->sub4 = $request->input('sub4') ?? '';
        $premier->con5 = $request->input('con5') ?? '';
        $premier->img1 = $this->uploadAndSave($request->file('img1'), 'ayala', $premier->img1);
        $premier->img2 = $this->uploadAndSave($request->file('img2'), 'ayala', $premier->img2);
        $premier->img3 = $this->uploadAndSave($request->file('img3'), 'ayala', $premier->img3);
        $premier->img4 = $this->uploadAndSave($request->file('img4'), 'ayala', $premier->img4);

        $premier->save();

        return redirect()->back()->with('success', 'Data updated successfully');
    }
    
    // delete section
    public function deletepremier($id)
    {
        $premier = PremierModel::find($id);

        if (!$premier) {
            return redirect()->back()->with('error', 'Row not found.');
        }

        $premier->delete();

        return redirect()->back()->with('success', 'Row deleted successfully.');
    }

    // update image
    public function updateimgpremier(Request $request) {
        $premier = PremierModel::first();
        
        $premier->ph1 = $this->uploadAndSave($request->file('ph1'), 'ayala', $premier->ph1);
        $premier->ph2 = $this->uploadAndSave($request->file('ph2'), 'ayala', $premier->ph2);
        $premier->ph3 = $this->uploadAndSave($request->file('ph3'), 'ayala', $premier->ph3);
        
        $premier->save();

        return redirect()->route('adminpremier')->with('success', 'Image uploaded successfully!');
       
    }
///////////////////////////////////////////////////////






    public function alveo() {
        return view('user/residences/alveo');
    }
    public function avida() {
        return view('user/residences/avida');
    }
    public function amaia() {
        return view('user/residences/amaia');
    }
    public function bellavita() {
        return view('user/residences/bellavita');
    }
    
    public function makati() {
        $data = MakatiModel::all();
        return view('user/residences/makati', ['data' => $data]);
    }
    public function adminmakati() {
        $data = MakatiModel::all();
        return view('admin/adminmakati', ['data' => $data]);
    }
    





    public function batangas() {
        return view('user/residences/batangas');
    }



    // FUNCTION FOR CREATE IMAGE
    private function upload($file, $directory, $currentValue) {
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
        return '';
    }
    // FUNCTION FOR UPDATE IMAGE
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
}
