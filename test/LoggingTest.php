<?php

use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use Monolog\Test\TestCase;

class LoggingTest extends TestCase
{
    public function testLogging()
    {
        $logger = new Logger(HandlerTest::class);

        $logger->pushHandler(new StreamHandler("php://stderr"));
        $logger->pushHandler(new StreamHandler(__DIR__ . "/../application.log"));

        $logger->info("Aset Sekolah");
        $logger->info("Created by Angel Grace Riyadi");

        self::assertNotNull($logger);
    }
}
