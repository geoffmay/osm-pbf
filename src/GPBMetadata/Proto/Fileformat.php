<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/fileformat.proto

namespace OSMReader\GPBMetadata\Proto;

class Fileformat
{
    public static $is_initialized = false;

    public static function initOnce()
    {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
            return;
        }
        $pool->internalAddGeneratedFile(hex2bin(
            "0ada010a1670726f746f2f66696c65666f726d61742e70726f746f12094f" .
            "534d526561646572226c0a04426c6f62120b0a0372617718012001280c12" .
            "100a087261775f73697a6518022001280512110a097a6c69625f64617461" .
            "18032001280c12110a096c7a6d615f6461746118042001280c121f0a134f" .
            "42534f4c4554455f627a6970325f6461746118052001280c42021801223f" .
            "0a0a426c6f62486561646572120c0a047479706518012001280912110a09" .
            "696e6465786461746118022001280c12100a086461746173697a65180320" .
            "012805620670726f746f33"
        ));

        static::$is_initialized = true;
    }
}
