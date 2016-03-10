# Devfest Sudeste 2015

# Passos para utilização do template

Clone o repositório na sua máquina, abra o terminal `cd path/to/site` e execute o comando:

`$ npm install`

Isso vai instalar as dependências para rodar o **gulp**. A pasta **node_modules** deverá aparecer na raiz do projeto.

# GULP

Os arquivos `css` e `js` do projeto estão sendo compilados pelo gulp. Os arquivos da pasta CSS são concatenados e minificados e é gerado um arquivo `all.min.css` na pasta `dist`. O arquivo fonte para edição de CSS são os `.less`.

O mesmo funciona para os arquivos `js`. Tudo na pasta `js` é concatenado+minificado e é gerado o arquivo `dist/concat.min.js`.


# Atenção
**NENHUMA alteração deve ser realizada nos arquivos de dentro da pasta `dist`. São arquivos compilados pelo gulp e serão sobrescritos quando o comando `gulp` for executado.**

## Como editar os arquivos CSS ou JS

Para alterações `CSS`, rode o comando `gulp` no terminal, ele ficará esperando por alterações nos arquivos `.less` e/ou arquivos da pasta `js`.

Alterações `css` devem ser realizadas somente no arquivo `assets/less/style.less`.

Se desejar adicionar alguma biblioteca CSS, basta colocar o arquivo .css na pasta css e rodar o comando `gulp` no terminal. Isso irá fazer com que os arquivos da pasta sejam compilados - concatenados e minificados e um novo arquivo `all.min.css` será gerado.

##Tamanho das imagens

- Palestrantes 135px x 135px
- Patrocinadores
  - Diamante - altura 150px
  - Ouro - altura 100px
  - Prata - altura 80px
  - Bronze - altura 60px
  - Parceiros - altura 60px
- Organizers - altura 40px