<?php

namespace SendGridPhp\Tests;

class SuppressionSpamReportsTest extends BaseTestClass
{
    public function testSuppressionSpamReportsGetMethod()
    {
        $query_params = json_decode('{"start_time": 1, "limit": 1, "end_time": 1, "offset": 1}');
        $request_headers = ["X-Mock: 200"];
        $response = self::$sg->client->suppression()->spam_reports()->get(null, $query_params, $request_headers);
        $this->assertEquals(200, $response->statusCode());
    }

    public function testSuppressionSpamReportsDeleteMethod()
    {
        $request_body = json_decode('{
  "delete_all": false,
  "emails": [
    "example1@example.com",
    "example2@example.com"
  ]
}');
        $request_headers = ["X-Mock: 204"];
        $response = self::$sg->client->suppression()->spam_reports()->delete($request_body, null, $request_headers);
        $this->assertEquals(204, $response->statusCode());
    }

    public function testSuppressionSpamReportsEmailGetMethod()
    {
        $email = "test_url_param";
        $request_headers = ["X-Mock: 200"];
        $response = self::$sg->client->suppression()->spam_reports()->_($email)->get(null, null, $request_headers);
        $this->assertEquals(200, $response->statusCode());
    }

    public function testSuppressionSpamReportsEmailDeleteMethod()
    {
        $email = "test_url_param";
        $request_headers = ["X-Mock: 204"];
        $response = self::$sg->client->suppression()->spam_reports()->_($email)->delete(null, null, $request_headers);
        $this->assertEquals(204, $response->statusCode());
    }
}