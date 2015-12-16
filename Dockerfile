FROM tutum/lamp

ADD sql/create_workspace_db.sql /create_workspace_db.sql
ADD setup_workspace_db.sh /setup_workspace_db.sh
ADD run.sh /run.sh
RUN chmod 755 /*.sh

RUN rm -rf /app
RUN mkdir /app
EXPOSE 80

CMD ["/run.sh"]
