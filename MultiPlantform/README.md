Задача: Мультиплатформенность
=======

Цель задачи:
-------
проверить навыки ООП и абстрактного мышления.

Описание:
-------
Есть приложение, которое выполняет какую-то работу. Но проблема, что это приложение разрабатывалось только для запуска как веб-приложение и получает данные из POST. Нужно отрефакторить пиложение, чтоб оно могло запускаться как консольное приложение и как фоновый скрипт. Каждый режим запуска имеет свои особенности для получения входных параметров, вывода результата и логгирования.

Дополнительные условия:
-------
* Приложение должно брать тип среды из $_GLOBAL['env']. Не столь важно как вы будете устанавливать туда значение (брать из GET, параметр консольного скрипта или другой способ)
* Логгер должен реализовывать шаблон Синглентон, т.к. он будет использоваться в разных частях приложения, а плодить объекты в данном случае излишне
* Приложение будет использовать класс Калькулятор, который будет вычислять сумму двух чисел.

Веб-приложение:
-------
* Получает данные из POST или GET
* Выводит данные на экран с простой html-версткой
* Логгирует в виде html-комментариев

Консольное приложение
-------
* Получает данные из параметров скрипта
* Выводит данные в консоль
* Логгирует в консоль

Фоновое приложение
-------
* Работает с таблицей calculate (param1 float, param2 float, result float). Считает все задачи, где result еще не посчитан.
* Получает данные из БД
* Пишет результат в БД
* Логгирует в БД (в отдельную log таблицу)