<!-- ALL FUNCTIONS ARE STORED HERE -->

<!-- REDIRECT_TO FUNCTION -->
<?php
    function redirect_to($location = NULL)
    {
      if($location != NULL)
      {
        header("Location: {$location}");
        exit;
      }
    }
 ?>
<!-- ALLOW NEXT PAGE FUNCTION -->
<?php 
    function allow_processing($trueorfalse = NULL)
    {
        if ($trueorfalse == 'true') {
            $_SESSION['allowed'] = 'true';
        }
        else if($trueorfalse == 'false') {
            $_SESSION['allowed'] = 'false';
        }

    }
 ?>
<!-- RETURN ERROR FUNCTION -->
<?php
    function return_message($value)
    {
      if(!empty($value))
      {
        switch($value)
        {
/*general*/  case 'notallinfoissent':
                return "Please fill in all required fields and try again.";
                break;
             case 'dbissue':
                return "Problem with the database. Please contact Eduard Oancea.";
                break;
             case 'everythingok':
                return "Have a look at our activities.";
                break;
             case 'noaccess':
                return "You do not have access to that page.";
                break;
/*sign up*/  case 'passwordsnomatch':
                return "The passwords you entered do not match.";
                break;
             case 'alreadyexists':
                return "A user with that username already exists.";
                break;
             case 'yessignup':
                return "You have successfully signed up.";
                break;
/*log in*/   case 'nocombination':
                return "There is no username/password combination that matches with our records. Please try again.";
                break;
             case 'novalidation':
                return "The account has not been validated yet.";
                break;
             case 'nousername':
                return "The username does not exist";
                break;
             case 'yeslogin':
                return "You have successfully logged in.";
                break;
             case 'yeslogout':
                return "You have been successfully logged out.";
                break;
 /*email*/   case 'yesvalidation':
                return "You have successfully validated your account.";
                break;
             case 'incorrectcode':
                return "The code is incorrect. Please try again.";
                break;
/*ticket*/  case 'alreadyhasticket':
                return "At least one of the usernames already has a ticket.";
                break;
            case 'emailnotvalidatedt':
                return "At least one of the usernames did not validate their email.";
                break;
            case 'persondoesnotexistt':
                return "At least one of the usernames does not exist.";
                break;
/*camping*/ case 'noticket':
                return "At least one of the usernames does not own a ticket.";
                break;
            case 'alreadyhascamping':
                return "At least one of the usernames already has a camping spot.";
                break;
            case 'emailnotvalidatedc':
                return "At least one of the usernames did not validate their email.";
                break;
            case 'persondoesnotexistc':
                return "At least one of the usernames does not exist.";
                break;
/*payment*/ case 'yesreservation':
                return "The reservation has been made. Confirmation e-mail has been sent.";
                break;
/*contact*/ case 'yesmessage':
                return "Your message has been successfully sent. Soon you will have our reply.";
                break;
/*change p*/case 'yesgetcode':
                return "You password change code has been send. Veirfy your e-mail.";
                break;
            case 'yeschange':
                return "You have successfully changed your password.";
                break;
            case 'incorrectcodep':
                return "The code is incorrect. Please try again.";
                break;
/*view p*/ case 'yespicture':
                return "You have successfully updated your picture.";
                break;
/*comment*/case 'yescomment':
                return "Your comment has been successfully added.";
                break;
            case 'badcontent':
                return "Your comment containes obscene words. Please rephrase.";
                break;
/*forum*/   case 'nologin':
                return "You have to be logged in to access the FORUM page.";
                break;
            default:
                break;
        }
      }
    }
 ?>
