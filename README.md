Template for PHP API Applications
=====

**Technology Stack:**
- Docker(Laradock) - php, mysql, mongo, postgress, apach, nginx, redis, memcache, varnish;
- Apiato||Laravel


**Suggestion to setup project to local machine**

 - cd laradock
 - cp env-example .env
 - check .env settings - mysql(database name, user, pass), workspace (settings for server and extension), rabbitmq, memcached, redis, etc
 - go to nginx folder and add/edit/check server name: genie.local
 - run command: docker-compose build --no-cache nginx mysql
 - run command: docker-compose up nginx mysql (without demon) - check does all containers run correct
 - Ctr+C - stop console containers running; run command: dockder-compose down - harddown containers and kill
 - run command docker-compose up -d mysql nginx

 - to to workspace container and do next commands:
    - composer install

 **Helping links:**
  - [Laradock](http://laradock.io/)
  - [APIATO](http://docs.apiato.io/getting-started/installation/)
  - [Laravel 5.7](https://laravel.com/docs/5.7)
