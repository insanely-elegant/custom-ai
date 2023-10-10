<?php
namespace App\Observers;

use App\Models\Image;
use Illuminate\Support\Facades\Storage;

class ImageDeletionObserver
{
    public function deleted(Image $image)
    {
        // Delete the image file from the disk when the image record is deleted
        if (Storage::disk('s3')->exists('images/'.$image->filename)) {
            Storage::disk('s3')->delete('images/' . $image->filename);
        }
    }
}
