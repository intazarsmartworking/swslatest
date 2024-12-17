// Success Story

jQuery(document).ready(function($) {
    var page = 2; 
    var loading = false; 
  
    jQuery('#load-more').on('click', function(e) {
        e.preventDefault();
        if (loading) return; 
        loading = true;
  
        jQuery.ajax({
            url: my_ajax_obj.ajaxurl, // Use localized variable
            type: 'POST',
            data: {
                action: 'load_more_stories',
                page: page
            },
            success: function(response) {
                if (response) {
                  jQuery('.story-container').append(response); 
                    page++;
                    loading = false;
                } else {
                  jQuery('#load-more').hide(); 
                }
            },
            error: function(xhr, status, error) {
                console.log('AJAX error:', error); // Log error
                loading = false;
            }
        });
    });
  });



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
                $('.vetted-tech-experts').html(response);
                // Destroy Slick if already initialized
                if ($('.vetted-tech-experts').hasClass('slick-initialized')) {
                    $('.vetted-tech-experts').slick('unslick');
                }

                // Reinitialize Slick Slider
                $('.vetted-tech-experts').slick({
                    infinite: true,
                    autoplay: true,
                    speed: 4000,
                    autoplaySpeed: 0,
                    slidesToShow: 5,
                    slidesToScroll: 1,
                    focusOnSelect: false,
                    arrows: false,
                    dots: false,
                    accessibility: false,
                    touchMove: false,
                    pauseOnHover: false,
                    responsive: [
                        {
                            breakpoint: 1440,
                            settings: { slidesToShow: 5 }
                        },
                        {
                            breakpoint: 1025,
                            settings: { slidesToShow: 4 }
                        },
                        {
                            breakpoint: 900,
                            settings: { slidesToShow: 3 }
                        },
                        {
                            breakpoint: 721,
                            settings: { slidesToShow: 2 }
                        },
                        {
                            breakpoint: 480,
                            settings: { slidesToShow: 1 }
                        }
                    ]
                });
            }
        });
    }

    

    // Event handler for category click
    $('.category-filter').on('click', function(e) {
        e.preventDefault();

        var category_id = $(this).data('category-id');

        // Remove 'active' class from all category links
        $('.category-filter').removeClass('active-now');

        // Add 'active' class to the clicked category link
        $(this).addClass('active-now');

        // Fetch posts for the clicked category
        fetchPosts(category_id);
    });

    // Load default posts on page load
    $(document).ready(function() {
        fetchPosts(null);
    });
});
