<script>
    jQuery(document).ready(function ($) {
        var _SlideshowTransitions = [
            {$Duration: 1200, y: -4, $Zoom: 11, $Easing: {$Top: $JssorEasing$.$EaseInCubic, $Zoom: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseOutQuad}, $Opacity: 2}
        ];
        var options = {
            $AutoPlay: true,
            $AutoPlayInterval: 1500,
            $PauseOnHover: 1,
            $DragOrientation: 3, //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $DisplayPieces is greater than 1, or parking position is not 0)
            $ArrowKeyNavigation: true, //[Optional] Allows keyboard (arrow key) navigation or not, default value is false
            $SlideDuration: 600, //Specifies default duration (swipe) for slide in milliseconds

            $SlideshowOptions: {//[Optional] Options to specify and enable slideshow or not
                $Class: $JssorSlideshowRunner$, //[Required] Class to create instance of slideshow
                $Transitions: _SlideshowTransitions, //[Required] An array of slideshow transitions to play slideshow
                $TransitionsOrder: 1, //[Optional] The way to choose transition to play slide, 1 Sequence, 0 Random
                $ShowLink: true                                    //[Optional] Whether to bring slide link on top of the slider when slideshow is running, default value is false
            },
            $ArrowNavigatorOptions: {//[Optional] Options to specify and enable arrow navigator or not
                $Class: $JssorArrowNavigator$, //[Requried] Class to create arrow navigator instance
                $ChanceToShow: 1, //[Required] 0 Never, 1 Mouse Over, 2 Always
                $AutoCenter: 2, //[Optional] Auto center navigator in parent container, 0 None, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
                $Steps: 1                                       //[Optional] Steps to go for each navigation request, default value is 1
            },
            $ThumbnailNavigatorOptions: {//[Optional] Options to specify and enable thumbnail navigator or not
                $Class: $JssorThumbnailNavigator$, //[Required] Class to create thumbnail navigator instance
                $ChanceToShow: 2, //[Required] 0 Never, 1 Mouse Over, 2 Always
                $ActionMode: 1, //[Optional] 0 None, 1 act by click, 2 act by mouse hover, 3 both, default value is 1
                $Lanes: 1, //[Optional] Specify lanes to arrange thumbnails, default value is 1
                $SpacingX: 14, //[Optional] Horizontal space between each thumbnail in pixel, default value is 0
                $SpacingY: 12, //[Optional] Vertical space between each thumbnail in pixel, default value is 0
                $DisplayPieces: 4, //[Optional] Number of pieces to display, default value is 1
                $ParkingPosition: 156, //[Optional] The offset position to park thumbnail
                $Orientation: 2                                //[Optional] Orientation to arrange thumbnails, 1 horizental, 2 vertical, default value is 1
            }
        };

        var jssor_slider1 = new $JssorSlider$("slider1_container", options);
        //responsive code begin
        //you can remove responsive code if you don't want the slider scales while window resizes
        function ScaleSlider() {
            var parentWidth = jssor_slider1.$Elmt.parentNode.clientWidth;
            if (parentWidth)
                jssor_slider1.$ScaleWidth(Math.max(Math.min(parentWidth, 960), 300));
            else
                window.setTimeout(ScaleSlider, 30);
        }
        //ScaleSlider();

        $(window).bind("load", ScaleSlider);
        $(window).bind("resize", ScaleSlider);
        $(window).bind("orientationchange", ScaleSlider);
        //responsive code end
    });
</script>
<div id="slider1_container" style="position: relative; top: 0px; left: 0px; width: 740px; height: 550px; overflow: hidden;">
    <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 580px; height: 550px; overflow: hidden;">
        <div>
            <img u="image" src="images/galeria/img1.png" class="imgbig"/>
            <img u="thumb" src="images/galeria/t1.png" />
        </div>
        <div>
            <img u="image" src="images/galeria/img2.png" class="imgbig" />
            <img u="thumb" src="images/galeria/t2.png" />
        </div>
        <div>
            <img u="image" src="images/galeria/img3.png" class="imgbig" />
            <img u="thumb" src="images/galeria/t3.png" />
        </div>
        <div>
            <img u="image" src="images/galeria/img4.png" class="imgbig" />
            <img u="thumb" src="images/galeria/t4.png" />
        </div>
        <div>
            <img u="image" src="images/galeria/img5.png" class="imgbig" />
            <img u="thumb" src="images/galeria/t5.png" />
        </div>
        <div>
            <img u="image" src="images/galeria/img6.png" class="imgbig" />
            <img u="thumb" src="images/galeria/t6.png" />
        </div>
    </div>

    
    <span u="arrowleft" class="jssora05l" style="top: 158px; left: 10px;"></span>    
    <span u="arrowright" class="jssora05r" style="top: 158px; left: 530px"></span>



    <div u="thumbnavigator" class="jssort02" style="right: 0px; bottom: 0px;">
        <div u="slides" style="cursor: default;">
            <div u="prototype" class="p">
                <div class=w><div u="thumbnailtemplate" class="t"></div></div>
                <div class=c></div>
            </div>
        </div>
    </div>
</div>
<style>
        * html .jssort02 .c, * html .jssort02 .pdn .c, * html .jssort02 .pav .c {
            /* ie quirks mode adjust */
            width /**/: 99px;
            height /**/: 66px;
        }    
</style>
