<?php

declare(strict_types=1);

namespace Celemas\Core\Tests\Fixtures;

use Celemas\Core\Factory\Nyholm;
use Celemas\Core\Response;

class TestController
{
	public function textView(): Response
	{
		return Response::create(new Nyholm())->body('text');
	}
}
