## Classe `Wordpress` da biblioteca `jhuliocastro\wordpress`

Esta classe oferece uma interface direta para acessar informações dos menus e suas localizações em um site WordPress através da API REST do WordPress.

### Pré-requisitos:

1. Certifique-se de ter o pacote `guzzlehttp/guzzle` instalado no seu projeto:

```php
composer require guzzlehttp/guzzle
```

2. **Importante:** Para que esta classe funcione corretamente, é essencial que o plugin [WP-REST-API V2 Menus](https://br.wordpress.org/plugins/wp-rest-api-v2-menus/) esteja instalado e ativado no seu site WordPress.

## Sumário
- [Menu](#Menu)

### Menu
#### Como Usar:
1. Inicialize a classe com a URL base do seu site WordPress

```php
use jhuliocastro\wordpress\Menu;

$wp = new Menu('https://seudominio.com');
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
