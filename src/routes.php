<?php
// Routes
$app->post('/v1/project/{project}', function ($request, $response, $args) {

	$project = (String)$args['project'];

	$data = $request->getParsedBody();
    $keyValue_data = [];
    $keyValue_data['success'] = $data['success'];
    $keyValue_data['keyValues'] = $data['keyValues'];

		$keyValueEntities = [];
		foreach ($keyValue_data['keyValues'] as $keyValue) {
			array_push($keyValueEntities, new KeyValueEntity($keyValue['key'], $keyValue['value']));
		}

		$userSettings = $this->get('settings')['userSettings'];

		if(!array_key_exists($project, $userSettings->getProjects())) {
			// If project will not or not longer handled by preprocessor,
			// inform Cloud App to unsubscribe
			$userSettings->unsubscribe($project);
			return $response;
		}

    $mapper = new KeyValueMapper();
    $mapper->updateStylesheet($userSettings->getProjects()[$project], $keyValueEntities);
    //$response = $response->withRedirect("/senvis/api/patient/" . $vitalSign_data['patientId'] . "/vitalsign");
    return $response;
});

$app->get('/v1/project/{project}/unsubscribe', function ($request, $response) {
	// TODO: Project not longer available in CloudApp, remove it from subscribed endpoints
	echo "Unsubscribe.";
});
