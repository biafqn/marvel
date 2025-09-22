# CRUD de Heróis Marvel

Este projeto é um sistema CRUD simples feito em PHP e MySQL, inspirado no universo Marvel! Ele permite cadastrar, visualizar, editar e excluir heróis, armazenando informações como nome, nível de força, tipo do poder, data de aquisição, local e se aceitou ou não os termos.

## Funcionalidades

- **Cadastrar Herói:** Preencha o formulário com os dados do herói e envie para o banco.
- **Listar Heróis:** Veja todos os heróis cadastrados em uma tabela.
- **Editar Herói:** Altere as informações de um herói existente.
- **Excluir Herói:** Remova heróis do banco de dados.

## Estrutura do Projeto

```
/
├── conexao.php
├── create.php
├── read.php
├── update.php
├── delete.php
├── index.html
├── herois.sql
├── style/
│   └── style.css
└── assets/
    ├── img/
    └── icons/
```

## Como usar

1. **Clone o repositório**  
   ```bash
   git clone https://github.com/seuusuario/seurepo.git
   cd seurepo
   ```

2. **Configure o banco de dados**
   - Crie um banco de dados no MySQL (por exemplo, `marvel`).
   - Importe o arquivo `herois.sql`.

3. **Ajuste a conexão**
   - No arquivo `conexao.php`, altere o nome do banco, usuário e senha conforme sua configuração.

4. **Execute o projeto**
   - Coloque os arquivos em um servidor local (XAMPP, WAMP, etc).
   - Acesse `index.html` para cadastrar heróis.
   - Acesse `read.php` para visualizar todos os heróis.

## Exemplo de Estrutura da Tabela

```sql
CREATE TABLE herois (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100),
    nivel INT,
    tipo VARCHAR(50),
    data_poder DATE,
    local VARCHAR(100),
    aceitou_termos BOOLEAN
);
```

## Licença

Este projeto é apenas para fins educativos e não possui licença comercial.

---

Desenvolvido por Joran Silva e comunidade Marvel.
