# PHP-I-O-trabalhando-com-arquivos-e-streams

# 📂 Curso: PHP - Entrada e Saída, Arquivos e Streams

Este repositório contém os exemplos e exercícios práticos realizados durante o curso **"PHP - Entrada e Saída, Arquivos e Streams"** da Alura.

---

## 📌 Conteúdo estudado

### 📁 `LendoEscrevendoArquivos/`
Scripts responsáveis por leitura e escrita de arquivos em PHP.

- `leitor-cursos-linha-a-linha.php` — Leitura linha a linha com `fgets` e `feof`.
- `leitor-cursos-ler-o-arquivo-todo.php` — Leitura completa do arquivo.
- `escritor-cursos.php` — Escrita de arquivos com `fwrite`.
- `escritor-cursos-facilitando.php` — Escrita simplificada com `file_put_contents`.
- `cursos-php.txt` / `lista-cursos.txt` — Arquivos de entrada e teste.

---

### 📁 `ContextoEmStreams/`
Testes de requisições HTTP e arquivos ZIP com contexto personalizado.

- `httpbin.php` — Envio de cabeçalhos e métodos personalizados com `stream_context_create`.
- `leitor-zip-senha.php` — Leitura de arquivos `.zip` protegidos por senha.

---

### 📁 `WrappersEFiltros/`
Utilização de filtros e wrappers de stream em PHP.

- `filtros.php` — Exemplo de filtros aplicados em leitura de arquivos.
- `MeuFiltro.php` — Filtro customizado implementado na stream.
- `leitor-zip.php` — Leitura de arquivos `.zip` simples.
- `arquivos.zip` — Arquivo compactado de teste.
- `lista-cursos.txt` — Texto auxiliar usado nas streams.

---

### 📁 `TrabalhandoNoConsole/`
Exemplos de leitura e escrita diretamente no console (CLI).

- `console-para-arquivos.php` — Lê dados do terminal e escreve em arquivo.
- `escrevendo-na-tela.php` — Exibe saída diretamente no terminal.
- `cursos-php.txt` — Arquivo de apoio.

---

### 📁 `FuncoesEspecificas/`
Funções úteis para tratamento de arquivos e diretórios.

- `arquivos-para-csv.php` — Escrita de dados no formato CSV com `fputcsv`.
- `ls.php` — Listagem de arquivos em diretórios.
- `spl.php` — Utilização de `SplFileObject` e `DirectoryIterator`.
- `cursos.csv` — Resultado da geração de CSV.

---

### 📁 `Encoding/`
Correção de encoding para compatibilidade com Excel e outros sistemas.

- `utf-8.php` — Conversão entre `utf8_encode()` e `utf8_decode()`.

---

## 🎯 Objetivo

O objetivo deste repositório é reunir exemplos práticos que demonstram como manipular arquivos, fluxos de dados, filtros personalizados e contextos em PHP. Os conhecimentos aqui documentados são fundamentais para situações reais como:

- Leitura de arquivos de configuração ou listas.
- Escrita de logs e exportações de dados.
- Manipulação de arquivos em diferentes formatos (CSV, ZIP).
- Requisições HTTP via `fopen` e `file_get_contents`.

---

## 📚 Conclusão

Este curso foi essencial para entender e dominar a manipulação de arquivos e streams com PHP. Os exemplos foram desenvolvidos de forma progressiva, partindo do básico até conceitos mais avançados, como filtros e wrappers.

Caso queira aprofundar, consulte a [documentação oficial de streams em PHP](https://www.php.net/manual/pt_BR/book.stream.php).

---

🖥️ Desenvolvido como parte dos meus estudos na [Alura](https://www.alura.com.br/)

