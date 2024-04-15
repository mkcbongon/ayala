<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use App\Models\Upload;
use Illuminate\Support\Facades\Mail;
use App\Mail\UploadAcceptedNotification;
use App\Mail\UploadDeclinedNotification;
class UploadController extends Controller
{
    public function propertyUpload(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'firstname' => 'required|string',
                'midlename' => 'required|string',
                'lastname' => 'required|string',
                'email' => 'required|email',
                'birth' => 'required|date',
                'image' => 'required|image|max:2048',
                'property' => 'required|string',
                'category' => 'required|string',
                'type' => 'required|string',
                'location' => 'required|string',
                'price' => 'required|numeric',
                'description' => 'required|string',
            ]);

            //upload image
            if ($request->hasFile('image')) {

                $imageName = time().'.'.$request->image->extension();

                // Move the uploaded image to the public/images directory
                $request->image->move(public_path('images'), $imageName);

                // Create upload
                $upload = Upload::create([
                    'firstname' => $validatedData['firstname'],
                    'midlename' => $validatedData['midlename'],
                    'lastname' => $validatedData['lastname'],
                    'email' => $validatedData['email'],
                    'birth' => $validatedData['birth'],
                    'image' => 'images/' . $imageName,
                    'property' => $validatedData['property'],
                    'category' => $validatedData['category'],
                    'type' => $validatedData['type'],
                    'location' => $validatedData['location'],
                    'price' => $validatedData['price'],
                    'description' => $validatedData['description'],
                ]);

                return redirect()->back()->with('success', 'Property uploaded successfully.');
            } else {
                throw new \Exception('No image file uploaded.');
            }
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Failed to upload property. ' . $e->getMessage());
        }
    }

    public function index()
    {
        $uploads = Upload::all();
        return view('admin.admindash.upload', compact('uploads'));
    }
    public function accept($id)
    {
        $upload = Upload::findOrFail($id);
        $upload->status = 'Accepted';
        $upload->save();


        $ticketNumber = $this->generateTicketNumber();
        $message = 'Ticket number: ' . $ticketNumber . '. Your upload has been accepted.';
        Mail::to($upload->email)->send(new UploadAcceptedNotification($upload, $message));

        return redirect()->back()->with('success', 'Upload accepted successfully.');
    }

    public function decline($id)
    {
        $upload = Upload::findOrFail($id);
        $upload->status = 'Declined';
        $upload->save();


        $ticketNumber = $this->generateTicketNumber();
        $message = 'Ticket number: ' . $ticketNumber . '. Sorry, we regret to inform you that your upload has been declined.';
        Mail::to($upload->email)->send(new UploadDeclinedNotification($upload, $message));

        return redirect()->back()->with('success', 'Upload declined successfully.');
    }

    private function generateTicketNumber()
    {

        return 'TICKET-' . mt_rand(100000, 999999);
    }


}
