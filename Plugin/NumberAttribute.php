<?php
namespace AHT\Task\Plugin;

use Magento\Framework\Interception;

class NumberAttribute
{
    public function afterGetAdditionalData(\Magento\Catalog\Block\Product\View\Attributes $data, $result,array $excludeAttr = [])
    {
         $result['number_attribute'] = [
             'label' => "Number of shown Cuong",
             'value' => count($result),
             'code' => 'Number of shown Attribute',
         ];
         return $result;
    }
}