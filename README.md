# UTSaber

[Web](http://damp-hollows-15379.herokuapp.com/)

Official Repository of UTSaber.

### What is UtSaber?

UtSaber is a web application that allows you to retrieve information from Inegi API.

UtSaber is focused on information of Puebla, Mexico.

#### Authors:

- Ricardo Rito Anguiano  [Github](https://github.com/captainrun)
- José María García Ramirez [Github](https://github.com/chemagr25)
- Oscar Uriel Cuello Juarez [Github](https://github.com/MbyteUriel)
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
Execute `database/migration.sql` in your configured db
- Soon it will be updated in a seeder
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
