<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>
<body>
<div class="container w-9/12 mx-auto">
    <div class="py-5 border-2 mt-24">
        <div class="">
            <h3 class="text-center font-bold text-3xl text-red-700 underline">Image Intervention</h3>
        </div>
        <div class="p-3 pt-10 w-9/12  mx-auto mt-2 flex flex-col">
            <form action="" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mx-auto">
                    <div class="mt-4 flex flex-col w-9/12">
                        <label for="name" class="font-bold">Product Name</label>
                        <input type="text" id="name" name="name" class="border-2 ">
                    </div>
                    <div class="mt-4 flex flex-col w-9/12">
                        <label for="price" class="font-bold">Product Price</label>
                        <input type="number" id="price" name="price" class="border-2 ">
                    </div>
                    <div class="mt-4 flex flex-col w-9/12">
                        <label for="thumb" class="font-bold">Thumbnail Image</label>
                        <input type="file" name="image" multiple class="border-2 " value="">
                    </div>
                    <div class="mt-4 flex flex-col w-9/12">
                        <label for="thumb" class="font-bold">Gallery Images</label>
                        <input type="file" name="galleryImages[]" multiple class="border-2 " value="">
                    </div>
                    <div class="mt-4 flex flex-col w-9/12">
                        <input type="submit" class="p-2 bg-lime-600 text-white rounded-r" value="Submit">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>
