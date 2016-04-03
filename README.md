# Docker PHP-Dev
This is a _dockerized_ basic project structure for PHP development.  

## Things you should know
-  ___PHP version:___ [7]
-  ___Web server:___ apache
-  ___Your code should go into___ ./src
-  ___Exposed port:___ 80
-  ___DB name:___ phpdev
-  ___DB root password:___ helloworld
-  ___DB user:___ iouser
-  ___DB user password:___ iodevpassword

## How to use this?
```bash
# Clone repo
git clone https://github.com/IOAyman/docker-phpdev.git myawesomeproject
cd myawesomeproject

# Run the containers
docker-compose -d up

# Test
curl localhost

# Shutdown the containers
docker-compose down
```
