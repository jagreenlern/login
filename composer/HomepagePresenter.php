<?php
 $backlink = null;
    
    //render where are links to social networks  
    function renderIn() {
        if ($this->backlink) {
            $this->socialLogin->facebook->setState($this->backlink);
            $this->socialLogin->google->setState($this->backlink);
        }

        //$facebookLoginUrl = $this->socialLogin->facebook->getLoginUrl();
        //$googleLoginUrl = $this->socialLogin->google->getLoginUrl();
        //$twitterLoginUrl = $this->socialLogin->twitter->getLoginUrl();
    
        //dump( $this->socialLogin->getSocialLoginCookie() );
    
        //$this->template->facebookLastLogin = $this->socialLogin->facebook->isThisServiceLastLogin();
        //$this->template->googleLastLogin = $this->socialLogin->google->isThisServiceLastLogin();
        //$this->template->twitterLastLogin = $this->socialLogin->twitter->isThisServiceLastLogin();
    }

    function actionFacebookLogin($state = NULL)
    {
        try
        {
            if ($state) $this->backlink = $state;
            $me = $this->socialLogin->facebook->getMe();
            //dump( $me );
            //exit();
            if($this->backlink != null) {
                $this->redirect($this->backlink);
            }
        }
        catch( Exception $e )
        {
            $this->flashMessage( $e->getMessage(), "alert-danger" );
            $this->redirect("Homepage:default");
        }
    }

    function actionGoogleLogin( $code, $state = NULL )
    {
        try
        {
            if ($state) $this->backlink = $state;
            $me = $this->socialLogin->google->getMe( $code );
            //dump( $me );
            //exit();
            if($this->backlink != null) {
                $this->redirect($this->backlink);
            }
        }
        catch( Exception $e )
        {
            $this->flashMessage( $e->getMessage(), "alert-danger" );
            $this->redirect("Homepage:default");
        }
    }
?>