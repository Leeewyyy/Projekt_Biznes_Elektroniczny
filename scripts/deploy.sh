#!/bin/bash
DOCKER_CONTAINER="admin-mysql_db.1.0wgtxijosd6k0no4gmlskxlmw"

# Copy all required files to MySQL container
docker cp ./tmp-init.sh $DOCKER_CONTAINER:/tmp/kuzynihagrida/tmp-init.sh
docker cp ./sql/initialize.sql $DOCKER_CONTAINER:/tmp/kuzynihagrida/initialize.sql
docker cp ./sql/prestashop_template.sql $DOCKER_CONTAINER:/tmp/kuzynihagrida/prestashop_template.sql

# Execute initialization script
docker exec -it $DOCKER_CONTAINER chmod +x /tmp/kuzynihagrida/tmp-init.sh
docker exec -it $DOCKER_CONTAINER /bin/sh /tmp/kuzynihagrida/tmp-init.sh