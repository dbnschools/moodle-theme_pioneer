<div class="slider">
            <input type="radio" name="slide_switch" id="id1" checked="checked" onClick="SetSlide(1);" />
            <label for="id1">
                <img src="<?php echo $PAGE->theme->setting_file_url('back1', 'back1', true); ?>" onMouseOver="StopPlaying();" onMouseOut="StartPlaying();" />
            </label>
            <img src="<?php echo $PAGE->theme->setting_file_url('back1', 'back1', true); ?>"  onMouseOver="StopPlaying();" onMouseOut="StartPlaying();" />
           
            <!--Lets show the second image by default on page load-->
            <input type="radio" name="slide_switch" id="id2" onClick="SetSlide(2);" />
            <label for="id2">
                <img src="<?php echo $PAGE->theme->setting_file_url('back2', 'back2', true); ?>"  onMouseOver="StopPlaying();" onMouseOut="StartPlaying();" />
            </label>
            <img class="slidemain" src="<?php echo $PAGE->theme->setting_file_url('back2', 'back2', true); ?>"  onMouseOver="StopPlaying();" onMouseOut="StartPlaying();" />
           
            <input type="radio" name="slide_switch" id="id3" onClick="SetSlide(3);" />
            <label for="id3">
                <img src="<?php echo $PAGE->theme->setting_file_url('back3', 'back3', true); ?>" onMouseOver="StopPlaying();" onMouseOut="StartPlaying();" />
            </label>
            <img class="slidemain" src="<?php echo $PAGE->theme->setting_file_url('back3', 'back3', true); ?>"  onMouseOver="StopPlaying();" onMouseOut="StartPlaying();" />
           
            <input type="radio" name="slide_switch" id="id4" onClick="SetSlide(4);" />
            <label for="id4">
                <img src="<?php echo $PAGE->theme->setting_file_url('back4', 'back4', true); ?>" onMouseOver="StopPlaying();" onMouseOut="StartPlaying();" />
            </label>
            <img class="slidemain" src="<?php echo $PAGE->theme->setting_file_url('back4', 'back4', true); ?>" onMouseOver="StopPlaying();" onMouseOut="StartPlaying();" />
        </div>
<SCRIPT TYPE="text/javascript">
    var playingslideno = 1;
    var playingslide = true;
    var slidertimer;
    function PlayNextSlide() {
       if (playingslide == true) {
          playingslideno = playingslideno + 1;
          if (playingslideno > 4) playingslideno = 1;
          document.getElementById('id'+playingslideno).checked = true;
          slidertimer = setTimeout(function() { PlayNextSlide(); }, 3000);
       }
    }
   function StopPlaying() {
       playingslide = false;
       clearTimeout(slidertimer);
   }
   function StartPlaying() {
       playingslide = true;
       playingslideno = playingslideno - 1;
       PlayNextSlide();
   }
   function SetSlide(n) {
      playingslideno = n;
   }
   slidertimer = setTimeout(function() { PlayNextSlide(); }, 3000);
</SCRIPT>