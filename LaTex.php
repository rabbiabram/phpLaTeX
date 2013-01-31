<?php
/**
 * Created by JetBrains PhpStorm.
 * User: rabbiabram@gmail.com
 * Date: 31.01.13
 * Time: 23:42
 * To change this template use File | Settings | File Templates.
 */
class LaTex
{
    private $__name;
    private $__expressionString;
    private $__ascenders = "/(b|d|f|h|i|j|k|l|t|A|B|C|D|E|F|G|H|I|J|L|K|M|N|O|P|Q|R|S|T|U|V|W|X|Y|Z|\[|\]|\\{|\\}|\(|\)|\/|0|1|2|3|4|5|6|7|8|9|\\#|\*|\?|'|\\\\'|\\\\`|\\\\v)/";
    private $__monoliners="/(a|c|e|m|n|o|r|s|u|v|w|x|z|-|=|\+|:|.)/";
    private $__descenders="/(g|j|p|\/|q|y|Q|,|;|\[|\]|\\{|\\}|\(|\)|\#|\\\\LaTeX|\\\\TeX|\\\\c\{)/";
    private $__imgFormat = 'png';

    /**
     * @param string $name
     * @param string $expression
     */
    public function __construct($name = 'Default', $expression = '')
    {
        // TODO: Implement __construct() method
        $this->name = $name;
        $this->__expressionString = $expression;
    }

    /**
     * @param $_expressionString
     */
    public function setExpressionString($_expressionString)
    {
        $this->__expressionString = $_expressionString;
    }

    /**
     * @return string
     */
    public function getExpressionString()
    {
        return $this->__expressionString;
    }

    public function texify() {

    }

    public function colorized($red = 0, $blue = 0, $green = 0) {
        #there must be a better way of doing this. It's not even particularly clean.
        $hex=array("","","");
        if(strlen($hex[0]=dechex(min(256*$red,255)))==1){ $hex[0]="0".$hex[0]; }
        if(strlen($hex[1]=dechex(min(256*$green,255)))==1){ $hex[1]="0".$hex[1]; }
        if(strlen($hex[2]=dechex(min(256*$blue,255)))==1){ $hex[2]="0".$hex[2]; }
        return implode("",$hex);
    }

}
