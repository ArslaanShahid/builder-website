<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // This block will be executed when the form is submitted
    $url = 'https://server.ssdbootserver.com:2083/cpsess6589105418/execute/VersionControl/update';

    $data = array(
        'repository_root' => $_POST['repository_root'],
        'branch' => $_POST['branch'],
    );

    $options = array(
        CURLOPT_URL            => $url,
        CURLOPT_POST           => true,
        CURLOPT_POSTFIELDS     => http_build_query($data),
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_HTTPHEADER     => array(
            'Content-Type: application/x-www-form-urlencoded',
        ),
    );

    $curl = curl_init();
    curl_setopt_array($curl, $options);

    $response = curl_exec($curl);

    if ($response === false) {
        echo 'Error: ' . curl_error($curl);
    } else {
        echo 'Success: ' . $response;
    }

    curl_close($curl);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Update Repository Form</title>
</head>
<body>

  <form method="post" action="">
    <label for="repository_root">Repository Root:</label>
    <input type="text" id="repository_root" name="repository_root" value="/home/buildnew/public_html" required>

    <label for="branch">Branch:</label>
    <input type="text" id="branch" name="branch" value="master" required>

    <button type="submit">Update Repository</button>
  </form>

</body>
</html>
