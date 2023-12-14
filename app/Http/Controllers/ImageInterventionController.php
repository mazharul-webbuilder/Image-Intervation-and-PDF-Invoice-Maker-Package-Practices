<?php

namespace App\Http\Controllers;

use Intervention\Image\ImageManager;


class ImageInterventionController extends Controller
{
    public function index()
    {
        $manager = new ImageManager(['driver' => 'imagick']);

        $image = $manager->make('public/foo.jpg')->resize(300, 200);

    }
}
