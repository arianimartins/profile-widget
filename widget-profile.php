<?php
/*
Plugin Name: Ariani Martins - Profile Widget
Plugin URI:  http://arianimartins.com
Description: Widget de Perfil para a Sidebar
Author: Ariani Martins
Author URI: http://arianimartins.com
*/
$mSelecionado = $pSelecionado = '';

class Profile_Widget_PostIt extends WP_Widget{

	function __construct(){
		parent::__construct(
            'Profile_Widget_PostIt',
            __('Perfil Widget - PostIt', 'translation_domain'),
            array('description' => 'Foto, texto e links para as redes sociais', 'translation_domain')
        );
	}

	public function form($instance){
        isset($instance['theme']) ? $theme = $instance['theme'] : null;

		isset($instance['title']) ? $title = $instance['title'] : null;
		empty($instance['title']) ? $title = 'About Me' : null;

        isset($instance['img_url']) ? $img_url = $instance['img_url'] : null;
        isset($instance['descricao']) ? $descricao = $instance['descricao'] : null;

		isset($instance['facebook']) ? $facebook = $instance['facebook'] : null;
        isset($instance['twitter']) ? $twitter = $instance['twitter'] : null;
        isset($instance['instagram']) ? $instagram = $instance['instagram'] : null;
        isset($instance['tumblr']) ? $tumblr = $instance['tumblr'] : null;
        isset($instance['linkedin']) ? $linkedin = $instance['linkedin'] : null;
        isset($instance['flicker']) ? $flicker = $instance['flicker'] : null;
        isset($instance['steam']) ? $steam = $instance['steam'] : null;
        isset($instance['github']) ? $github = $instance['github'] : null;
        isset($instance['medium']) ? $medium = $instance['medium'] : null;
        isset($instance['google']) ? $google = $instance['google'] : null;
        isset($instance['codepen']) ? $codepen = $instance['codepen'] : null;
        isset($instance['fiddle']) ? $fiddle = $instance['fiddle'] : null;
        isset($instance['about']) ? $about = $instance['about'] : null;

        switch ($instance['theme']) {
            case 'postit':
                $pSelecionado = "selected";
                break;
            
            case 'material':
               $mSelecionado = "selected";
                break;
        }

        ?>

        <p>
            <label for="<?php echo $this->get_field_id('theme'); ?>"><?php _e('Tema:'); ?></label>
            <select class="widefat" id="<?php echo $this->get_field_id('theme'); ?>" name="<?php echo $this->get_field_name('theme'); ?>" >
                    <option value="postit" <?=$pSelecionado?> >Post-It</option>
                    <option value="material" <?=$mSelecionado?> >Material</option>
            </select>
        </p>

        <p>
        	<label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Título:'); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo esc_attr($title); ?>">
        </p>

        <p>
            <label for="<?php echo $this->get_field_id('img_url'); ?>"><?php _e('URL da imagem:'); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('img_url'); ?>" name="<?php echo $this->get_field_name('img_url'); ?>" type="text" value="<?php echo esc_attr($img_url); ?>">
        </p>
        
        <p>
            <label for="<?php echo $this->get_field_id('descricao'); ?>"><?php _e('Fale sobre você:'); ?></label>
            <textarea class="widefat" rows="7" id="<?php echo $this->get_field_id('descricao'); ?>" name="<?php echo $this->get_field_name('descricao'); ?>">
                <?php echo stripslashes($descricao); ?>
            </textarea>
        </p>
 
        <p>
            <label for="<?php echo $this->get_field_id('facebook'); ?>"><?php _e('Facebook:'); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('facebook'); ?>" name="<?php echo $this->get_field_name('facebook'); ?>" type="text" value="<?php echo esc_attr($facebook); ?>">
        </p>

        <p>
            <label for="<?php echo $this->get_field_id('twitter'); ?>"><?php _e('Twitter:'); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('twitter'); ?>" name="<?php echo $this->get_field_name('twitter'); ?>" type="text" value="<?php echo esc_attr($twitter); ?>">
        </p>

        <p>
            <label for="<?php echo $this->get_field_id('instagram'); ?>"><?php _e('Instagram:'); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('instagram'); ?>" name="<?php echo $this->get_field_name('instagram'); ?>" type="text" value="<?php echo esc_attr($instagram); ?>">
        </p>

        <p>
            <label for="<?php echo $this->get_field_id('tumblr'); ?>"><?php _e('Tumblr:'); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('tumblr'); ?>" name="<?php echo $this->get_field_name('tumblr'); ?>" type="text" value="<?php echo esc_attr($tumblr); ?>">
        </p>

        <p>
            <label for="<?php echo $this->get_field_id('linkedin'); ?>"><?php _e('LinkedIn:'); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('linkedin'); ?>" name="<?php echo $this->get_field_name('linkedin'); ?>" type="text" value="<?php echo esc_attr($linkedin); ?>">
        </p>

        <p>
            <label for="<?php echo $this->get_field_id('flicker'); ?>"><?php _e('Flickr:'); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('flicker'); ?>" name="<?php echo $this->get_field_name('flicker'); ?>" type="text" value="<?php echo esc_attr($flicker); ?>">
        </p>

        <p>
            <label for="<?php echo $this->get_field_id('steam'); ?>"><?php _e('Steam:'); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('steam'); ?>" name="<?php echo $this->get_field_name('steam'); ?>" type="text" value="<?php echo esc_attr($steam); ?>">
        </p>

        <p>
            <label for="<?php echo $this->get_field_id('github'); ?>"><?php _e('Github:'); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('github'); ?>" name="<?php echo $this->get_field_name('github'); ?>" type="text" value="<?php echo esc_attr($github); ?>">
        </p>

        <p>
            <label for="<?php echo $this->get_field_id('medium'); ?>"><?php _e('Medium:'); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('medium'); ?>" name="<?php echo $this->get_field_name('medium'); ?>" type="text" value="<?php echo esc_attr($medium); ?>">
        </p>

        <p>
            <label for="<?php echo $this->get_field_id('google'); ?>"><?php _e('Google+:'); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('google'); ?>" name="<?php echo $this->get_field_name('google'); ?>" type="text" value="<?php echo esc_attr($google); ?>">
        </p>

        <p>
            <label for="<?php echo $this->get_field_id('codepen'); ?>"><?php _e('CodePen:'); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('codepen'); ?>" name="<?php echo $this->get_field_name('codepen'); ?>" type="text" value="<?php echo esc_attr($codepen); ?>">
        </p>

        <p>
            <label for="<?php echo $this->get_field_id('fiddle'); ?>"><?php _e('JSFiddle:'); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('fiddle'); ?>" name="<?php echo $this->get_field_name('fiddle'); ?>" type="text" value="<?php echo esc_attr($fiddle); ?>">
        </p>

        <p>
            <label for="<?php echo $this->get_field_id('about'); ?>"><?php _e('About.Me:'); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('about'); ?>" name="<?php echo $this->get_field_name('about'); ?>" type="text" value="<?php echo esc_attr($about); ?>">
        </p>

        <?php
	}

	public function update($new_instance, $old_instance){
		$instance = array();
        $instance['theme'] = (!empty($new_instance['theme']) ) ? strip_tags($new_instance['theme']) : '';
		$instance['title'] = (!empty($new_instance['title']) ) ? strip_tags($new_instance['title']) : '';
        $instance['img_url'] = (!empty($new_instance['img_url']) ) ? strip_tags($new_instance['img_url']) : '';
        $instance['descricao'] = (!empty($new_instance['descricao']) ) ? stripslashes($new_instance['descricao']) : '';
        $instance['facebook'] = (!empty($new_instance['facebook']) ) ? strip_tags($new_instance['facebook']) : '';
        $instance['twitter'] = (!empty($new_instance['twitter']) ) ? strip_tags($new_instance['twitter']) : '';
        $instance['instagram'] = (!empty($new_instance['instagram']) ) ? strip_tags($new_instance['instagram']) : '';
        $instance['tumblr'] = (!empty($new_instance['tumblr']) ) ? strip_tags($new_instance['tumblr']) : '';
        $instance['linkedin'] = (!empty($new_instance['linkedin']) ) ? strip_tags($new_instance['linkedin']) : '';
        $instance['flicker'] = (!empty($new_instance['flicker']) ) ? strip_tags($new_instance['flicker']) : '';
        $instance['steam'] = (!empty($new_instance['steam']) ) ? strip_tags($new_instance['steam']) : '';
        $instance['github'] = (!empty($new_instance['github']) ) ? strip_tags($new_instance['github']) : '';
        $instance['medium'] = (!empty($new_instance['medium']) ) ? strip_tags($new_instance['medium']) : '';
        $instance['google'] = (!empty($new_instance['google']) ) ? strip_tags($new_instance['google']) : '';
        $instance['codepen'] = (!empty($new_instance['codepen']) ) ? strip_tags($new_instance['codepen']) : '';
        $instance['fiddle'] = (!empty($new_instance['fiddle']) ) ? strip_tags($new_instance['fiddle']) : '';
        $instance['about'] = (!empty($new_instance['about']) ) ? strip_tags($new_instance['about']) : '';

        return $instance;
	}

	public function widget($args, $instance){
        $theme = $instance['theme'];
		$title = apply_filters('widget_title', $instance['title']);
        $img_url = $instance['img_url'];
        $descricao = $instance['descricao'];
        $facebook = $instance['facebook'];
        $twitter = $instance['twitter'];
        $instagram = $instance['instagram'];
        $tumblr = $instance['tumblr'];
        $linkedin = $instance['linkedin'];
        $flicker = $instance['flicker'];
        $steam = $instance['steam'];
        $github = $instance['github'];
        $medium = $instance['medium'];
        $google = $instance['google'];
        $codepen = $instance['codepen'];
        $fiddle = $instance['fiddle'];
        $about = $instance['about'];

        $facebook_profile = '<a class="facebook" href="' . $facebook . '"><i class="fa fa-facebook"></i></a>';
        $twitter_profile = '<a class="twitter" href="' . $twitter . '"><i class="fa fa-twitter"></i></a>';
        $instagram_profile = '<a class="instagram" href="'.$instagram.'"><i class="fa fa-instagram"></i></a>';
        $tumblr_profile = '<a class="tumblr" href="'.$tumblr.'"><i class="fa fa-tumblr"></i></a>';
        $linkedin_profile = '<a class="linkedin" href="' . $linkedin . '"><i class="fa fa-linkedin"></i></a>';
        $flicker_profile = '<a class="flicker" href="'.$flicker.'"><i class="fa fa-flickr"></i></a>';
        $steam_profile = '<a class="steam" href="'.$steam.'"><i class="fa fa-steam"></i></a>';
        $github_profile = '<a class="github" href="'.$github.'"><i class="fa fa-github-alt"></i></a>';
        $medium_profile = '<a class="medium" href="'.$medium.'"><i class="fa fa-medium"></i></a>';
        $google_profile = '<a class="google" href="' . $google . '"><i class="fa fa-google-plus"></i></a>';
        $codepen_profile = '<a class="codepen" href="'.$codepen.'"><i class="fa fa-codepen"></i></a>';
        $fiddle_profile = '<a class="fiddle" href="'.$fiddle.'"><i class="fa fa-jsfiddle"></i></a>';
        $about_profile = '<a class="about" href="'.$about.'"><i class="fa fa-user"></i></a>';

        #echo $args['before_widget'];
        echo '<div align="center" class="widget-profile-'.$theme.'">';
        if (!empty($title)){
        	echo '<div class="title-profile-'.$theme.'">'.$title.'</div>';
        }
        if($theme == 'material'){
            echo '<div style="background:linear-gradient(0deg, rgb(255, 255, 255), rgba(255,255,255,0.1)), url('.$img_url.');" class="imagem-profile-'.$theme.'">';
        }else{
            echo '<div class="imagem-profile-'.$theme.'">';
        }
        echo (!empty($img_url)) ? '<div class="foto-profile-'.$theme.'" style="background:url('.$img_url.');"></div>' : null;
        echo '<div class="curl-'.$theme.'">
                <div class="curl-helper-'.$theme.'"></div>
             </div>';
        echo '</div>';

        echo '<div class="descricao-profile-'.$theme.'">';
        echo (!empty($descricao)) ? $descricao : null;
        echo '</div>';

        echo '<div class="social-icons-profile-'.$theme.'">';
        echo (!empty($facebook)) ? $facebook_profile : null;
        echo (!empty($twitter)) ? $twitter_profile : null;
        echo (!empty($tumblr)) ? $tumblr_profile : null;
        echo (!empty($google)) ? $google_profile : null;
        echo (!empty($instagram)) ? $instagram_profile : null;
        echo (!empty($flicker)) ? $flicker_profile : null;
        echo (!empty($snapchat)) ? '<br/>'.$snapchat_profile : null;
        echo '<br/>';
        echo (!empty($linkedin)) ? $linkedin_profile : null;
        echo (!empty($codepen)) ? $codepen_profile : null;
        echo (!empty($fiddle)) ? $fiddle_profile : null;
        echo (!empty($about)) ? $about_profile : null;
        echo (!empty($github)) ? $github_profile : null;
        echo '<br/>';
        echo (!empty($steam)) ? $steam_profile : null;
        echo (!empty($medium)) ? $medium_profile : null;
        echo '</div>';

        echo $args['after_widget'];
	}

}

function profile_widget_css(){
    wp_enqueue_style('widget-profile', plugins_url('widget-profile.css', __FILE__));
}
add_action('wp_enqueue_scripts', 'profile_widget_css');


function register_profile_widget(){
    register_widget('Profile_Widget_PostIt');
}
add_action('widgets_init', 'register_profile_widget');

?>