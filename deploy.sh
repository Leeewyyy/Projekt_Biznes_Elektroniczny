#!/bin/bash

NAME="admin-mysql_db.1.0wgtxijosd6k0no4gmlskxlmw"

# Copy all required files to MySQL container
docker cp tmp-init.sh $NAME:/tmp/kuzynihagrida-tmp-init.sh
docker cp initialize.sql $NAME:/tmp/kuzynihagrida-initialize.sql
docker cp prestashop_template.sql $NAME:/tmp/kuzynihagrida-prestashop_template.sql

# Execute initialization script
docker exec -it $NAME chmod +x /tmp/kuzynihagrida-tmp-init.sh
docker exec -it $NAME /bin/sh /tmp/kuzynihagrida-tmp-init.sh