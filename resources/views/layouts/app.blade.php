<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <title>@yield("title")</title>

  <link rel="stylesheet" href="css/nav.css">
  <link rel="stylesheet" href="css/register.css">
  <link rel="stylesheet" href="css/footer.css">
  <link rel="stylesheet" href="css/selectdropdown.css">


  <link rel="shortcut icon" type="education" href="img/logo_192509100957_ 1.png" />
  <link rel="shortcut icon" type="education" href="img/logo.png" />

</head>

<body>
  <button class="back-button" onclick="goBack()" aria-label="Back">
    <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round"
      stroke-linejoin="round">
      <path d="M15 18l-6-6 6-6"></path>
    </svg>
  </button>

<div class="container-alert">
@session("success")
<div class="alert" id="success-alert">
    {{ session("succes") }}
</div>
@endsession

@session("error")
<div class="alert alert-error" id="error-alert">
    {{ session("error") }}
</div>
@endsession


    @yield("content");
  </div>
</body>

<script src="js/ratio.js"></script>
<script src="js/backbutton.js"></script>
<script src="js/dropdown.js"></script>
<script src="js/fileupload.js"></script>
</html>