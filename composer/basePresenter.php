<?php
use VencaX;

/** @var VencaX\SocialLogin */
$socialLogin;

function injectSocialLogin( VencaX\SocialLogin $socialLogin ) 
{
    $this->socialLogin = $socialLogin;
    
    //set scope
    $this->socialLogin->facebook->setScope( ['email'] );
    $this->socialLogin->google->setScope( array( "https://www.googleapis.com/auth/plus.me", "https://www.googleapis.com/auth/userinfo.email" ) );		
}

function renderIn() {
    //$facebookLoginUrl = $this->socialLogin->facebook->getLoginUrl();
    //$googleLoginUrl = $this->socialLogin->google->getLoginUrl();
    //$twitterLoginUrl = $this->socialLogin->twitter->getLoginUrl();
    
    //dump( $this->socialLogin->getSocialLoginCookie() );
    
    //$this->template->facebookLastLogin = $this->socialLogin->facebook->isThisServiceLastLogin();
    //$this->template->googleLastLogin = $this->socialLogin->google->isThisServiceLastLogin();
    //$this->template->twitterLastLogin = $this->socialLogin->twitter->isThisServiceLastLogin();
    //...
}
?>