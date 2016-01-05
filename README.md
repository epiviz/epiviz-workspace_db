#epiviz-workspace_db

Workspace and user management component for the [epiviz genomic visualization app](http://epiviz.github.io).

##Configuration

This uses [hybridauth](http://hybridauth.sourceforge.net/index.html) for user identity management and a MySQL database to store workspaces, each associated with a given user. For this app to work
two configuration files need to be added.

###Database configuration

File `db_config.php` defines constants for the MySQL database host, port, user and **password**
used to store workspaces.

File `src/oauth/hybridauth/config.php` contains configuration parameters for hybridauth. This needs to be populated according to your installation.

##Docker

This repository contains a `Dockerfile` that implements a LAMP container capable of running this app. It will not function without a proper config file for hybridauth. **You need to change file `db_config.php` to change the default database password**.

To build and run the container use the following:

```{bash}
docker build -t epiviz/workspace_db .
docker run -d -p 80:80 -e MYSQL_PASS="<yourdbpasswd>" epiviz/workspace_db
```
