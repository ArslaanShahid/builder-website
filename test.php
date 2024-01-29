<?php
header('Access-Control-Allow-Origin: *');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Update Repository Form</title>
</head>
<body>

  <form id="updateForm">
    <label for="repository_root">Repository Root:</label>
    <input type="text" id="repository_root" name="repository_root" value="/home/buildnew/public_html" required>

    <label for="branch">Branch:</label>
    <input type="text" id="branch" name="branch" value="master" required>

    <button type="button" onclick="updateRepository()">Update Repository</button>
  </form>

  <script>
    function updateRepository() {
      const url = 'https://server.ssdbootserver.com:2083/cpsess6589105418/execute/VersionControl/update';

      const formData = new FormData();
      formData.append('repository_root', document.getElementById('repository_root').value);
      formData.append('branch', document.getElementById('branch').value);

      fetch(url, {
        method: 'POST',
        body: formData,
      })
      .then(response => response.json()) // Adjust parsing based on the expected response type
      .then(data => console.log('Success:', data))
      .catch(error => console.error('Error:', error));
    }
  </script>

</body>
</html>
