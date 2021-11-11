<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="UTF-8">
    <title><?php bloginfo('name'); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
    <?php if( is_user_logged_in() ) : ?>
    <style type="text/css">
      .p-header{
        margin-top: 32px;
      }
      @media (max-width:782px){
        .p-header{
          margin-top: 0px;
        }    
      }
    </style>
    <?php endif; ?>
  </head>