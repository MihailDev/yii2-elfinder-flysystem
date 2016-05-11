��������� Flysystem ��� mihaildev/yii2-elfinder
===========================

��������� ���������� https://github.com/barryvdh/elfinder-flysystem-driver


## ���������

```json
    "mihaildev/yii2-elfinder-flysystem": "*"
```

## ���������
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

���

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

�� �������������� ����������� � ��������� ���������� ��������� �������� ��� https://github.com/creocoder/yii2-flysystem

