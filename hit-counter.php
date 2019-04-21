<?php
  /* 
  Plugin Name: 1337 Hit Counter
  */

  add_action('wp_head', function () {
    if (!wp_get_current_user()) {
      if (get_option('hit_count') !== false) {
        add_option('hit_count', 1);
      } else {
        update_option('hit_count', get_option('hit_count')+1);
      }
    }
  });

  add_action( 'widgets_init', function(){
    register_widget( 'Hit_Counter_Widget' );
  });


  class Hit_Counter_Widget extends WP_Widget {
    public function __construct() {
      parent::__construct(array(
        'hit-counter',
        'Hit Counter',
        'A hit counter displaying unique page hits across your site for non-logged-in users.'
      ));
    }

    public function widget($args, $instance) {
      // outputs widget content
      echo $args['before_widget'];
      if ( ! empty( $instance['title'] ) ) {
        echo $args['before_title'] . apply_filters( 'widget_title', $instance['title'] ) . $args['after_title'];
      }
      echo '<div class="counter-content">';
      foreach(str_split(strval(get_option('hit_count'))) as $num) {
        if (isset($args['number_'.$num.'_image'])) {
          echo '<img src="'.$args['number_'.$num.'_image']['url'].'" alt="'.$num.'" />';
        } else {
          echo $num;
        }
      }
      echo '</div>';
      echo $args['after_widget'];
    }

    public function form($instance) {
      // outputs admin form on admin side
      $title = ! empty( $instance['title'] ) ? $instance['title'] : esc_html__( 'New title', 'text_domain' );
      $number_0_image = ! empty( $instance['number_0_image'] ) ? $instance['number_0_image'] : null;
      $number_1_image = ! empty( $instance['number_1_image'] ) ? $instance['number_1_image'] : null;
      $number_2_image = ! empty( $instance['number_2_image'] ) ? $instance['number_2_image'] : null;
      $number_3_image = ! empty( $instance['number_3_image'] ) ? $instance['number_3_image'] : null;
      $number_4_image = ! empty( $instance['number_4_image'] ) ? $instance['number_4_image'] : null;
      $number_5_image = ! empty( $instance['number_5_image'] ) ? $instance['number_5_image'] : null;
      $number_6_image = ! empty( $instance['number_6_image'] ) ? $instance['number_6_image'] : null;
      $number_7_image = ! empty( $instance['number_7_image'] ) ? $instance['number_7_image'] : null;
      $number_8_image = ! empty( $instance['number_8_image'] ) ? $instance['number_8_image'] : null;
      $number_9_image = ! empty( $instance['number_9_image'] ) ? $instance['number_9_image'] : null;
      ?>
      <p>
        <label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php esc_attr_e( 'Title:', 'text_domain' ); ?></label> 
        <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
      </p>
      <p>
        <label for="<?php echo esc_attr( $this->get_field_id( 'number_0_image' ) ); ?>"><?php esc_attr_e( 'Number 0 Image', 'text_domain' ); ?></label> 
        <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'number_0_image' ) ); ?>" name="<?php echo esc_attr( $this->get_field_id( 'number_0_image' ) ); ?>" type="file" value="<?php echo esc_attr( $number_0_image); ?>" />
      </p>
      <p>
        <label for="<?php echo esc_attr( $this->get_field_id( 'number_1_image' ) ); ?>"><?php esc_attr_e( 'Number 1 Image', 'text_domain' ); ?></label> 
        <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'number_1_image' ) ); ?>" name="<?php echo esc_attr( $this->get_field_id( 'number_1_image' ) ); ?>" type="file" value="<?php echo esc_attr( $number_0_image); ?>" />
      </p>
      <p>
        <label for="<?php echo esc_attr( $this->get_field_id( 'number_2_image' ) ); ?>"><?php esc_attr_e( 'Number 2 Image', 'text_domain' ); ?></label> 
        <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'number_2_image' ) ); ?>" name="<?php echo esc_attr( $this->get_field_id( 'number_2_image' ) ); ?>" type="file" value="<?php echo esc_attr( $number_0_image); ?>" />
      </p>
      <p>
        <label for="<?php echo esc_attr( $this->get_field_id( 'number_3_image' ) ); ?>"><?php esc_attr_e( 'Number 3 Image', 'text_domain' ); ?></label> 
        <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'number_3_image' ) ); ?>" name="<?php echo esc_attr( $this->get_field_id( 'number_3_image' ) ); ?>" type="file" value="<?php echo esc_attr( $number_0_image); ?>" />
      </p>
      <p>
        <label for="<?php echo esc_attr( $this->get_field_id( 'number_4_image' ) ); ?>"><?php esc_attr_e( 'Number 4 Image', 'text_domain' ); ?></label> 
        <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'number_4_image' ) ); ?>" name="<?php echo esc_attr( $this->get_field_id( 'number_4_image' ) ); ?>" type="file" value="<?php echo esc_attr( $number_0_image); ?>" />
      </p>
      <p>
        <label for="<?php echo esc_attr( $this->get_field_id( 'number_5_image' ) ); ?>"><?php esc_attr_e( 'Number 5 Image', 'text_domain' ); ?></label> 
        <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'number_5_image' ) ); ?>" name="<?php echo esc_attr( $this->get_field_id( 'number_5_image' ) ); ?>" type="file" value="<?php echo esc_attr( $number_0_image); ?>" />
      </p>
      <p>
        <label for="<?php echo esc_attr( $this->get_field_id( 'number_6_image' ) ); ?>"><?php esc_attr_e( 'Number 6 Image', 'text_domain' ); ?></label> 
        <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'number_6_image' ) ); ?>" name="<?php echo esc_attr( $this->get_field_id( 'number_6_image' ) ); ?>" type="file" value="<?php echo esc_attr( $number_0_image); ?>" />
      </p>
      <p>
        <label for="<?php echo esc_attr( $this->get_field_id( 'number_7_image' ) ); ?>"><?php esc_attr_e( 'Number 7 Image', 'text_domain' ); ?></label> 
        <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'number_7_image' ) ); ?>" name="<?php echo esc_attr( $this->get_field_id( 'number_7_image' ) ); ?>" type="file" value="<?php echo esc_attr( $number_0_image); ?>" />
      </p>
      <p>
        <label for="<?php echo esc_attr( $this->get_field_id( 'number_8_image' ) ); ?>"><?php esc_attr_e( 'Number 8 Image', 'text_domain' ); ?></label> 
        <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'number_8_image' ) ); ?>" name="<?php echo esc_attr( $this->get_field_id( 'number_8_image' ) ); ?>" type="file" value="<?php echo esc_attr( $number_0_image); ?>" />
      </p>
      <p>
        <label for="<?php echo esc_attr( $this->get_field_id( 'number_9_image' ) ); ?>"><?php esc_attr_e( 'Number 9 Image', 'text_domain' ); ?></label> 
        <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'number_9_image' ) ); ?>" name="<?php echo esc_attr( $this->get_field_id( 'number_9_image' ) ); ?>" type="file" value="<?php echo esc_attr( $number_0_image); ?>" />
      </p>
      <?php 
    }

    public function update($new_instance, $old_instance) {
      return $new_instance;
    }
  }

?>
