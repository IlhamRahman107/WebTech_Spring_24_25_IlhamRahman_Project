<?php
// session_start(); 

$loggedIn = isset($_SESSION['user']);
$userName = $loggedIn ? $_SESSION['user']['username'] : '';


echo <<<HTML
<header class="header">
  <nav class="nav-bar">
    <div>
      <img src="" alt="" />
      <h4 class="title1">RevoTV <small class="title2">+</small></h4>
    </div>
    <div>
      <input class="search" type="search" placeholder="Search RevoTV" id="search" />
      <button class="btn-nav" onclick="return adv_search()"><a href="#">ASearch</a></button>
      <button class="btn-nav"><a href="../../index.php">Home</a></button>
      <button class="btn-nav"><a href="/web-tech-project/app/views/Layouts/actor_profiles.php">Actor Profile</a></button>
HTML;

if ($loggedIn) {
  echo <<<HTML
      <button class="btn-nav"><a href="">Hello, {$userName}</a></button>
      <button class="btn-nav"><a href="/web-tech-project/app/views/Layouts/watchlist.php">Watchlist</a></button>
      <button class="btn-nav"><a href="/web-tech-project/app/views/Layouts/settings.php">Profile</a></button>
      <button class="btn-nav"><a href="/web-tech-project/app/views/Forms/logout_user.php">Logout</a></button>
HTML;
} else {
  echo <<<HTML
      <button class="btn-nav"><a href="/web-tech-project/app/views/Forms/login_user_form.php">Signin</a></button>
HTML;
}

echo <<<HTML
    </div>
  </nav>

  <div class="container" id="search-results-container"></div>

  <section id="adv-search"></section>
  <section id="adv-search-results" class="container">
    <div id="adv-search-result-container"></div>
  </section>
</header>
HTML;
?>