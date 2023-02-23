<?php

namespace Alura\Solid\Model;

class AluraMais extends Video implements Pontuavel
{
    private $categoria;

    public function __construct(string $nome, string $categoria)
    {
        parent::__construct($nome);
        $this->categoria = $categoria;
    }

    public function recuperarUrl(): string
    {
        return 'http://videos.alura.com.br/' .str_replace(' ', '-', strtolower($this->categoria));
    }

    public function recuperPontuacao (): int {
     
        $this->minutosDeDuracao() * 2;
    }


}