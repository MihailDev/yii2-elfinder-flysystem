Адаптация Flysystem для mihaildev/yii2-elfinder
===========================

Адаптация расширения https://github.com/barryvdh/elfinder-flysystem-driver


## Установка

```json
    "mihaildev/yii2-elfinder-flysystem": "*"
```

## Настройка
```php
'components' => [
...
        'ftpFs' => [
			'class' => 'creocoder\flysystem\FtpFilesystem',
			'host' => 'host',
			// 'port' => 21,
			 'username' => 'username',
             'password' => 'password',
			// 'ssl' => true,
			// 'timeout' => 60,
			 //'root' => '/',
			// 'permPrivate' => 0700,
			// 'permPublic' => 0744,
			// 'passive' => false,
			// 'transferMode' => FTP_TEXT,
		],
...
]
...
            'root' => [
				'class' => 'mihaildev\elfinder\flysystem\Volume',
				'url' => 'http://www.some.ru/',
                'component' => 'ftpFs'
			],

```

или

```php
'components' => [
...
        'ftpFs' => [
			'class' => 'creocoder\flysystem\FtpFilesystem',
			'host' => 'host',
			// 'port' => 21,
			 'username' => 'username',
             'password' => 'password',
			// 'ssl' => true,
			// 'timeout' => 60,
			 //'root' => '/',
			// 'permPrivate' => 0700,
			// 'permPublic' => 0744,
			// 'passive' => false,
			// 'transferMode' => FTP_TEXT,
		],
...
]
...
            'root' => [
				'class' => 'mihaildev\elfinder\flysystem\Volume',
				'url' => 'http://www.some.ru/',
                'component' => [
                               			'class' => 'creocoder\flysystem\FtpFilesystem',
                               			'host' => 'host',
                               			// 'port' => 21,
                               			 'username' => 'username',
                                            'password' => 'password',
                               			// 'ssl' => true,
                               			// 'timeout' => 60,
                               			 //'root' => '/',
                               			// 'permPrivate' => 0700,
                               			// 'permPublic' => 0744,
                               			// 'passive' => false,
                               			// 'transferMode' => FTP_TEXT,
                               		]
			],

```

за дополнительной информацией о настройке компоненты хранилища смотрите тут https://github.com/creocoder/yii2-flysystem

