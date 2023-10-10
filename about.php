<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
  <title>send message</title>
</head>
<body>
<div class="container">
        <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
          <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
            <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
            <span class="fs-4">Gossip girl</span>
          </a>
          <ul class="nav nav-pills">
            <li class="nav-item"><a href="index.php" class="nav-link active" aria-current="page">Home</a></li>
          </ul>
        </header>
      </div>

  <div class="container">
  <main class="form-signin w-100 m-auto" class="container">
  <form action="check.php" method="post">
    <div class= "container mt-5">

<form action= "check.php" method= "post">
<input type="email" name = "email" placeholder= "Введите email"
class = "form-control"><br>
<textarea name="message" class="form-control" placeholder="Введите ваше сообщение"></textarea><br>   
<button type="submit" name="send" class="tbn btn-success">Отправить</button> 
</form>
</div>
    <p class="mt-5 mb-3 text-body-secondary">© 2017–2023</p>
  </form>
  </main>
  </div>
  <?php require "blocks/footer.php"?>
</body>
</html>