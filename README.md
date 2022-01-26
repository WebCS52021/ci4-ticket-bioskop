# Tubes web

1. Cloning github

```jsx
git clone https://github.com/WebCS52021/ci4-ticket-bioskop.git
```

2. masuk ke directory

```jsx
cd ci4-ticket-bioskop
```

3. buka vscode di direktori

```jsx
code .
```
4. masuk ke brach terupdate(dev)

```jsx
git checkout dev
```

5. install package node(tailwindcss)

```jsx
npm i
```

6. pastikan punya composer dan php >7.4
7. install package php(ci4)

```jsx
composer install
```

8. build file tailwindcss
    
    ```jsx
    npm run makecss
    ```
    
9. buat database di lokal(jika belum buat sebelumnya)/ buat diphpmyadmin (bebas)
    a. masuk ke database
    
    ```jsx
    mysql -u root -p
    ```
    
    b. buat database baru
    
    ```jsx
    create database ticket_bioskop;
    ```
    
    c. cek apakah databasenya udah ada
    
    ```jsx
    show databases;
    ```
    
10. cek .env file dan ubah variable berikut sesuai no.9

```jsx
database.default.hostname = localhost
database.default.database = ticket_bioskop (sesuai nama database kalian)
database.default.username = root (username database)
database.default.password = passwordmysql (isi password ysql/kosongin jika tidak ada)
database.default.DBDriver = MySQLi
```

11. Migrate database untuk membuat kerangka/table dimysql

```jsx
php spark migrate
```

12. isi database dengan data dummy dari seed( keperluan testing)

```jsx
php spark db:seed Movies
```

13. liat hasilnya

```jsx
php spark serve
```
