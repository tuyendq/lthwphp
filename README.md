# Learn PHP the Hard Way

```bash
php -v  # Check PHP version
php -a  # Interactive shell

```


## PHP8.1 on Ubuntu 22.04

```bash
apt install php8.1
php -v
apt install php8.1-cli php8.1-common php8.1-xml php8.1-zip php8.1-mbstring

apt install php libapache2-mod-php php-bcmath php-json php-pdo php-common php-tokenizer php-mysql

sudo apt install php8.1-mbstring php8.1-xml php8.1-bcmath php8.1-curl

sudo apt install php8.1-fpm php8.1-mysql
```

```bash
sudo apt install nginx
nginx -v

```

```bash
sudo apt install mariadb-server
sudo mysql_secure_installation
sudo mysqladmin version

```

Play with nginx on Ubuntu 22.04 LTS
```bash
myproject="lavarel10"
sudo mkdir -p /var/www/$myproject
sudo chown -R $USER:$USER /var/www/$myproject

sudo nano /etc/nginx/sites-available/$myproject

sudo ln -s /etc/nginx/sites-available/$myproject /etc/nginx/sites-enabled/

sudo unlink /etc/nginx/sites-enabled/default

sudo nginx -t
sudo systemctl reload nginx
```
