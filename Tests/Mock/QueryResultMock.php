<?php

namespace Ddeboer\Salesforce\MapperBundle\Tests\Mock;

use Phpforce\SalesforceBundle\SoapClient\Result\QueryResult;

class QueryResultMock extends QueryResult
{
    public function __construct($size, $done = true, array $records = array())
    {
        $this->size = $size;
        $this->done = $done;
        $this->records = $records;
    }
}
