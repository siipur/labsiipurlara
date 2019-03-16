<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class User extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        # return parent::toArray($request);
        //Custom (optional)
        return [
            'id' => $this->id,
            'name' => $this->name,
            'email' => $this->email,
            'password' => $this->password,
            'phone_number' => $this->phone_number,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];  
    }

    // optional untuk tambah data dengan buat function method baru
    #public function with($request){
        #return [
            #'version' => '1.0.0',
            #'author'  => 'siipur', 
            #'author_url' => 'http://curnsongho.blogspot.com',
        #];
    #}

}
