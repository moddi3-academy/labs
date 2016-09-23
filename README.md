### Лабораторна робота №2
**Тема:** Створення html-документів з таблицями

**Мета:** Навчитися створювати таблиці заданого розміру; навчитися об'єднувати ячейки по горизонталі і вертикалі; навчитися створювати фіксовані таблиці.

**Таблиця 1**
<table><thead><tr><th>Album</th><th>Year</th></tr></thead><tbody><tr><td>Transmissions</td><td>1993</td></tr><tr><td>Luciana</td><td>1994</td></tr><tr><td>Beyond the Infinite</td><td>1995</td></tr><tr><td>Bible of Dreams</td><td>1997</td></tr><tr><td>Shango</td><td>2000</td></tr><tr><td>Labyrinth</td><td>2004</td></tr><tr><td>The Golden Sun of The Great East</td><td>2013</td></tr></tbody></table>

```html
<table>
		<caption>Table 1</caption>
		<thead>
			<tr>
				<th>Album</th>
				<th>Year</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>Transmissions</td>
				<td>1993</td>
			</tr>
			<tr>
				<td>Luciana</td>
				<td>1994</td>
			</tr>
		</tbody>
	</table>
</div>
```


**Таблиця 2**
<table><thead><tr><th>1:00</th><th>2:00</th><th>3:00</th></tr></thead><tbody><tr><td colspan="3">lorem2</td></tr><tr><td>lorem2</td><td>lorem2</td><td>lorem2</td></tr><tr><td>lorem2<td colspan="2">lorem2</td></td></tr></tbody></table>
```html
<table>
		<caption>Table 1</caption>
		<thead>
			<tr>
				<th>Album</th>
				<th>Year</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>Transmissions</td>
				<td>1993</td>
			</tr>
			<tr>
				<td>Luciana</td>
				<td>1994</td>
			</tr>
		</tbody>
	</table>
</div>
```


**Таблиця 3**
<table><tbody><tr><td>lorem2<td rowspan="3">lorem2</td><td>lorem2</td></td></tr><tr><td>lorem2<td rowspan="2">lorem2</td></td></tr><tr><td>lorem2</td></tr></tbody></table>
```html
	<table>
		<caption>Table 3</caption>
		<tbody>
			<tr>
				<td>lorem2
					<td rowspan="3">lorem2</td>
					<td>lorem2</td>
				</td>
			</tr>
			<tr>
				<td>lorem2
					<td rowspan="2">lorem2</td>
				</td>
			</tr>
			<tr>
				<td>lorem2</td>
			</tr>
		</tbody>
	</table>
</div>
```

**Таблиця 4**
<table><caption>TABLE 4</caption><tbody><tr><td rowspan="2"></td><th colspan="2">Заголовок для 2 подзаголовков</th><th rowspan="2">Заголовок 3</th></tr><tr><th>Заголовок 1</th><th>Заголовок 2</th></tr><tr><th scope="row">Пункт А</th><td>Данные А1</td><td>Данные А2</td><td>Данные А3</td></tr><tr><th scope="row">Пункт Б</th><td>Данные Б1</td><td>Данные Б2</td><td>Данные Б3</td></tr><tr><th scope="row">Пункт В</th><td>Данные В1</td><td>Данные В2</td><td>Данные В3</td></tr></tbody></table>
```html
	<table>
		<caption>TABLE 4</caption>
		<tbody>
			<tr>
				<td rowspan="2"></td>
				<th colspan="2">Заголовок для 2 подзаголовков</th>
				<th rowspan="2">Заголовок 3</th>
			</tr>
			<tr>
				<th>Заголовок 1</th>
				<th>Заголовок 2</th>
			</tr>
			<tr>
				<th scope="row">Пункт А</th>
				<td>Данные А1</td>
				<td>Данные А2</td>
				<td>Данные А3</td>
			</tr>
			<tr>
				<th scope="row">Пункт Б</th>
				<td>Данные Б1</td>
				<td>Данные Б2</td>
				<td>Данные Б3</td>
			</tr>
			<tr>
				<th scope="row">Пункт В</th>
				<td>Данные В1</td>
				<td>Данные В2</td>
				<td>Данные В3</td>
			</tr>
		</tbody>
	</table>
```
**Висновок:** Я навчився створювати таблиці заданого розміру; навчився об'єднувати ячейки по горизонталі і вертикалі; навчився створювати фіксовані таблиці.