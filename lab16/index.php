<?php 
  header('Content-Type: text/html; charset=utf-8');
	echo "<a href='/'>Main</a> <br>";  
	echo "Лабораторна робота №16 <br>";
	echo "Привет, <strong>Тимофей</strong> <br>";

  1. SELECT * from bmw order by title ASC
  2. SELECT COUNT(*) FROM bmw
  3. SELECT DISTINCT author from bmw
  4. SELECT * FROM bmw ORDER BY author LIMIT 3 OFFSET 3;
  5. UPDATE bmw SET author='Mark Twain (Samuel Langhorne Clemens)' WHERE author='Mark Twain'

SELECT * FROM customers 
INNER JOIN bmw
ON customers.isbn=bmw.isbn;
