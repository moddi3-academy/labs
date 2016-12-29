### Лабораторна робота 6
**Тема:** Створення макетів сайту

**Мета:** Навчитися створювати фіксовані та гумові макети сайту у дві колонки.

**Світлофор**

```html
<div class="layout">
  <div class="header">
    <h1></h1>
  </div>
  <div class="sidebar">
    <ul>
      <li><a href="../../index.html">Link 1</a></li>
      <li><a href="#">Link 2</a></li>
      <li><a href="#">Link 3</a></li>
      <li><a href="#">Link 4</a></li>
      <li><a href="#">Link 5</a></li>
      <li><a href="#">Link 6</a></li>
    </ul>
  </div>
  <div class="content">
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
  </div>
  <div class="footer">&copy;Copiryght</div>
</div>
```
```css
body {
  background: #f0f0f0;
}
.header {
  height: 100px;
  padding: 20px;
  border-bottom: 2px solid #e0ecb8;
}
.layout {
  width: 800px;
  margin: 0 auto;
  background: #ffffff ;
}
.content {
  float: left;
  width: 600px;
  padding: 10px;
  background: #e0ecb8;
}
.sidebar {
  float: right ;
  width: 200px;
  padding: 10px;
}
.sidebar ul {
  margin-left: 0px;
  padding-left: 0px;
  list-style: none;
}
.sidebar ul a {
  font-weight: bold;
  display: block;
  text-decoration: none;
  color: #e0ecb8;
  border-bottom: 1px dashed #e0ecb8;
}
.sidebar ul a:hover {
  color: #000000;
}
.footer {
  clear: both;
  padding: 10px;
  border-top: 2px solid #e0ecb8;
}
.header,
.content,
.sidebar,
.footer {
  box-sizing: border-box;
  border-radius: 20px 20px 20px 20px;
}

```

**Fluid**

```html
<div class="layout">
  <div class="header">
    <h1></h1>
  </div>
  <div class="sidebar">
    <ul>
      <li><a href="../../index.html">Link 1</a></li>
      <li><a href="#">Link 2</a></li>
      <li><a href="#">Link 3</a></li>
      <li><a href="#">Link 4</a></li>
      <li><a href="#">Link 5</a></li>
      <li><a href="#">Link 6</a></li>
    </ul>
  </div>
  <div class="content">
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
  </div>
  <div class="footer">&copy;Copiryght</div>
</div>
```
```css
body {
  background: #f0f0f0;
}
.header {
  height: 100px;
  padding: 20px;
  border-bottom: 2px solid #e0ecb8;
}
.layout {
  margin: 0 auto;
  background: #ffffff ;
}
.content {
  float: left;
  width: 600px;
  padding: 10px;
  background: #e0ecb8;
}
.sidebar {
  float: right ;
  width: 200px;
  padding: 10px;
}
.sidebar ul {
  margin-left: 0px;
  padding-left: 0px;
  list-style: none;
}
.sidebar ul a {
  font-weight: bold;
  display: block;
  text-decoration: none;
  color: #e0ecb8;
  border-bottom: 1px dashed #e0ecb8;
}
.sidebar ul a:hover {
  color: #000000;
}
.footer {
  clear: both;
  padding: 10px;
  border-top: 2px solid #e0ecb8;
}
.header,
.content,
.sidebar,
.footer {
  -webkit-box-sizing: border-box;
     -moz-box-sizing: border-box;
          box-sizing: border-box;
  border-radius: 20px 20px 20px 20px;
}
@media screen {
  .layout{
    min-width: 769px;
    max-width: 1200px;
  }
  .sidebar{
    width: 20%;
  }
}
```

**RWD**

```html
<div class="layout">
  <div class="header">
    <span class="size1">PC</span>
    <span class="size2">Tablet</span>
    <span class="size3">Smartphone</span>
  </div>
  <div class="sidebar">
    <ul>
      <li><a href="../../index.html">Link 1</a></li>
      <li><a href="#">Link 2</a></li>
      <li><a href="#">Link 3</a></li>
      <li><a href="#">Link 4</a></li>
      <li><a href="#">Link 5</a></li>
      <li><a href="#">Link 6</a></li>
    </ul>
    <select onchange="location = this.value;">
        <option value="#">Menu</option>
        <option value="../../index.html">Link 1</option>
        <option value="#">Link 2</option>
        <option value="#">Link 3</option>
        <option value="#">Link 4</option>
        <option value="#">Link 5</option>
        <option value="#">Link 6</option>
    </select>
  </div>
  <div class="content">
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
</div>
<div class="footer">&copy;Copiryght</div>
</div>
```
```css
* {
  box-sizing: border-box;
}
body {
  font-family: "Open Sans";

  background: #f0f0f0;
}
.header {
  height: 100px;
  padding: 20px;

  text-align: center;

  border-bottom: 2px solid #e0ecb8;
}
.header span {
  font-size: 64px;
}
.layout {
  width: 800px;
  margin: 0 auto;

  background: #ffffff ;
}
.content {
  float: left;

  width: 600px;
  padding: 10px;

  background: #e0ecb8;
}
.sidebar {
  position: relative;

  float: right ;

  width: 200px;
  padding: 10px;
}
select {
  display: none;
}
.sidebar ul {
  margin-left: 0px;
  padding-left: 0px;

  list-style: none;
}
.sidebar ul a {
  font-weight: bold;

  display: block;

  text-decoration: none;

  color: #e0ecb8;
  border-bottom: 1px dashed #e0ecb8;
}
.sidebar ul a:hover {
  color: #000000;
}
.footer {
  clear: both;

  padding: 10px;

  border-top: 2px solid #e0ecb8;
}
.header,
.content,
.sidebar,
.footer {
  border-radius: 20px 20px 20px 20px;
}
/*-------------------
rwd
-------------------*/
.size2, .size3{
  display: none;
}
/*Tablet*/
@media screen and (max-width: 1024px){
  .layout{
    width: 90%;
  }
  .content{
    width: 80%;
  }
  .sidebar{
    width: 20%;
  }
  .size1, .size3{
  display: none;
}
  .size2{
    display: block;
  }
}
/*Smart*/
@media screen and (max-width: 640px){
  .content{
    width: 100%;
  }
  .sidebar{
    width: 100%;
  }
  .sidebar ul{
    display: none;
  }
  select{
    display:block;
    width: 100%;
  }
  .size1, .size2{
  display: none;
  }
  .size3{
    font-size: 40px;
    display: block;
  }
  .header span{
    font-size: 50px;
  }
}
```

**Висновок:** Я навчився створювати фіксовані та гумові макети сайту у дві колонки.
