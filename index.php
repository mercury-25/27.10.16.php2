<?php
interface Base
{
    public function sum($a, $b);
}
interface extBase extends Base
{
    public function out();
}
class PreBase implements extBase{
    public $res;
    public function sum($a, $b)
    {
        $this->res=$a+$b;
    }
    public function out()
    {
        return $this->res;
    }
}	
$sum = new PreBase();
$sum->sum(55,55);
echo $sum->out();
?>