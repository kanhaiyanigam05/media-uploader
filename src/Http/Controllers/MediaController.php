<?php

namespace Media\Uploader\Http\Controllers;

use Media\Uploader\Models\Media;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;

class MediaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        return view('media');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:jpeg,png,jpg,gif,webp,svg,mp4',
        ]);
        try {
            $image = $request->file;
            $imageData = $this->storeFile($image);
            $imageData->created_at_formatted = $imageData->created_at->format('d F Y');
            $imageData->url = asset($imageData->image);
            return response()->json(['file' => $imageData]);
        } catch (Exception $e) {
            Log::error($e->getMessage());
            return response()->json(['success' => false, 'message' => 'Upload failed']);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $image = Media::findOrFail($id);
        $image->image = asset($image->image);
        $image->created_at = $image->created_at->format('Y-m-d H:i');
        $image->updated_at = $image->updated_at->format('Y-m-d H:i');
        return response()->json($image);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $image = Media::findOrFail($id);
        unlink(public_path($image->image));
        $image->delete();
        return redirect()->back()->with('success', 'Image deleted successfully');
    }
    public function uploadUrl(Request $request)
    {
        $mediaFiles = [];
        // Split URLs from the textarea into an array
        $urls = explode("\n", $request->input('media'));

        foreach ($urls as $url) {
            $url = trim($url); // Remove any extra spaces or commas

            if (filter_var($url, FILTER_VALIDATE_URL)) {
                try {
                    // Download the content from the URL
                    $response = Http::get($url);

                    if ($response->successful()) {
                        // Generate a unique file name
                        $filename = uniqid() . '-' . basename($url);

                        // Store the file in the 'uploads' directory
                        Storage::put("uploads/$filename", $response->body());

                        // Extract the file name without the extension
                        $nameWithoutExtension = pathinfo($filename, PATHINFO_FILENAME);

                        // Determine the file type (image, video, other)
                        $fileType = str_contains(mime_content_type(Storage::path("uploads/$filename")), 'image') ? 'image' : (str_contains(mime_content_type(Storage::path("uploads/$filename")), 'video') ? 'video' : 'other');

                        // Store the image data in the database
                        $imageData = Media::create([
                            'image' => 'uploads/' . $filename,
                            'alt' => $nameWithoutExtension,
                            'title' => $nameWithoutExtension,
                            'type' => $fileType
                        ]);
                        // Format the data for returning to the client
                        $mediaFiles[] = [
                            'id' => $imageData->id,
                            'url' => asset($imageData->image),
                            'name' => $imageData->title,
                            'type' => $imageData->type,
                            'created_at_formatted' => $imageData->created_at->format('Y-m-d H:i:s')
                        ];
                    }
                } catch (\Exception $e) {
                    // Handle error
                    return response()->json(['error' => 'Failed to download file from ' . $url]);
                }
            } else {
                return response()->json(['error' => 'Invalid URL: ' . $url]);
            }
        }

        return response()->json(['files' => $mediaFiles, 'message' => 'Files uploaded successfully!']);
    }

    private function storeFile($image)
    {
        $mimeType = $image->getMimeType();
        $fileType = str_contains($mimeType, 'image') ? 'image' : (str_contains($mimeType, 'video') ? 'video' : 'other');
        $originalName = $image->getClientOriginalName();
        $extension = $image->getClientOriginalExtension();
        $nameWithoutExtension = pathinfo($originalName, PATHINFO_FILENAME);
        $slugName = str()->slug(strtolower($nameWithoutExtension));
        $uniqueId = uniqid();
        $newImageName = $slugName . '-' . $uniqueId . '.' . $extension;
        $image->storeAs('uploads', $newImageName);
        $imageData = Media::create([
            'image' => 'uploads/' . $newImageName,
            'alt' => $nameWithoutExtension,
            'title' => $nameWithoutExtension,
            'type' => $fileType
        ]);
        return $imageData;
    }
}
