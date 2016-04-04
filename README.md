# Docker PHP-Dev
This is a _dockerized_ basic project structure for PHP development.  

# Things you should know

Your code should go into ___./src___

### Web server
-  ___Exposed ports (host:container):___ 80:80
-  ___Web server:___ apache
-  ___PHP version:___ [7](https://hub.docker.com/r/ioayman/php/)
-  ___Installed extensions:___ PDO (MYSQL,SQLITE)

### Database
-  ___DB:___ MYSQL
-  ___DB hostname(what to put in your code):___  'db'
-  ___DB environment is defined in___ ./db/env

___How to import a database dump on startup?___  
Just put your file at `./db/schema.sql`

___How to import a .sql later on, after the startup?___
```bash
cd db
./import.sh mydump.sql
```



## How to use this?
```bash
# Clone repo
git clone https://github.com/IOAyman/docker-phpdev.git myawesomeproject
cd myawesomeproject

# Do the house cleaning
python clean.py

# Run the containers
docker-compose -d up

# Test
curl localhost

# Shutdown the containers
docker-compose down
```
