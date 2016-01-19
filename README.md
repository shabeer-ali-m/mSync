# mSync
mSync - a MySQL schema synchronization utility

### Description
mSync will create a schema file as JSON so that you can easily migrate schema to your production or any other work envirment easily. Currently mSync will support only table & views.

### Why we use mSync

Developers find very hard to synchronize mysql schema. The current conventional method is to export to sql & update it in production. The main demerit of this method is all the old values of the production will be loose & the process is bit hectic. In Order to solve this we developed a platform where you can update the schema in a file and by running msync it will update only those changes without losing any old structure or data.

### Prerequisites
To run mSync you need PHP.

### Configuration 

First you need to update the database configuration in mSync config file (config.php).  In confi.php you can add multiple hosts with a host name.

### Usage (CLI)
Create:
Creating schema (schema.json) file from localhost.  Make sure that localhost configuration is updated in config.php
```sh
php msyc.php create
```
Creating schema (schema.json) file from some other host (Ex: yourdomain.com).
 ```sh
php msyc.php create yourdomain.com
```
Update :
Once the schema is created you can update/sync with other host or database by using update command.
```sh
//by the following query the schema.json will be update with your localhost
php msyc.php update
```
Updating remote mysql
 ```sh
php msyc.php update yourdomain.com
```
Note : If you are executing this query from localhost please make sure that your IP is accessible to update your production host. 