<?php
 
namespace Sopinet\ColorizeBundle\Assetic\Filter;
 
use Assetic\Asset\AssetInterface;
use Assetic\Filter\FilterInterface;
 
class ColorizeFilter implements FilterInterface
{
    public function filterLoad(AssetInterface $asset)
    {
    }
 
 
    public function filterDump(AssetInterface $asset)
    {
        $content = $asset->getContent();
        //Do something to $content
        $asset->setContent($content);
    }
}
