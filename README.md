##  About Quran 

The site of the memorization of the Quran and the sciences of Tajweed
The site allows registration and also allows the site to introduce the house and publishing and follow-up with everything new to the house .

to install
`composer install` or `composer update`
`cp .env.example .env`
`php artisan key:generate`
change in file .env `DB_DATABASE` and `DB_USERNAME`and `php artisan migrate` and 
`php artisan db:seed`and go to `App\Providers\AppServiceProvider.php` and then cancel comments on any view and use `APP_URL/login` email:`admin@app.com` password:`12345678`
