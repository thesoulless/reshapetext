<?php
namespace Thesoulless\Reshapetext;

/**
 *
 */
class Reshapetext
{
    
    public static function reshape($text)
    {
        $bidi = new Bidi();
        
        $text = explode("\n", $text);
        
        $str = array();
        
        foreach ($text as $line) {
            $chars = $bidi->utf8Bidi($bidi->UTF8StringToArray($line), 'AL');
            $line = '';
            foreach ($chars as $char) {
                $line .= $bidi->unichr($char);
            }
            
            $str[] = $line;
        }
        
        return implode("\n", $str);
    }
}
