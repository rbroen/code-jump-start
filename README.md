# A code jump start with Laminas Mezzio

This project is a starting point for other projects.

The main components are:
- Laminas Mezzio
- Doctrine2
- Working migrations with a sample entity
- Encryption to comply with GDPR

## Install

The installation has only been tested with an Ubuntu 20.10.  
Clone the project and start the docker containers.
```bash
# Replace my-project with the name of your project.
git clone git@github.com:rbroen/code-jump-start.git my-project
cd my-project
# Make changes to the local documents whenever you need to.
cp config/autoload/local.php.dist config/autoload/local.php
cp config/autoload/development.local.php.dist config/autoload/development.local.php
# Consider updating the name of both containers in the docker-compose.yml file.
# Build and run the containers.
docker-compose up
# This installs composer.phar in the container.
wget https://raw.githubusercontent.com/composer/getcomposer.org/76a7060ccb93902cd7576b67264ad91c8a2700e2/web/installer -O - -q | php -- --quiet
# List your containers
docker ps
# Run composer install to get all third party components, use the right container name.
docker exec -ti demo04_myproject_1 ./composer.phar install
```
The site should be available as http://localhost
