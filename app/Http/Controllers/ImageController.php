<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    /**
     * Get an optimized version of a product image.
     *
     * @param  string  $imageName
     * @return \Illuminate\Http\Response
     */
    public function showOptimizedProductImage($imageName)
    {
        // Path to the original image in the public directory
        $path = 'assets/images/products/' . $imageName;
        $fullPath = public_path($path);

        // Create an image manager instance with the GD driver
        // You can also use imagick() if you have that installed on your server
        $manager = new ImageManager(new Driver());

        // Check if the file exists in the public directory.
        if (!file_exists($fullPath)) {
            // If the image doesn't exist, create a blank placeholder image.
            $img = $manager->create(300, 224, '#f0f0f0');

            // Add "Image Not Found" text to the placeholder.
            // The text() method and its options have changed in v3.
            $img->text('Image Not Found', 150, 112, function ($font) {
                // The font file must be a path that exists on your server.
                $font->file(public_path('fonts/Arial.ttf'));
                $font->size(20);
                $font->color('#555555');
                $font->align('center');
                $font->valign('middle');
            });
            
            // Encode the canvas image to webp and return.
            $optimizedImage = $img->toWebp(75);
            return response($optimizedImage->toString())->header('Content-Type', 'image/webp');
        }

        // Read the image from the public directory. The read() method replaces make().
        $img = $manager->read($fullPath);

        // Resize the image to a height of 224px while maintaining the aspect ratio.
        // The scaleDown() method is the modern v3 equivalent of the v2 resize() with constraints.
        $img->scaleDown(height: 224);

        // Encode the image as WebP for better compression.
        // The toWebp() method replaces the encode() method in v2.
        $optimizedImage = $img->toWebp(75); // 75 is the quality

        // Return the optimized image with the correct headers.
        return response($optimizedImage->toString())
            ->header('Content-Type', 'image/webp')
            ->header('Cache-Control', 'max-age=2592000, public');
    }
}
