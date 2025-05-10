<?php include("them-header.php"); ?>
<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
  <meta charset="UTF-8">
  <title>مطالب زنبورداری</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <style>
    body {
      background-color: #fff9e6;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    .bee-card {
      border: 2px solid #1A1A1A;
      border-radius: 15px;
      background: linear-gradient(to bottom, #fff9e6 0%, #fff0b3 100%);
      box-shadow: 0 5px 15px rgba(0,0,0,0.1);
      overflow: hidden;
      transition: 0.3s ease;
    }
    .bee-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 10px 25px rgba(0,0,0,0.2);
    }
    .bee-card img {
      width: 100%;
      height: 200px;
      object-fit: cover;
      border-bottom: 2px dashed #1A1A1A;
    }
    .bee-card-body {
      padding: 1rem;
    }
    .bee-card-title {
      font-weight: bold;
      color: #1A1A1A;
    }
    .bee-card-text {
      color: #333;
      margin-top: 0.5rem;
    }
    .bee-btn {
      margin-top: 1rem;
      background-color: #1A1A1A;
      color: #FFD700;
      border: none;
      padding: 0.5rem 1rem;
      border-radius: 8px;
      text-decoration: none;
      display: inline-block;
      transition: all 0.3s ease;
    }
    .bee-btn:hover {
      background-color: #FFD700;
      color: #1A1A1A;
    }
  </style>
</head>
<body>
  <div class="container py-5">
    <h2 class="text-center mb-4">مطالب زنبورداری</h2>
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
      <?php
      $link = mysqli_connect("localhost", "beesio_root", "m123456", "beesio_root");
      $result = mysqli_query($link, "SELECT * FROM news ORDER BY id DESC");
      while($row = mysqli_fetch_array($result)) {
          $id = $row['id'];
          $title = htmlspecialchars($row['title']);
          $text = htmlspecialchars($row['text']);
          $shortText = mb_substr($text, 0, 100, 'UTF-8');
          $img = htmlspecialchars($row['imageurl']);
      ?>
      <div class="col">
        <div class="bee-card h-100">
          <img src="<?php echo $img; ?>" alt="<?php echo $title; ?>">
          <div class="bee-card-body">
            <h5 class="bee-card-title"><?php echo $title; ?></h5>
            <p class="bee-card-text"><?php echo $shortText; ?>...</p>
            <a href="news-view.php?id=<?php echo $id; ?>" class="bee-btn">مشاهده بیشتر</a>
          </div>
        </div>
      </div>
      <?php } mysqli_close($link); ?>
    </div>
  </div>
<?php include("them-footer.html"); ?>
</body>
</html>
