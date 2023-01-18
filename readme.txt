INSTALACJA DOCKERA NA WINDOWS:
Potrzebny jest WSLv2, obraz Ubuntu 22.04 LTS z Microsoft Store oraz Docker Desktop.

URUCHOMIENIE LOKALNE
1. docker compose -f docker-compose-local.yml up
2. czekamy na instalację
3. importujemy dane do Prestashop np. przez PhpMyAdmin
4. kopiujemy wymagane foldery (images/themes/modules) do folderu /var/www/html
5. usuwamy folder /var/www/html/var/cache

URUCHOMIENIE NA KLASTRZE
https://docs.docker.com/engine/swarm/stack-deploy/#deploy-the-stack-to-the-swarm

Odpalamy stack poniższym poleceniem:
docker stack deploy --compose-file docker-compose.yml be_179934

Tunel SSH:
ssh -L localhost:80:actina15.maas:17993 -L localhost:443:actina15.maas:17994 rsww@172.20.83.101

DOCKERHUB
Budujemy obraz poleceniem "docker build . -t kuzynihagrida1/prestashop".
Wysyłamy obraz do huba, poleceniem "docker push kuzynihagrida1/prestashop:latest".
Jeżeli dostaniemy błąd o braku dostępu, wpisujemy "docker login" i logujemy się.

PRESTASHOP
Adres sklepu: http://localhost:17993
Panel admina: http://localhost:17993/admin-kuzynihagrida
Hasło: Kuzyn1!2@