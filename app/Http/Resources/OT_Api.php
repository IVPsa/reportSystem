<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;
use Illuminate\Http\Resources\Json\JsonResource;

class OT_API extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
      return [

       'OT_DES' =>$this->OT_DES,
       'OT_ESTADO' =>$this->OT_ESTADO,
       'OT_FECHA_CREACION' => $this->OT_FECHA_CREACION,
       'OT_FECHA_TERMINO' =>$this->OT_FECHA_TERMINO,
       'OT_COM_COD' => $this->OT_COM_COD,
       'OT_DIRECCION' => $this->OT_DIRECCION,
       'OT_VALOR' =>$this->OT_VALOR,
       'OT_USER_ID_CREADOR' => $this->OT_USER_ID_CREADOR,
       'OT_USER_ENCARGADO' => $this->OT_USER_ENCARGADO,
       'updated_at'=>$this->updated_at,
       'created_at'=>$this->created_at,
      ];
    }
}
