# etec-php-exercises
PHP exercises from my course at ETEC and some of my own play-around with PHP

Translations: [Português (BR)](README.pt-br.md)

---

## Projects

| Project                                    | Description                                                         |                               Demo                               |
| ------------------------------------------ | ------------------------------------------------------------------- | :--------------------------------------------------------------: |
| [aula-1-datetime](api/aula-1-datetime)     | Fist exercise ever, shows the current datetime and salute           |  [🔗](https://etec-php-exercises.vercel.app/api/aula-1-datetime)  |
| [tailwind-datetime](api/tailwind-datetime) | A version of the first one, but with a cool card using Tailwind CSS | [🔗](https://etec-php-exercises.vercel.app/api/tailwind-datetime) |
| [loja-virtual](api/loja-virtual)           | A simple and not completed web store with Bootstrap                 |   [🔗](https://etec-php-exercises.vercel.app/api/loja-virtual)    |

> Click on the 🔗 to see the demo

## Running

How to run the projects locally.

### Using PHP Development Server

For my personal use, I think that the `php` CLI is the best way to start a local server.

1. Clone this repository
2. In the repository root directory, run:

```sh
php -S localhost:<some_port_number>
# example: php -S localhost:4002
```

3. Go to `http://localhost:<the_port_number>/api/<exercise_name>`

### Using XAMPP

In the classes at ETEC, we learn using [XAMPP](https://www.apachefriends.org) to run the local server.

Since I'm not using databases yet, it is not so necessary, but you can use it:

1. Clone this repository under `<xampp_dir>/htdocs/`
2. Start the Apache Server using XAMPP
3. Go to `http://localhost/etec-php-exercises/api/<exercise_name>`
