<?php
?><!doctype html>
<html lang="vi">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Dãy số 1-100</title>
  <style>
    body{
      font-family: system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial;
      padding: 24px;
      background: #f7f7f8;
      color: #222;
    }

    .title{
      margin: 0 0 12px 0;
      font-size: 20px;
      font-weight: 700;
    }

    .numbers{
      display: flex;
      flex-wrap: wrap;
      gap: 8px;
      line-height: 1;
    }

    .even {
      font-weight: 700;     
      color: red;           
    }

    .odd {
      font-weight: 700;     
      font-style: italic;   
      color: green;         
    }

    @media (max-width:420px){
      .numbers span{ min-width: 22px; padding: 4px 6px; }
    }
  </style>
</head>
<body>
  <div class="container">
    <h1 class="title">Dãy số từ 1 đến 100</h1>

    <div class="numbers">
      <?php
        for ($i = 1; $i <= 100; $i++) {
          $day = ($i % 2 === 0) ? 'even' : 'odd';

          echo "<span class=\"$day\">{$i}</span>";
        }
      ?>
    </div>
  </div>
</body>
</html>
