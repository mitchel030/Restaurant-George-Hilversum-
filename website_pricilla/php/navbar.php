<?php
$active = (isset($_GET["content"])) ? $_GET["content"] : "";
?>
<nav class="navbar navbar-expand-md navbar-light bg-info">
  <a class="navbar-brand" href="http://websitepricilla/">George Marina</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <?php
        if (isset($_SESSION["email"])) {
          switch ($_SESSION["userrole"]) {
            case 'docent':
              echo '<li class="nav-item '; echo (in_array($active, ["d-home", ""])) ? "active" : ""; echo '">
                      <a class="nav-link" href="./index.php?content=d-home">home <span class="sr-only">(current)</span></a>
                    </li>';
            break;
            case 'eigenaar':
              echo '<li class="nav-item '; echo (in_array($active, ["e-home", ""])) ? "active" : ""; echo '">
                      <a class="nav-link" href="./index.php?content=e-home">home <span class="sr-only">(current)</span></a>
                    </li>';
            break;
            case 'student':
              echo '<li class="nav-item '; echo (in_array($active, ["s-home", ""])) ? "active" : ""; echo '">
                      <a class="nav-link" href="./index.php?content=s-home">home <span class="sr-only">(current)</span></a>
                    </li>';
            break;
            case 'begeleider':
              echo '<li class="nav-item '; echo (in_array($active, ["b-home", ""])) ? "active" : ""; echo '">
                      <a class="nav-link" href="./index.php?content=b-home">home <span class="sr-only">(current)</span></a>
                    </li>';
            break;
            case 'klant':
              echo '<li class="nav-item '; echo (in_array($active, ["k-home", ""])) ? "active" : ""; echo '">
                      <a class="nav-link" href="./index.php?content=k-home">home <span class="sr-only">(current)</span></a>
                    </li>';
            break;
            default:
              echo '<li class="nav-item '; echo (in_array($active, ["home", ""])) ? "active" : ""; echo '">
                      <a class="nav-link" href="./index.php?content=home">home <span class="sr-only">(current)</span></a>
                    </li>';
            break;

          }
        } else {
          echo '<li class="nav-item '; echo (in_array($active, ["home", ""])) ? "active" : ""; echo '">
                  <a class="nav-link" href="http://websitepricilla/">home <span class="sr-only"></span></a>
                </li>';
        }
      ?> 
      <!--<li class="nav-item <?php echo ($active == "link1") ? "active" : "" ?>">
        <a class="nav-link" href="./index.php?content=link1">link-1</a>
      </li>
      <li class="nav-item <?php echo ($active == "link2") ? "active" : "" ?>">
        <a class="nav-link" href="./index.php?content=link2">link-2</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle <?php echo (in_array($active, ["link3", "link4", "link5"])) ? "active" : "" ?>" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Meer links
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item </?php echo ($active == "link3") ? "active" : "" ?>" href="./index.php?content=link3">link-3</a>
          <a class="dropdown-item </?php echo ($active == "link4") ? "active" : "" ?>" href="./index.php?content=link4">link-4</a>
          <a class="dropdown-item </?php echo ($active == "link5") ? "active" : "" ?>" href="./index.php?content=link5">link-5</a>
        </div>
      </li> --->
    </ul>
    <ul class="navbar-nav ml-auto">
      <?php 
        if (isset($_SESSION["email"])) {
          switch($_SESSION["userrole"]) {
            case 'docent':
              echo '<li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle '; echo (in_array($active, ["d-users", "link6", "link7"])) ? "active" : ""; echo '" href="#" id="navbarDropdownMenuLinkRight" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        docent workbench
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLinkRight">
                        <a class="dropdown-item '; echo ($active == "link6") ? "active" : ""; echo '" href="./index.php?content=link6">link-6</a>
                        <a class="dropdown-item '; echo ($active == "link7") ? "active" : ""; echo '" href="./index.php?content=link7">Link-7</a>
                        <a class="dropdown-item '; echo ($active == "oop") ? "active" : ""; echo '" href="./index.php?content=oop">OOP</a>
                      </div>
                    </li>';
            break;
            case 'eigenaar':
              echo '<li class="nav-item '; echo ($active == "e-home") ? "active" : ""; echo '">
                      <a class="nav-link" href="./index.php?content=e-home">Eigenaar homepage</a>
                    </li>';

            break;
            case 'moderator':
              // Maak hier de hyperlinks voor de gebruikersrol moderator
              
            break;
            case 'customer':
              // Maak hier de hyperlinks voor de gebruikersrol customer

            break;
            default:
            break;
          }
          echo '<li class="nav-item '; echo ($active == "logout") ? "active" : ""; echo '">
                  <a class="nav-link" href="./index.php?content=logout">uitloggen</a>
                </li>';
        } else {
          echo '<li class="nav-item '; echo ($active == "register")? "active" : ""; echo '">
                  <a class="nav-link" href="./index.php?content=register">registreer</a>
                </li>
                <li class="nav-item '; echo ($active == "login") ? "active" : ""; echo '">
                  <a class="nav-link" href="./index.php?content=login">inloggen</a>
                </li>';
        }
      ?>    
    </ul>
  </div>
</nav>