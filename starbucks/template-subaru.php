<?php
/*Template name: subaru */
?>
<?php get_header(); ?>


<body class="subaruBody">
    <h1>Interactive Color Picker</h1>
    <p>Click on a swatch to change the color displayed</p>
    <div class="carContainer">
        <div id="showcaseSub">
            <button id="prevBtn" class="arrow left">Previous</button>
            <button id="nextBtn" class="arrow right">Next</button>
        </div>

        <div id="buttonsContainerSub">
            <!-- <button id="redBtn">Red</button>
            <button id="orangeBtn">Orange</button>
            <button id="yellowBtn">Yellow</button> -->
        </div><!--/buttonsContainer-->
    </div>
</body>


<script src="<?php bloginfo('template_directory'); ?>/js/subaru.js"></script>