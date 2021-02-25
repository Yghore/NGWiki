<?php

namespace App\Exceptions;

use Exception;

class PermissionException extends Exception
{
    public function register()
    {
        $this->reportable(function (PermissionException $e) {
            //
        });
    }
}
