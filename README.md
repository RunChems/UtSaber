# UTSaber

[Web](http://damp-hollows-15379.herokuapp.com/)

Official Repository of UTSaber.

### What is UtSaber?

UtSaber is a web application that allows you to retrieve information from Inegi API.

UtSaber is focused on information of Puebla, Mexico.

#### Authors:

- Ricardo Rito Anguiano  [Github]()
- José María García Ramirez [Github]()
- Oscar Uriel Cuello Juarez [Github]()
- Brandon Goíz Bravo
- Wendy Alonso Perez

### For developers

#### Run local

`composer install`

`npm install && npm run dev`

### Config `.env`

**Google Credentials**

- `GOOGLE_API_KEY`
- `GOOGLE_API_SECRET`
- `GOOGLE_REDIRECT_URI`

**Inegi Credentials**

- `INEGI_KEY`
- `INEGI_KEY_V1`

**DB Credentials**

- `DB_DATABASE`
- `DB_USERNAME`
- `DB_PASSWORD`

#### Run Migrations

`php artisan migrate --seed`

#### Run serve

`php artisan chems:anthem && php artisan serve `

#### LICENSE

[MIT](https://opensource.org/licenses/MIT)

#### Technologies

- [Laravel](https://laravel.com/)
- [Php](https://secure.php.net/)
- [PostgresSQL](https://www.postgresql.com/)
- [Heroku](https://www.heroku.com/)
- [Google API](https://developers.google.com/api-client-library/php/start/get_started)
- [Inegi API](https://www.inegi.org.mx/servicios/api_indicadores.html)



