<?php

namespace DerAlex\Phprainfuck;

use DerAlex\Phprainfuck\Interpreter\Lexer;
use DerAlex\Phprainfuck\Interpreter\Parser;

class Phprainfuck
{
    private $lexer;
    private $parser;
    private $interpreter;


    public function __construct()
    {
        $this->lexer = new Lexer();
        $this->parser = new Parser();
        $this->interpreter = new Interpreter();
    }


    public function evaluate($code)
    {
        $code = $this->lexer->lex($code);
        $this->parser->parse($code);
        return $this->interpreter->interprete($code);
    }
}
