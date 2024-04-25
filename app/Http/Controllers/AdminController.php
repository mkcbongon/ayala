<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PropertiesModel;
use App\Models\PropamModel;
use App\Models\NearbyModel;
use App\Models\GalleryModel;
use App\Models\AmenitiesModel;
use App\Models\RequestsModel;
use App\Models\UploadModel;
use App\Models\SchedModel;
use App\Models\ChatModel;
use App\Models\UserAuth;
use App\Models\Model;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use App\Mail\UploadAcceptedNotification;
use App\Mail\UploadDeclinedNotification;
use App\Mail\AppointmentConfirmation;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;

class AdminController extends Controller
{
    public function dashboard() {
        return view('admin/admindash/dashboard');

    }

    public function schedule()
    {
        $events = SchedModel::all();
        // foreach ($events as $event) {
        //     $time = $event->time;
        //     dd($time);
        // }
        $formattedEvents = [];

        foreach ($events as $event) {
            
        $dateTime = Carbon::parse($event->date . ' ' . $event->time);
            $formattedEvents[] = [
                'title' => $event->property,
                'name' => $event->name,
                'phone' => $event->phone,
                'date' => $dateTime->format('Y-m-d H:i:s')
            ];
        }

        // dd($event->time);

        return view('admin.admindash.schedule', ['events' => json_encode($formattedEvents)]);
    }

    
    public function appoint(Request $request) {
        try {
            $appoint = new SchedModel();
    
            $appoint->property = $request->input('property');
            $appoint->name = $request->input('name');
            $appoint->email = $request->input('email');
            $appoint->phone = $request->input('phone');
            $appoint->date = $request->input('date');
            $appoint->time = $request->input('time');
            $appoint->status = 'SCHEDULED';
    
            $appoint->save();
    
            $message = 'Your appointment has been received successfully.';
            Mail::to($request->input('email'))->send(new AppointmentConfirmation($message));
            return redirect()->back()->with('success', 'Appointment received successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Failed to schedule the appointment.');
        }
    }
    

    
    public function requests() {
        $requests = RequestsModel::all();
        // $upload = UploadModel::all();
        return view('admin/admindash/requests', ['req' => $requests]);
    }
    public function submitreq(Request $request) {
        $requests = new RequestsModel;
    
        // Set other fields
        $requests->id = $request->input('unique_id');
        $requests->idcard = $this->upload($request->file('idcard'), 'ayala', $requests->idcard);
        $requests->fname = $request->input('fname'); 
        $requests->mname = $request->input('mname'); 
        $requests->lname = $request->input('lname'); 
        $requests->email = $request->input('email'); 
        $requests->dob = $request->input('dob'); 
        $requests->property = $request->input('property'); 
        $requests->category = $request->input('category'); 
        $requests->type = $request->input('type'); 
        $requests->location = $request->input('location'); 
        $requests->price = $request->input('price'); 
        $requests->description = $request->input('description'); 
        $requests->status = "PENDING"; 
    
        $imgArray = [];
        if ($request->hasFile('uploads')) {
            foreach ($request->file('uploads') as $file) {
                $imgArray[] = $this->upload($file, 'upload', '');
            }
        }
        $requests->image = implode(", ", $imgArray);
    
        $requests->save();

        
        return redirect()->back()->with('success', 'Upload accepted successfully.');
    }
    
    public function accept($id, Request $request) {
        $requests = RequestsModel::findOrFail($id);
        $prop = new PropertiesModel();
        $amenities = new PropamModel;
        $nearby = new NearbyModel;
        $gallery = new GalleryModel;

        $requests->status = 'ACCEPTED';

        $prop->name = $request->input('property') ?? '';
        $amenities->property = $request->input('property') ?? '';
        $nearby->property = $request->input('property') ?? '';
        $gallery->img_property = $request->input('property') ?? '';
        $prop->category = $request->input('category') ?? '';
        $prop->type = $request->input('type') ?? '';
        $prop->location = $request->input('location') ?? '';
        $prop->price = $request->input('price') ?? 0.0;
        $sizeArray = $request->input('size') ?? [];
        $prop->size = implode(", ", $sizeArray);
        $prop->description = $request->input('description') ?? '';
        $prop->video = $request->input('video') ?? '';


        $requests->save();
        $prop->save();
        $amenities->save();
        $nearby->save();
        $gallery->save();

        GalleryModel::where('img_property', $prop->name)
                    ->whereNull('url')
                    ->delete();
    
                    $upload = $request->input('image') ?? [];
                    $uploads = explode(", ", $upload);
        // $files = $gallery->image;
        if($uploads) {
            foreach ($uploads as $file) {
                $gallery = new GalleryModel();
                $gallery->img_property = $prop->name;
                $gallery->url = $file;
                $gallery->save();
            }
        }


        $message = 'Ticket number: ' . $requests->id . '. Your upload has been accepted. You may check our website to see your posting!';
        Mail::to($requests->email)->send(new UploadAcceptedNotification($requests, $message));

        return redirect()->back()->with('success', 'Upload accepted successfully.');
    }

    public function decline($id) {
        $requests = RequestsModel::findOrFail($id);
        $requests->status = 'DECLINED';
        $requests->save();


        $message = 'Ticket number: ' . $requests->id . '. Sorry, we regret to inform you that your upload has been declined.';
        Mail::to($requests->email)->send(new UploadDeclinedNotification($requests, $message));

        return redirect()->back()->with('success', 'Upload declined successfully.');
    }

    public function chat() {
        $chat = ChatModel::all();
        return view('admin/admindash/chat', ['data' => $chat]);
    }

    public function addchat(Request $request) {
        $chat = new ChatModel();

        $chat->matchs = $request->input('matchs');
        $chat->response = $request->input('response');

        $chat->save();


        return redirect()->back()->with('success', 'Data created successfully');        
    }

    public function deletechat($id) {
        $chat = ChatModel::find($id);

        $chat->delete();

        return redirect()->back()->with('success', 'Row deleted successfully.');
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
