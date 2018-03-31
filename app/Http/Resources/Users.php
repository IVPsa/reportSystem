<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class Users extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        // return parent::toArray($request);
         return [
          'USER_NOMBRE' => $this->idUSER_NOMBRE,
          'email' =>  $this->email,
          'USU_EMPRESA' =>  $this->USU_EMPRESA,
          'USER_TPU_COD'=> $this->USER_TPU_COD,
          'USER_N_CTA_BANCO'=> $this->USER_N_CTA_BANCO,
          'USER_BANCO'=> $this->USER_BANCO,
          'USER_TP_CTA'=> $this->USER_TP_CTA,
          'USER_RUT'=> $this->USER_RUT,
          'USER_AVATAR'=> $this->USER_AVATAR,
          'password' =>  $this->password,
         ];
    }
}
