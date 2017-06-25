<?php

class ProjectEntity
{
    private $name;
    private $templatePath;
    private $stylesheetPath;

    public function __construct($name, $templatePath, $stylesheetPath)
    {
        $this->name = $name;
        $this->templatePath = $templatePath;
        $this->stylesheetPath = $stylesheetPath;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getTemplatePath()
    {
        return $this->templatePath;
    }

    public function getStylesheetPath()
    {
        return $this->stylesheetPath;
    }
}
