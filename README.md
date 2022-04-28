##Запускаем проект с Docker (Backend & Frontend)

нужна Node.js 16.13.1

###Если у вас linux / Mac
1. Дать права ( linux only )
2. по пути ```backend/monolith/src/``` копируем файл ```.env.example``` и <br>
   называем его ```.env```
3. Закометривовать строку ```USER www-data``` в файле ```backend/monolith/docker/php/Dockerfile```
4. Запусаем  ```docker-compose up -d```
5. ```docker-compose exec app sh install.sh```  (Если vendor уже есть знач не надо ставить в корне src!)
6. ```docker-compose exec app sh db.sh```
7. ```npm install --legacy-peer-deps``` для того что бы были автоимпорты


###Если у вас Windows 10
1. в корне приложения / пишем ```docker-compose up```
2. по пути ```backend/monolith/src/``` копируем файл ```.env.example``` и <br>
   называем его ```.env```
3. composer install   
4. через терминал по пути ```backend/monolith/src/```
   ```php artisan migrate```
5. через терминал по пути ```backend/monolith/src/```
       ```php artisan db:seed```

   
###Запускаем frontend отдельно
1. в корне папки frontend пишем  ```npm install```
2. в корне папки frontend пишем ```npm start```

###Важно
1. Можно просмотреть какие картинки уже есть в файлах ```frontend/src/style_src/icons/common/custom_icons.js``` и ```frontend/src/style_src/icons/common/font_awesome.js``` по ссылке ```localhost:3000/dev_icons```
2. Если будет какая-то проблема с контэйнером server_php. Создайте файл в корне всего non-stop.sh в формате (LF) 



