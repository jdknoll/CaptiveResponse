<?php
	//dbh = Database Handle
	//sth = Statement Handle
	$dataSourceName = 'mysql:host=localhost;dbname=CaptiveResponse';
	$username = 'CaptiveResponse';
	$password = 'hsq8d9xu15BgX9jkSsD5';
	//$options = '';


	$dbh = new PDO($dataSourceName, $username, $password/*, $options*/);

	$campaignLines = $dbh->exec("
		CREATE TABLE campaigns(
			id INTEGER(10), 
			title VARCHAR(), 
			html VARCHAR(), 
			active BOOLEAN(), 
			grace_period INTEGER(10), 
			start_date DATE, 
			stop_date DATE, 
			pass_percent INTEGER(10), 
			question_order BOOLEAN(),
			PRIMARY KEY (id)
		)");

	$questionsLines = $dbh->exec("
		CREATE TABLE questions(
			id INTEGER(10), 
			campaign_id INTEGER(10),
			INDEX par_ind (campaign_id), 
			FOREIGN KEY (campaign_id) REFERENCES campaigns(id) ON DELETE CASCADE, 
			order INTEGER(10),
			html VARCHAR(), 
			answer_order BOOLEAN(), 
			multiple_answers BOOLEAN(),
			PRIMARY KEY (id)
		)");

	$answersLines = $dbh->exec("
		CREATE TABLE answers(
			id INTEGER(10), 
			question_id INTEGER(10),
			INDEX par_ind (question_id), 
			FOREIGN KEY (question_id) REFERENCES questions(id) ON DELETE CASCADE, 
			order INTEGER(10), 
			html VARCHAR(), 
			is_correct BOOLEAN(), 
			explanation VARCHAR(),
			PRIMARY KEY (id)
		)");

	$rolesLines = $dbh->exec("
		CREATE TABLE roles(
			id INTEGER(10), 
			local_name VARCHAR(), 
			cas_name VARCHAR(),
			PRIMARY KEY (id)
		)");

	$campaign_rolesLines = $dbh->exec("
		CREATE TABLE campaign_roles(
			id INTEGER(10), 
			campaign_id INTEGER(10), 
			INDEX par_ind (campaign_id), 
			FOREIGN KEY (campaign_id) REFERENCES campaigns(id) ON DELETE CASCADE, 
			role_id INTEGER(10), 
			INDEX par_ind (role_id), 
			FOREIGN KEY (role_id) REFERENCES roles(id) ON DELETE CASCADE,
			PRIMARY KEY (id)
		)");

	$attemptsLines = $dbh->exec("
		CREATE TABLE attempts(
			id INTEGER(10), 
			unique_iden VARCHAR(), 
			campaign_id INTEGER(10),
			INDEX par_ind (campaign_id),
			FOREIGN KEY (campaign_id) REFERENCES campaigns(id) ON DELETE CASCADE,
			start_time DATE, 
			score INTEGER(10), 
			num_attempt INTEGER(10),
			PRIMARY KEY (id)
		)");