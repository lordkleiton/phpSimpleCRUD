#!/bin/sh

#cria o diretorio se ainda não existir
mkdir -p /srv/http/simpleCRUD

#copia todo o conteúdo da pasta recursivamente
cp -r * /srv/http/simpleCRUD