<?php

class KeyValueMapper
{
	public function updateStylesheet(ProjectEntity $project, array $keyValueEntities) {

		//$template = file_get_contents ()
		 $template = file_get_contents('../styles.cds', FILE_USE_INCLUDE_PATH);
        // TODO: Template File laden (z.B. http://php.net/manual/en/function.file-get-contents.php) => template file path in: $project->getTemplatePath();

		// Testausgabe
		echo $project->getTemplatePath();
		echo $template;

		foreach ($keyValueEntities as $keyValue) {
			// TODO: Suche im geladenen Template file nach Platzhalter in Form [project:key],
			// wobei project in $project->getName() steht und key in $keyValue->getKey()
			// z.B. [projectA:backgroundColor]
			// wenn gefunden, den Platzhalter mit dem Wert in $keyValue->getValue() ersetzen
			// (Regexen: http://php.net/manual/en/function.preg-match.php)
			// Regex find and replace: http://php.net/manual/de/function.preg-replace.php
			//Regex: \[(?i)Project.\:.*\]. (Check at http://www.phpliveregex.com/)
			$template;
			$keyValue->getKey();
			$keyValue->getValue();
			$pattern = '\[(?i)Project.\:.*\]';
			$pos = stripos($template, $pattern);

			if ($pos === false) {
    	echo "Platzhalter '$project:key' wurde nicht im Template gefunden";
			} else {
			echo "Platzhalter '$project:key' wurde im Template gefunden";
			echo preg_replace($pattern, $keyValue, $template);
			}




			$project->getName();
			$keyValue->getKey();
			$pattern = 'project:key';
			if (preg_match("/php/i", "PHP is the web scripting language of choice.")) {
    echo "A match was found.";
		} else {
    echo "A match was not found.";
}

			// Testausgabe
			echo $keyValue->getKey();
			echo $keyValue->getValue();
		}

		// TODO: Ersetze Stylesheet File, template file path in: $project->getStylesheetPath();
		// (http://php.net/manual/de/function.file-put-contents.php)
		file_put_contents($project->getStylesheetPath(), $template, LOCK_EX);

		// Testausgabe
		echo $project->getStylesheetPath();
	}
}
