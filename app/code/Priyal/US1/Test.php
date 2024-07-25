<?php 

declare(strict_types=1);

namespace Anup\US1;

use \Magento\Catalog\Api\Data\CategoryInterface;
 use \Anup\US1\Api\Data\CustomCategoryInterface;

class Test{
    protected array $arrayParam;
    protected string $stringParam;
    protected CustomCategoryInterface $categoryInterface;

    public function __construct(CustomCategoryInterface $categoryInterface, array $arrayParam=[1,2,3], string $stringParam="Anup") {
        if(($categoryInterface instanceof \Magento\Catalog\Api\Data\CategoryInterface)){
            $this->categoryInterface = $categoryInterface;
        }
        else {
            throw new \Magento\Framework\Exception\LocalizedException(
                __('The injected CategoryInterface is not an instance of CustomCategoryInterface.')
            );
        }
        $this->arrayParam = $arrayParam;
        $this->stringParam = $stringParam;
    }

    public function displayParams(){
        echo "<pre>".print_r($this->arrayParam, true)."</pre>";
        echo "String params: ".print_r($this->stringParam, true);
        echo "<br/>Custom Cateogry 1 " .$this->categoryInterface->getDescription();
    }

    public function getCustomCategory(){
        return $this->categoryInterface;
    }
}



// class Test
// {
//     protected CategoryInterface $category;
//     protected string $string;
//     protected array $arr;
//     /**
//      *
//      *
//      * @param CategoryInterface $category
//      * @param string $string
//      * @param array $arr
//      */

//     public function __construct(CategoryInterface $category, $string='Anup', $arr = [1,2,3])
//     {
//         $this->category = $category;
//         $this->string = $string;
//         $this->arr = $arr;
//     }

//     public function displayParams()
//     {
//         print_r("Array: ");
//         print_r($this->arr);
//         print_r("String: " . $this->string);
//         return "";
//     }
// }