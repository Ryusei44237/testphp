<!--データベース作成-->
create database testphp;
<!--テーブル作成-->
create table testphp(
  id int(10) primary key,
  bookname varchar(20),
  auther varchar(20)
);
<!--要素を追加-->
insert into testphp values(1,"田中裕也の冒険","湯瀬文也");
insert into testphp values(2,"田中裕也の謝罪","三上凌");
insert into testphp values(3,"田中裕也の失踪","中村竜誠");
