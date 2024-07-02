<h2>Локальная разработка (запускается на Linux или через wsl):</h2>
<h3>Если вы запускаетесь в первый раз:</h3>
<ol>
<li>Переименовать example.env в .env <b>(обязательно восстановить после этого файл example.env)</b> </li>
<li>

Сгенерировать папку vendor `composer update`</li>

>Еще один вариант создания папки vendor: <br>
`docker run --rm \ -u "$(id -u):$(id -g)" \ -v "$(pwd):/var/www/html" \ -w /var/www/html \ laravelsail/php83-composer:latest \ composer install --ignore-platform-reqs`

<li>

`sail up -d` - запуск сервера</li>

>Для того, чтобы выполнять запуск с помощью sail, необходимо в файл <b>.bashrc</b> (Находится в корневой дериктории пользователя) добавить `alias sail='sh $([ -f sail ] && echo sail || echo vendor/bin/sail)'`. Либо запускать через ./vendor/bin/sail<br>

<li>

`sail npm install` установка npm пакетов для vite</li>

<li>

`sail npm run dev` - запуск vite с hot reload</li>

<li>

Для того, чтобы сохранять картинки в проект, необходимо запустить `sail artisan storage:link` </li>

<li>

Для того, чтобы выполнить миграции таблиц, необходимо запустить `sail artisan migrate` </li>

<li>

Для того, чтобы посеять данные в базу, необходимо запустить `sail artisan db:seed`</li>
</ol>


<h3>Если вы запускаетесь НЕ в первый раз:</h3>

`sail composer update` - если были установлены новые пакеты или плагины

`sail up -d` - запуск сервера<br>
`sail npm run dev` - запуск vite слежка + автообновление браузера<br>

<h2>Дополнительно</h2>

При возникновении ошибки `Installation failed, reverting ./composer.json to its original content.` выполнить `composer diagnose`<br>
если `cURL version: missing, using php streams fallback, which reduces performance`, выполнить `sudo apt-get install php-curl`<br>

При ошибках создания контейнера с базой<br>
`sail down --volumes` <br>
`sail up` <br>

Если при разворачивании проекта с 0 вылезает 500 ошибка<br>

решение 1 - доступы к файлам (для linux)<br>
`sudo chmod -R 755 1tvchTemplate
chmod -R o+w 1tvchTemplate/storage`

решение 2<br>
сгенерировать новый ключ в файле .env (должна быть переменная `APP_KEY`)<br>
`sail php artisan key:generate`<br>

При возникновении ошибки <br>
`error decoding 'ports': Invalid hostPort: 8080`<br>
Необходимо в notepad++ (или другим способом) изменить формат конца строк на Unix <br>


<br>
<br>
Если при установленном docker не удаётся запустить `sail up` то возможно есть проблема с доступами у самого docker

запустить команды
`sudo groupadd docker`
`sudo usermod -aG docker $USER`
`newgrp docker`