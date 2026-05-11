<?php

declare(strict_types=1);

namespace Celemas\Core;

interface Plugin
{
	public function load(App $app): void;
}
