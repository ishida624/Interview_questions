# Interview question

## Question 1

```
f(9527) => "9,527", f(3345678) => "3,345,678", f(-1234.45) => "-1,234.45"
```

- 使用 phpunit 做測試

  - 安裝 phpunit

  ```shell=
  composer install
  ```

  - 測試

  ```shell=
  vendor/bin/phpunit tests/MarkCommaTest.php
  ```

## Question 2

```
def increment (int value) {
return value + 1
}
pipe(5, increment) => 6,
pipe(5, increment, increment, increment) => 8
```

- 使用 phpunit 做測試
  - 測試
  ```shell=
  vendor/bin/phpunit tests/PipeFunctionTest.php
  ```

## Question3

如果當資料庫數據很多，拖緩讀取和寫入的速度

1. 如果有讀取率高資料可以快取起來(redis)，減少對資料庫的 IO

2. 常被搜尋的條件可以做索引加快搜尋速度

3. 可以分表分庫
   垂直分庫：把關聯性不高的表分為不同的資料庫
   垂直分表：將較不常用的欄位拆分出一些小表
   水平分庫：根據表內一些資料邏輯關係，分散到不同的資料庫
   水平分表：庫內分表只解決了單張表資料量過大的問題，對於減輕資料庫壓力幫助不大

4. 多台讀取的資料庫主機集群。將讀取以及寫入分開處理，即採用主從讀寫分離的方式。
   將資料庫分為多個，分為一個主資料庫和其他從資料庫，主資料庫數據複製到從資料庫，達到讀寫分離。
