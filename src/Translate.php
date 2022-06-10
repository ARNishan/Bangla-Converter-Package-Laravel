<?php
namespace ArNishan\BanglaConverter;
use ArNishan\BanglaConverter\Traits\AvroToBijoy;
use ArNishan\BanglaConverter\Traits\BijoyToAvro;
use App\Http\Controllers\Controller;

class Translate extends Controller{
    use AvroToBijoy,BijoyToAvro;
    public function unicodeToBijoy($unicode){
        $bijoy = $this->u2b($unicode);
        return $bijoy;
    }
    public function bijoyToUnicode($bijoy){
        $unicode = $this->b2u($bijoy);
        return $unicode;
    }

}
