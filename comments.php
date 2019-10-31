<section class="main__comments text-right">
    <div class="main__comments-list">
        <h2>التعليقات:</h2>
        <ul>
            
            <?php 
                
                $args = array(
                    'walker'			=> null,
                    'max_depth' 		=> '',
                    'style'				=> 'ul',
                    'callback'			=> null,
                    'end-callback'		=> null,
                    'type'				=> 'all',
                    'reply_text'		=> 'رد',
                    'page'				=> '',
                    'per_page'			=> '',
                    'avatar_size'		=> 32,
                    'reverse_top_level' => null,
                    'reverse_children'	=> '',
                    'format'			=> 'html5',
                    'short_ping'		=> false,
                    'echo'				=> true
                );
                
                wp_list_comments( $args );
            ?>
            
    </ul>
    </div>
    <div class="main__comments-form">
        <div class="row">
            <div class="col-12 col-sm-8">
                <?php 
                
                $fields = array(
                    
                    'author' =>
                        '<div class="form-group"><label for="author">' . __( 'الإسم', 'domainreference' ) . '</label> <span class="required">*</span> <input id="author" name="author" type="text" placeholder="الإسم" class="form-control" value="' . esc_attr( $commenter['comment_author'] ) . '" required="required" /></div>',
                        
                    'email' =>
                        '<div class="form-group"><label for="email">' . __( 'البريد الإلكتروني', 'domainreference' ) . '</label> <span class="required">*</span><input id="email" name="email" placeholder="البريد الإلكتروني" class="form-control" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" required="required" /></div>'
                );
                
                $args = array(
                    
                    'class_submit' => 'btn btn-primary btn-block',
                    'label_submit' => __( 'أرسل التعليق' ),
                    'comment_field' =>
                        '<div class="form-group"><label for="comment">' . _x( 'Comment', 'noun' ) . '</label> <span class="required">*</span><textarea id="comment" placeholder="أكتب التعليق..." class="form-control" name="comment" rows="4" required="required"></textarea></p>',
                    'fields' => apply_filters( 'comment_form_default_fields', $fields )
                    
                );
                
                comment_form( $args ); 
                ?>
            </div>
        </div>
    </div> 
</section>