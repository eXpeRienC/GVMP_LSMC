<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">LSMC</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="?site=member">Mitglieder</a>
      </li>
      <?php if($user["rang"] > 9){ ?>
		<li class="nav-item dropdown">
			<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			Verwaltung
      </button>
      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        <a class="dropdown-item" href="?site=verwaltung">Übersicht</a>
        <a class="dropdown-item" href="#">Another action</a>
		<div class="dropdown-divider"></div>
        <a class="dropdown-item" href="?site=member_add">Mitarbeiter hinzufügen</a>
      </div>
    </li>
      <?php } ?>
      <?php if($user["rang"] > 9){ ?>
		<li class="nav-item dropdown">
			<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			Ausbildung
      </button>
      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        <a class="dropdown-item" href="?site=fst_add">FST's</a>
      </div>
    </li>
      <?php } ?>
    </ul>
    <li class="nav-item">
        <a class="nav-link" href="?logout=true">Logout</a>
      </li>
  </div>
</nav>
<div class="container">
<?php
if($error_txt != ""){
?>
    <div class="alert <?php echo $error_style; ?>" role="alert">
    <?php echo $error_txt; ?>
</div>
<?php
}
?>