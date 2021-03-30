<?php

namespace Ddeboer\Salesforce\MapperBundle\Tests\Mock;

use Phpforce\SalesforceBundle\Result\DescribeSObjectResult;
use Phpforce\SalesforceBundle\Result\DescribeSObjectResult\Field;

class DescribeAccountResult extends DescribeSObjectResult
{
    public function __construct()
    {
        $this->fields[] = new FieldId();
        $this->fields[] = new FieldName();
    }
}

class FieldName extends Field
{
    protected $name = 'Name';
    protected $createable = true;
    protected $updateable = true;
}

class FieldId extends Field
{
    protected $name = 'Id';
    protected $createable = true;
    protected $updateable = true;
}
