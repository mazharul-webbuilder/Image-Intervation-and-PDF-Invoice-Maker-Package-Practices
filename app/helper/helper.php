<?php


//1. Static Way
if($request->hasFile('image')){
    $image=$request->image;
    $image_name=strtolower(Str::random(10)).time().".".$image->getClientOriginalExtension();
    $original=null;
    $resize=null;
    if (!file_exists(public_path().'/uploads/gallery/original/')){
        $original=File::makeDirectory(public_path().'/uploads/gallery/original/',0777,true);
    }
    if (!file_exists(public_path().'/uploads/gallery/resize/')){
        $resize=File::makeDirectory(public_path().'/uploads/gallery/resize/',0777,true);
    }
    $original_image_path = public_path().'/uploads/gallery/original/'.$image_name;
    $resize_image_path = public_path().'/uploads/gallery/resize/'.$image_name;
//Resize Image
    Image::make($image)->save($original_image_path);
    Image::make($image)->resize(500,300)->save($resize_image_path);
    $gallery->image = $image_name;
}


//2. Dynamic Way

if($request->hasFile('image')){
    $image=$request->image;
    $image_name=strtolower(Str::random(10)).time().".".$image->getClientOriginalExtension();
    $original=null;
    $resize=null;
    if (!file_exists(public_path().'/uploads/gallery/original/')){
        $original=File::makeDirectory(public_path().'/uploads/gallery/original/',0777,true);
    }
    if (!file_exists(public_path().'/uploads/gallery/resize/')){
        $resize=File::makeDirectory(public_path().'/uploads/gallery/resize/',0777,true);
    }
    $original_image_path = public_path().'/uploads/gallery/original/'.$image_name;
    $resize_image_path = public_path().'/uploads/gallery/resize/'.$image_name;
//Resize Image
    Image::make($image)->save($original_image_path);
    Image::make($image)->resize(500,300)->save($resize_image_path);
    $gallery->image = $image_name;
}
