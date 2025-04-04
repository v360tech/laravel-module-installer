<?php

namespace V360Tech\LaravelModuleInstaller\Exceptions;

use Exception;

class LaravelModuleInstallerException extends Exception
{
    public static function fromInvalidPackage(string $invalidPackageName): self
    {
        return new self(
            "Ensure your package's name ({$invalidPackageName}) is in the format <vendor>/<name>-<module>"
        );
    }
}
