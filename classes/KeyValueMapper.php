<?php

class KeyValueMapper
{
	public function updateStylesheet(ProjectEntity $project, array $keyValueEntities) {
		// TODO: Template File laden (z.B. http://php.net/manual/en/function.file-get-contents.php) => template file path in: $project->getTemplatePath();

		// Testausgabe
		echo $project->getTemplatePath();

		foreach ($keyValueEntities as $keyValue) {
			// TODO: Suche im geladenen Template file nach Platzhalter in Form [project:key],
			// wobei project in $project->getName() steht und key in $keyValue->getKey()
			// z.B. [projectA:backgroundColor]
			// wenn gefunden, den Platzhalter mit dem Wert in $keyValue->getValue() ersetzen
			// (Regexen: http://php.net/manual/en/function.preg-match.php)

			// Testausgabe
			echo $keyValue->getKey();
			echo $keyValue->getValue();
		}

		// TODO: Ersetze Stylesheet File, template file path in: $project->getStylesheetPath();
		// (http://php.net/manual/de/function.file-put-contents.php)

		// Testausgabe
		echo $project->getStylesheetPath();
	}
}
