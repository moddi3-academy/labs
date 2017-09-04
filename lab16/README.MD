### Лабораторна робота 15

**Тема:** Взаємодія з базою MySQL за допомогою PHP.

**Мета**: Навчитися використовувати інструментарій PHP для роботи з MySQL.

**Завдання**

1. Підключитись до MySQL локального веб-серверу Denwer з командного рядка, використовуючи користувача root. 

```bash
mysql -u root
```

2. Перевірити наявні бази даних.

```mysql
SHOW databases
```

3. Створити базу даних publications

```mysql
CREATE DATABASE publications
```

4. Відкрити створену базу даних для змін.

```mysql
USE publications
```

5. Створити нового користувача user з паролем mypasswd для хоста localhost та надати йому всі права на створену базу даних.

```mysql
GRANT ПРАВА ON publications TO 'user@localhost' IDENTIFIED BY 'mypasswd';
```

6. Створити таблицю classics.

```mysql
CREATE TABLE classics (author VARCHAR(128), title VARCHAR(128), title VARCHAR(16), year CHAR(4)) ENGINE MyISAM
```

7. Перевірити факт створення таблиці classics

```mysql
DESCRIBE classics
```

8. Заповнити таблицю данними. 

```mysql
INSERT INTO classics(author, title, type, year)
VALUES('Mark Twain','The Adventures of Tom Sawyer','Fiction','1876');
INSERT INTO classics(author, title, type, year)
VALUES('Jane Austen','Pride and Prejudice','Fiction','1811');
INSERT INTO classics(author, title, type, year)
VALUES('Charles Darwin','The Origin of Species','Non-Fiction','1856');
INSERT INTO classics(author, title, type, year)
VALUES('Charles Dickens','The Old Curiosity Shop','Fiction','1841');
INSERT INTO classics(author, title, type, year)
VALUES('William Shakespeare','Romeo and Juliet','Play','1594');
```

9. Змінити тип даних стовпця year.

```mysql
ALTER TABLE classics MODIFY year SMALLINT
```

10. Додати до таблиці стовпець pages.

```mysql
ALTER TABLE classics ADD pages SMALLINT UNSIGNED
```

11. Перейменувати стовпець type на category.

```mysql
ALTER TABLE classics CHANGE type category VARCHAR(16)
```

12. Вилучити стовпець pages.

```mysql
ALTER TABLE classics DROP pages
```

13. Додати індекси до таблиці classics.

```mysql
ALTER TABLE classics ADD INDEX(author(20))
ALTER TABLE classics ADD INDEX(title(20))
ALTER TABLE classics ADD INDEX(category(4))
ALTER TABLE classics ADD INDEX(year)
```

14. Додати до таблиці стовпець isbn та заповнити його даними.

```mysql
ALTER TABLE classics ADD isbn CHAR(13)
UPDATE classics SET isbn='98978797979797' WHERE year='1876'
UPDATE classics SET isbn='98978756974797' WHERE year='1846'
UPDATE classics SET isbn='98973537979797' WHERE year='1852'
UPDATE classics SET isbn='98971234979797' WHERE year='1834'
UPDATE classics SET isbn='98978543279797' WHERE year='1817'
```

15. Зробити isbn ключовим полем (додати первинний ключ) та переконатись у правильності результатів.

```mysql
ALTER TABLE classics ADD PRIMARY KEY(isbn)
DESCRIBE classics
```

16. Створити таблицю customers (покупці).

```mysql
CREATE TABLE customers (name VARCHAR(128), isbn VARCHAR(13), PRIMARY KEY (isbn)) ENGINE MyISAM
INSERT INTO customers(name,isbn) VALUES('Joe Bloggs','9780099533474');
INSERT INTO customers(name,isbn) VALUES('Mary Smith','9780582506206');
INSERT INTO customers(name,isbn) VALUES('Jack Wilson','9780517123201');
```

17. Виконати резервне копіювання бази даних у файл publications.sql, використовуючи утиліту mysqldump.exe.

```
✓
```

18. Сформувати наступні запити до таблиці classics.

    1. Вивести всі записи на екран, відсортувавши їх по полю title за спаданням.

    ```mysql
    SELECT * from bmw order by title ASC
    ```

    2. Порахувати кількість рядків.

    ```mysql
    SELECT COUNT(*) FROM bmw
    ```

    3. Вивести всіх авторів, виключаючи повторення.

    ```mysql
    SELECT DISTINCT author from bmw
    ```

    4. Вивести інформацію про трьох авторів та назви їх творів, починаючи з третього запису

    ```mysql
    SELECT * FROM bmw ORDER BY author LIMIT 3 OFFSET 3;
    ```

    5. Змінити автора Mark Twain на Mark Twain (Samuel Langhorne Clemens);

    ```mysql
    UPDATE bmw SET author='Mark Twain (Samuel Langhorne Clemens)' WHERE author='Mark Twain'
    ```

19. Визначити які книги були придбані покупцями.

```mysql
SELECT * FROM customers INNER JOIN bmw ON customers.isbn=bmw.isbn
```

**Висновок:** Я навчився використовувати інструментарій PHP для роботи з MySQL.