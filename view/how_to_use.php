<div class="<?php echo $this->text_domain ?> how-to-use"> 
    <h1>How to use </h1>

    <div class="how-to-group"> 
        <div class="title"> Use a popup in a post or page </div>
        <div>
            <ul> 
                <li> * Make popup from smart popup menu </li>
                <li> * Select your appropriate popup type and settings. </li>
                <li> * Add short code in any post or page.  </li>
            </ul>

            <pre>
                [wps-popup   id='YourPopupID'] 

                for example :  
                [wps-popup id='99'] 
            </pre>
        </div>
    </div>



    <div class="how-to-group"> 
        <div class="title"> Use a popup in your theme or template page as PHP code  </div>
        <div>
            You can add popup in any where in your site with PHP do_short code command.
            If use in any page template you must use "inline=1" attribute. 
            <pre>
                 do_shortcode("[wps-popup id='YourPopUpID' inline='1']");   

                for example :  
                do_shortcode("[wps-popup id='99' inline='1']");
            </pre>
        </div>
    </div>

    
    <div class="how-to-group"> 
        <div class="title"> Add Video From YouTube  </div>
        <div>
            Select popup type as 'YouTube' than add Video ID in YouTube Settings. 
        </div>
    </div>

    <div class="how-to-group"> 
        <div class="title"> Add Facebook Page Likebox  </div>
        <div>
           Select popup type as 'Facebook' than add your Page URL in Facebook Settings. 
        </div>
    </div>




</div>