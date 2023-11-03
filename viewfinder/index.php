<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/player.css">
    <style>
        body {
            margin: 0 !important;
        }
    </style>
    <title>Viewfinder Test Page</title>
</head>
<body>
    <!-- Viewfinder HTML5 Player-->
    <div class="player" id="playerBox">
        <div class="mainContainer">
            <div class="playerScreen">
                <div class="playbackArea">
                    <div class="videoContainer">
                        <video class="videoObject" id="video">
                            <source src="../content/video/<?php echo $_GET['v'];?>.mp4"> 
                         </video>
                    </div>
                </div>
                <div class="playerEndScreen hidden" id="endScreen">
                    <div class="endShareDiv">
                        <img src="/resource/end_share.png">
                        <p>Share this Video</p>
                    </div>
                    <div class="endReplayDiv">
                        <img id="endReplayBtn" src="/resource/end_replay.png">
                        <p>Replay this Video</p>
                    </div>
                </div>
                <div class="loadingScreen" id="loading">
                    <span>Loading...</span>
                </div>
              <!-- <div class="watermark">
                    <img src="/resource/watermark.png" height="44px">
                </div> -->
            </div>
            <div class="playerControls" id="ctrlBar">
                <div class="ctrlsHighlightDiv">
                    <div class="Button" id="playBtn">
                        <img id="playIcon" src="/resource/play.png" draggable="false">
                        <img id="pauseIcon" src="/resource/pause.png" draggable="false">
                    </div>
                </div>
                <div class="ctrlsDiv">
                    <div class="ctrlsUpperDiv">
                        <div class="bufferProgressContainer">
                            <progress id="bufferProgress" value="0" min="0" max="1"></progress>
                        </div>
                        <div class="seekProgressContainer">
                            <progress id="seekProgress" value="0" min="0"></progress>
                        </div>
                        <div class="seekHandleContainer">
                            <input class="seekHandle" id="seekHandle" value="0" min="0" step="1" type="range">
                        </div>
                    </div>
                    <div class="ctrlsLowerDiv">
                        <div class="ctrlsLowerLeftDiv">
                            <div class="Button" id="stopBtn">
                                <img src="/resource/stop.png" draggable="false">
                            </div>
                            <div class="timeContainer">
                               <time class="timeElapsed" id="elapsed">00:00</time>
                               <span class="timeContainerSeparator">/</span>
                               <time class="timeDuration" id="duration">00:00</time>
                            </div>
                            <div class="volBtnContainer">
                                <div class="Button" id="muteBtn">
                                    <img src="/resource/volume.png" draggable="false">
                                    <img class="hidden" id="muteSign" src="/resource/mute.png" draggable="false">
                                </div>
                                <div class="volumeBtnDeco" id="vlBtnDeco">
                                    <img id="vlBtnDeco1" src="/resource/volume_btn_deco1.png" draggable="false">
                                    <img id="vlBtnDeco2" src="/resource/volume_btn_deco2.png" draggable="false">
                                    <img id="vlBtnDeco3" src="/resource/volume_btn_deco3.png" draggable="false"> 
                                </div>
                            </div>
                            <div class="volumeSliderContainer">
                                <div class="volumeSliderBgContainer">
                                    <div class="volSliderDecorationContainer">
                                        <div class="volSliderDecoration">
                                            <div class="volSliderDecoChild volDecoBgChild"></div>
                                            <div class="volSliderDecoChild volDecoFgChild" id="volDecoFg"></div>
                                        </div>
                                    </div>
                                    <div class="volRangeRail"> 
                                    </div>
                                </div>
                                <div class="volumeInputContainer">
                                    <input type="range" value="1" type="range" max="1" min="0" step="0.01" class="volumeInput" id="vlSlide">
                                </div>
                            </div>
                        </div>
                        <div class="ctrlsLowerRightDiv">
                            <div class="sizeCtrlContainer" id="sizeCtrls">
                                <span>Size:</span>
                                <div class="btnShrink" id="btnShrink"></div>
                                <div id="btnFullscreen" id="btnFullscreen"></div>
                            </div> 
                            <div class="closeBtnContainer hidden" id="closeBtn">
                                <img src="/resource/close.png">
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="aboutBox">
            <div class="aboutBoxContent">
            <div class="aboutHeader">Viewfinder 2006</div>
            <div class="aboutBody">
                <div>Version 1.0<br>
                <br>
                Early 2006 YouTube<br>
                player HTML5 replica<br>
                <br>
                by purpleblaze<br>
            </div>
            </div>
            <button id="aboutCloseBtn">Close</button>
            </div>
        </div>
        <div class="contextMenu hidden" id="playerContextMenu">
            <div class="contextItem" id="contextMute">
                <span>Mute</span>
                <div id="muteTick" class="tick hidden">    
                </div>
            </div>
            <div class="contextItem" id="contextLoop">
                <span>Loop</span>
                <div id="loopTick" class="tick hidden">
                </div>
            </div>
            <div class="contextSeparator"></div>
            <div class="contextItem" id="contextAbout">About</div>
        </div>
    </div>
    <!-- Here Lies Purple -->
    <script src="player.js"></script>
</body>
</html> 