# DATABASE BACKUP

[![Latest Version on Packagist](https://img.shields.io/packagist/v/ikechukwukalu/databasebackup?style=flat-square)](https://packagist.org/packages/ikechukwukalu/databasebackup)
[![Quality Score](https://img.shields.io/scrutinizer/quality/g/ikechukwukalu/databasebackup/main?style=flat-square)](https://scrutinizer-ci.com/g/ikechukwukalu/databasebackup/)
[![Code Quality](https://img.shields.io/codefactor/grade/github/ikechukwukalu/databasebackup?style=flat-square)](https://www.codefactor.io/repository/github/ikechukwukalu/databasebackup)
[![Known Vulnerabilities](https://snyk.io/test/github/ikechukwukalu/databasebackup/badge.svg?style=flat-square)](https://security.snyk.io/package/composer/ikechukwukalu%2Fdatabasebackup)
[![Github Workflow Status](https://img.shields.io/github/actions/workflow/status/ikechukwukalu/databasebackup/databasebackup.yml?branch=main&style=flat-square)](https://github.com/ikechukwukalu/databasebackup/actions/workflows/databasebackup.yml)
[![Total Downloads](https://img.shields.io/packagist/dt/ikechukwukalu/databasebackup?style=flat-square)](https://packagist.org/packages/ikechukwukalu/databasebackup)
[![Licence](https://img.shields.io/packagist/l/ikechukwukalu/databasebackup?style=flat-square)](https://github.com/ikechukwukalu/databasebackup/blob/main/LICENSE.md)

A laravel package for backing up database with local and remote connection.

## REQUIREMENTS

- PHP 8.0+
- Laravel 9+

## STEPS TO INSTALL

``` shell
composer require ikechukwukalu/databasebackup
```

## BACKUP DATABASE

Set the following parameters in your `.env` file and run `php artisan database:backup` to backup database.

```shell
DB_BACKUP_PATH="/db/backup/${APP_NAME}"
DB_BACKUP_COMMAND="sudo mysqldump --user=${DB_USERNAME} --password=${DB_PASSWORD} --host=${DB_HOST} ${DB_DATABASE} | gzip > "
DB_BACKUP_SSH_USER=root
DB_BACKUP_SSH_HOST=127.0.0.1
DB_BACKUP_FILE="backup-${APP_NAME}-db"
DB_BACKUP_FILE_EXT=".gz"
DB_REMOTE_ACCESS=false
```

Or this

```shell
DB_BACKUP_PATH="/db/backup/${APP_NAME}"
DB_BACKUP_COMMAND="sudo mysqldump --user=${DB_USERNAME} --password=${DB_PASSWORD} --host=${DB_HOST} ${DB_DATABASE} > "
DB_BACKUP_SSH_USER=root
DB_BACKUP_SSH_HOST=127.0.0.1
DB_BACKUP_FILE="backup-${APP_NAME}-db"
DB_BACKUP_FILE_EXT=".sql"
DB_REMOTE_ACCESS=false
```

## PUBLISH CONFIG

- `php artisan vendor:publish --tag=db-config`

## LICENSE

The DB package is an open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
