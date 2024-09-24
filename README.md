# Sistema de Gerenciamento de usuários
<img alt="Tamanho do repositório" src="https://img.shields.io/github/repo-size/elizalap/teste-pratico-fiocruz">
<img alt="último commit" src="https://img.shields.io/github/last-commit/elizalap/teste-pratico-fiocruz">

## Descrição do projeto
Este projeto faz parte de um desafio de código onde crio uma aplicação para gerenciar usuários utilizando o framework Laravel. O projeto permite criar, listar, atualizar e deletar usuários.

## 🛠 Regras de Negócio

Aqui estão as regras implementadas:
#### Tela  Inicial (Listagem)

1.	Ao clicar no botão “Cadastrar”:-
a.	Redirecionar para a tela de cadastro e seguir os requisitos da sessão (Tela de cadastro) deste exercício.

2.	Ao clicar no botão “Edit”:
a.	Redirecionar para a tela de edição e seguir os requisitos da sessão (Tela de edição) deste exercício.

3.	Ao clicar no botão “Delete”:
    a.	Exibir uma confirmação via modal “Deseja realmente excluir o registro?”
        i.	Se sim: excluir da base de dados e redirecionar para a tela inicial (listagem), atualizando a listagem para não exibir o item excluído.
        ii.	Se não, fechar o modal e manter na tela atual.

#### Tela de Cadastro

1.	Todos os campos são obrigatórios.
2.	Tamanho do campo “Nome” 40 caracteres.
3.	Tamanho do campo “Email” 40 caracteres.
4.	Tamanho do campo “Senha” 8 caracteres.
a.	A senha deverá ser armazenada/recuperada utilizando alguma criptografia.
5.	O valor padrão do perfil é “Administrador”
6.	Ao clicar no botão “Cancelar” voltar para a tela inicial (Listagem)”
7.	Ao clicar no botão cadastrar, fazer as validações dos campos e:
a.	Se estiver algum sem preenchimento, não prosseguir e indicar o campo sem preenchimento.
b.	Se estiver tudo OK, salvar os dados no banco de dados e redirecionar para a tela inicial (Listagem)
c.	Na listagem deverá aparecer o registro recém cadastrado e todos os outros que existirem.
 
#### Tela de Edição

1.	O formulário deverá estar preenchido de acordo com o usuário selecionado na listagem para edição.
2.	Todos os campos são obrigatórios.
3.	Tamanho do campo “Nome” 40 caracteres.
4.	Tamanho do campo “Email” 40 caracteres.
5.	Tamanho do campo “Senha” 8 caracteres.
a.	A senha deverá ser armazenada/recuperada utilizando alguma criptografia.
6.	O valor padrão do perfil é “Administrador”
7.	Ao clicar no botão “Cancelar” voltar para a tela inicial (Listagem)”
8.	Ao clicar no botão “Alterar”, fazer as validações dos campos e:
a.	Se estiver algum sem preenchimento, não prosseguir e indicar o campo sem preenchimento.
b.	Se estiver tudo OK, salvar os dados no banco de dados e redirecionar para a tela inicial (Listagem)
c.	Na listagem deverá aparecer o registro alterado e todos os outros que existirem.

#### Telas extras (perfil e edição de senha)
1. Além das telas solicitadas, o projeto contém a tela de detalhes do usuário cadastrado. Nessa tela há um botão para alteração de senha daquele usuário.

2. Na tela de modificação da senha, os campos seguem as mesmas regras do cadastro.
a. A senha precisa ter no mínimo 8 caracteres. b. O usuário precisa confirmar o uso da sua senha em campo de confirmação.

## 💻 Como rodar o projeto

Siga esse passo a passo para colocar a aplicação para rodar na sua máquina:

#### 1. Pré-requisitos

Certifique-se de ter instalado: PHP, Composer.

#### 2. Clonar o repositório

```bash
git clone https://github.com/elizalap/teste-pratico-fiocruz.git
cd cadastro-usuarios
```

#### 3. Instalar dependências
```bash
composer update
```
#### 4. Criar tabela no banco de dados e configurar detalhes no arquivo .env

#### 5. Rodar migrations
```bash
php artisan migrate
```

#### 6. Inicializar aplicação
```bash
php artisan serve
```