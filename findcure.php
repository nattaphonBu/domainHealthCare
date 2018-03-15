<?php
   $content = 'This is about us page content';
   include('header2.php');
?>
<html>

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
<link rel="stylesheet" href="https://v40.pingendo.com/assets/4.0.0/default/theme.css" type="text/css"> </head>
<body>

<div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="btn-group">
            <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown"> อาการบาดเจ็บ </button>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="cure/cure1.php">กล้ามเนื้อชอกช้ำ (Contusion)</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">ข้อเท้า</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
<?php
 include('footer.php');
?>