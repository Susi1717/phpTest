<?php

class Settings
{
    private $projects;

    public function __construct()
    {
        $this->projects = $this->loadProjectConfig();
        $this->subscribe();
    }

    public function getProjects()
    {
        return $this->projects;
    }

    private function loadProjectConfig() {
      $config = json_decode('{
        "projects": [
          {
            "name": "projectA",
            "templateAbsolutePath": "websiteA/styles.cds",
            "stylesheetAbsolutePath": "websiteA/styles.css"
          },
          {
            "name": "projectB",
            "templateAbsolutePath": "websiteB/styles.cds",
            "stylesheetAbsolutePath": "websiteB/styles.css"
          }
        ]
      }'); // TODO: JSON auslagern in seperates file und laden via http://php.net/manual/en/function.file-get-contents.php

      $projectEntities = [];
      foreach($config->projects as $project) {
        $projectEntities[$project->name] = new ProjectEntity($project->name, $project->templateAbsolutePath, $project->stylesheetAbsolutePath);
      }

      return $projectEntities;
    }

    private function subscribe() {
      // TODO: Only subscribe projects, which not subscribed
      // TODO: Subscribe
    }

    public function unsubscribe($projectName) {
      // TODO: Unsubscribe $projectName
      echo $projectName;
    }
}
