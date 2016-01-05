FROM tutum/lamp

RUN apt-get update && \
  DEBIAN_FRONTEND=noninteractive apt-get -yq install \
    php5-curl

COPY sql/create_workspace_db.sql /create_workspace_db.sql
COPY setup_workspace_db.sh /setup_workspace_db.sh
COPY run.sh /run.sh
RUN chmod 755 /*.sh

RUN rm -rf /app
COPY . /app

EXPOSE 80
CMD ["/run.sh"]
