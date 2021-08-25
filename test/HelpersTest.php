<?php

use PHPUnit\Framework\TestCase;
#Teste de Cadastro
class HelpersTest extends TestCase
{
    public function testSite()
    {
        $this->assertEquals('https://eoque.dhyell.com.br/dhyell/Eoq-Site', site());
    }
}
