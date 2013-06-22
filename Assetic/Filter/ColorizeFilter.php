<?php
 
namespace Sopinet\ColorizeBundle\Assetic\Filter;
 
use Assetic\Asset\AssetInterface;
use Assetic\Filter\FilterInterface;
use Sopinet\Colorize\ColorizeService;
 
class ColorizeFilter implements FilterInterface
{
    public function filterLoad(AssetInterface $asset)
    {
    }
 
 
    public function filterDump(AssetInterface $asset)
    {
        $content = $asset->getContent();
        //Do something to $content
        $img_src = "http://www.sopinet.com/layout/bootstrap/template/sopinetoliva_mini.png";
        $asset->setContent(ColorizeService::autoColorizeFromString($content, $img_src));
    }
}