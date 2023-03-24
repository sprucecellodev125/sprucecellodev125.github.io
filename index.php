<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/caf7f050a6.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">

    <title>Hello, world!</title>
  </head>
  <body id="page-top">
    <nav class="navbar navbar-expand-lg fixed-top bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">My website</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Blog</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="projects/">Projects</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <br>
    <br>
    <br>
    <div class="container text-center">
      <img src="https://avatars.githubusercontent.com/u/91181632" class="pfp" alt="pfp">
      <br>
      <?php
      $url = 'https://api.github.com/users/sprucecellodev125';
      $curl = curl_init($url);
      curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($curl, CURLOPT_HTTPHEADER, array(
          'Accept: application/vnd.github.v3+json',
          'User-Agent: sprucecellodev125',
          'X-GitHub-Api-Version: 2022-11-28'
      ));
      $data = curl_exec($curl);
      
      if ($data === false) {
          echo "Failed to fetch data from $url: " . curl_error($curl);
      } else {
          $json = json_decode($data);
          if ($json === null) {
              echo "Failed to parse JSON data";
          } else {
              echo "<h3>".$json->name."</h3>";
          }
      }
      
      curl_close($curl);
      
      ?>
      <p>Currently learning back-end web development :)</p>
    </div>
    <div class="container">
      <table class="table table-hover">
        <thead>
          <tr>
            <th></th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Name</td>
            <td>Christian Pandapotan Sianturi</td>
          </tr>
          <tr>
            <td>Pronouns</td>
            <td>He/him</td>
          </tr>
        </tbody>
      </table>
      <br>
      <h3>Skills:</h3>
      HTML/CSS
      <div class="progress">
        <div class="progress-bar" role="progressbar" aria-label="HTML/CSS"  style="width: 100%" aria-valuenow="100" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
      </div>
      Bootstrap
      <div class="progress">
        <div class="progress-bar" role="progressbar" aria-label="Bootstrap" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
      </div>
      PHP
      <div class="progress">
        <div class="progress-bar" role="progressbar" aria-label="PHP" style="width: 52%" aria-valuenow="52" aria-valuemin="0" aria-valuemax="100"></div>
      </div>
      Cisco
      <div class="progress">
        <div class="progress-bar" role="progressbar" aria-label="Cisco" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
      </div>
      Python
      <div class="progress">
        <div class="progress-bar" role="progressbar" aria-label="Python" style="width: 45%" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
      </div>
      JavaScript
      <div class="progress">
        <div class="progress-bar" role="progressbar" aria-label="JavaScript" style="width: 38%" aria-valuenow="38" aria-valuemin="0" aria-valuemax="100"></div>
      </div>
      Mikrotik (nah)
      <div class="progress">
        <div class="progress-bar" role="progressbar" aria-label="JavaScript" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
      </div>
      <br>
      <div class="px-2 d-flex gap-5 text-center">
        <a class="github-logo" href="http://github.com/sprucecellodev125"><h1 class="fa-brands fa-github"></h1></a>
        <a class="discord-logo" href="http://discord.com/users/899869470145802260"><h1 class="fa-brands fa-discord"></h1></a>
        <a href="http://youtube.com/@sprucecellodev125" class="youtube-logo"><h1 class="fa-brands fa-youtube"></h1></a>
      </div>
    </div>
    <br>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>