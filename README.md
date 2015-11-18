# quest
Необходимо используя composer-пакет [spaceweb/quest](https://packagist.org/packages/spaceweb/quest) написать консольную утилиту вычисляющую количество и сумму платежей для которых сформированы и не сформированы документы.

Для установки пакета воспользуйтесь командой: <pre>composer require spaceweb/quest</pre>

Пример работы утилиты:
<pre>
dakulov-macbook:untitled1 dakulov$ php quest_done.php statistic --without-documents --with-documents
Please enter start date: 2015-07-20
Please enter end date: 2015-11-01
+-------+---------+
| count | amount  |
+-------+---------+
| 15    | 11400   |
| 6     | 4679.84 |
+-------+---------+
dakulov-macbook:untitled1 dakulov$ 
</pre>
