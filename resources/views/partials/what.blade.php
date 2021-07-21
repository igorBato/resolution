<?php $what_title=get_field( "what_title" ); ?>
<?php $what_text=get_field( "what_text" ); ?>
<div class="what-section lines-fullwidth"> 

  <div class="site-wrapper-boxed">

    <div class="what-wrapper">
          
      <div class="what-title-wrapper">  
        <h2 class="what-title"><?php 
          $what_title = explode(" ", $what_title, 2);
          echo '<span class="orange-text">' . $what_title[0] . '</span> ' . $what_title[1];
        ?></h2>
      </div>

      <div class="what-text-wrapper">
        <p class="what_text"><?php echo $what_text ?></p>
      </div>

      <div class="square-dots">
        <div class="square-dots-row">
          <div class="square-dot black-dot"></div>
          <div class="square-dot grey-dot"></div>
          <div class="square-dot "></div>
          <div class="square-dot "></div>
        </div>

        <div class="square-dots-row">
          <div class="square-dot grey-dot"></div>
          <div class="square-dot grey-dot"></div>
          <div class="square-dot "></div>
          <div class="square-dot "></div>
        </div>

        <div class="square-dots-row">
          <div class="square-dot grey-dot"></div>
          <div class="square-dot orange-dot"></div>
          <div class="square-dot grey-dot"></div>
          <div class="square-dot grey-dot"></div>
        </div>

        <div class="square-dots-row">
          <div class="square-dot orange-dot"></div>
          <div class="square-dot grey-dot"></div>
          <div class="square-dot grey-dot"></div>
          <div class="square-dot black-dot"></div>
        </div>
        
      </div>

    </div>

    

  </div>

</div>
