echo "Tworze uzytkownika oraz baze danych!"
mysql -p"student" < /tmp/kuzynihagrida-initialize.sql

echo "Podmieniam domene w bazie Prestashop!"
sed -i 's/__PS_DOMAIN__/localhost/g' /tmp/kuzynihagrida-prestashop_template.sql

echo "Wgrywam import bazy Prestashop!"
mysql -u"kuzynihagrida" -p"kuzynihagrida" -D"kuzynihagrida" < /tmp/kuzynihagrida-prestashop_template.sql

echo "Zakonczono wgrywanie bazy MySQL."