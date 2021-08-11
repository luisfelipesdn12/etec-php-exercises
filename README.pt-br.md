# etec-php-exercises
Exercícios de PHP do meu curso na ETEC e algumas das minhas próprias experimentação com PHP

Traduções: [English](README.md)

---

## Projetos

| Projeto                                    | Descrição                                                               |                               Demo                               |
| ------------------------------------------ | ----------------------------------------------------------------------- | :--------------------------------------------------------------: |
| [aula-1-datetime](api/aula-1-datetime)     | O primeiro exercício de todos, mostra o datetime atual e uma saudação.  |  [🔗](https://etec-php-exercises.vercel.app/api/aula-1-datetime)  |
| [tailwind-datetime](api/tailwind-datetime) | Uma versão to primeiro, mas com um card bonitinho usando o Tailwind CSS | [🔗](https://etec-php-exercises.vercel.app/api/tailwind-datetime) |
| [loja-virtual](api/loja-virtual)           | Uma loja online simples e não completa com Bootstrap                    |   [🔗](https://etec-php-exercises.vercel.app/api/loja-virtual)    |


> Clique nos 🔗 para ver a demonstração

## Rodando

Como rodar os projetos localmente.

### Usando o Servidor de Desenvolvimento do PHP

Para o meu uso pessoal, eu acho que a CLI `php` é a melhor maneira de inicial um servidor local.

1. Clone este repositório
2. No diretório raiz do repositório, rode:

```sh
php -S localhost:<numero_de_alguma_porta>
# exemplo: php -S localhost:4002
```

3. Vá para `http://localhost:<o_numero_da_porta>/api/<nome_do_exercicio>`

### Usando o XAMPP

Nas aulas da ETEC, nós aprendemos usando o [XAMPP](https://www.apachefriends.org) para rodar o servidor local.

Como eu não estou usando banco de dados ainda, não é tão necessário, mas você pode usá-lo:

- Clone este repositório em `<diretorio_do_xampp>/htdocs/`
- Inicie o servidor Apache usando o XAMPP
- Vá para `http://localhost/etec-php-exercises/api/<nome_do_exercicio>`
