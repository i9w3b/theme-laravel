<p align="center" class="text-center" style="text-align:center;"><a href="https://github.com/i9w3b" target="_blank"><img src="https://cdn.jsdelivr.net/gh/i9w3b/cdn/img/logo-200px.png" width="200"></a></p>
<p align="center" class="text-center" style="text-align:center;">
<a href="https://github.com/i9w3b/theme-laravel/blob/master/LICENSE.md"><img src="https://img.shields.io/github/license/i9w3b/theme-laravel" alt="License"></a>
<a href="https://github.com/i9w3b/theme-laravel"><img src="https://img.shields.io/github/languages/count/i9w3b/theme-laravel" alt="GitHub Language Count"></a>
<a href="https://github.com/i9w3b/theme-laravel"><img src="https://img.shields.io/github/repo-size/i9w3b/theme-laravel" alt="GitHub Repo Size"></a>
<a href="https://github.com/i9w3b/theme-laravel/releases"><img src="https://img.shields.io/github/v/release/i9w3b/theme-laravel" alt="GitHub Release"></a>
<a href="https://github.com/i9w3b/theme-laravel"><img src="https://img.shields.io/github/downloads/i9w3b/theme-laravel/total" alt="Total Downloads"></a>
</p>

# Tema Padrão Laravel

Esse repositório é uma réplica exata das visualizações do Laravel 7.x geradas quando você executa os comandos:

```bash
$ composer require laravel/ui
$ php artisan ui bootstrap --auth
$ npm install && npm run dev
```

A unica modificação foram o link app.js e app.css que foram removidos e substituídos pela cdn Bootstrap 4. Ideal para iniciar o desenvolvimento de qualquer projeto, digitando somente um comando.

## Recursos
* Tema Original Laravel 7.x CDN Bootstrap 4

## Estrutura do tema

```txt
layouts/
├── app.blade.php
└── shared/
    └── css.blade.php
home.blade.php
welcome.blade.php
```

## Instalação

Precisamos primeiro instalar o pacote i9w3b/theme-install. Instalando através do composer, execute o seguinte comando:

```bash
composer require i9w3b/theme-install --dev
```

## Como Usar

Agora que vem a parte legal :). Você pode criar seus próprios temas, adicionar no GitHub e instalar quando quiser.

O comando abaixo, fornece essa estrutura básica dos arquivos para o seu Laravel.

```bash
php artisan theme:install https://github.com/i9w3b/theme-laravel.git
```

>- ## Observação de uso:
>- `theme:install` é o comando artisan que faz todo o trabalho
>- `https://github.com/i9w3b/theme-laravel.git` fica a sua escolha

Você pode alterar a url como no exemplo:

```bash
php artisan theme:install https://github.com/sua_conta/repositorio_do_tema.git
```

## Configuração

Execute:

```bash
php artisan vendor:publish --provider="I9W3b\ThemeInstall\ThemeInstallServiceProvider"
```

Agora você pode personalizar algumas variáveis no arquivo publicado `config/themeinstall.php`

## Dúvidas/Sugestões

Se encontrar erros ou tiver sugestões de melhorias, acesse: [issues](https://github.com/i9w3b/theme-laravel/issues/new)

## Licença

[MIT](https://github.com/i9w3b/theme-laravel/blob/master/LICENSE.md) © [i9W3b](https://github.com/i9w3b) | Consulte [LICENSE.md](https://github.com/i9w3b/theme-laravel/blob/master/LICENSE.md) para obter mais informações.