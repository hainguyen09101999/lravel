<?php

namespace App\Uploadimg;

use Illuminate\Support\Facades\Storage;

trait StorageUploadImg{

    public function storgeTraiUpload($request, $fieldName, )


    {

        $file = $request->$fileName;
        $fileNameOrigin = $file->getClientOriginalName();
        $fileNameHash = str_random(length:20). '.' .$file->getClientOriginalName();
        $filePath = $request->file(key: 'feature_image_path')->storeAs(path: 'public/images', $fileName);
        $data = [ 
            'file_name' => $fileNameOrigin,
            'file_path' => Storage::url($filePath)
        ];

    }
}




?>