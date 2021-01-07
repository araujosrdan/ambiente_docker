# ambiente_docker
Um ambiente de desenvolvimento local com Docker

# Configuração do ambiente PHP / MySQL / Nginx:
## Para subir docker: 
```
docker-compose up -d
```
## Para encerrar docker: 
```
docker-compose stop
```
## Para acessar MySQL externamente:
```
docker-compose exec mysql sh
mysql -uroot -p (senha 12345)
create user 'docker'@'%' identified by 'docker';
grant all privileges on *.* to 'docker'@'%' with grant option;
flush privileges;
quit;
```
- Reiniciar Docker

## Configurar acesso ao MySQL externamente:
- Hostname: 0.0.0.0
- Porta: 42333
- Usuário: docker
- Senha: docker
