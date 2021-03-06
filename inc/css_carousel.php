<!--Here's our main wrapper.
Since our carousel items get their size from their parent,
we have to specify its height.-->
<div class="carousel-wrapper">
  <!--The carousel uses regular links to cycle through each item.
  The links actually target these display: none; spans so our page doesn't
  jump like it normally would when using jump links.-->
  <span id="target-item-1"></span>
  <span id="target-item-2"></span>
  <span id="target-item-3"></span>
  <span id="target-item-4"></span>
  <span id="target-item-5"></span>
  <!--Here are our carousel items.
  Each has a 'carousel-item' class, which we use for shared styling
  and an item-# class, which we use to control its opacity
  depending on which target-item-# is currently targeted-->
  <div class="carousel-item item-1">
    <!--We can add any content in here, just make sure that
    your .carousel-wrapper is big enough to hold all the content.-->
<!--    <h2>Item 1</h2>-->
    <?php include(ROOT_PATH . "slider/slide1.php"); ?>
    <!--Here are the links that control the carousel! Make sure
    the href of each one is pointing to the right target-item-#
    so that the carousel cycles in sequence.-->
    <a class="arrow arrow-prev" href="#target-item-5"></a>
    <a class="arrow arrow-next" href="#target-item-2"></a>
  </div>
  <!--And here are a couple more carousel items so that
  we have some content to scroll to. Notice the 'light' class?
  Royal blue is a pretty dark background color, so we'll add a CSS
  rule to make the text white if a carousel item has this class-->
  <div class="carousel-item item-2">
<!--    <h2>Item 2</h2>-->
   <?php include(ROOT_PATH . "slider/slide2.php"); ?> 
    <a class="arrow arrow-prev" href="#target-item-1"></a>
    <a class="arrow arrow-next" href="#target-item-3"></a>
  </div>
  <div class="carousel-item item-3">
<!--    <h2>Item 3</h2>-->
    <?php include(ROOT_PATH . "slider/slide3.php") ?>
    <a class="arrow arrow-prev" href="#target-item-2"></a>
    <a class="arrow arrow-next" href="#target-item-4"></a>
  </div>
  <div class="carousel-item item-4">
<!--    <h2>Item 4</h2>-->
    <?php include(ROOT_PATH . "slider/slide4.php") ?>
    <a class="arrow arrow-prev" href="#target-item-3"></a>
    <a class="arrow arrow-next" href="#target-item-5"></a>
  </div>
  <div class="carousel-item item-5">
<!--    <h2>Item 5</h2>-->
    <?php include(ROOT_PATH . "slider/slide5.php") ?>
    <a class="arrow arrow-prev" href="#target-item-4"></a>
    <a class="arrow arrow-next" href="#target-item-1"></a>
  </div>
</div>