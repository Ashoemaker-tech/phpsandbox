<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <title>Search User</title>
</head>
<script>
  function showSuggestion(str) {
    if (str.length == 0) { // Error reading JS str.length
      document.getElementById('output').innerHTML = '';
    } else {
      // AJAX REQ
      let xmlhttp = new XMLHttpRequest();
      xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          document.getElementById('output').innerHTML = this.responseText
        }
        xmlhttp.open("GET", "suggest.php?q=" + str, true);
        xmlhttp.send();
      }

    }
  };
</script>

<body>
  <div class="container">
    <h1 class="text-primary">Search Users</h1>
    <form action="">
      Search User: <input type="text" class="form-control" onkeyup="showSuggestion(this.value)">
    </form>
    <p>Suggestions: <span id="output" style="font-weight: bold;"></span></p>
  </div>

</body>

</html>