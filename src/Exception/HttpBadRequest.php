<?php

declare(strict_types=1);

namespace Celemas\Core\Exception;

/** @api */
class HttpBadRequest extends HttpError
{
	protected const int code = 400;
	protected const string message = 'Bad Request';
}
