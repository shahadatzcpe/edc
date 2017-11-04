# Easy development command(EDC)

### How to install
Run this composer command from your terminal
```sh
  composer require shahadat.zcpe/edc
```

# Laravel 5.4 or below:
Add this service provide in config\app.php
```sh
\Shahadat\Edc\ServiceProvider::class
```

# Laravel 5.5:
 Nothing to do.
 
 
# How to update configurations:
First run these command then to copy configuration file to your config directory.
Then edit edc.php file form your config folder.
```sh
php artisan vendor:publish --tag=edc
```

 
#### Others requirments
I have used jquery cdn and bulma css so internet connection reqired from browser.
Bulma css framework : https://bulma.io
Jquery : https://jquery.com/


### How to use?
Visit your website trailing /edc
```sh
http://example.com/edc
```


#### Security
 - This will not work when you have production enviroenment
 - Security key will be used later(Currently working)

