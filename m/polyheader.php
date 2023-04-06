<nav class="navbar navbar-expand-md bg-body-tertiary sticky-top" style="">
<div class="container-fluid">
<div class="d-flex">
<button class="btn btn bi bi-list fs-4 text-reset" type="button" data-bs-toggle="offcanvas" data-bs-target="#menu">
</button>
<a class="navbar-brand ms-2 my-auto" href="./m"><img src="mlogo.png" class="rounded-5 me-2" alt="YuoTueb" width="112"></a>
</div>
<div class="navbar-collapse" id="navbarText">
    <form class="d-flex ms-auto my-1 my-sm-1 my-lg-0 w-auto" role="search" action="/search">
     <input class="form-control rounded-end-0" type="search" placeholder="Search..." aria-label="Search" name="q">
     <button class="btn btn-danger bi bi-search rounded-start-0" type="submit"></button>
    </form>
  </div>
</div>
</nav>

<!-- <div class="offcanvas offcanvas-start" tabindex="-1" id="menu" style="width: 15rem;">
<div class="d-flex bg-body-tertiary">
  <div class="my-2 mx-2">
  <button type="button" class="btn bi bi-list fs-4 text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button><a class="navbar-brand ms-2 my-auto" href="/"><img width=112 src="mlogo.png" class="rounded-5 me-2" alt="Icon"></a>
  </div>
</div>
<div class="offcanvas-body">

 <a class="btn btn-danger w-100 d-flex" href="alogin.php"><i class="bi bi-door-open fs-5 ms-auto"></i> <span class="my-auto text-center ms-1 me-auto">Login</span></a>
</div>
</div> -->
<div class="offcanvas offcanvas-start" tabindex="-1" id="menu" style="width: 15rem;">
<div class="d-flex bg-body-tertiary">
  <div class="my-2 mx-2">
  <button type="button" class="btn bi bi-list fs-4 text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button><a class="navbar-brand ms-2 my-auto" href="/"><img width=112 src="mlogo.png" class="rounded-5 me-2" alt="Icon"></a>
  </div>
</div>
<div class="offcanvas-body">
<div class="d-flex mb-2 min-w-100">
  <img class="rounded-circle me-2" width=48 height=48 src="../pfp/1" alt="kylarz">
  <span class="h5 my-auto text-body">Hello, <span class="h5">kylarz</span></span>
 </div>
 <div class="d-flex">
  <a class="btn btn-success bi bi-upload me-1 fs-5" href="/upload"></a> <a class="btn btn-primary bi bi-gear me-1 fs-5" href="/settings"></a> <a class="btn btn-danger bi bi-door-open ms-auto fs-5" href="/logout"></a>
 </div>
 <hr>
<ul class="nav nav-pill flex-column">
      <li class="nav-item">
        <a href="/channel/kylarz" class="nav-link py-1 px-2 text-body" aria-current="page">
         <i class="bi bi-person me-2 fs-5 p-0"></i>
          Your channel
        </a>
      </li>
      <li>
        <a href="/history" class="nav-link py-1 px-2 text-body">
          <i class="bi bi-clock me-2 fs-5 p-0"></i>
          History
        </a>
      </li>
 
</ul>


</div>
</div>