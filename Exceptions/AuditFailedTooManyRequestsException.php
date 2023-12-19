<?php

namespace Piwik\Plugins\PerformanceAudit\Exceptions;

require PIWIK_INCLUDE_PATH . '/plugins/PerformanceAudit/vendor/autoload.php';

use Exception;

class AuditFailedTooManyRequestsException extends Exception
{
    /**
     * AuditFailedTooManyRequestsException constructor.
     *
     * @param string $url
     * @param null|string $output
     */
    public function __construct(string $url, $output = null)
    {
        parent::__construct('Audit of ' . $url . ' failed due to too many requests: ' . $output);
    }
}
