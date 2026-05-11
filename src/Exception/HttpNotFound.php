<?php

declare(strict_types=1);

namespace Celemas\Core\Exception;

/** @api */
class HttpNotFound extends HttpError
{
	protected const int code = 404;
	protected const string message = 'Not Found';
}
