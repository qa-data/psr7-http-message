<?php declare(strict_types = 1);

namespace QaData\Psr7;

use GuzzleHttp\Psr7\MessageTrait;
use Psr\Http\Message\MessageInterface;

class Psr7Message implements MessageInterface
{

	use MessageTrait;

}
