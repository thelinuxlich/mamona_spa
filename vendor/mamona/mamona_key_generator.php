<?php
use Asm89\Twig\CacheExtension\CacheStrategy\KeyGeneratorInterface;

class MamonaKeyGenerator implements KeyGeneratorInterface
{
    public function generateKey($value)
    {
        return get_class($value) . '_' . $value->id . '_' . $value->updated_at;
    }
}