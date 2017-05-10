# TestTasks

Суть тестового задания:

Тестовое задание на позицию 1С Битрикс программист

1) Представьте следующую структуру данных. В ИБ 20 хранятся товары. В ИБ 24 хранятся производители. В ИБ 20 есть свойство "PRODUCER", в котором к товару привязывается ID производителя из ИБ 24. 
Нужно посредством API-Битрикса запроса получить из ИБ 20 товары, которые были заведены за последние 7 дней, или у которых производитель называется Samsung минимально возможным количеством запросов к базе.

Выполнено в файле test1.php. Важное указание - код сработает только в случае если тип поля PROPERTY_PRODUCER - "Связь с элементами инфоблока" и соответственно как инфоблок-родитель указан ИБ 24. В противном случае (если хранится в простом строковом значении) - только вложенным запросом. Т.к. в условии задачи указано "в котором к товару привязывается", мною оно интерпертировано как наличие вышеуказанного поля с привязкой к ИБ.

2) Как одним запросом, с помощью API-Битрикса, получить список заказов за последнюю неделю, в которых хотя бы на один товар предоставлена скидка, и телефон покупателя начинается с цифры 7.

Выполнено в файле test2.php

Выполнение тестовых заданий проиведено на классическом API, т.к. на ORM я чаще всего имею дело с HL Инфоблоками. Если принципиально использование ORM - могу переделать на нем.

