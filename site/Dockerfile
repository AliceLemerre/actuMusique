FROM php:8.2-apache

RUN apt-get update

# ici j'installe les dependence nécessaire pour
# installer l'extension YAML via pecl et active l'extension en 
# créant un fichier de configuration ext-yaml.ini qui me permet 
# d'utiliser la fonction yaml_parse_file() qui sert pour les routes
RUN apt-get install -y libyaml-dev
RUN pecl install yaml
RUN echo "extension=yaml.so" > /usr/local/etc/php/conf.d/ext-yaml.ini

EXPOSE 80