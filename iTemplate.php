<?php

interface iTemplate
{
    public function setVariable($name, $var);

    public function getHtml($template);
}

class Template implements iTemplate
{
    public $vars = array();

    public function setVariable($name, $var)
    {
        $this->vars[$name] = $var;
    }
    public function getHtml($template)
    {
        foreach ($this->vars as $name => $value){
            $template = str_replace('{'.$name.'}',$value ,$template);
        }
        return $template;

    }
}
$luu = new Template();
echo $luu->getHtml('aks');
echo $luu->setVariable('hoang','1,2,3');

