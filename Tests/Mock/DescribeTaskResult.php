<?php

namespace Ddeboer\Salesforce\MapperBundle\Tests\Mock;

use Phpforce\SalesforceBundle\Result\DescribeSObjectResult;
use Phpforce\SalesforceBundle\Result\DescribeSObjectResult\Field;

class DescribeTaskResult extends DescribeSObjectResult
{
    public function __construct()
    {
        $this->fields[] = new FieldId();
        $this->fields[] = new FieldSubject();
    }
}

class FieldSubject extends Field
{
    protected $name = 'Subject';
    protected $createable = true;
    protected $updateable = true;
}
