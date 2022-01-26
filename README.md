# Tubes web

1. Cloning github

```jsx
git clone https://github.com/WebCS52021/ci4-ticket-bioskop.git
```

1. masuk ke directory

```jsx
cd ci4-ticket-bioskop
```

1. buka vscode di direktori

```jsx
code .
```

1. masuk ke brach terupdate(dev)

```jsx
git checkout dev
```

1. install package node(tailwindcss)

```jsx
npm i
```

1. pastikan punya composer dan php >7.4
2. install package php(ci4)

```jsx
composer install
```

1. build file tailwindcss
    
    ```jsx
    npm run makecss
    ```
    
2. buat database di lokal(jika belum buat sebelumnya)/ buat diphpmyadmin (bebas)
    1. masuk ke database
    
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
    
3. cek .env file dan ubah variable berikut sesuai no.7

```jsx
database.default.hostname = localhost
database.default.database = ticket_bioskop (sesuai nama database kalian)
database.default.username = root (username database)
database.default.password = passwordmysql (isi password ysql/kosongin jika tidak ada)
database.default.DBDriver = MySQLi
```

1. Migrate database untuk membuat kerangka/table dimysql

```jsx
php spark migrate
```

1. isi database dengan data dummy dari seed( keperluan testing)

```jsx
php spark db:seed Movies
```

1. liat hasilnya

```jsx
php spark serve
```