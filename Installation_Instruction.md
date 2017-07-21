Инструкция по разворачиванию приложения для Linux
1. Открываем терминал и выполняем следующий список команд:
2. $ cd/var/www
3. $ sudo git clone git@github.com:tireotoksikoz/yii.local.git "projectName"
- где "projectName" - желаемое имя проекта 
4. $ sudo chmod -R 777 "projectName"/
5. $ cd "projectName"/
6. если пакет "fxp/composer-asset-plugin:^1.3.1" не установлен - выполняем:
$ composer global require "fxp/composer-asset-plugin:^1.3.1"
7. $ composer update
8. открываем соединение с БД:
$ mysql -p
9. создаем БД, где "DB name" - желаемое имя БД: 
create database "DB name";
10. Закрываем соединение:
exit;
11. $ sudo nano /var/www/"projectName"/config/db.php
-в файле прописываем настройки к БД ->сохраняем->закрываем
12. $ cd/var/www/"projectName"
13. $ php yii migrate
14. $ sudo nano /etc/hosts
- в конец файла добавляем строку 127.0.0.1 "projectName"->сохраняем->закрываем
15. $ sudo cp /etc/apache2/sites-available/000-default.conf /etc/apache2/sites-available/"projectName".conf
16. $ nano /etc/apache2/sites-available/"projectName".conf - файл приводим к виду:

<VirtualHost *:80>
	ServerName yii.local
	ServerAdmin webmaster@localhost
	DocumentRoot /var/www/"projectName"/web
	 <Directory /var/www/"projectName">
        Options Indexes FollowSymlinks
        AllowOverride All
    	Require all granted
    </Directory>
	ErrorLog /var/www/"projectName"/logs/error.log
	CustomLog /var/www/"projectName"/logs/access.log combined
</VirtualHost>

сохраняем->закрываем

17. $ sudo a2ensite test-site.conf
18. $ service apache2 reload
19. проект будет доступен в браузере по адресу "projectName"


