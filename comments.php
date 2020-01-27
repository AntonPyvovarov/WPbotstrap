<div class="comments">
    <h2>Comments</h2>


    <ul class="commentlist">
        <?php
        wp_list_comments( [
            'walker'            => null,
            'max_depth'         => '',
            'style'             => 'ul',
            'callback'          => null,
            'end-callback'      => null,
            'type'              => 'all',
            'reply_text'        => 'Reply',
            'page'              => '',
            'per_page'          => '',
            'avatar_size'       => 32,
            'reverse_top_level' => null,
            'reverse_children'  => '',
            'format'            => 'html5', // или xhtml, если HTML5 не поддерживается темой
            'short_ping'        => false,    // С версии 3.6,
            'echo'              => true,     // true или false
        ] );
        ?>
    </ul>



    <?php

    $comments_args = array(
    // change the title of send button
    'label_submit'=>'Отправить',
    // change the title of the reply section
    'title_reply'=>'Оставить Комментарий',
    // remove "Text or HTML to be displayed after the set of comment fields"
    'comment_notes_after' => '',
    // redefine your own textarea (the comment body)
    'comment_field' =>
        '<p class="comment-form-comment">
        <label for="comment">' . _x( 'Комментарий', 'noun' ) . '</label>
        <br />
        <textarea id="comment" name="comment" aria-required="true"></textarea></p>',
    );
    comment_form($comments_args);
    ?>
</div>