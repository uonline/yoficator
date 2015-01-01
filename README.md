yoficator
=========

The yoficator used which will be used by uonline. The task is to port it to CoffeeScript.

Original: [https://code.google.com/p/php-yoficator/](https://code.google.com/p/php-yoficator/), v.1.0.7 from 2010-12-28


## Генеральный план

1. ~~Написать скрипт на PHP, который читает текст из stdin, ёфицирует и выдаёт на stdout.~~
2. ~~Написать к нему обёртку на CoffeeScript.~~
3. Обложить обёртку тестами.
4. Переписать реализацию на CoffeeScript.
5. ???
6. PROFIT

Set `variables_order = "EGPCS"` in php.ini.


## Возможные регрессии (учесть в тестах)

* не ёфицировались слова, начинающиеся с прописной буквы
* коллизии в хэшах
* При обработке сохраняются все диакритические знаки и "мягкие" переносы строк
* обработка слов-сокращений с точкой
* Исправление нескольких букв е, ё в словах.
* Корректная обработка сокращений, пример: «мед. училище» (но не «мёд. училище»).
* Аббревиатуры не обрабатываются (пример: ОПЕК). 
