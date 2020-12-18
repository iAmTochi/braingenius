<?php


namespace App\Traits;


trait UploadPassport
{
    /**
     * @param $request
     * @param $path
     * @param null $user
     * @return mixed
     */
    private  function hasImage($request,$path,$user=null){

        $this->validate($request, [
            'image'  => 'required|image|mimes:jpeg,png,jpg,PNG,JPG,JPEG|max:50',
        ]);

        if($user) {
            //rename the file
            $name = $user->user->username.'.'.$request->image->getClientOriginalExtension();
            // delete old image
            $user->deleteImage();
        } else {
            $name = $request->username.'.'.$request->image->getClientOriginalExtension();

        }

        return $request->image->storeAs($path, $name);     // upload it



    }

}
