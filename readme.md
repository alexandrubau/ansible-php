## PHP role

Some description for PHP role would be nice. Any volunteers?

### Parameters

**php_version** (type `string`, default `7.3`)

Example:
```yaml
php_version: 7.1
```

**php_env** (type `string`, default `dev`)

Example:
```yaml
php_env: prod
```

**php_cli_ini** (type `array`, default `[]`)

Example:
```yaml
php_cli_ini:
  - name: max_execution_time
    value: 60
```

**php_apache_ini** (type `array`, default `[]`)

Example:
```yaml
php_apache_ini:
  - name: max_execution_time
    value: 60
```

**php_fpm** (type `bool`, default `false`)

Example:
```yaml
php_fpm: yes
```

**php_fpm_ini** (type `array`, default `[]`)

Example:
```yaml
php_fpm_ini:
  - name: opcache.enable
    value: 1
```

**php_fpm_service_ini** (type `array`, default `[]`)

Example:
```yaml
php_fpm_service_ini:
  - name: pid
    value: /run/php/php7.3-fpm.pid
```

**php_fpm_pools** (type `array`, default `[]`)

Example:
```yaml
php_fpm_pools:
  - name: www
    conf:
      - name: listen.owner
        value: nginx
      - name: listen.group
        value: nginx
        remove: yes
```