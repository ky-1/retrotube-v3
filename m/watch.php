<!DOCTYPE html>
<?php include '../global.php';?>
<head>
    <title>YuoTueb Mobile</title>
    <link rel="icon" type="image/png" href="../favicon.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="apple-touch-icon" sizes="512x512" href="icon.png">
    <style>
.video {
    width: 100%;
    height: 56.25%;
}
</style>
<link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/@vime/core@^5/themes/default.css"
/>
<script
  type="module" rel="preload"
  src="https://cdn.jsdelivr.net/npm/@vime/core@^5/dist/vime/vime.esm.js"
></script>
</head>
<body>
<?php include("polyheader.php"); ?>
<main class="container-fluid mt-3">
    <div class="d-flex flex-row flex-column flex-md-column flex-lg-column flex-xl-row">
      <div class="w-100 mx-auto mx-lg-auto mx-xl-0">
      <vm-player style="--vm-player-theme: #ff0019">
          <vm-video cross-origin="true" poster="/api/thumb?v=HzdDH2_y9BPYccEDlEgYCv4o">
            <source data-src="../content/video/WAr-FEzV0ni.mp4" type="video/mp4" />
          </vm-video>
          <vm-default-ui no-controls>
            <vm-default-controls hide-on-mouse-leave active-duration="2000">
            <vm-pip-control keys="p" />
            </vm-default-controls>
            <vm-default-settings pin="bottomRight">
              <vm-menu-item label="YuoTueb Player (Powered by Vime)"></vm-menu-item>
            </vm-settings>
          </vm-default-ui>
         </vm-player>
        <div class="card shadow-sm my-2">
         <div class="card-body">
         <div class="d-flex flex-row flex-column">
         <div>
         <h2>Introducing YouTube Polymer</h2>
         9 views<i class="bi bi-dot"></i>4 days ago         </div>
         <div class="mt-3">
         <div class="d-flex flex-row flex-column flex-sm-row">
         <a class="text-decoration-none text-reset me-2" href="/channel/ummmmm">
         <div class="d-inline-block d-flex flex-row my-auto">
          <img class="rounded-circle me-2" width=54 height=54 src="../pfp/1" alt="ummmmm">
          <div class="align-self-center"><span class="h6 text-body">kylarz</span>
          <p class="text-muted h6 h5-sm mt-2 subcount" id="subcount">15K subscribers</p></div>
          </div>
         </a>

         <div class="ms-0 ms-sm-auto mt-2 mt-sm-0">
         <div class="btn-group my-auto w-100">
         <a class="btn btn-danger " id="btnsub" onclick="subscribe(32)">Subscribe</a>
          <a class="btn btn-success bi bi-hand-thumbs-up" id="like" onclick="rateVideo('HzdDH2_y9BPYccEDlEgYCv4o', 0)"> 0</a>
          <a class="btn btn-danger bi bi-hand-thumbs-down" id="dislike" onclick="rateVideo('HzdDH2_y9BPYccEDlEgYCv4o', 1)"> 0</a>
          <button type="button" class="btn btn-secondary bi bi-share" data-bs-toggle="modal" data-bs-target="#share"></button>
                  </div>
         </div>
         </div>
         </div>
         </div>
                </div>
       </div>
  <div class="card">
      <button class="btn text-reset py-2 text-start bi bi-chat-left-text" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
        Comments
      </button>
  </div>
    <div class="offcanvas offcanvas-end" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel" style="max-width: 35rem;">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasExampleLabel">Comments</h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body me-3 me-lg-2">
   <div class="form-floating mb-2">
    <textarea class="form-control" placeholder="Leave a comment here" id="comment-text" style="height: 80px"></textarea>
    <label for="floatingTextarea2">Comment</label>
   </div>
   <button type="button" class="btn btn-primary mb-3 " onclick="addComment('HzdDH2_y9BPYccEDlEgYCv4o')">Comment</button>
        <div id="comments">
          	<div class="card shadow-sm mb-3" id="comment-51">
		<div class="card-body">
		<a class="text-decoration-none text-reset flex-grow-1" href="/channel/qzip">
		<img class="rounded-5 me-2 float-start" width=48 height=48 src="../pfp/1" alt="">
		<div class="d-flex flex-column">
		<span class="my-auto"><i class="bi bi-patch-check"> </i><i class="bi bi-shield-check"> </i>kylarz</span><i class="bi bi-dot"></i>4 days ago</a>
		<span class="text-break">
		 REAL
		</span>
		</div>
		</div>         
	  </div>        </div>
  </div>
</div>
</div>
      <div class="ms-0 ms-xl-3" style="min-width: 30%; max-width: 100%">
             <div>
               <div class="card shadow-sm mt-2 mt-sm-2 mt-xl-0 mb-2" style="cursor: pointer;" onclick="location.href = '/watch?v=5SqKllXQhX_hNttT43GnGVLn'">
          <div class="row g-0">                                                                                                                                                                                                                                                                                                                                                                                                    
            <div class="col-12 col-lg-6 position-relative d-inline-block">
              <div class="ratio ratio-16x9">
              <img src="/api/thumb?v=5SqKllXQhX_hNttT43GnGVLn" class="rounded-end rounded-start" alt="Crazy Butt">
              </div>
              <span class="position-absolute bottom-0 end-0 badge text-bg-dark mb-1 me-1 opacity-75">0:30</span>
            </div>
            <div class="col-6">
              <div class="card-body">
                <p class="h6 text-reset text-truncate">Crazy Butt</p>
                <a class="text-decoration-none text-truncate" href="/channel/EpicPerson202">EpicPerson202</a><br>
                17 views<i class="bi bi-dot"></i>1 week ago              </div>
            </div>
          </div>
        </div>
                <div class="card shadow-sm mt-2 mt-sm-2 mt-xl-0 mb-2" style="cursor: pointer;" onclick="location.href = '/watch?v=IVL_-DDqAY6mSCBdGYWoaJw1'">
          <div class="row g-0">                                                                                                                                                                                                                                                                                                                                                                                                    
            <div class="col-12 col-lg-6 position-relative d-inline-block">
              <div class="ratio ratio-16x9">
              <img src="/api/thumb?v=IVL_-DDqAY6mSCBdGYWoaJw1" class="rounded-end rounded-start" alt="Womanizer - Just Dance Now">
              </div>
              <span class="position-absolute bottom-0 end-0 badge text-bg-dark mb-1 me-1 opacity-75">3:44</span>
            </div>
            <div class="col-6">
              <div class="card-body">
                <p class="h6 text-reset text-truncate">Womanizer - Just Dance Now</p>
                <a class="text-decoration-none text-truncate" href="/channel/Just Dance">Just Dance</a><br>
                3 views<i class="bi bi-dot"></i>4 days ago              </div>
            </div>
          </div>
        </div>
                <div class="card shadow-sm mt-2 mt-sm-2 mt-xl-0 mb-2" style="cursor: pointer;" onclick="location.href = '/watch?v=CK4siH8aAHGSo9FkmGnkT_Xy'">
          <div class="row g-0">                                                                                                                                                                                                                                                                                                                                                                                                    
            <div class="col-12 col-lg-6 position-relative d-inline-block">
              <div class="ratio ratio-16x9">
              <img src="/api/thumb?v=CK4siH8aAHGSo9FkmGnkT_Xy" class="rounded-end rounded-start" alt="free robux!11!">
              </div>
              <span class="position-absolute bottom-0 end-0 badge text-bg-dark mb-1 me-1 opacity-75">3:32</span>
            </div>
            <div class="col-6">
              <div class="card-body">
                <p class="h6 text-reset text-truncate">free robux!11!</p>
                <a class="text-decoration-none text-truncate" href="/channel/koutch">koutch</a><br>
                6 views<i class="bi bi-dot"></i>5 days ago              </div>
            </div>
          </div>
        </div>
                <div class="card shadow-sm mt-2 mt-sm-2 mt-xl-0 mb-2" style="cursor: pointer;" onclick="location.href = '/watch?v=IVex13rvLkaL9BtjjqTIyvtx'">
          <div class="row g-0">                                                                                                                                                                                                                                                                                                                                                                                                    
            <div class="col-12 col-lg-6 position-relative d-inline-block">
              <div class="ratio ratio-16x9">
              <img src="/api/thumb?v=IVex13rvLkaL9BtjjqTIyvtx" class="rounded-end rounded-start" alt="max">
              </div>
              <span class="position-absolute bottom-0 end-0 badge text-bg-dark mb-1 me-1 opacity-75">4:45</span>
            </div>
            <div class="col-6">
              <div class="card-body">
                <p class="h6 text-reset text-truncate">max</p>
                <a class="text-decoration-none text-truncate" href="/channel/Gordon Freeman"><i class="bi bi-patch-check"> </i><i class="bi bi-shield-check"> </i>Gordon Freeman</a><br>
                4 views<i class="bi bi-dot"></i>5 days ago              </div>
            </div>
          </div>
        </div>
                <div class="card shadow-sm mt-2 mt-sm-2 mt-xl-0 mb-2" style="cursor: pointer;" onclick="location.href = '/watch?v=zPmLg-SpwVbertKIHw7Iuu08'">
          <div class="row g-0">                                                                                                                                                                                                                                                                                                                                                                                                    
            <div class="col-12 col-lg-6 position-relative d-inline-block">
              <div class="ratio ratio-16x9">
              <img src="/api/thumb?v=zPmLg-SpwVbertKIHw7Iuu08" class="rounded-end rounded-start" alt="Sprite Cranberry">
              </div>
              <span class="position-absolute bottom-0 end-0 badge text-bg-dark mb-1 me-1 opacity-75">0:30</span>
            </div>
            <div class="col-6">
              <div class="card-body">
                <p class="h6 text-reset text-truncate">Sprite Cranberry</p>
                <a class="text-decoration-none text-truncate" href="/channel/Sprite"><i class="bi bi-patch-check"> </i>Sprite</a><br>
                2 views<i class="bi bi-dot"></i>4 days ago              </div>
            </div>
          </div>
        </div>
                <div class="card shadow-sm mt-2 mt-sm-2 mt-xl-0 mb-2" style="cursor: pointer;" onclick="location.href = '/watch?v=jBwUXYqHPge-pNSastN5z0L1'">
          <div class="row g-0">                                                                                                                                                                                                                                                                                                                                                                                                    
            <div class="col-12 col-lg-6 position-relative d-inline-block">
              <div class="ratio ratio-16x9">
              <img src="/api/thumb?v=jBwUXYqHPge-pNSastN5z0L1" class="rounded-end rounded-start" alt="IShowSpeed - World Cock (Official Music Video)">
              </div>
              <span class="position-absolute bottom-0 end-0 badge text-bg-dark mb-1 me-1 opacity-75">4:29</span>
            </div>
            <div class="col-6">
              <div class="card-body">
                <p class="h6 text-reset text-truncate">IShowSpeed - World Cock (Official Music Video)</p>
                <a class="text-decoration-none text-truncate" href="/channel/IShowSpeed"><i class="bi bi-patch-check"> </i>IShowSpeed</a><br>
                14 views<i class="bi bi-dot"></i>1 week ago              </div>
            </div>
          </div>
        </div>
                <div class="card shadow-sm mt-2 mt-sm-2 mt-xl-0 mb-2" style="cursor: pointer;" onclick="location.href = '/watch?v=jAohqjlMpDaKLNS0aHiX89au'">
          <div class="row g-0">                                                                                                                                                                                                                                                                                                                                                                                                    
            <div class="col-12 col-lg-6 position-relative d-inline-block">
              <div class="ratio ratio-16x9">
              <img src="/api/thumb?v=jAohqjlMpDaKLNS0aHiX89au" class="rounded-end rounded-start" alt="new hell reached">
              </div>
              <span class="position-absolute bottom-0 end-0 badge text-bg-dark mb-1 me-1 opacity-75">0:14</span>
            </div>
            <div class="col-6">
              <div class="card-body">
                <p class="h6 text-reset text-truncate">new hell reached</p>
                <a class="text-decoration-none text-truncate" href="/channel/qzip"><i class="bi bi-patch-check"> </i><i class="bi bi-shield-check"> </i>qzip</a><br>
                20 views<i class="bi bi-dot"></i>1 week ago              </div>
            </div>
          </div>
        </div>
                <div class="card shadow-sm mt-2 mt-sm-2 mt-xl-0 mb-2" style="cursor: pointer;" onclick="location.href = '/watch?v=5VzkErXFFR8-c1VqY-lOiiv4'">
          <div class="row g-0">                                                                                                                                                                                                                                                                                                                                                                                                    
            <div class="col-12 col-lg-6 position-relative d-inline-block">
              <div class="ratio ratio-16x9">
              <img src="/api/thumb?v=5VzkErXFFR8-c1VqY-lOiiv4" class="rounded-end rounded-start" alt="I PUT THE NEW FORGIS ON THE JEEP">
              </div>
              <span class="position-absolute bottom-0 end-0 badge text-bg-dark mb-1 me-1 opacity-75">0:19</span>
            </div>
            <div class="col-6">
              <div class="card-body">
                <p class="h6 text-reset text-truncate">I PUT THE NEW FORGIS ON THE JEEP</p>
                <a class="text-decoration-none text-truncate" href="/channel/qzip"><i class="bi bi-patch-check"> </i><i class="bi bi-shield-check"> </i>qzip</a><br>
                19 views<i class="bi bi-dot"></i>1 week ago              </div>
            </div>
          </div>
        </div>
                <div class="card shadow-sm mt-2 mt-sm-2 mt-xl-0 mb-2" style="cursor: pointer;" onclick="location.href = '/watch?v=mva8eUMCRKxQIRHQykICzCg9'">
          <div class="row g-0">                                                                                                                                                                                                                                                                                                                                                                                                    
            <div class="col-12 col-lg-6 position-relative d-inline-block">
              <div class="ratio ratio-16x9">
              <img src="/api/thumb?v=mva8eUMCRKxQIRHQykICzCg9" class="rounded-end rounded-start" alt="YFM LOST MEDIA (FOUND) (RARE) (-57% REAL)">
              </div>
              <span class="position-absolute bottom-0 end-0 badge text-bg-dark mb-1 me-1 opacity-75">0:06</span>
            </div>
            <div class="col-6">
              <div class="card-body">
                <p class="h6 text-reset text-truncate">YFM LOST MEDIA (FOUND) (RARE) (-57% REAL)</p>
                <a class="text-decoration-none text-truncate" href="/channel/hyperxori">hyperxori</a><br>
                4 views<i class="bi bi-dot"></i>2 days ago              </div>
            </div>
          </div>
        </div>
                <div class="card shadow-sm mt-2 mt-sm-2 mt-xl-0 mb-2" style="cursor: pointer;" onclick="location.href = '/watch?v=HzdDH2_y9BPYccEDlEgYCv4o'">
          <div class="row g-0">                                                                                                                                                                                                                                                                                                                                                                                                    
            <div class="col-12 col-lg-6 position-relative d-inline-block">
              <div class="ratio ratio-16x9">
              <img src="/api/thumb?v=HzdDH2_y9BPYccEDlEgYCv4o" class="rounded-end rounded-start" alt="april fools 2023">
              </div>
              <span class="position-absolute bottom-0 end-0 badge text-bg-dark mb-1 me-1 opacity-75">0:18</span>
            </div>
            <div class="col-6">
              <div class="card-body">
                <p class="h6 text-reset text-truncate">april fools 2023</p>
                <a class="text-decoration-none text-truncate" href="/channel/ummmmm">ummmmm</a><br>
                9 views<i class="bi bi-dot"></i>4 days ago              </div>
            </div>
          </div>
        </div>
                <div class="card shadow-sm mt-2 mt-sm-2 mt-xl-0 mb-2" style="cursor: pointer;" onclick="location.href = '/watch?v=_VBjP4DoGuW0UsKVDtrQdI_D'">
          <div class="row g-0">                                                                                                                                                                                                                                                                                                                                                                                                    
            <div class="col-12 col-lg-6 position-relative d-inline-block">
              <div class="ratio ratio-16x9">
              <img src="/api/thumb?v=_VBjP4DoGuW0UsKVDtrQdI_D" class="rounded-end rounded-start" alt="AllIWant snippet">
              </div>
              <span class="position-absolute bottom-0 end-0 badge text-bg-dark mb-1 me-1 opacity-75">0:14</span>
            </div>
            <div class="col-6">
              <div class="card-body">
                <p class="h6 text-reset text-truncate">AllIWant snippet</p>
                <a class="text-decoration-none text-truncate" href="/channel/andry6702">andry6702</a><br>
                8 views<i class="bi bi-dot"></i>2 days ago              </div>
            </div>
          </div>
        </div>
                <div class="card shadow-sm mt-2 mt-sm-2 mt-xl-0 mb-2" style="cursor: pointer;" onclick="location.href = '/watch?v=wrOLsZSwXz0nrU7M71KaqlkX'">
          <div class="row g-0">                                                                                                                                                                                                                                                                                                                                                                                                    
            <div class="col-12 col-lg-6 position-relative d-inline-block">
              <div class="ratio ratio-16x9">
              <img src="/api/thumb?v=wrOLsZSwXz0nrU7M71KaqlkX" class="rounded-end rounded-start" alt="goo goo ga ga, i wan... i wan milk">
              </div>
              <span class="position-absolute bottom-0 end-0 badge text-bg-dark mb-1 me-1 opacity-75">0:05</span>
            </div>
            <div class="col-6">
              <div class="card-body">
                <p class="h6 text-reset text-truncate">goo goo ga ga, i wan... i wan milk</p>
                <a class="text-decoration-none text-truncate" href="/channel/WaterBoi">WaterBoi</a><br>
                9 views<i class="bi bi-dot"></i>1 week ago              </div>
            </div>
          </div>
        </div>
                <div class="card shadow-sm mt-2 mt-sm-2 mt-xl-0 mb-2" style="cursor: pointer;" onclick="location.href = '/watch?v=1ea-rjOf75yw3uWrmQS2bXc2'">
          <div class="row g-0">                                                                                                                                                                                                                                                                                                                                                                                                    
            <div class="col-12 col-lg-6 position-relative d-inline-block">
              <div class="ratio ratio-16x9">
              <img src="/api/thumb?v=1ea-rjOf75yw3uWrmQS2bXc2" class="rounded-end rounded-start" alt="sponks bub">
              </div>
              <span class="position-absolute bottom-0 end-0 badge text-bg-dark mb-1 me-1 opacity-75">0:21</span>
            </div>
            <div class="col-6">
              <div class="card-body">
                <p class="h6 text-reset text-truncate">sponks bub</p>
                <a class="text-decoration-none text-truncate" href="/channel/john"><i class="bi bi-patch-check"> </i><i class="bi bi-shield-check"> </i>john</a><br>
                6 views<i class="bi bi-dot"></i>5 days ago              </div>
            </div>
          </div>
        </div>
                <div class="card shadow-sm mt-2 mt-sm-2 mt-xl-0 mb-2" style="cursor: pointer;" onclick="location.href = '/watch?v=xafBITwJVS1ZN4llkgIATi2J'">
          <div class="row g-0">                                                                                                                                                                                                                                                                                                                                                                                                    
            <div class="col-12 col-lg-6 position-relative d-inline-block">
              <div class="ratio ratio-16x9">
              <img src="/api/thumb?v=xafBITwJVS1ZN4llkgIATi2J" class="rounded-end rounded-start" alt="What Will You Build - ROBLOX">
              </div>
              <span class="position-absolute bottom-0 end-0 badge text-bg-dark mb-1 me-1 opacity-75">0:30</span>
            </div>
            <div class="col-6">
              <div class="card-body">
                <p class="h6 text-reset text-truncate">What Will You Build - ROBLOX</p>
                <a class="text-decoration-none text-truncate" href="/channel/ROBLOX"><i class="bi bi-patch-check"> </i>ROBLOX</a><br>
                9 views<i class="bi bi-dot"></i>4 days ago              </div>
            </div>
          </div>
        </div>
                <div class="card shadow-sm mt-2 mt-sm-2 mt-xl-0 mb-2" style="cursor: pointer;" onclick="location.href = '/watch?v=HGb33-Cs0Lu2N0gmiA5cZA-b'">
          <div class="row g-0">                                                                                                                                                                                                                                                                                                                                                                                                    
            <div class="col-12 col-lg-6 position-relative d-inline-block">
              <div class="ratio ratio-16x9">
              <img src="/api/thumb?v=HGb33-Cs0Lu2N0gmiA5cZA-b" class="rounded-end rounded-start" alt="test">
              </div>
              <span class="position-absolute bottom-0 end-0 badge text-bg-dark mb-1 me-1 opacity-75">0:58</span>
            </div>
            <div class="col-6">
              <div class="card-body">
                <p class="h6 text-reset text-truncate">test</p>
                <a class="text-decoration-none text-truncate" href="/channel/qzip"><i class="bi bi-patch-check"> </i><i class="bi bi-shield-check"> </i>qzip</a><br>
                7 views<i class="bi bi-dot"></i>1 week ago              </div>
            </div>
          </div>
        </div>
                <div class="card shadow-sm mt-2 mt-sm-2 mt-xl-0 mb-2" style="cursor: pointer;" onclick="location.href = '/watch?v=yeE0UJXmV04rEZupFFUdGVfd'">
          <div class="row g-0">                                                                                                                                                                                                                                                                                                                                                                                                    
            <div class="col-12 col-lg-6 position-relative d-inline-block">
              <div class="ratio ratio-16x9">
              <img src="/api/thumb?v=yeE0UJXmV04rEZupFFUdGVfd" class="rounded-end rounded-start" alt="Enjoy Spicy Noodle free with 2.25L of Sprite">
              </div>
              <span class="position-absolute bottom-0 end-0 badge text-bg-dark mb-1 me-1 opacity-75">0:15</span>
            </div>
            <div class="col-6">
              <div class="card-body">
                <p class="h6 text-reset text-truncate">Enjoy Spicy Noodle free with 2.25L of Sprite</p>
                <a class="text-decoration-none text-truncate" href="/channel/Sprite"><i class="bi bi-patch-check"> </i>Sprite</a><br>
                3 views<i class="bi bi-dot"></i>4 days ago              </div>
            </div>
          </div>
        </div>
                <div class="card shadow-sm mt-2 mt-sm-2 mt-xl-0 mb-2" style="cursor: pointer;" onclick="location.href = '/watch?v=rUlPAA4wJkiwz8C3knuGpMcZ'">
          <div class="row g-0">                                                                                                                                                                                                                                                                                                                                                                                                    
            <div class="col-12 col-lg-6 position-relative d-inline-block">
              <div class="ratio ratio-16x9">
              <img src="/api/thumb?v=rUlPAA4wJkiwz8C3knuGpMcZ" class="rounded-end rounded-start" alt="science">
              </div>
              <span class="position-absolute bottom-0 end-0 badge text-bg-dark mb-1 me-1 opacity-75">0:06</span>
            </div>
            <div class="col-6">
              <div class="card-body">
                <p class="h6 text-reset text-truncate">science</p>
                <a class="text-decoration-none text-truncate" href="/channel/Wii">Wii</a><br>
                9 views<i class="bi bi-dot"></i>1 week ago              </div>
            </div>
          </div>
        </div>
                <div class="card shadow-sm mt-2 mt-sm-2 mt-xl-0 mb-2" style="cursor: pointer;" onclick="location.href = '/watch?v=ci2-QUzNrRrtvAnIbggyXoX5'">
          <div class="row g-0">                                                                                                                                                                                                                                                                                                                                                                                                    
            <div class="col-12 col-lg-6 position-relative d-inline-block">
              <div class="ratio ratio-16x9">
              <img src="/api/thumb?v=ci2-QUzNrRrtvAnIbggyXoX5" class="rounded-end rounded-start" alt="guys house catches on fire while lipsyncing to undertale the musical">
              </div>
              <span class="position-absolute bottom-0 end-0 badge text-bg-dark mb-1 me-1 opacity-75">2:55</span>
            </div>
            <div class="col-6">
              <div class="card-body">
                <p class="h6 text-reset text-truncate">guys house catches on fire while lipsyncing to undertale the musical</p>
                <a class="text-decoration-none text-truncate" href="/channel/hyperxori">hyperxori</a><br>
                10 views<i class="bi bi-dot"></i>4 days ago              </div>
            </div>
          </div>
        </div>
                <div class="card shadow-sm mt-2 mt-sm-2 mt-xl-0 mb-2" style="cursor: pointer;" onclick="location.href = '/watch?v=E5qpfWG-RJqez9XxhLMjRxVP'">
          <div class="row g-0">                                                                                                                                                                                                                                                                                                                                                                                                    
            <div class="col-12 col-lg-6 position-relative d-inline-block">
              <div class="ratio ratio-16x9">
              <img src="/api/thumb?v=E5qpfWG-RJqez9XxhLMjRxVP" class="rounded-end rounded-start" alt="ios 6 is mid">
              </div>
              <span class="position-absolute bottom-0 end-0 badge text-bg-dark mb-1 me-1 opacity-75">0:05</span>
            </div>
            <div class="col-6">
              <div class="card-body">
                <p class="h6 text-reset text-truncate">ios 6 is mid</p>
                <a class="text-decoration-none text-truncate" href="/channel/CFM90">CFM90</a><br>
                16 views<i class="bi bi-dot"></i>1 week ago              </div>
            </div>
          </div>
        </div>
                <div class="card shadow-sm mt-2 mt-sm-2 mt-xl-0 mb-2" style="cursor: pointer;" onclick="location.href = '/watch?v=Te2OzyFESGJUdvDSCOubb0Py'">
          <div class="row g-0">                                                                                                                                                                                                                                                                                                                                                                                                    
            <div class="col-12 col-lg-6 position-relative d-inline-block">
              <div class="ratio ratio-16x9">
              <img src="/api/thumb?v=Te2OzyFESGJUdvDSCOubb0Py" class="rounded-end rounded-start" alt="Yomi moments 😍😍">
              </div>
              <span class="position-absolute bottom-0 end-0 badge text-bg-dark mb-1 me-1 opacity-75">1:09</span>
            </div>
            <div class="col-6">
              <div class="card-body">
                <p class="h6 text-reset text-truncate">Yomi moments 😍😍</p>
                <a class="text-decoration-none text-truncate" href="/channel/qzip"><i class="bi bi-patch-check"> </i><i class="bi bi-shield-check"> </i>qzip</a><br>
                34 views<i class="bi bi-dot"></i>1 week ago              </div>
            </div>
          </div>
        </div>
                <div class="card shadow-sm mt-2 mt-sm-2 mt-xl-0 mb-2" style="cursor: pointer;" onclick="location.href = '/watch?v=vI_h9I_go-FVguXwpHq7A3Et'">
          <div class="row g-0">                                                                                                                                                                                                                                                                                                                                                                                                    
            <div class="col-12 col-lg-6 position-relative d-inline-block">
              <div class="ratio ratio-16x9">
              <img src="/api/thumb?v=vI_h9I_go-FVguXwpHq7A3Et" class="rounded-end rounded-start" alt="robloxapp-20150325-1103151.wmv">
              </div>
              <span class="position-absolute bottom-0 end-0 badge text-bg-dark mb-1 me-1 opacity-75">0:50</span>
            </div>
            <div class="col-6">
              <div class="card-body">
                <p class="h6 text-reset text-truncate">robloxapp-20150325-1103151.wmv</p>
                <a class="text-decoration-none text-truncate" href="/channel/Mason337337">Mason337337</a><br>
                11 views<i class="bi bi-dot"></i>5 days ago              </div>
            </div>
          </div>
        </div>
                <div class="card shadow-sm mt-2 mt-sm-2 mt-xl-0 mb-2" style="cursor: pointer;" onclick="location.href = '/watch?v=mMdOdMlN8bIlKq-8IRLFgYRU'">
          <div class="row g-0">                                                                                                                                                                                                                                                                                                                                                                                                    
            <div class="col-12 col-lg-6 position-relative d-inline-block">
              <div class="ratio ratio-16x9">
              <img src="/api/thumb?v=mMdOdMlN8bIlKq-8IRLFgYRU" class="rounded-end rounded-start" alt="funny roblox moment">
              </div>
              <span class="position-absolute bottom-0 end-0 badge text-bg-dark mb-1 me-1 opacity-75">0:14</span>
            </div>
            <div class="col-6">
              <div class="card-body">
                <p class="h6 text-reset text-truncate">funny roblox moment</p>
                <a class="text-decoration-none text-truncate" href="/channel/kibs">kibs</a><br>
                11 views<i class="bi bi-dot"></i>1 week ago              </div>
            </div>
          </div>
        </div>
                <div class="card shadow-sm mt-2 mt-sm-2 mt-xl-0 mb-2" style="cursor: pointer;" onclick="location.href = '/watch?v=tx1R7E9zJ0OAWs4RDPJXWhmQ'">
          <div class="row g-0">                                                                                                                                                                                                                                                                                                                                                                                                    
            <div class="col-12 col-lg-6 position-relative d-inline-block">
              <div class="ratio ratio-16x9">
              <img src="/api/thumb?v=tx1R7E9zJ0OAWs4RDPJXWhmQ" class="rounded-end rounded-start" alt="Daft Punk - Get Lucky (David A Remix)">
              </div>
              <span class="position-absolute bottom-0 end-0 badge text-bg-dark mb-1 me-1 opacity-75">3:15</span>
            </div>
            <div class="col-6">
              <div class="card-body">
                <p class="h6 text-reset text-truncate">Daft Punk - Get Lucky (David A Remix)</p>
                <a class="text-decoration-none text-truncate" href="/channel/qzip"><i class="bi bi-patch-check"> </i><i class="bi bi-shield-check"> </i>qzip</a><br>
                9 views<i class="bi bi-dot"></i>5 days ago              </div>
            </div>
          </div>
        </div>
                <div class="card shadow-sm mt-2 mt-sm-2 mt-xl-0 mb-2" style="cursor: pointer;" onclick="location.href = '/watch?v=autjZVseZwo0PP3Hd-4RvghC'">
          <div class="row g-0">                                                                                                                                                                                                                                                                                                                                                                                                    
            <div class="col-12 col-lg-6 position-relative d-inline-block">
              <div class="ratio ratio-16x9">
              <img src="/api/thumb?v=autjZVseZwo0PP3Hd-4RvghC" class="rounded-end rounded-start" alt="dietz">
              </div>
              <span class="position-absolute bottom-0 end-0 badge text-bg-dark mb-1 me-1 opacity-75">0:38</span>
            </div>
            <div class="col-6">
              <div class="card-body">
                <p class="h6 text-reset text-truncate">dietz</p>
                <a class="text-decoration-none text-truncate" href="/channel/john"><i class="bi bi-patch-check"> </i><i class="bi bi-shield-check"> </i>john</a><br>
                14 views<i class="bi bi-dot"></i>1 week ago              </div>
            </div>
          </div>
        </div>
                <div class="card shadow-sm mt-2 mt-sm-2 mt-xl-0 mb-2" style="cursor: pointer;" onclick="location.href = '/watch?v=mYIz9xGOZc6uwNUsm3ty253H'">
          <div class="row g-0">                                                                                                                                                                                                                                                                                                                                                                                                    
            <div class="col-12 col-lg-6 position-relative d-inline-block">
              <div class="ratio ratio-16x9">
              <img src="/api/thumb?v=mYIz9xGOZc6uwNUsm3ty253H" class="rounded-end rounded-start" alt="vinesauce">
              </div>
              <span class="position-absolute bottom-0 end-0 badge text-bg-dark mb-1 me-1 opacity-75">0:08</span>
            </div>
            <div class="col-6">
              <div class="card-body">
                <p class="h6 text-reset text-truncate">vinesauce</p>
                <a class="text-decoration-none text-truncate" href="/channel/core">core</a><br>
                10 views<i class="bi bi-dot"></i>6 days ago              </div>
            </div>
          </div>
        </div>
                <div class="card shadow-sm mt-2 mt-sm-2 mt-xl-0 mb-2" style="cursor: pointer;" onclick="location.href = '/watch?v=mpjrplmLYom-B6I33jYIqhFE'">
          <div class="row g-0">                                                                                                                                                                                                                                                                                                                                                                                                    
            <div class="col-12 col-lg-6 position-relative d-inline-block">
              <div class="ratio ratio-16x9">
              <img src="/api/thumb?v=mpjrplmLYom-B6I33jYIqhFE" class="rounded-end rounded-start" alt="Your sister is good with, anything balls honestly.">
              </div>
              <span class="position-absolute bottom-0 end-0 badge text-bg-dark mb-1 me-1 opacity-75">0:15</span>
            </div>
            <div class="col-6">
              <div class="card-body">
                <p class="h6 text-reset text-truncate">Your sister is good with, anything balls honestly.</p>
                <a class="text-decoration-none text-truncate" href="/channel/"><i class="bi bi-patch-check"> </i><i class="bi bi-shield-check"> </i></a><br>
                7 views<i class="bi bi-dot"></i>1 week ago              </div>
            </div>
          </div>
        </div>
                <div class="card shadow-sm mt-2 mt-sm-2 mt-xl-0 mb-2" style="cursor: pointer;" onclick="location.href = '/watch?v=BihVldQgr3jHt7uj2jU4K78S'">
          <div class="row g-0">                                                                                                                                                                                                                                                                                                                                                                                                    
            <div class="col-12 col-lg-6 position-relative d-inline-block">
              <div class="ratio ratio-16x9">
              <img src="/api/thumb?v=BihVldQgr3jHt7uj2jU4K78S" class="rounded-end rounded-start" alt="icofn">
              </div>
              <span class="position-absolute bottom-0 end-0 badge text-bg-dark mb-1 me-1 opacity-75">0:29</span>
            </div>
            <div class="col-6">
              <div class="card-body">
                <p class="h6 text-reset text-truncate">icofn</p>
                <a class="text-decoration-none text-truncate" href="/channel/john"><i class="bi bi-patch-check"> </i><i class="bi bi-shield-check"> </i>john</a><br>
                11 views<i class="bi bi-dot"></i>1 week ago              </div>
            </div>
          </div>
        </div>
                <div class="card shadow-sm mt-2 mt-sm-2 mt-xl-0 mb-2" style="cursor: pointer;" onclick="location.href = '/watch?v=80zuO1Iihk76kJU_TdBOEOWr'">
          <div class="row g-0">                                                                                                                                                                                                                                                                                                                                                                                                    
            <div class="col-12 col-lg-6 position-relative d-inline-block">
              <div class="ratio ratio-16x9">
              <img src="/api/thumb?v=80zuO1Iihk76kJU_TdBOEOWr" class="rounded-end rounded-start" alt="RadicalALT.webm">
              </div>
              <span class="position-absolute bottom-0 end-0 badge text-bg-dark mb-1 me-1 opacity-75">3:30</span>
            </div>
            <div class="col-6">
              <div class="card-body">
                <p class="h6 text-reset text-truncate">RadicalALT.webm</p>
                <a class="text-decoration-none text-truncate" href="/channel/Just Dance">Just Dance</a><br>
                6 views<i class="bi bi-dot"></i>4 days ago              </div>
            </div>
          </div>
        </div>
                <div class="card shadow-sm mt-2 mt-sm-2 mt-xl-0 mb-2" style="cursor: pointer;" onclick="location.href = '/watch?v=hbC9pj4l9R4SYyFgFsRftJae'">
          <div class="row g-0">                                                                                                                                                                                                                                                                                                                                                                                                    
            <div class="col-12 col-lg-6 position-relative d-inline-block">
              <div class="ratio ratio-16x9">
              <img src="/api/thumb?v=hbC9pj4l9R4SYyFgFsRftJae" class="rounded-end rounded-start" alt="Just Dance Developer Real Halal 2017">
              </div>
              <span class="position-absolute bottom-0 end-0 badge text-bg-dark mb-1 me-1 opacity-75">0:19</span>
            </div>
            <div class="col-6">
              <div class="card-body">
                <p class="h6 text-reset text-truncate">Just Dance Developer Real Halal 2017</p>
                <a class="text-decoration-none text-truncate" href="/channel/Just Dance">Just Dance</a><br>
                5 views<i class="bi bi-dot"></i>3 days ago              </div>
            </div>
          </div>
        </div>
                <div class="card shadow-sm mt-2 mt-sm-2 mt-xl-0 mb-2" style="cursor: pointer;" onclick="location.href = '/watch?v=YbXY2bTwvtgYEIB-K517xANg'">
          <div class="row g-0">                                                                                                                                                                                                                                                                                                                                                                                                    
            <div class="col-12 col-lg-6 position-relative d-inline-block">
              <div class="ratio ratio-16x9">
              <img src="/api/thumb?v=YbXY2bTwvtgYEIB-K517xANg" class="rounded-end rounded-start" alt="Go Kitty Go!">
              </div>
              <span class="position-absolute bottom-0 end-0 badge text-bg-dark mb-1 me-1 opacity-75">1:17</span>
            </div>
            <div class="col-6">
              <div class="card-body">
                <p class="h6 text-reset text-truncate">Go Kitty Go!</p>
                <a class="text-decoration-none text-truncate" href="/channel/WaterBoi">WaterBoi</a><br>
                11 views<i class="bi bi-dot"></i>1 week ago              </div>
            </div>
          </div>
        </div>
                <div class="card shadow-sm mt-2 mt-sm-2 mt-xl-0 mb-2" style="cursor: pointer;" onclick="location.href = '/watch?v=LxAf3EgLooJM1JWcFl_oGPE2'">
          <div class="row g-0">                                                                                                                                                                                                                                                                                                                                                                                                    
            <div class="col-12 col-lg-6 position-relative d-inline-block">
              <div class="ratio ratio-16x9">
              <img src="/api/thumb?v=LxAf3EgLooJM1JWcFl_oGPE2" class="rounded-end rounded-start" alt="iPhone Presentation from Steve Jobs">
              </div>
              <span class="position-absolute bottom-0 end-0 badge text-bg-dark mb-1 me-1 opacity-75">10:19</span>
            </div>
            <div class="col-6">
              <div class="card-body">
                <p class="h6 text-reset text-truncate">iPhone Presentation from Steve Jobs</p>
                <a class="text-decoration-none text-truncate" href="/channel/Gordon Freeman"><i class="bi bi-patch-check"> </i><i class="bi bi-shield-check"> </i>Gordon Freeman</a><br>
                5 views<i class="bi bi-dot"></i>6 days ago              </div>
            </div>
          </div>
        </div>
                <div class="card shadow-sm mt-2 mt-sm-2 mt-xl-0 mb-2" style="cursor: pointer;" onclick="location.href = '/watch?v=Z_8ba0L5aWGfGpMyNPPlZT5i'">
          <div class="row g-0">                                                                                                                                                                                                                                                                                                                                                                                                    
            <div class="col-12 col-lg-6 position-relative d-inline-block">
              <div class="ratio ratio-16x9">
              <img src="/api/thumb?v=Z_8ba0L5aWGfGpMyNPPlZT5i" class="rounded-end rounded-start" alt="funny uno cum">
              </div>
              <span class="position-absolute bottom-0 end-0 badge text-bg-dark mb-1 me-1 opacity-75">0:07</span>
            </div>
            <div class="col-6">
              <div class="card-body">
                <p class="h6 text-reset text-truncate">funny uno cum</p>
                <a class="text-decoration-none text-truncate" href="/channel/CFM90">CFM90</a><br>
                10 views<i class="bi bi-dot"></i>1 week ago              </div>
            </div>
          </div>
        </div>
               </div>
      </div>
    </div>
  </main>
  <div class="modal fade" id="share" data-bs-keyboard="false" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Share</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="form-floating">
         <textarea class="form-control" readonly style="height: 5.5rem;" id="floatingTextarea">https://testtube.fun/watch?v=HzdDH2_y9BPYccEDlEgYCv4o</textarea>
         <label for="floatingTextarea">Url</label>
        </div>
        <h5 class="text-center mt-1 text-body">Or</h5>
        <div class="form-floating">
         <textarea class="form-control" readonly style="height: 6.5rem;" id="floatingTextarea"><iframe width="854" height="480" src="https://testtube.fun/embed?v=HzdDH2_y9BPYccEDlEgYCv4o"></iframe></textarea>
         <label for="floatingTextarea">Embed url</label>
        </div>
      </div>
    </div>
  </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>