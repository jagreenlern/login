
<?php
//necesitas dominio
class contactar{


    



    public static function mostrarredessociales ($urlfacebook="https://www.facebook.com/jagreen.lern",$urltwitter="https://twitter.com/jagreenlernx",$urlyoutube="https://www.youtube.com/channel/UCQs2RLwN_jLg5lWzrxsK-uw",$urlinstagram="https://www.instagram.com/devcodela/")
{
try
{


      
    echo '<div class="social-bar">';
    echo '<a href="'. $urlfacebook .' " class="icon icon-facebook" target="_blank"></a>';
    echo '<a href="' . $urltwitter .'" class="icon icon-twitter" target="_blank"></a>';
    echo '<a href="' . $urlyoutube . '" class="icon icon-youtube" target="_blank"></a>';
    echo '<a href="' . $urlinstagram . '" class="icon icon-instagram" target="_blank"></a>';
  echo '</div>';
  

} catch(Exception $e) {
  echo "Error: " . $e->getMessage();
    
  }
    
}//FUNC
public static function emailbs ($email="jagrenlern@gmail.com")
{
try
{
    

  echo "
    <li>
    <i class='fa fa-envelope'></i> Email: <a href='mailto:".$email."'>".$email."</a>
    </li>";

  

} catch(Exception $e) {
  echo "Error: " . $e->getMessage();
    
  }
    
}//FUNC

}//class


