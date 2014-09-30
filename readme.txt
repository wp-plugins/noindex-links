=== Noindex Links ===
Contributors: flector
Donate link: http://goo.gl/uhnS7k
Tags: wp-noindex, noindex, yandex, nofollow
Requires at least: 2.3
Tested up to: 4.0
Stable tag: 2.00

Плагин заключает любые ссылки в комментариях в теги &lt;noindex&gt;&lt;/noindex&gt;.

== Description ==

Плагин `Noindex Links` (старое название `WP-Noindex`) запрещает Яндексу учитывать ссылки в комментариях. Плагин оборачивает noindex тегами как ссылки авторов комментариев (если они заполнили поле "Сайт" при написании комментария), так и ссылки в тексте самих комментариев.

Яндекс давно уже учитывает "nofollow" атрибут у ссылок, но среди SEO-специалистов бытует мнение, что полностью игнорировать ссылки Яндекс будет только, если они заключены в noindex теги (в пользу этой теории говорит появление в последнее время нескольких бирж по продаже nofollow-комментариев). 

В версии плагина 2.00 простые теги &lt;noindex&gt;&lt;/noindex&gt; заменены на валидные эквиваленты &lt;!--noindex--&gt;&lt;!--/noindex--&gt;. Более подробно читайте на [странице плагина](http://www.wordpressplugins.ru/seo/wp-noindex.html).

Если вам понравился мой плагин, то `пожалуйста` поставьте ему 5 звезд.

Другие мои плагины:
- [Cool Tag Cloud](http://wordpress.org/plugins/cool-tag-cloud/) - классный виджет вывода облака меток.
- [BBSpoiler](http://wordpress.org/plugins/bbspoiler/) - спойлер в стиле rutracker.org. 
- [Hide My Dates](http://wordpress.org/plugins/hide-my-dates/) - плагин скрывает даты в записей от гугла. 
- [Russian Number Comments](http://wordpress.org/plugins/russian-number-comments/) - правильное склонение числа комментариев. 
- [WP Russian Quicktags](http://wordpress.org/plugins/wp-russian-quicktags/) - панель форматирования текста комментариев. 

== Installation ==

1. Скопируйте папку плагина в `/wp-content/plugins/`.
2. Активируйте плагин через меню `Плагины`.
3. Это все.

== Screenshots ==

1. Пример ссылки в комментарии при просмотре в инспекторе кода.

== Changelog ==

= 2.0 =
* Ссылки в поле "Сайт" тоже теперь оборачиваются noindex тегами.
* Теги &lt;noindex&gt; заменены на валидные варианты в виде &lt;!--noindex--&gt;.
* Плагин переименован в "Noindex Links" вместо "WP-Noindex".
= 1.0 =
* Первая версия
