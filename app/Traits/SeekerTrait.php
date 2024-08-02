<?php 

namespace App\Traits;

Trait SeekerTrait{
    public function saveDocument($document, $folder)
    {
        $file_extention = $document->getClientOriginalExtension();
        $file_name = time().'.'.$file_extention;
        $path =$folder;
        $document->move($path, $file_name);
        // $path = array(['name'=>$file_name, 'folder'=>$path]);

        return $file_name;

    }
}