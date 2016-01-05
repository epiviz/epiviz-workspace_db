FROM tutum/lamp

RUN apt-get update && \
  DEBIAN_FRONTEND=noninteractive apt-get -yq install \
    php5-curl

COPY docker/create_workspace_db.sql /create_workspace_db.sql
COPY docker/setup_workspace_db.sh /setup_workspace_db.sh
COPY docker/run.sh /run.sh
RUN chmod 755 /*.sh

RUN rm -rf /app
COPY . /app
COPY docker/db_config.php /app/db_config.php

EXPOSE 80
CMD ["/run.sh"]
