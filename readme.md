# User Profile Application

Application for users to register themselves, which then users can manage their own user profile.

## Installation

Before installing and running you need to install these first :
1. PHP Version 7
2. MySQL
3. Apache Version 2

To install Homecare24 Caretaker Backend follow these steps :
1. Clone this repository
```bash
git clone https://gitlab.com/homecare24-backend/ct-backend
```
2. cd to clone directory result 
```bash
cd ct-backend
```
3. Install dependencies using glide
```bash
glide install
```
4. To run from local database server, write new `env` file named `dev.env` and copy content from `env.sample`. Change the database config value (indicated by `DB_` prefix in the env file key) using your local database config

## Running App Server
Run backend service main script 
```bash
go run main.go
```

You can also ease development cycle by hoatloading changes using go-watcher package. Install from https://github.com/canthefason/go-watcher. If you're using watcher, you can run 
```bash
watcher
```
from the project root directory

## Supported Environments
Currently, this project supports two additional environment, `staging` and `prod` for staging and production deployment. To run app server in staging environment, execute
```bash
go run main.go staging
```
To run app server in production environment, execute
```bash
go run main.go prod
```
