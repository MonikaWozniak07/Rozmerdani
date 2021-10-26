<div class="container">
    <table class="wp_test_table" style="border:3px solid black; border-radius:4px; padding: 5px 0; font-family: monospace">
        <tr>
            <td>Page ID</td>
            <td><?php echo $post->ID; ?></td>
        </tr>
        <tr>
            <td>Parent ID</td>
            <td><?php echo get_the_ID(); ?></td>
        </tr>
        <tr>
            <td>Parent ID</td>
            <td><?php echo wp_get_post_parent_id(get_the_ID()); ?></td>
        </tr>
        <tr>
            <td>Origin ID</td>
            <td><?php echo get_queried_object_id(); ?></td>
        </tr>
        <tr>
            <td>Thumbnail</td>
            <td><?php echo get_the_post_thumbnail_url( 31 ); ?></td>
        </tr>
        <tr>
            <td>Thumbnail</td>
            <td><?php
            // to działa
            $page_id = get_queried_object_id();
            echo get_the_post_thumbnail_url( $page_id );
            ?></td>
        </tr>
    </table>
    <style>
        .wp_test_table td {
            padding: 0 10px;
        }
    </style>
</div>