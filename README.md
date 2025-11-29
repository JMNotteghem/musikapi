# Mise en place d'une base de données neuve (commandes Linux)

touch ./var/data_dev.db
chmod 777 ./var/data_dev.db
php bin/console doctrine:migrations:migrate
symfony serve
