<?php

declare(strict_types= 1);

namespace Anup\US1\Controller\Index;

use Anup\US1\Test;
use Magento\Framework\App\Action\Action;

use Magento\Framework\App\Action\Context;
use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\Controller\Result\JsonFactory;

class Index extends Action implements HttpGetActionInterface
{
    // private Test $test;
    // private JsonFactory $resultJsonFactory;
    // /**
    //  *
    //  * @param Context $context
    //  * @param Test $test
    //  * @param JsonFactory $resultJsonFactory
    //  */
/** 
     * @var Test 
     */
    protected $test;

    /**
     * @param Context $context
     * @param Test $test
     */
    
    public function __construct(Context $context, Test $test,JsonFactory $resultJsonFactory)
    {
        
        $this->test = $test;
        // $this->resultJsonFactory = $resultJsonFactory;
        parent::__construct($context);
    }

    public function execute()
    {
        // $result = $this->resultJsonFactory->create();
        // return $result->setData([$this->test->displayParams()]);
        $this->test->displayParams();
    }
}
