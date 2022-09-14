## Project Setup:

### 1. Clone the repo to htdocs or www folder

```
git clone https://github.com/Akash-Debnath/School-Management.git
```

### 2. go to the directory 
```
cd git
```

### 3. Install Composer
```
composer install
```

### 3.1 Composer update
```
composer update
```

### 4. Create .env File
```
copy .env.example as .env [If .env is unavailable]
```

### 5. Generate Key
```
php artisan key:generate
```

### 6. Enable Permission (for Linux User)

```
sudo chmod -R 777 storage
```

## 7. Database Section

```
Create db rajtrims_newupdate
```

```
import rajtrims_newupdate.sql stored in git project directory 
```

# Great ! Done! 

## 8. From Browser
```html
http://localhost/git/public
```

### 10. Admin credentials for login
```html
http://localhost/git/public/admin
```
```
body: 
    username : 
    or,Email :anamit08@gmail.com
    password: 
```