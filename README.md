# Laravel Module Installer

> Originally forked from https://github.com/joshbrw/laravel-module-installer

The purpose of this package is to allow for easy installation of standalone Modules into the [Laravel Modules](https://github.com/nWidart/laravel-modules) package. This package will ensure that your module is installed into the `Modules/` directory instead of `vendor/`.

You can specify an alternate directory by including a `module-dir` in the extra data in your composer.json file:
```json
    "extra": {
        "module-dir": "Custom"        
    }
```

By default the `name` of the module will be extracted from the package using the convention `<namespace>/<name>-module`, for example `v360tech/user-module` would install into `Modules/User`. However the `name` of the module can be customized via extra data in your composer.json file:
```json
    "extra": {
        "module-name": "MyUser"
    }
```

Now above module will be installed into `Modules/MyUser`.


## Installation

1. Ensure you have the `type` set to `laravel-module` in your module's `composer.json`
2. Require this package: `composer require v360tech/laravel-module-installer`
3. Require your bespoke module using Composer. You may want to set the constraint to `dev-master` to ensure you always get the latest version.

## Notes
* When working on a module that is version controlled within an app that is also version controlled, you have to commit and push from inside the Module directory and then `composer update` within the app itself to ensure that the latest version of your module (dependant upon constraint) is specified in your composer.lock file.
