Instalacja Dockera na Windows:
1. WSL v2
2. Ubuntu 22.04 LTS z Microsoft Store
3. Docker Desktop

Uruchomienie:
1. docker compose -f docker-compose.yml up
2. poczekać na instalację
3. zaimportować bazę danych przez PhpMyAdmin
4. skopiować wymagane pliki z folderu "prestashop_backup/html" do wolumenu "kuzynihagrida-prestashop"
5. usunąć folder "var/cache" z wolumenu "kuzynihagrida-prestashop"

Wymagane pliki zostaną zapisane na stałę w wolumenie i zostaną po restarcie aplikacji.

Adres sklepu: http://localhost:8080
Panel admina: http://localhost:8080/admin-kuzynihagrida (hasło: Kuzyn1!2@)