<?php


namespace App\Traits;


trait UploadPassport
{



    /**
     * @param $request
     * @param $path
     * @param null $user
     * @param null $image_name
     * @param null $request_name
     * @return mixed
     */
    private  function hasImage($request, $path, $user=null, $image_name=null, $request_name=null){

        $rules = 'required|mimes:jpeg,png,jpg,PNG,JPG,JPEG|max:50';
#=======Validating the  file to be 50kb image with the listed extensions===============
        ($request_name == 'p_image')
            ? $this->validate($request, ['p_image' => $rules])
            : $this->validate($request, ['image' => $rules]);
//        if($request_name == 'p_image'){
//
//            $this->validate($request, ['p_image' => $rules]);
//        } else {
//            $this->validate($request, ['image' => $rules]);
//        }

        #==== when update the user images ===========
        if($user) {
            //rename the file
            $name = $user->user->username.'.'.$request->image->getClientOriginalExtension();
            // delete old image
            $user->deleteImage();
            $save_image = $request->image->storeAs($path, $name); //rename the image
        } else {

            if($request_name == 'p_image' ){
                #==== uploading for guardian image when registering student ===========
                $name = $image_name.'.'.$request->p_image->getClientOriginalExtension(); //rename the image
                $save_image = $request->p_image->storeAs($path, $name); // upload image
            } else{
                #==== uploading  image for other users  ===========
                ($image_name)
                    ? $name = $image_name.'.'.$request->image->getClientOriginalExtension()
                    : $name = $request->username.'.'.$request->image->getClientOriginalExtension(); //rename the image

                $save_image = $request->image->storeAs($path, $name); // upload image
            }

        }

        return $save_image;



    }



}
