##Запускаем проект с Docker Backend

нужна Node.js 16.13.1

###Если у вас linux / Mac
1. Дать права ( linux only )
2. по пути ```backend/monolith/src/``` копируем файл ```.env.example``` и <br>
   называем его ```.env```
3. Закометривовать строку ```USER www-data``` в файле ```backend/monolith/docker/php/Dockerfile```
4. Запусаем  ```docker-compose up -d```



