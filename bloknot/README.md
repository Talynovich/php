# Заметки по созданию Блокнота.



#### SQL запрос, которые понадобятся. 

SQL для получения иформации из tasks 

```sql
SELECT * FROM `tasks`;
```

Запрос для создания записи в таблице tasks 

```sql
INSERT INTO tasks(title, content) VALUES ("Заголовок", "Контент");
```

Запрос на добавление нового столбца в таблицу tasks

```sql
ALTER TABLE tasks
ADD COLUMN weight VARCHAR(50) NOT NULL DEFAULT '';
```

Запрос для обновления информации в таблице tasks

```sql
UPDATE tasks SET title="asdasda" WHERE id=5; 
```

Запрос на удаление из таблицы tasks по id 

```sql
DELETE FROM tasks WHERE id=35;
```