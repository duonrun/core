<?php

declare(strict_types=1);

namespace Celemas\Core\Exception;

/** @api */
class HttpForbidden extends HttpError
{
	protected const int code = 403;
	protected const string message = 'Forbidden';
}
