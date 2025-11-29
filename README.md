symfony new musikapi
cd musikapi
symfony composer require api
touch /home/jnotteghem/Workspace/Ynov/2526/musikapi/var/data_dev.db
chmod 777 /home/jnotteghem/Workspace/Ynov/2526/musikapi/var/data_dev.db
symfony serve
composer require symfony/maker-bundle --dev
php bin/console make:entity
python manage.py makemigrations
php bin/console doctrine:migrations:migrate
symfony serve
composer require api-platform/graphql
composer require --dev symfony/profiler-pack
