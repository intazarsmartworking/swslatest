jQuery(document).ready(function($) {
    // Function to fetch posts
    function fetchPosts(category_id) {
        var nonce = ajax_params.nonce;

        $.ajax({
            url: ajax_params.ajax_url,
            type: 'POST',
            data: {
                action: 'fetch_ai_vetted_profile_posts',
                category_id: category_id,
                nonce: nonce
            },
            success: function(response) {
                $('.dev-section').html(response);
            }
        });
    }

    // Event handler for category click
    $('.category-filter').on('click', function(e) {
        e.preventDefault();

        var category_id = $(this).data('category-id');

        // Remove 'active' class from all category links
        $('.category-filter').removeClass('active');

        // Add 'active' class to the clicked category link
        $(this).addClass('active');

        // Fetch posts for the clicked category
        fetchPosts(category_id);
    });

    // Load default posts on page load
    $(document).ready(function() {
        fetchPosts(null);
    });
});
