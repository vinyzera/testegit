<?php
// Este é um comentário de uma linha

/*
  Este é um comentário
  de múltiplas linhas.
*/

// Exibindo uma mensagem na tela
echo "Olá, Mundo!";

// Definindo variáveis
$nome = "Vinicius";
$idade = 21;

// Exibindo variáveis
echo "<br>Nome: $nome";
echo "<br>Idade: $idade";

// Condicional simples
if ($idade >= 18) {
    echo "<br>$nome é maior de idade.";
} else {
    echo "<br>$nome é menor de idade.";
}

// Função simples
function saudacao($nome) {
    return "Olá, $nome!";
}

echo "<br>" . saudacao($nome);
?>
