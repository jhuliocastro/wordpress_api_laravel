# 🇺🇸 English

## `Wordpress` Class from the `jhuliocastro\wordpress` library

This class provides a straightforward interface to access menu information and their locations from a WordPress site through the WordPress REST API.

### Prerequisites:

1. Ensure you have the `guzzlehttp/guzzle` package installed in your project:

```php
composer require guzzlehttp/guzzle
```

2**Important:** For this class to function correctly, the [WP-REST-API V2 Menus](https://br.wordpress.org/plugins/wp-rest-api-v2-menus/) plugin must be installed and activated on your WordPress site.

### Usage:

1. Initialize the class with your WordPress base URL.
```php
use jhuliocastro\wordpress\Wordpress;

$wp = new Wordpress('https://yourdomain.com');
```

2. Use the available methods:
```php
//Fetch a list of all registered menus on your WordPress site.
$menus = $wp->getMenus();

//Fetch data for a specific menu based on its slug.
$menuDetails = $wp->getMenusForSlug($slug);

//Fetch a list of all registered menu locations in your theme.
$menuLocations = $wp->getMenusLocations();

//Fetch data for a specific menu location based on its slug.
$menuLocationDetails = $wp->getMenusLocationForSlug($slug);
```

### Error Handling:
All methods above will return the requested data or an error message in the format: "error api: [error message]" if there's an issue with the API or the request.

## License

This project is licensed under the MIT License - see the [LICENSE.md](LICENSE.md) file for details.


#### Developed by [Jhúlio Castro](https://www.instagram.com/jhuliocastro/) - All rights reserved.

---

# 🇧🇷 Português

## Classe `Wordpress` da biblioteca `jhuliocastro\wordpress`

Esta classe oferece uma interface direta para acessar informações dos menus e suas localizações em um site WordPress através da API REST do WordPress.

### Pré-requisitos:

1. Certifique-se de ter o pacote `guzzlehttp/guzzle` instalado no seu projeto:

```php
composer require guzzlehttp/guzzle
```

2. **Importante:** Para que esta classe funcione corretamente, é essencial que o plugin [WP-REST-API V2 Menus](https://br.wordpress.org/plugins/wp-rest-api-v2-menus/) esteja instalado e ativado no seu site WordPress.
### Como Usar:

1. Inicialize a classe com a URL base do seu site WordPress
```php
use jhuliocastro\wordpress\Wordpress;

$wp = new Wordpress('https://seudominio.com');
```

2. Utilize os métodos disponíveis:
```php
//Obter uma lista de todos os menus registrados no seu site WordPress.
$menus = $wp->getMenus();

//Obter detalhes de um menu específico pelo slug.
$menuDetails = $wp->getMenusForSlug($slug);

//Obter uma lista de todas as localizações de menus registradas em seu tema.
$menuLocations = $wp->getMenusLocations();

//Obter detalhes de uma localização específica de menu pelo slug.
$menuLocationDetails = $wp->getMenusLocationForSlug($slug);
```

### Tratamento de Erros:
Todos os métodos listados retornarão os dados solicitados ou uma mensagem de erro no formato: "error api: [mensagem de erro]" se houver um problema com a API ou a solicitação.

### Licença

Este projeto está licenciado sob a Licença MIT - veja o arquivo [LICENSE.md](LICENSE.md) para mais detalhes.


#### Desenvolvido por Jhúlio Castro - Todos os direitos reservados.
