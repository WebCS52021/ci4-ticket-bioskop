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

1. liat hasilnya

```jsx
php spark serve
```

## Database Modelling

1. pindah ke branch setup-model

```jsx
git checkout feat/setup-model
```

1. buat database di lokal
    1. masuk ke database
    
    ```jsx
    mysql -u root -p
    ```
    
    b. buat database baru
    
    ```jsx
    create database coba_ci4;
    ```
    
    c. cek apakah databasenya udah ada
    
    ```jsx
    show databases;
    ```
    
2. Migrate database

```jsx
php spark migrate
```

1. isi database

```jsx
php spark db:seed
```

1. liat hasilnya

```jsx
php spark serve
```