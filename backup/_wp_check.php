<div class="container">
    <table class="wp_check" style="border:3px solid black; border-radius:4px; padding: 5px 0; font-family: monospace">
        <tr>
            <td>Page ID</td>
            <td><?php echo $post->ID; ?></td>
        </tr>
        <tr>
            <td>Title</td>
            <td><?php wp_title(''); ?></td>
        </tr>
        <tr>
            <td>Origin ID</td>
            <td><?php echo get_queried_object_id(); ?></td>
        </tr>
    </table>
    <style>
        .wp_check {
            margin: 0 auto;
        }

        .wp_check td {
            padding: 0 10px;
        }
    </style>
</div>