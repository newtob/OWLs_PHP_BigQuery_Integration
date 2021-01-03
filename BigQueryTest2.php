<body>
some text to start with <br /><br />

<?php
/**
 * Copyright none
 *
 * prototype written to outline Onlinewillstorage GCP Bigquery integration
 * Ben Newton
 * https://github.com/newtob
 */

# [START bigquery_simple_app_all]
require_once 'C:\Windows\System32\vendor\autoload.php';

putenv("GOOGLE_APPLICATION_CREDENTIALS=C:\Users\\newt0b\Dropbox\OnlineWillStorage\GCP_keys\onlinewillstorage-244794d01ae6-BigQuery.json");
$Google0Auth_Creds = getenv('GOOGLE_APPLICATION_CREDENTIALS');
echo "\r\ngoogle cred address get 2 is = " . $Google0Auth_Creds;
echo "<br>";

# [START bigquery_simple_app_deps]
use Google\Cloud\BigQuery\BigQueryClient;

# [END bigquery_simple_app_deps]

// set the project ID
$projectId = 'onlinewillstorage';

# [START bigquery_simple_app_client]
$bigQuery = new BigQueryClient([
    'projectId' => $projectId,
]);

# Dataset query used to test the connectivity up. The test output should = OWLs_Test_Datasetv1
#$datasets = $bigQuery->datasets();
#foreach ($datasets as $dataset) {
#    print($dataset->id() . PHP_EOL);
#}





?>
</body>