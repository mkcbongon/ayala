<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PropertiesModel;
use App\Models\PropamModel;
use App\Models\NearbyModel;
use App\Models\GalleryModel;
use App\Models\AmenitiesModel;
use App\Models\UserAuth;
use App\Models\Model;

class AdminController extends Controller
{
    public function dashboard() {
        return view('admin/admindash/dashboard');

    }

    
    public function requests() {
        return view('admin/admindash/requests');

    }

    
    public function premierproperties() {
        $data = PropertiesModel::all();
        return view('admin/admindash/premierproperties', ['data' => $data]);
    }
    public function addproperty(Request $request) {
        $prop = new PropertiesModel;
        $amenities = new PropamModel;
        $nearby = new NearbyModel;
        $gallery = new GalleryModel;

        $prop->name = $request->input('name') ?? '';
        $amenities->property = $request->input('name') ?? '';
        $nearby->property = $request->input('name') ?? '';
        $gallery->img_property = $request->input('name') ?? '';
        $prop->category = $request->input('category') ?? '';
        $prop->type = $request->input('type') ?? '';
        $prop->location = $request->input('location') ?? '';
        $prop->price = $request->input('price') ?? 0.0;
        $sizeArray = $request->input('size') ?? [];
        $prop->size = implode(", ", $sizeArray);
        $prop->description = $request->input('description') ?? '';
        $prop->video = $request->input('video') ?? '';

        // dd($prop->type);
        $prop->save();
        $amenities->save();
        $nearby->save();
        $gallery->save();

        return redirect()->back()->with('success', 'Data created successfully');
    }
    public function editproperty($id, Request $request) {
        $prop = PropertiesModel::find($id);
        $amenities = PropamModel::where('property', $prop->name)->get();
        $nearby = NearbyModel::where('property', $prop->name)->get();
        $gallery = GalleryModel::where('img_property', $prop->name)->get();

        $prop->name = $request->input('name') ?? '';
        $amenities->property = $request->input('name') ?? '';
        $nearby->property = $request->input('name') ?? '';
        $gallery->img_property = $request->input('name') ?? '';

        $prop->category = $request->input('category');
        $prop->type = $request->input('type');
        $prop->location = $request->input('location') ?? '';
        $prop->price = $request->input('price') ?? 0.0;
        $sizeArray = $request->input('size') ?? [];
        $prop->size = implode(", ", $sizeArray);
        $prop->description = $request->input('description') ?? '';
        $prop->video = $request->input('video') ?? '';

        $prop->save();
        foreach ($amenities as $amenity) {
            $amenity->property = $request->input('name') ?? '';
            $amenity->save();
        }
        foreach ($nearby as $nearbyItem) {
            $nearbyItem->property = $request->input('name') ?? '';
            $nearbyItem->save();
        }
        foreach ($gallery as $galleryItem) {
            $galleryItem->img_property = $request->input('name') ?? '';
            $galleryItem->save();
        }

        return redirect()->back()->with('success', 'Data updated successfully');
    }
    public function deleteproperty($id, Request $request) {
        $prop = PropertiesModel::find($id);
        $amenities = PropamModel::where('property', $prop->name)->get();
        $nearby = NearbyModel::where('property', $prop->name)->get();
        $gallery = GalleryModel::where('img_property', $prop->name)->get();

        if (!$prop) {
            return redirect()->back()->with('error', 'Row not found.');
        }

        $prop->delete();
        foreach ($amenities as $amenity) {
            $amenity->property = $request->input('name') ?? '';
            $amenity->delete();
        }
        foreach ($nearby as $nearbyItem) {
            $nearbyItem->property = $request->input('name') ?? '';
            $nearbyItem->delete();
        }
        foreach ($gallery as $galleryItem) {
            $galleryItem->img_property = $request->input('name') ?? '';
            $galleryItem->delete();
        }

        return redirect()->back()->with('success', 'Row deleted successfully.');
    }


    
    public function other() {
        // properties table
        $prop = PropertiesModel::all();
        // nearby table
        $near = NearbyModel::all();
        //amenities table
        $amenities = AmenitiesModel::orderBy('name', 'asc')->get();
        $amenity = PropamModel::all();
        // gallery table
        $gallery = GalleryModel::all();
        
        
        return view('admin/admindash/other', ['prop' => $prop, 'near' => $near, 'amenities' => $amenities, 'amenity' => $amenity, 'gallery' => $gallery]);
    }
      
    // NEARBY
    public function addnearby(Request $request) {
        // nearby table
        $nearby = new NearbyModel();

        $property = $request->input('property');

        NearbyModel::where('property', $property)
                    ->whereNull('establishment')
                    ->delete();

        $nearby->property = $request->input('property') ?? '';
        $nearby->establishment = $request->input('addestablishment') ?? '';
        $nearby->type = $request->input('type') ?? '';

        // dd($nearby->type);

        $nearby->save();
        
        return redirect()->back()->with('success', 'Data created successfully');
    }
    public function editnearby($id, Request $request) {
        // dd($id);
        //     
            // dd($nearbyId);
            $nearby = NearbyModel::find($id);
        // dd($nearby);
            $nearby->establishment = $request->input('establishment');
        
            $nearby->save();

            return redirect()->back()->with('success', 'Data updated successfully');
        
        
    }

    // AMENITIES
    public function editamenity($id, Request $request) {
        $amenity = PropamModel::find($id);
        $amn = PropamModel::where('property', $amenity->property)->get();
        
        $selectedAmenities = $request->input('amenities') ?? [];
        $amenity->amenities = implode(", ", $selectedAmenities);
    
        $amenity->save();
    
        return redirect()->back()->with('success', 'Data updated successfully');
    }
    public function editvideo($id, Request $request) {
        $prop = PropertiesModel::find($id);

        $prop->video = $request->input('video') ?? '';

        $prop->save();

        return redirect()->back()->with('success', 'Data updated successfully');
    }

    public function add_img(Request $request) {
        $property = $request->input('property');
        
        GalleryModel::where('img_property', $property)
                    ->whereNull('url')
                    ->delete();
    
        $files = $request->file('addurl');
        if($files) {
            foreach ($files as $file) {
                $gallery = new GalleryModel();
                $gallery->img_property = $property;
                $gallery->url = $this->upload($file, 'ayala', $gallery->url);
                $gallery->save();
            }
        }
    
        return redirect()->back()->with('success', 'Data created successfully');
    }
    
    public function display($id, Request $request) {
        $prop = PropertiesModel::find($id);
        
        $prop->display_img = $request->input('display_img');
    
            $prop->save();
            return redirect()->back()->with('success', 'Data updated successfully');
        
    }
    public function deleteimg($id, Request $request) {
        $gallery = GalleryModel::find($id);
        dd($gallery);
        // $gallery->delete();
        
        // return redirect()->back()->with('success', 'Row deleted successfully.');
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
